<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulan Artikel & Tips Perawatan - FILADELPHIA</title>
    
    @vite('resources/css/app.css')
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-brand-cream text-brand-brown antialiased flex flex-col min-h-screen">

    <!-- NAVBAR (Sama dengan Welcome, tapi link diarahkan ke '/') -->
    <nav class="bg-brand-brown text-white p-4 sticky top-0 z-50 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="flex items-center space-x-3">
                <img src="{{ asset('/storage/LogoSolFiladelfia.png') }}" alt="Logo Fila Delphia" class="h-10 w-auto object-contain">
                <span class="text-xl font-bold tracking-wider text-brand-orange hidden sm:inline-block">FILA DELPHIA</span>
            </a>
            <div class="hidden md:flex space-x-6">
                <!-- Tambahkan tanda / di depan # agar bisa kembali ke home -->
                <a href="/#layanan" class="hover:text-brand-orange transition">Layanan</a>
                <a href="/#galeri" class="hover:text-brand-orange transition">Galeri</a>
                <a href="/#testimoni" class="hover:text-brand-orange transition">Testimoni</a>
                <a href="{{ route('article.index') }}" class="text-brand-orange font-bold">Blog</a>
            </div>
            <a href="https://wa.me/6285173396705" target="_blank" class="bg-brand-orange text-white px-5 py-2 rounded-full font-semibold hover:bg-yellow-500 transition shadow-lg">
                Hubungi Kami
            </a>
        </div>
    </nav>

    <!-- KONTEN UTAMA HALAMAN ARTIKEL -->
    <main class="flex-grow py-16 bg-white">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-brand-brown mb-4">Tips Perawatan & Artikel Fila Delphia</h1>
                <p class="text-gray-600">Pelajari cara merawat sepatu dan tas kesayangan Anda agar awet bertahun-tahun.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($articles as $article)
                <div class="bg-brand-cream rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition border-b-4 border-transparent hover:border-brand-orange">
                    @if($article->featured_image)
                    <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-56 object-cover">
                    @else
                    <div class="w-full h-56 bg-gray-200 flex items-center justify-center text-gray-500">Tanpa Gambar</div>
                    @endif
                    <div class="p-6">
                        <p class="text-xs text-brand-orange font-semibold mb-2">
                            {{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}
                        </p>
                        <h3 class="font-bold text-xl mb-3 hover:text-brand-orange transition cursor-pointer leading-tight">
                            <a href="{{ route('article.show', $article->slug) }}">{{ $article->title }}</a>
                        </h3>
                        <p class="text-sm opacity-80 mb-4">{{ \Illuminate\Support\Str::limit(strip_tags($article->content), 120) }}</p>
                        <a href="{{ route('article.show', $article->slug) }}" class="text-brand-brown font-bold text-sm hover:text-brand-orange transition flex items-center gap-1">
                            Baca Selengkapnya <span>→</span>
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-xl opacity-50 mb-4">Belum ada artikel yang diterbitkan saat ini.</p>
                    <a href="/" class="text-brand-orange font-bold hover:underline">← Kembali ke Halaman Utama</a>
                </div>
                @endforelse
            </div>

            <!-- Pagination (Tombol Next/Prev) -->
            <div class="mt-16 flex justify-center">
                {{ $articles->links() }}
            </div>
        </div>
    </main>

    <!-- FOOTER (Sama Persis dengan Welcome) -->
    <footer class="bg-brand-brown text-brand-cream py-12 border-t-4 border-brand-orange mt-auto">
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
                    class="w-full h-full border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </footer>

</body>
</html>