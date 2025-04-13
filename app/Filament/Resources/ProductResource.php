<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationGroup = 'Products';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->helperText('Enter the product name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('description_title')
                    ->required()
                    ->helperText('Enter the product description title')
                    ->maxLength(255),
                RichEditor::make('description')
                    ->required()
                    ->helperText('Enter the product description')
                    ->toolbarButtons([
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->helperText('Enter the product price (if 0, free demo and discount will be disabled)')
                    ->numeric()
                    ->prefix('$')
                    ->live()
                    ->afterStateUpdated(function ($state, $set) {
                        if ($state == 0) {
                            $set('has_free_demo', false);
                            $set('discount', 0);
                        }
                    }),
                Forms\Components\Toggle::make('has_free_demo')
                    ->required()
                    ->helperText('Toggle if the product has a free demo (cannot be used with free products or discounts)')
                    ->disabled(fn(callable $get) => $get('price') == 0)
                    ->live()
                    ->afterStateUpdated(function ($state, $set, callable $get) {
                        if ($state && $get('discount') > 0) {
                            $set('discount', 0);
                        }
                    }),
                Forms\Components\TextInput::make('discount')
                    ->required()
                    ->helperText('Enter the product discount (cannot be used with free products or free demos)')
                    ->numeric()
                    ->default(0)
                    ->disabled(fn(callable $get) => $get('price') == 0 || $get('has_free_demo'))
                    ->live()
                    ->afterStateUpdated(function ($state, $set, callable $get) {
                        if ($state > 0 && $get('has_free_demo')) {
                            $set('has_free_demo', false);
                        }
                    }),
                Forms\Components\DateTimePicker::make('discount_start_date')
                    ->helperText('Enter the product discount start date')
                    ->disabled(fn(callable $get) => $get('price') == 0 || $get('discount') == 0 || $get('has_free_demo')),
                Forms\Components\DateTimePicker::make('discount_end_date')
                    ->helperText('Enter the product discount end date')
                    ->disabled(fn(callable $get) => $get('price') == 0 || $get('discount') == 0 || $get('has_free_demo')),
                Select::make('tags')
                    ->relationship('productTags', 'name')
                    ->multiple()
                    ->helperText('Select the product tags')
                    ->required()
                    ->preload()
                    ->searchable(),
                SpatieMediaLibraryFileUpload::make('product_images')
                    ->collection('product-images')
                    ->multiple()
                    ->maxFiles(8)
                    ->label('Product Images')
                    ->helperText('Upload product images (max 8, at least 1 required)')
                    ->required()
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('product_thumbnail')
                    ->collection('product-thumbnail')
                    ->label('Product Thumbnail')
                    ->required()
                    ->helperText('Upload a thumbnail image for the product')
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('primary_marketing_visual')
                    ->collection('primary-marketing-visual')
                    ->label('Primary Marketing Visual')
                    ->helperText('Upload a primary marketing visual for the product')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\IconColumn::make('has_free_demo')
                    ->boolean(),
                Tables\Columns\TextColumn::make('discount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('discount_start_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('discount_end_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('thumbnail')
                    ->collection('product-thumbnail')
                    ->circular(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
