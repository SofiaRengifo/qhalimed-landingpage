<?php

namespace App\Filament\Resources\Medicos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class MedicosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->disk('public')
                    ->label('Foto'),
                TextColumn::make('nombre')
                    ->searchable(),
                TextColumn::make('especialidad')
                    ->searchable(),
                TextColumn::make('experiencia')
                    ->numeric()
                    ->label('Experiencia (años)')
                    ->sortable(),
                TextColumn::make('educacion')
                    ->label('Educación'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
