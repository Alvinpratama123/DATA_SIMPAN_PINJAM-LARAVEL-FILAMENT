<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DataPinjamanResource\Pages;
use App\Filament\Admin\Resources\DataPinjamanResource\RelationManagers;
use App\Models\DataPinjaman;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataPinjamanResource extends Resource
{
    protected static ?string $model = DataPinjaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                    Forms\Components\TextInput::make('no_trx')
                ->required(),
                    Forms\Components\TextInput::make('jumlah')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\DatePicker::make('tanggal_pinjam')
                    ->required()
                    ->maxDate(now()),
                    Forms\Components\TextInput::make('keterangan')
                    ->required(),  
                Forms\Components\TextInput::make('bunga')
                    ->required(),
                    Forms\Components\Select::make('status')
                    ->options([
                        'ACTIVE' => 'ACTIVE',
                        'NONACTIV' => 'NONACTIVE',
                    ]), 
                Forms\Components\TextInput::make('jangka_waktu')
                    ->required()            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('no_trx')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('jumlah')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_pinjam')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('keterangan')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('bunga')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('status')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('jangka_waktu')
                ->sortable()
                ->searchable()

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
            'index' => Pages\ListDataPinjamen::route('/'),
            'create' => Pages\CreateDataPinjaman::route('/create'),
            'edit' => Pages\EditDataPinjaman::route('/{record}/edit'),
        ];
    }
}
