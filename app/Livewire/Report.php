<?php

namespace App\Livewire;

use App\Models\SaleTransaction;
use Livewire\Component;
use App\Models\Category;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
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

class Report extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table->query(SaleTransaction::query())->columns([
            TextColumn::make('product.name')->label('PRODUCT NAME'),
            TextColumn::make('product.price')->label('PRICE'),
            TextColumn::make('quantity')->label('QUANTITY'),
            TextColumn::make('total_amount')->label('TOTAL AMOUNT')->formatStateUsing(
                function ($record) {
                    return '₱' . number_format($record->total_amount, 2);
                }
            ),
            TextColumn::make('created_at')->label('DATE OF TRANSACTION')->date(),
        ]);
    }

    public function render()
    {
        return view('livewire.report', [
            'sales' => SaleTransaction::whereDate('created_at', now())->pluck('total_amount')->sum(),
        ]);
    }
}
