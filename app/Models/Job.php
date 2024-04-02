<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director of Engineering',
                'salary' => 100,000,
            ],
            [
                'id' => 2,
                'title' => 'Director of Marketing',
                'salary' => 80,000
            ],
            [
                'id' => 3,
                'title' => 'Director of Sales',
                'salary' => 70,000
            ],
        ];
    }
    public static function find(int $id): array
    {
        return Arr::first(static::all(), fn($job) => $job['id'] == $id);
    }
}
