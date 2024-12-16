<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedisResource\Pages;
use App\Filament\Resources\MedisResource\RelationManagers;
use App\Models\Medis;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedisResource extends Resource
{
    protected static ?string $model = Medis::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label('Nama')
                ->placeholder('Masukan Nama')
                ->required(),
                TextInput::make('designation')
                ->label('Jabatan')
                ->placeholder('Masukan Jabatan')
                ->required(),
                TextInput::make('tw_url')
                ->url()
                ->label('Twitter URL')
                ->placeholder('Masukan Link Twitter'),
                TextInput::make('fb_url')
                ->url()
                ->placeholder('Masukan Link Facebook')
                ->label('Facebook URL'),
                TextInput::make('in_url')
                ->url()
                ->placeholder('Masukan Link Instagram')
                ->label('Instagram URL'),
                FileUpload::make('image'),
                Select::make('status')
                ->options([
                    1 => 'Active',
                    0 => 'Block'
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Nama'),
                TextColumn::make('designation')
                ->label('Jabatan'),
                ImageColumn::make('image')
                ->label('Foto')
                ->width(100)
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
            'index' => Pages\ListMedis::route('/'),
            'create' => Pages\CreateMedis::route('/create'),
            'edit' => Pages\EditMedis::route('/{record}/edit'),
        ];
    }
}
