<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>@yield('title', 'Ala Eddine | Portfolio')</title>
    <meta name="description" content="Ala Eddine's personal portfolio showcasing projects, skills, certifications, and contact.">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skills.css') }}">
    <link rel="stylesheet" href="{{ asset('css/experience.css') }}">
    <link rel="stylesheet" href="{{ asset('css/education.css') }}">
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/certificates.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">

    {{-- Fonts & Icons --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">
</head>
<body>
    {{-- Header / Navbar --}}
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <h1 class="logo"><a href="{{ url('/') }}">Portfolio</a></h1>
                
                <!-- Mobile menu button -->
                <button class="mobile-menu-toggle" aria-label="Toggle navigation">
                    <span class="hamburger"></span>
                </button>
                
                <nav class="main-nav">
                    <a href="#about">About</a>
                    <a href="#projects">Projects</a>
                    <a href="#certificates">Certificates</a>
                    <a href="#contact">Contact</a>
                </nav>
            </div>
        </div>
    </header>