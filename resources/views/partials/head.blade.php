<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    {{ filled($title ?? null) ? $title.' - '.config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
</title>

<link rel="icon" type="image/png" href="/favicon.png?v=2">
<link rel="shortcut icon" type="image/png" href="/favicon.png?v=2">
<link rel="apple-touch-icon" href="/favicon.png?v=2">

@fonts

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
