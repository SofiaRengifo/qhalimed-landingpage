<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('titulo')
                    ->required(),
                TextInput::make('autor')
                    ->label('Autor (opcional)')
                    ->nullable(),
                Select::make('categoria')
                    ->options([
                        'Noticias' => 'Noticias',
                        'Consejos de salud' => 'Consejos de salud',
                    ])
                    ->required(),
                FileUpload::make('imagen')
                    ->directory('blog/'.date('Y').'/'.date('m'))
                    ->image()
                    ->disk('public')
                    ->visibility('public'),
                Textarea::make('resumen')
                    ->default(null)
                    ->columnSpanFull(),
                RichEditor::make('contenido')
                    ->label('Contenido')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'bulletList',
                        'orderedList',
                        'h2',
                        'h3',
                        'link',
                        'blockquote',
                    ])
                    ->columnSpanFull()
                    ->required(),
            ]);
    }
}
