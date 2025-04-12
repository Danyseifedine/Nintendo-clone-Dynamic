<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductInfoResource\Pages;
use App\Filament\Resources\ProductInfoResource\RelationManagers;
use App\Models\ProductInfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductInfoResource extends Resource
{
    protected static ?string $model = ProductInfo::class;

    protected static ?string $navigationLabel = 'Product Information';

    protected static ?string $navigationGroup = 'Products';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_id')
                    ->relationship('product', 'name')
                    ->required(),
                Forms\Components\TextInput::make('file_size')
                    ->maxLength(50),
                Forms\Components\TextInput::make('supported_play_modes')
                    ->maxLength(255),
                Forms\Components\TextInput::make('number_of_players')
                    ->maxLength(100),
                Forms\Components\TextInput::make('genre')
                    ->maxLength(100),
                Forms\Components\TextInput::make('online_features')
                    ->maxLength(255),
                Forms\Components\TextInput::make('system')
                    ->maxLength(100),
                Forms\Components\TextInput::make('publisher')
                    ->maxLength(100),
                Forms\Components\TextInput::make('developer')
                    ->maxLength(100),
                Forms\Components\Textarea::make('supported_languages')
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('release_date'),
                Forms\Components\TextInput::make('esrb_rating')
                    ->maxLength(50),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('file_size')
                    ->searchable(),
                Tables\Columns\TextColumn::make('supported_play_modes')
                    ->searchable(),
                Tables\Columns\TextColumn::make('number_of_players')
                    ->searchable(),
                Tables\Columns\TextColumn::make('genre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('online_features')
                    ->searchable(),
                Tables\Columns\TextColumn::make('system')
                    ->searchable(),
                Tables\Columns\TextColumn::make('publisher')
                    ->searchable(),
                Tables\Columns\TextColumn::make('developer')
                    ->searchable(),
                Tables\Columns\TextColumn::make('release_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('esrb_rating')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListProductInfos::route('/'),
            'create' => Pages\CreateProductInfo::route('/create'),
            'edit' => Pages\EditProductInfo::route('/{record}/edit'),
        ];
    }
}
