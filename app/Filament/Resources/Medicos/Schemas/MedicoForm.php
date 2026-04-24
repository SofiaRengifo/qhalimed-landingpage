<?php

namespace App\Filament\Resources\Medicos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class MedicoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->label('Nombre completo')
                    ->required(),
                TextInput::make('especialidad')
                    ->required(),
                FileUpload::make('foto')
                    ->image()
                    ->directory('medicos')
                    ->disk('public')
                    ->visibility('public'),
                TextInput::make('experiencia')
                    ->required()
                    ->label('Años de experiencia')
                    ->numeric(),
                TextInput::make('educacion')
                    ->label('Educación')
                    ->required(),
                TextInput::make('cmp')
                    ->label('CMP')
                    ->required(),
                Textarea::make('descripcion')
                    ->label('Descripción')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
