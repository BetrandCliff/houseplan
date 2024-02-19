<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrdersResource\Pages;
use App\Filament\Resources\OrdersResource\RelationManagers;
use App\Models\Orders;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrdersResource extends Resource
{
    protected static ?string $model = Orders::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Transactions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Section::make()
                // ->schema(static::getDetailsFormSchema())
                // ->columns(2),
            //     Forms\Components\TextInput::make('product')
            //     ->required()
            //     ->maxLength(255),
            // Forms\Components\TextInput::make('price')
            //     ->maxLength(255),
            //     Forms\Components\TextInput::make('sender')
            //     ->maxLength(255),
            //     Forms\Components\TextInput::make('status')
            //     ->maxLength(255),
            // Forms\Components\FileUpload::make('images')
            //     ->image()
            //     ->multiple()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
               

                Tables\Columns\TextColumn::make('product')
                ->searchable(),
            Tables\Columns\TextColumn::make('price')
                ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('sender')
                ->searchable(),
                Tables\Columns\TextColumn::make('email')
                ->searchable(),
            Tables\Columns\TextColumn::make('telephone')
                ->searchable(),
                Tables\Columns\TextColumn::make('status')
                ->searchable(),
           
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListOrders::route('/'),
            // 'create' => Pages\CreateOrders::route('/create'),
            'view' => Pages\ViewOrders::route('/{record}'),
            'edit' => Pages\EditOrders::route('/{record}/edit'),
        ];
    }
}
