<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8" />
    <meta property="og:title" content="MACADOM | Marketplace of car mechanics for Home Maintenance services" />
    <!-- Meta description -->
    <meta name="description"
        content="Mécadom Plus met en relation des particuliers avec des mécaniciens professionnels indépendants pour l’entretien automobile à domicile. " />
    <!-- mots clés -->
    <meta name="keywords" content="Voiture, Auto, mécanicien à domicile" />
    <meta name="author" content="JEaLiFe" />
    <meta property="og:site_name" content="Mécadom plus" />
    <meta property="og:type" content="website" />
    <!-- image mise en avant -->
    <meta property="og:image"
        content="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8bSVDMyVBOWNhbmljaWVufGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" />
    <meta property="og:image" content="https://meca-dom-plus.vercel.app/assets/images/Logo_Mecadom.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marketplace of car mechanics for Home Maintenance services</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/Logo_icon.png') }}" />

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    @yield("style")
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    @include("layouts.navbar")

    @yield("content")

    @include("layouts.footer")


    <script src="{{ asset('assets/js/nav.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @yield("script")

</body>

</html>
