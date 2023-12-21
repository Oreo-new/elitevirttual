<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageArticleResource\Pages;
use App\Filament\Resources\PageArticleResource\RelationManagers;
use App\Models\PageArticle;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageArticleResource extends Resource
{
    protected static ?string $model = PageArticle::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Section Articles';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Grid::make()->schema([
            TextInput::make('title')->autofocus()->required(),
            TextInput::make('slug')
                ->disabledOn('edit')
                ->helperText('Auto generates url after saving. You may put a unique url or leave it blank.'),
            RichEditor::make('description')->required(),
            FileUpload::make('img')->autofocus()
            ->image(),
            ])->columns(1)
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('slug')->searchable()->sortable(),
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
            'index' => Pages\ListPageArticles::route('/'),
            'create' => Pages\CreatePageArticle::route('/create'),
            'edit' => Pages\EditPageArticle::route('/{record}/edit'),
        ];
    }
}
