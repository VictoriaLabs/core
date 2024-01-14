<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OauthServicesResource\Pages;
use App\Filament\Resources\OauthServicesResource\RelationManagers;
use App\Models\OauthServices;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OauthServicesResource extends Resource
{
    protected static ?string $model = OauthServices::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("name")->required(),
                TextInput::make("redirect_uri")->required(),

                Forms\Components\Section::make("Button")->schema([
                    IconPicker::make('btn_icon')
                        ->sets(['fontawesome-solid', 'fontawesome-brands', 'fontawesome-regular'])
                        ->columns([
                            'default' => 1,
                            'lg' => 3,
                            '2xl' => 5,
                        ]),
                    TextInput::make("btn_label"),
                    TextInput::make("btn_url"),
                    Toggle::make("active"),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name"),
                IconColumn::make("active"),
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
            ])->reorderable('order')
            ->defaultSort("order");
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
            'index' => Pages\ListOauthServices::route('/'),
            'create' => Pages\CreateOauthServices::route('/create'),
            'edit' => Pages\EditOauthServices::route('/{record}/edit'),
        ];
    }
}
