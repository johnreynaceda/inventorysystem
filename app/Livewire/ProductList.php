<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\ViewField;
use Filament\Infolists\Components\TextEntry;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
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

class ProductList extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;


    public function table(Table $table): Table
    {
        return $table->query(Product::query())
            ->headerActions([
                CreateAction::make('new_category')->label('New Product')->color('main')->icon('heroicon-o-plus')
                    ->form([
                        Grid::make('2')->schema([
                            TextInput::make('name')->label('Name')->required(),
                            TextInput::make('description')->label('Description(Optional)'),
                            Select::make('category_id')->label('Category')->options(
                                Category::all()->pluck('name', 'id')
                            )->required()->helperText('Provide the category of the item.'),
                            TextInput::make('price')->label('Price')->required()->helperText('The price at which you sell a product to your customer.'),
                            TextInput::make('unit')->label('Unit')->required()->helperText('Unit of measurement for the item your selling.(e.g pcs for pieces, gal for gallons, and etc.)'),
                            TextInput::make('quantity')->label('Quantity')->required()->numeric()->helperText('Set available stocks on hand.'),
                        ])
                    ])->modalWidth('3xl')
                    ->action(function (array $data): void {
                        Product::create([
                            'name' => $data['name'],
                            'description' => $data['description'],
                            'category_id' => $data['category_id'],
                            'price' => $data['price'],
                            'unit' => $data['unit'],
                            'quantity' => $data['quantity'],
                        ]);
                    }),
                Action::make('export')->color('success')->icon('heroicon-o-document-text')->label('EXPORT')

            ])->columns([
                    TextColumn::make('name')->label('NAME')->searchable(),
                    TextColumn::make('description')->label('DESCRIPTION')->searchable(),
                    TextColumn::make('category.name')->label('CATEGORY')->searchable(),
                    TextColumn::make('price')->label('PRICE')->searchable()->formatStateUsing(
                        function ($record) {
                            return '₱' . number_format($record->price, 2);
                        }
                    ),
                    TextColumn::make('unit')->label('UNIT')->searchable(),
                    TextColumn::make('quantity')->label('QUANTITY')->searchable(),
                ])->actions([
                    EditAction::make()->color('success')->form([
                        Grid::make('2')->schema([
                            TextInput::make('name')->label('Name')->required(),
                            TextInput::make('description')->label('Description(Optional)'),
                            Select::make('category_id')->label('Category')->options(
                                Category::all()->pluck('name', 'id')
                            )->required()->helperText('Provide the category of the item.'),
                            TextInput::make('price')->label('Price')->required()->helperText('The price at which you sell a product to your customer.'),
                            TextInput::make('unit')->label('Unit')->required()->helperText('Unit of measurement for the item your selling.(e.g pcs for pieces, gal for gallons, and etc.)'),
                            TextInput::make('quantity')->label('Quantity')->required()->numeric()->helperText('Set available stocks on hand.'),
                        ])
                    ])->modalWidth('4xl'),
                    DeleteAction::make()->color('danger'),
                    ActionGroup::make([
                        Action::make('restock')->icon('heroicon-o-plus')->color('warning')->action(
                            function ($record, $data) {
                                $record->update([
                                    'quantity' => $record->quantity + $data['quantity']
                                ]);
                            }
                        )->form(
                                function ($record) {
                                    return [
                                        ViewField::make('price')->view('filament.price'),
                                        TextInput::make('quantity')->label('Quantity')->required()->numeric()
                                            ->mask('99/99/9999')
                                    ];
                                }
                            )->modalWidth('xl')->modalHeading('RESTOCK')
                    ]),
                ]);
    }

    public function render()
    {
        return view('livewire.product-list');
    }
}
