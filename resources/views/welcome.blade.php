<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sol Sepatu FILADELPHIA | Ahli Restorasi Sepatu & Tas Semarang</title>
    
    @vite('resources/css/app.css')
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style> body { font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-brand-cream text-brand-brown antialiased">

    <nav class="bg-brand-brown text-white p-4 sticky top-0 z-50 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="flex items-center space-x-3">
                <img src="{{ asset('/storage/LogoSolFiladelfia.png') }}" alt="Logo Fila Delphia" class="h-10 w-auto object-contain">
                <span class="text-xl font-bold tracking-wider text-brand-orange hidden sm:inline-block">FILA DELPHIA</span>
            </a>
<div class="hidden md:flex space-x-2 items-center">
    <a href="#layanan" class="px-4 py-2 rounded-full text-xs font-bold tracking-widest uppercase text-white hover:bg-brand-orange/20 hover:text-brand-orange transition-all duration-300">
        Layanan
    </a>
    <a href="#galeri" class="px-4 py-2 rounded-full text-xs font-bold tracking-widest uppercase text-white hover:bg-brand-orange/20 hover:text-brand-orange transition-all duration-300">
        Galeri
    </a>
    <a href="#testimoni" class="px-4 py-2 rounded-full text-xs font-bold tracking-widest uppercase text-white hover:bg-brand-orange/20 hover:text-brand-orange transition-all duration-300">
        Testimoni
    </a>
    <a href="#blog" class="px-4 py-2 rounded-full text-xs font-bold tracking-widest uppercase text-white hover:bg-brand-orange/20 hover:text-brand-orange transition-all duration-300">
        Blog
    </a>
</div>
            <a href="https://wa.me/6285173396705" target="_blank" class="bg-brand-orange text-white px-5 py-2 rounded-full font-semibold hover:bg-yellow-500 transition shadow-lg">
                Hubungi Kami
            </a>
        </div>
    </nav>

    <header 
        class="relative text-brand-cream py-24 px-6 text-center bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('/storage/hero-bg.jpg') }}');"
    >
        <div class="absolute inset-0 bg-brand-brown/80 mix-blend-multiply"></div>

        <div class="container mx-auto max-w-4xl relative z-10">
            <div class="mb-6 flex justify-center">
                <img src="{{ asset('/storage/LogoSolFiladelfia.png') }}" alt="Emblem Fila Delphia" class="w-24 h-24 object-contain rounded-full border-2 border-brand-orange bg-brand-cream p-1 shadow-md">
            </div>
            
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight text-white drop-shadow-lg">
                Restorasi Premium untuk <span class="text-brand-orange">Sepatu & Tas</span> Kesayangan Anda.
            </h1>
            
            <p class="text-lg md:text-xl mb-10 text-gray-200 drop-shadow-md">
                14 Tahun Pengalaman. Kualitas Artisanal. Harga Transparan. Percayakan perawatan barang fashion Anda pada ahlinya di Semarang.
            </p>
            
            <a href="#layanan" class="inline-block bg-brand-orange text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-yellow-500 hover:scale-105 transition-all shadow-xl">
                Lihat Layanan Kami
            </a>
        </div>
    </header>

<section id="layanan" class="py-16 bg-white">
        <div class="container mx-auto px-6" x-data="{ activeTab: '{{ array_key_first($groupedServices->toArray()) }}' }">
            <h2 class="text-4xl font-bold text-center mb-10 text-brand-brown">Katalog Layanan & Harga</h2>

            @if($groupedServices->count() > 0)
                <div class="flex flex-wrap justify-center gap-3 mb-12">
                    @foreach($groupedServices as $category => $services)
                    <button 
                        @click="activeTab = '{{ $category }}'"
                        :class="activeTab === '{{ $category }}' ? 'bg-brand-orange text-white shadow-lg scale-105' : 'bg-brand-cream text-brand-brown hover:bg-orange-200 shadow'"
                        class="px-6 py-3 rounded-full font-bold text-sm transition-all duration-300 border border-transparent"
                    >
                        {{ $category }}
                    </button>
                    @endforeach
                </div>

                <div class="relative">
                    @foreach($groupedServices as $category => $services)
                    <div 
                        x-show="activeTab === '{{ $category }}'" 
                        x-transition:enter="transition ease-out duration-500" 
                        x-transition:enter-start="opacity-0 translate-y-4" 
                        x-transition:enter-end="opacity-100 translate-y-0"
                        style="display: none;" 
                    >
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($services as $service)
                            <div class="bg-brand-cream p-6 rounded-2xl shadow hover:shadow-xl transition border-b-4 border-brand-orange flex flex-col h-full">
                                <h4 class="text-xl font-bold mb-3 text-brand-brown">{{ $service->name }}</h4>
                                <p class="text-sm opacity-80 mb-6 flex-grow text-gray-700 leading-relaxed">{{ $service->description }}</p>
                                <p class="text-xl font-extrabold text-brand-orange mt-auto">Rp {{ number_format($service->price, 0, ',', '.') }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <p class="text-center opacity-50">Katalog layanan sedang diperbarui...</p>
            @endif
        </div>
    </section>

<section id="galeri" class="py-16 bg-brand-cream">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-brand-brown">Galeri Restorasi (Before - After)</h2>
        
        <div class="swiper galeri-swiper">
            <div class="swiper-wrapper">
                @forelse($galleries as $gallery)
                <div class="swiper-slide h-auto">
                    <div class="bg-white p-4 rounded-xl shadow-md h-full">
                        <div class="flex space-x-2 mb-3">
                            <div class="w-1/2 relative">
                                <span class="absolute top-1 left-1 bg-red-500 text-white text-xs px-2 py-1 rounded">Before</span>
                                <img src="{{ asset('storage/' . $gallery->before_image) }}" alt="Before" class="w-full h-40 object-cover rounded-lg border">
                            </div>
                            <div class="w-1/2 relative">
                                <span class="absolute top-1 right-1 bg-green-500 text-white text-xs px-2 py-1 rounded">After</span>
                                <img src="{{ asset('storage/' . $gallery->after_image) }}" alt="After" class="w-full h-40 object-cover rounded-lg border">
                            </div>
                        </div>
                        <h4 class="font-bold text-center">{{ $gallery->title }}</h4>
                        <p class="text-xs text-center text-brand-orange">{{ $gallery->category }}</p>
                    </div>
                </div>
                @empty
                <p class="text-center opacity-50">Belum ada foto galeri ditambahkan.</p>
                @endforelse
            </div>
            <div class="swiper-pagination mt-8"></div>
        </div>
    </div>
</section>

<section id="testimoni" class="py-16 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-brand-brown">Apa Kata Mereka?</h2>
            
            <div class="swiper testimoni-swiper pb-12">
                <div class="swiper-wrapper">
                    @forelse($testimonials as $testi)
                    
                    <div class="swiper-slide !h-auto">
                        
                        <div class="h-full bg-brand-cream p-6 rounded-2xl shadow-md border-l-4 border-brand-orange relative flex flex-col">
                            <div class="absolute -top-4 -left-4 text-4xl text-brand-orange opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            </div>
                            
                            <p class="italic text-sm mb-6 mt-2 flex-grow line-clamp-5">"{{ $testi->message }}"</p>
                            
                            <div class="flex items-center justify-between mt-auto">
                                <h4 class="font-bold text-brand-brown">- {{ $testi->name }}</h4>
                                <div class="flex text-yellow-500 text-sm">
                                    @for($i = 0; $i < $testi->rating; $i++) ★ @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="w-full text-center opacity-50">Belum ada testimoni.</p>
                    @endforelse
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="blog" class="py-16 bg-brand-cream">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-brand-brown">Tips Perawatan & Artikel</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($articles as $article)
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                    @if($article->featured_image)
                    <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                    @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">Tanpa Gambar</div>
                    @endif
                    <div class="p-6">
                        <p class="text-xs text-gray-500 mb-2">{{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}</p>
                        <h3 class="font-bold text-lg mb-3 hover:text-brand-orange transition cursor-pointer"><a href="{{ route('article.show', $article->slug) }}">{{ $article->title }}</a></h3>
                        <p class="text-sm opacity-80 mb-4">{{ \Illuminate\Support\Str::limit(strip_tags($article->content), 100) }}</p>
                        <a href="{{ route('article.show', $article->slug) }}" class="text-brand-orange font-semibold text-sm hover:underline">Baca Selengkapnya →</a>
                    </div>
                </div>
                @empty
                <p class="col-span-full text-center opacity-50">Belum ada artikel edukasi diterbitkan.</p>
                @endforelse
            </div>
            <div class="mt-12 text-center">
                <a href="{{ route('article.index') }}" class="inline-block text-brand-orange font-bold text-lg hover:text-brand-brown transition duration-300 group">
                    Lihat Tips Perawatan & Artikel Lainnya 
                    <span class="inline-block transition-transform duration-300 group-hover:translate-x-2">→</span>
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-brand-brown text-brand-cream py-12 border-t-4 border-brand-orange">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            
            <div class="space-y-4 text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start space-x-3">
                    <span class="text-2xl font-bold tracking-wider text-brand-orange">FILA DELPHIA</span>
                </div>
                <p class="text-sm opacity-90 leading-relaxed">
                    Jl. Kr Rejo Raya, Srondol Wetan, Banyumanik, Kodya Semarang, Jawa Tengah 50264
                </p>
                <p class="text-sm opacity-75">
                    © 2026 Sol Sepatu Fila Delphia Semarang. All rights reserved.
                </p>
            </div>

            <div class="w-full h-48 rounded-xl overflow-hidden shadow-lg border-2 border-brand-orange">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.605335193916!2d110.4208031!3d-7.0555302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70894ca7fb2dbb%3A0xc3e34b17f8a70a31!2sSol%20Sepatu%20Fila%20Delphia!5e0!3m2!1sid!2sid!4v1719532800000!5m2!1sid!2sid" 
                    class="w-full h-full border-0" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            
            // 1. Inisialisasi Swiper Testimoni
            new Swiper('.testimoni-swiper', {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.testimoni-swiper .swiper-pagination', // Fokuskan hanya pada pagination milik testimoni
                    clickable: true,
                },
                breakpoints: {
                    320: { slidesPerView: 1, spaceBetween: 20 },
                    768: { slidesPerView: 3, spaceBetween: 30 }
                }
            });

            // 2. Inisialisasi Swiper Galeri
            new Swiper('.galeri-swiper', {
                loop: true,
                autoplay: {
                    delay: 3500, // Beri jeda sedikit berbeda agar tidak bergeser bersamaan
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.galeri-swiper .swiper-pagination', // Fokuskan hanya pada pagination milik galeri
                    clickable: true,
                },
                breakpoints: {
                    320: { slidesPerView: 1, spaceBetween: 20 },
                    768: { slidesPerView: 2, spaceBetween: 30 },
                    1024: { slidesPerView: 3, spaceBetween: 30 }
                }
            });
            
        });
    </script>
</body>
</html>
</body>
</html>