<?php

namespace App\Filament\Resources\Blogs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Facades\DB;

class BlogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('titulo')
                    ->searchable(),
                ImageColumn::make('imagen')
                    ->disk('public')
                    ->label('Foto'),
                TextColumn::make('categoria')
                    ->searchable(),
                TextColumn::make('autor')
                    ->searchable(),
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
                SelectFilter::make('year')
                    ->label('Año')
                    ->options(
                        DB::table('blogs')
                            ->selectRaw('YEAR(created_at) as year')
                            ->distinct()
                            ->orderBy('year', 'desc')
                            ->pluck('year', 'year')
                            ->toArray()
                    )
                    ->query(function ($query, $data) {
                        if ($data['value']) {
                            $query->whereYear('created_at', $data['value']);
                        }
                    }),
                SelectFilter::make('categoria')
                    ->label('Categoría')
                    ->options([
                        'noticias' => 'Noticias',
                        'consejos de salud' => 'Consejos de salud',
                    ]),
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
