<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }} | Sol Sepatu Fila Delphia</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-brand-cream text-brand-brown antialiased">

    <nav class="bg-brand-brown text-white p-4 sticky top-0 z-50 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold tracking-wider text-brand-orange hover:text-white transition">
                ← KEMBALI KE BERANDA
            </a>
        </div>
    </nav>

    <main class="container mx-auto max-w-4xl px-6 py-12">
        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-xl border-t-8 border-brand-orange">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 text-brand-brown leading-tight">{{ $article->title }}</h1>
            <p class="text-sm text-gray-500 mb-8">Diterbitkan pada: {{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('d F Y') }}</p>

            @if($article->featured_image)
                <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-auto max-h-96 object-cover rounded-xl mb-10 shadow-md">
            @endif

            <article class="prose prose-lg prose-brown max-w-none">
                {!! $article->content !!}
            </article>
            
        </div>
    </main>

    <footer class="bg-brand-brown text-brand-cream py-8 text-center mt-12 border-t-4 border-brand-orange">
        <p>&copy; 2026 Sol Sepatu Fila Delphia Semarang. All rights reserved.</p>
    </footer>

</body>
</html>