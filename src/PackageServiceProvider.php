<?php

namespace LaraFusion\Package;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Package $extension)
    {
        if (! Package::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'package');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/larafusion/package')],
                'package'
            );
        }

        $this->app->booted(function () {
            Package::routes(__DIR__.'/../routes/web.php');
        });
    }
}