<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ArticleKarir;
use App\Models\CategoryKarir;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleKarirResource\Pages;
use App\Filament\Resources\ArticleKarirResource\RelationManagers;

class ArticleKarirResource extends Resource
{
    protected static ?string $model = ArticleKarir::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Judul')
                ->placeholder('Judul')
                ->required(),
                Select::make('category_id')
                ->label('Tahun')
                ->options(CategoryKarir::all()->pluck('name','id')),
                TextInput::make('author')
                ->label('Penulis')
                ->placeholder('Penulis')
                ->required(),
                FileUpload::make('image'),
                RichEditor::make('content')
                ->columnSpan(2)
                ->required(),
                Select::make('status')
                    ->options([
                        1 => 'Aktif',
                        0 => 'block'
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('author')
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
            'index' => Pages\ListArticleKarirs::route('/'),
            'create' => Pages\CreateArticleKarir::route('/create'),
            'edit' => Pages\EditArticleKarir::route('/{record}/edit'),
        ];
    }
}
