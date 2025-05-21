<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\NomorSimResource\Pages;
use App\Filament\Admin\Resources\NomorSimResource\RelationManagers;
use App\Models\NomorSim;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NomorSimResource extends Resource
{
    protected static ?string $model = NomorSim::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_sim')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis_sim')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_berlaku')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_sim')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_sim'),
                Tables\Columns\TextColumn::make('tanggal_berlaku')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListNomorSims::route('/'),
            'create' => Pages\CreateNomorSim::route('/create'),
            'edit' => Pages\EditNomorSim::route('/{record}/edit'),
        ];
    }
}
