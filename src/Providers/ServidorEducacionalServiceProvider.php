<?php

namespace iEducar\Packages\BuritiServidorEducacional\Providers;

use Illuminate\Support\ServiceProvider;

class ServidorEducacionalServiceProvider extends ServiceProvider
{
    public const string PACKAGE = 'buriti/i-educar-servidor-educacional-package';

    public function register(): void
    {
        // Services são value objects — instanciar com `new` nos callers (não bind no container).
    }

    public function boot(): void
    {
    }
}
