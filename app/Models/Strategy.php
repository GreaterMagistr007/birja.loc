<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strategy
{
    private $strategies_directory = '';
    /**
     * Модель "Стратегия" управляет режимом работы стратегий.
     */
    use HasFactory;

    public function __construct(array $attributes = [])
    {
    }

    private static function getStrategiesDirectory()
    {
        return app_path('Strategies');
    }

    public static function getAllStrategies()
    {
        dd(self::getStrategiesDirectory());
    }
}
