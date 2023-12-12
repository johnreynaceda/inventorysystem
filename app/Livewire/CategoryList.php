<?php

namespace App\Livewire;

use App\Models\Category;
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
use TallStackUi\Traits\Interactions;



class CategoryList extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    use Interactions;

    public function table(Table $table): Table
    {
        return $table->query(Category::query())
            ->headerActions([
                CreateAction::make('new_category')->label('New Category')->color('main')->icon('heroicon-o-plus')
                    ->form([
                        TextInput::make('name')->label('Name')->required(),
                    ])->modalWidth('xl')
            ])->columns([
                    TextColumn::make('name')->label('NAME')->searchable(),
                ])->actions([
                    EditAction::make()->color('success')->form([
                        TextInput::make('name')->label('Name'),
                    ])->modalWidth('xl'),
                    DeleteAction::make()->color('danger'),
                ]);
    }
    public function render()
    {
        return view('livewire.category-list');
    }
}
