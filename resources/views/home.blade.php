@extends('layouts.app')

@section('content')
<div class="section" id="vision">
    <div class="h-screen w-full bg-cover bg-center flex flex-col justify-center items-center text-white text-center px-4" 
         style="background-image: url('/images/bg-vision.jpg');">
        
        <h1 class="text-6xl font-bold mb-4 aos-init" data-aos="fade-down" data-aos-delay="200">NOTRE VISION</h1>
        
        <h2 class="text-3xl mb-6 aos-init" data-aos="fade-up" data-aos-delay="400">CHANGER NOTRE FUTUR!</h2>
        
        <p class="max-w-2xl text-lg aos-init" data-aos="fade-up" data-aos-delay="600">
            Être la plus grande entreprise qui offre véritablement un parc de services et produits de qualité inégalables.
        </p>
    </div>
</div>
    <!-- Hero section -->
    <section class="h-screen bg-cover bg-center relative" style="background-image: url('/images/hero.jpg');">
        <div class="bg-black bg-opacity-50 absolute inset-0"></div>

        <div class="relative z-10 flex items-center justify-center h-full text-center text-white px-4">
            <div>
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Des solutions de données pour des décisions efficaces</h1>
                <p class="text-lg md:text-xl mb-6">BlueSquare développe des outils numériques qui transforment les données en actions concrètes.</p>
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-full transition">En savoir plus</a>
            </div>
        </div>
    </section>
    <!-- Section À propos -->
<section id="about" class="py-20 bg-gray-100"> 
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center space-y-10 md:space-y-0 md:space-x-10">
        <!-- Image -->
        <div class="md:w-1/2">
            <img src="{{ asset('images/about.jpg') }}" alt="À propos" class="rounded-lg shadow-lg">
        </div>

        <!-- Texte -->
        <div class="md:w-1/2">
            <h2 class="text-3xl font-bold text-blue-600 mb-4">À propos de BlueSquare</h2>
            <p class="text-gray-700 text-lg leading-relaxed">
                BlueSquare développe des solutions numériques pour améliorer la gestion des données dans les systèmes de santé, d’éducation et de gouvernance.
                Nous aidons les gouvernements et les ONG à transformer les données en actions concrètes, grâce à des outils technologiques efficaces et adaptés.
            </p>
        </div>
    </div>
</section>
<!-- Section Services -->
<section id="services" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-blue-600 mb-12">Nos Services</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white shadow rounded-lg p-6 hover:shadow-xl transition">
                <div class="text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m0-4h.01M12 20c4.418 0 8-1.79 8-4v-1a4 4 0 00-3-3.87V10a8 8 0 10-10 0v1.13A4 4 0 004 15v1c0 2.21 3.582 4 8 4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Collecte de données</h3>
                <p class="text-gray-600 text-sm">Outils performants pour la collecte de données en temps réel, même dans les zones reculées.</p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white shadow rounded-lg p-6 hover:shadow-xl transition">
                <div class="text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L15 12l-5.25-5M21 12A9 9 0 113 12a9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Visualisation interactive</h3>
                <p class="text-gray-600 text-sm">Transformez les données en tableaux de bord dynamiques, lisibles et exploitables.</p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white shadow rounded-lg p-6 hover:shadow-xl transition">
                <div class="text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a4 4 0 10-8 0v2a4 4 0 008 0zM4 15a4 4 0 014-4h8a4 4 0 014 4v5H4v-5z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Sécurité & accès</h3>
                <p class="text-gray-600 text-sm">Contrôle des droits d’accès, sécurité des données et conformité aux normes internationales.</p>
            </div>
        </div>
    </div>
</section>
<!-- Section Contact -->
<section id="contact" class="py-20 bg-gray-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-blue-600 mb-8">Contactez-nous</h2>

        <form action="{{ route('contact.send') }}" method="POST" class="space-y-6 text-left">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" name="name" id="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea name="message" id="message" rows="5" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition">Envoyer</button>
            </div>
            @if(session('success'))
    <div class="bg-green-100 text-green-700 p-4 rounded mb-6">
        {{ session('success') }}
    </div>
@endif

        </form>
    </div>
</section>
<header class="fixed top-0 left-0 w-full bg-blue-700 text-white z-50">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
        <div class="text-2xl font-bold">BlueSquare</div>
        <nav class="space-x-6">
            <a href="#vision" class="hover:underline">AGENCE</a>
            <a href="#services" class="hover:underline">CATALOGUE</a>
            <a href="#approche" class="hover:underline">SERVICES</a>
            <a href="#clients" class="hover:underline">APPROCHES</a>
            <a href="#contact" class="hover:underline">CLIENTS</a>
            <a href="#contact" class="hover:underline">CONTACT</a>
        </nav>
    </div>
</header>

<div id="fullpage" class="mt-[80px]">
    <!-- Section 1 -->
    <div class="section bg-cover bg-center text-white" style="background-image: url('/images/vision.jpg')">
        
</div>





@endsection

