<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id'     => 1,
                'title'  => 'Director of Engineering',
                'salary' => 100,
                0,
            ],
            [
                'id'     => 2,
                'title'  => 'Director of Marketing',
                'salary' => 80,
                0
            ],
            [
                'id'     => 3,
                'title'  => 'Director of Sales',
                'salary' => 70,
                0
            ],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
