<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<link rel="canonical" href="https://preline.co/">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description"
    content="Comprehensive overview with charts, tables, and a streamlined dashboard layout for easy data visualization and analysis.">

<meta name="twitter:site" content="@preline">
<meta name="twitter:creator" content="@preline">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Tailwind CSS Admin Template | Preline UI, crafted with Tailwind CSS">
<meta name="twitter:description"
    content="Comprehensive overview with charts, tables, and a streamlined dashboard layout for easy data visualization and analysis.">
<meta name="twitter:image" content="https://preline.co/assets/img/og-image.png">

<meta property="og:url" content="https://preline.co/">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Preline">
<meta property="og:title" content="Tailwind CSS Admin Template | Preline UI, crafted with Tailwind CSS">
<meta property="og:description"
    content="Comprehensive overview with charts, tables, and a streamlined dashboard layout for easy data visualization and analysis.">
<meta property="og:image" content="https://preline.co/assets/img/og-image.png">

<title>{{ $title ?? 'Laravel' }}</title>

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Theme Check and Update -->
<script>
    const html = document.querySelector('html');
    const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') ===
        'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
    const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' &&
        window.matchMedia('(prefers-color-scheme: dark)').matches);

    if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
    else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
    else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
    else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
</script>
