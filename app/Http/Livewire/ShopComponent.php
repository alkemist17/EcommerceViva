<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\InventarioItems;
use Carbon\Carbon;
use Cart;

class ShopComponent extends Component
{
    public $count = 0;
    public $isOpen = false;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count > 0 && $this->count--;
    }

    public function toggle()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\InventarioItems');
        session()->flash('success_message', 'Producto agregado al carro');
        return redirect()->route('cart');
    }

    use WithPagination;


    public $datos, $pagesize = 12;

    public function render()
    {
        $products = InventarioItems::where('grupo1', 18)
            ->join('inventario_existencias', 'inventario_items.codigo', '=', 'inventario_existencias.codigo')
            ->select('inventario_items.codigo', 'inventario_items.descripcion', 'inventario_items.referencia', 'inventario_items.slug', 'inventario_items.id')
            ->groupBy('inventario_items.codigo', 'inventario_items.descripcion', 'inventario_items.referencia', 'inventario_items.slug', 'inventario_items.id')
            ->orderBy('inventario_items.codigo', 'desc')
            ->paginate($this->pagesize);
        foreach ($products as $Item) {
            $Item->codigo = trim($Item->codigo);
            //Verificar Fecha
            $dtproducto = Carbon::parse($Item->created_at);
            $dthoy = Carbon::now();
            $diferencia = $dthoy->diffInDays($dtproducto);
            //Verificar Precio
            $precio = DB::table('inventario_precios')->where('codigo', $Item->codigo)->where('tipo_precio', '01')->value('valor');
            //Verificar Descuento
            $precio_descuento = 0;
            $hoy = date("Y-m-d");
            $descuento = DB::table('inventario_teleferias')
                            ->where('codigo', $Item->codigo)
                            ->where('fecha_inicio', '<=', $hoy)
                            ->where('fecha_fin', '>=', $hoy)
                            ->value('porcentaje_teleferia');
            if($descuento > 0){
                $precio_descuento = $precio;
                $precio = intval($precio - ($precio * ($descuento/100)));
            }
            //Datos
            if($precio > 0){
                $this->datos[] =  array(
                    'fecha' => $diferencia,
                    'id' => $Item->id,
                    'codigo' => $Item->codigo,
                    'slug' => $Item->slug,
                    'descripcion' => trim($Item->descripcion),
                    'referencia' => trim($Item->referencia),
                    'precio' => $precio,
                    'descuento' => $precio_descuento,
                    'link' => "producto"
                );
            }
        }
        return view('livewire.shop-component', [
            'products' => $this->datos, 
            'info' => $products
            ])->layout('layouts.base');
    }
}
