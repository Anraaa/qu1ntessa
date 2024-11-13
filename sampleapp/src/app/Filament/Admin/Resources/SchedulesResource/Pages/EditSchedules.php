<?php

namespace App\Filament\Admin\Resources\SchedulesResource\Pages;

use App\Filament\Admin\Resources\SchedulesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSchedules extends EditRecord
{
    protected static string $resource = SchedulesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
