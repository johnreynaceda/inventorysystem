<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\SaleTransaction;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Sale extends Component implements HasForms
{
    use InteractsWithForms;
    use Interactions;
    public $product = [];

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('SALES MANAGEMENT')->schema([
                    Repeater::make('product')->label('')
                        ->schema([
                            Select::make('product_id')->label('Product')
                                ->options(Product::all()->pluck('name', 'id'))->searchable()
                                ->required(),
                            TextInput::make('quantity')->numeric()->required(),
                        ])
                        ->columns(2)->addActionLabel('ADD PRODUCT')->collapsible()
                ])->columns(1)
            ]);

    }

    public function submit()
    {
        $this->validate([
            'product.*.product_id' => 'required',
            'product.*.quantity' => 'required|integer',
            'product' => 'required'
        ]);

        foreach ($this->product as $key => $value) {
            $category_id = Product::where('id', $value['product_id'])->first()->category_id;
            $category = Category::where('id', $category_id)->first()->name;

            if ($category != 'GCASH') {
                SaleTransaction::create([
                    'product_id' => $value['product_id'],
                    'quantity' => $value['quantity'],
                    'total_amount' => $value['quantity'] * Product::find($value['product_id'])->price,
                ]);

                $product = Product::find($value['product_id']);

                $product->update([
                    'quantity' => $product->quantity - $value['quantity']
                ]);

            } else {
                SaleTransaction::create([
                    'product_id' => $value['product_id'],
                    'quantity' => $value['quantity'],
                    'total_amount' => ($value['quantity'] * Product::find($value['product_id'])->price + $value['quantity']),
                ]);
            }


        }
        sleep(2);
        $this->reset('product');
        $this->dialog()->success('Success', 'Sales Added');
    }



    public function render()
    {
        return view('livewire.sale');
    }
}
