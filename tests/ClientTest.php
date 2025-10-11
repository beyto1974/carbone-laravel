<?php

use Beyto\CarboneLaravel\Facades\Carbone;

it('can get status', function () {
    expect(Carbone::getStatus()->json())->toMatchArray([
        'success' => true,
        'code' => 200,
        'message' => 'OK',
    ]);
});
