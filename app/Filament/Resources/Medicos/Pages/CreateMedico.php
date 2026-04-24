<?php

namespace App\Filament\Resources\Medicos\Pages;

use App\Filament\Resources\Medicos\MedicoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMedico extends CreateRecord
{
    protected static ?string $title = 'Crear Médico';
    protected static string $resource = MedicoResource::class;
}
