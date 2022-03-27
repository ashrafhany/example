<?php
  
namespace AppHttpLivewire;
   
use Livewire\Component;
use App\Models\Item;
use Illuminate\SupportStr;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ItemTable extends LivewireDatatable
{
    public $model = Item::class;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID')
                ->sortBy('id'),
  
            Column::name('name')
                ->label('Name'),
  
            Column::name('price')
                ->label('Price'),
  
            DateColumn::name('created_at')
                ->label('Creation Date')
        ];
    }
}