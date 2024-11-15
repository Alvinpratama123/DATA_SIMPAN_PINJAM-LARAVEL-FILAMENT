<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AngsuranResource\Pages;
use App\Filament\Admin\Resources\AngsuranResource\RelationManagers;
use App\Models\Angsuran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AngsuranResource extends Resource
{
    protected static ?string $model = Angsuran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('data_pinjaman_id')
                    ->relationship('data_pinjaman', 'no_trx')
                    ->searchable()
                    ->preload()
                    ->required(),
                    Forms\Components\TextInput::make('jumlah_bayar')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\DatePicker::make('tanggal_bayar')
                    ->required()
                    ->maxDate(now()),
                    Forms\Components\TextInput::make('keterangan')
                    ->required()
                    ->maxLength(255),
                    
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_bayar')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_bayar')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('keterangan')
                ->sortable()
                ->searchable(),
            


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
            'index' => Pages\ListAngsurans::route('/'),
            'create' => Pages\CreateAngsuran::route('/create'),
            'edit' => Pages\EditAngsuran::route('/{record}/edit'),
        ];
    }
}
