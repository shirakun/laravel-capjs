<?php
namespace Shirakun\LaravelCapjs;

use Illuminate\Support\Facades\Http;
use Shirakun\LaravelCapjs\Exceptions\UnkownErrorOccuredException;

class LaravelCapjs
{
    protected ?string $url = 'https://captcha.gurl.eu.org/api/validate';

    public function validate(?string $capToken = null): array
    {
        $token = is_null($capToken)
            ? request()->get('cap-token')
            : $capToken;

        $response = Http::asJson()
            ->timeout(30)
            ->connectTimeout(10)
            ->throw(
                fn() => new UnkownErrorOccuredException(
                    'An unkown error occured, please refresh the page and try again.'
                )
            )
            ->post($this->getUrl(), [
                'token' => $token,
                'keepToken' => false,
            ]);

        return count($response->json())
            ? $response->json()
            : [
            'success' => false,
            'message' => 'Unknow error occured, please try again',
        ];
    }

    public function getUrl()
    {
        return config('capjs.capjs_api_endpoint', $this->url);
    }
}
