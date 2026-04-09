<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Laravel | Modern, Fast & Secure</title>
    <meta name="description"
        content="Professional CMS built with Laravel 13, Filament 5, Livewire 4 & MySQL. Modern, fast, and secure.">

    <!-- Tailwind CSS + Font Awesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Custom warm shadow effects */
        .warm-shadow {
            box-shadow: 0 10px 30px -8px rgba(120, 60, 30, 0.25);
        }

        .warm-shadow-hover:hover {
            box-shadow: 0 20px 35px -10px rgba(120, 60, 30, 0.35);
            transform: translateY(-4px);
        }

        .btn-warm {
            box-shadow: 0 8px 20px rgba(217, 119, 6, 0.3);
            transition: all 0.3s ease;
        }

        .btn-warm:hover {
            box-shadow: 0 12px 28px rgba(217, 119, 6, 0.45);
            transform: translateY(-2px);
        }

        .glow-text {
            text-shadow: 0 0 15px rgba(217, 119, 6, 0.3);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-stone-800 via-stone-700 to-stone-600 text-stone-50">

    <!-- Minimal Navbar -->
    <nav class="border-b border-amber-700/30 bg-stone-800/80 backdrop-blur-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">
                <span class="text-amber-500">CMS</span>
                <span class="text-stone-100">Laravel</span>
            </div>
            <div class="space-x-6 hidden md:block">
                {{-- <a href="#" class="hover:text-amber-400 transition">Home</a>
                <a href="#" class="hover:text-amber-400 transition">Features</a>
                <a href="#" class="hover:text-amber-400 transition">Pricing</a> --}}
                <a href="/admin"
                    class="bg-amber-600 px-4 py-2 rounded-full hover:bg-amber-500 transition btn-warm">Admin</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section - CMS Laravel Title -->
    <section class="container mx-auto px-6 py-20 text-center">
        <div class="max-w-4xl mx-auto">
            <div
                class="inline-block bg-amber-600/20 backdrop-blur-sm px-4 py-1 rounded-full text-sm mb-6 border border-amber-500/30">
                <i class="fab fa-laravel mr-2"></i> Powered by Filament 5 + Livewire 4
            </div>

            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                <span class="bg-gradient-to-r from-amber-300 to-amber-600 bg-clip-text text-transparent">
                    CMS Laravel
                </span>
            </h1>

            <p class="text-xl text-stone-200 mb-8 max-w-2xl mx-auto">
                A modern Content Management System built with <strong class="text-amber-400">Laravel 13</strong>,
                <strong class="text-amber-400">Filament 5</strong>, <strong class="text-amber-400">Livewire 4</strong> &
                <strong class="text-amber-400">MySQL</strong>.
                Fast, secure, and effortless to use.
            </p>

            <div class="flex gap-4 justify-center flex-wrap">
                <a href="#"
                    class="bg-amber-600 px-8 py-3 rounded-full font-semibold hover:bg-amber-500 transition btn-warm">
                    <i class="fas fa-rocket mr-2"></i> Get Started
                </a>
                <a href="#"
                    class="border border-amber-500/60 px-8 py-3 rounded-full font-semibold hover:bg-amber-600/20 transition">
                    <i class="fas fa-play mr-2"></i> Live Demo
                </a>
            </div>
        </div>
    </section>

    <!-- Features - 3 Minimal Cards -->
    <section class="container mx-auto px-6 py-16">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
            <i class="fas fa-crown text-amber-500 mr-2"></i>
            Why <span class="text-amber-500">CMS Laravel</span>?
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div
                class="bg-stone-800/60 backdrop-blur-sm rounded-2xl p-6 border border-amber-600/30 warm-shadow-hover transition-all">
                <div class="w-14 h-14 bg-amber-600/20 rounded-xl flex items-center justify-center mb-4">
                    <i class="fab fa-laravel text-2xl text-amber-500"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Laravel 13</h3>
                <p class="text-stone-300">Top-tier performance with Laravel 13, Eloquent ORM, and a mature ecosystem.
                </p>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-stone-800/60 backdrop-blur-sm rounded-2xl p-6 border border-amber-600/30 warm-shadow-hover transition-all">
                <div class="w-14 h-14 bg-amber-600/20 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-tachometer-alt text-2xl text-amber-500"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Filament 5 + Livewire 4</h3>
                <p class="text-stone-300">Modern admin panel, reactive components, and an exceptional developer
                    experience.</p>
            </div>

            <!-- Card 3 -->
            <div
                class="bg-stone-800/60 backdrop-blur-sm rounded-2xl p-6 border border-amber-600/30 warm-shadow-hover transition-all">
                <div class="w-14 h-14 bg-amber-600/20 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-database text-2xl text-amber-500"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">MySQL</h3>
                <p class="text-stone-300">Reliable database with migrations, seeding, and advanced query optimization.
                </p>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="container mx-auto px-6 py-12">
        <div class="bg-stone-800/40 rounded-3xl p-8 border border-amber-600/30 warm-shadow">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold"><i class="fas fa-layer-group text-amber-500 mr-2"></i> Tech Stack</h2>
                <p class="text-stone-300 mt-2">A powerful combination for modern web applications</p>
            </div>
            <div class="flex flex-wrap justify-center gap-6">
                <div class="flex items-center gap-2 bg-stone-700/60 px-4 py-2 rounded-full"><i
                        class="fab fa-laravel text-amber-500"></i> Laravel 13</div>
                <div class="flex items-center gap-2 bg-stone-700/60 px-4 py-2 rounded-full"><i
                        class="fas fa-bolt text-amber-500"></i> Livewire 4</div>
                <div class="flex items-center gap-2 bg-stone-700/60 px-4 py-2 rounded-full"><i
                        class="fas fa-crown text-amber-500"></i> Filament 5</div>
                <div class="flex items-center gap-2 bg-stone-700/60 px-4 py-2 rounded-full"><i
                        class="fas fa-database text-amber-500"></i> MySQL 8</div>
                <div class="flex items-center gap-2 bg-stone-700/60 px-4 py-2 rounded-full"><i
                        class="fab fa-tailwind text-amber-500"></i> Tailwind CSS</div>
            </div>
        </div>
    </section>

    <!-- Minimal CTA -->
    <section class="container mx-auto px-6 py-16 text-center">
        <div class="bg-gradient-to-r from-amber-700 to-stone-700 rounded-3xl p-10 warm-shadow">
            <h2 class="text-3xl font-bold mb-4">Ready to Build Your Dream CMS?</h2>
            <p class="text-stone-200 mb-6 max-w-xl mx-auto">With Filament 5 + Livewire 4, CMS development becomes
                faster, more intuitive, and enjoyable.</p>
            <div class="flex gap-4 justify-center">
                <a href="#"
                    class="bg-stone-100 text-stone-800 px-8 py-3 rounded-full font-bold hover:bg-stone-200 transition">
                    <i class="fab fa-laravel mr-2"></i> Documentation
                </a>
                <a href="#"
                    class="border border-stone-300 px-8 py-3 rounded-full font-semibold hover:bg-white/10 transition">
                    <i class="fab fa-github mr-2"></i> GitHub
                </a>
            </div>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="border-t border-amber-700/30 py-8 text-center text-stone-300 text-sm">
        <p>CMS Laravel — Built with <i class="fas fa-heart text-amber-500"></i> using Filament 5, Livewire 4, Laravel 13
            & MySQL</p>
        <p class="mt-2">© 2026 All rights reserved.</p>
    </footer>

</body>

</html>