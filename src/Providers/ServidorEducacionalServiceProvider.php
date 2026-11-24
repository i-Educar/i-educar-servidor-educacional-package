<?php

namespace iEducar\Packages\BuritiServidorEducacional\Providers;

use iEducar\Packages\BuritiServidorEducacional\Services\Lotacao;
use iEducar\Packages\BuritiServidorEducacional\Services\HistoricoFuncional;
use Illuminate\Support\ServiceProvider;

class ServidorEducacionalServiceProvider extends ServiceProvider
{
    public const string PACKAGE = 'buriti/i-educar-servidor-educacional-package';

    public function register(): void
    {
        $this->app->singleton(Lotacao::class);
        $this->app->singleton(HistoricoFuncional::class);
    }

    public function boot(): void
    {
    }
}
