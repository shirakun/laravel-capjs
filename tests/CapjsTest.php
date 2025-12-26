<?php

use Illuminate\Support\Facades\Config;
use Shirakun\LaravelCapjs\Rules\CapjsCheck;

it('returns success message', function () {
    setCapjsRoutes(true);

    $response = $this->get('/capjs');

    $this->assertStringContainsString(
        '<x-capjs-widget/>', $response->getContent()
    ) || $this->assertStringContainsString(
        '<cap-widget', $response->getContent()
    );

    $response->assertOk();
});

it('fails validation for invalid input', function () {
    Config::set('capjs', [
        'capjs_site_key' => 'some_key',
        'capjs_secret_key' => 'some_secret',
    ]);

    $rule = new CapjsCheck();

    $result = $rule->validate('cap-token', 'invalid_input', fn() => '');

    expect($result)->toBeNull();
});
