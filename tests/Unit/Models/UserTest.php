<?php

declare(strict_types=1);

use App\Models\User;

it('to array', function () {
    $user = User::factory()->create()->fresh();

    expect(array_keys($user->toArray()))
        ->toEqual([
            'id',
            'email',
            'email_verified_at',
            'created_at',
            'updated_at'
        ]);
});