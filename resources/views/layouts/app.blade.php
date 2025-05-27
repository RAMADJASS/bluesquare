<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueSquare</title>
<!-- fullPage.js CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.24/fullpage.min.css" />

    @vite('resources/css/app.css')

<link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />

</head>
<!-- fullPage.js JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.24/fullpage.min.js"></script>
<script>
    new fullpage('#fullpage', {
        autoScrolling: true,
        navigation: true,
        anchors: ['vision', 'services', 'approche', 'clients', 'contact'],
        navigationTooltips: ['Notre Vision', 'Services', 'Approche', 'Clients', 'Contact'],
        showActiveTooltip: true,
        scrollOverflow: true
    });
</script>

<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        once: true, // ne joue l'animation qu'une fois
        duration: 1000 // durée de l'animation
    });
</script>

</body>
</html>
