<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Livewire\Component;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\CreateAction;
use Filament\Forms\Form;

class StockList extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table->query(Product::query())
            ->columns([
                TextColumn::make('name')->label('NAME')->searchable(),

                TextColumn::make('category.name')->label('CATEGORY')->searchable(),

                TextColumn::make('unit')->label('UNIT')->searchable(),
            ])->actions([

                ]);
    }

    public function render()
    {
        return view('livewire.stock-list');
    }
}
