<?php

namespace App\Providers;

use Filament\Navigation\UserMenuItem;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class ExampleServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('Display Menu My Profile On User Menu');
    }

    protected function getUserMenuItems(): array
    {
        return [
            UserMenuItem::make()
                ->label('My Profile')
                ->url(route('filament.pages.my-profile'))
                ->icon('heroicon-o-user-circle'),
        ];
    }
}
