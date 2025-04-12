<?php

namespace App\Filament\Resources\ProductInfoResource\Pages;

use App\Filament\Resources\ProductInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductInfo extends EditRecord
{
    protected static string $resource = ProductInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
