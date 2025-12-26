@props([
    'apiEndpoint' => 'https://captcha.gurl.eu.org/api/',
    'theme' => 'light',
    'size' => 'normal',
    'shape' => 'square',
    'elevation' => 'flat',
])

<cap-widget {{ $attributes->merge([
    'id' => 'cap',
    'data-cap-api-endpoint' => $apiEndpoint,
    'data-cap-theme' => $theme,
    'data-cap-size' => $size,
    'data-cap-shape' => $shape,
    'data-cap-elevation' => $elevation,
]) }}></cap-widget>

<script src="{{ config('capjs.capjs_script_url', 'https://captcha.gurl.eu.org/cap.min.js') }}"></script>
