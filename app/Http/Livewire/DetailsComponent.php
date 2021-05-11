<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Carbon\Carbon;

use App\Models\InventarioItems;
use Illuminate\Support\Facades\DB;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = InventarioItems::where('slug', $this->slug)->first();
        //Verificar Precio
        $precio = DB::table('inventario_precios')->where('codigo', $product->codigo)->where('tipo_precio', '01')->value('valor');
        //Verificar Descuento
        $precio_descuento = 0;
        $hoy = date("Y-m-d");
        //Precio
        $product->precio = DB::table('inventario_precios')->where('codigo', $product->codigo)->where('tipo_precio', '01')->value('valor');
        //Descuento
        $product->precio_descuento = 0;
        $hoy = date("Y-m-d");
        $descuento = DB::table('inventario_teleferias')
                        ->where('codigo', $product->codigo)
                        ->where('fecha_inicio', '<=', $hoy)
                        ->where('fecha_fin', '>=', $hoy)
                        ->value('porcentaje_teleferia');
        if($descuento > 0){
            $product->precio_descuento = $product->precio;
            $product->precio = $product->precio - ($product->precio * ($descuento/100));
            $product->porcentaje = intval(100 - (($product->precio / $product->precio_descuento) * 100));
        }
        return view('livewire.details-component', ['product' => $product])->layout('layouts.base');
    }
}
