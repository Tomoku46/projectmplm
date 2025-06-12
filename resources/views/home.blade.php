<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>System Information FM - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-bg {
            background: linear-gradient(rgba(30,41,59,0.5),rgba(30,41,59,0.5)), url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="w-full bg-white shadow-sm fixed top-0 left-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 flex items-center justify-between h-16">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('img/sisfo.png') }}" alt="System Information FM Logo" class="h-8 w-8">
                <span class="font-bold text-lg text-gray-900">System Information FM</span>
            </div>
            <div class="flex items-center space-x-6">
                <a href="{{ url('/home') }}" class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1 transition">Home</a>
                <a href="{{ url('/projectdata') }}" class="text-gray-700 hover:text-blue-600 transition">Project Saya</a>
                <a href="{{ url('/tentangkami') }}" class="text-gray-700 hover:text-blue-600 transition">Tentang Pengembang</a>
                <a href="{{ url('/login') }}" class="px-4 py-1 rounded bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg w-full h-[420px] flex items-center justify-center relative pt-16">
        <div class="max-w-3xl mx-auto text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Be Ready for System Information FM</h1>
            <p class="text-lg md:text-xl mb-8 drop-shadow">Membantu Praktisi & Dunia Energi Ekonomi Lebih Terukur untuk Mengoptimalkan Keuntungan, Mengelola Risiko, dan Mendukung Pengambilan Keputusan.</p>
            <a href="{{ url('/projectdata') }}" class="inline-block px-8 py-3 bg-blue-600 rounded-lg font-semibold text-white shadow hover:bg-blue-700 transition">Get Started</a>
        </div>
    </section>

    <!-- Info Section -->
    <section class="w-full bg-white py-14">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center gap-10">
            <div class="flex-1 space-y-4">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Hitung Ekonomi, Hasilkan Keuntungan!</h2>
                <p class="text-gray-600 mb-4">Lakukan Simulasi Ekonomi di System Information FM, Sistem Terbaik untuk analisis keekonomian lapangan migas Anda.</p>
                <div class="flex flex-col gap-3">
                    <div class="flex items-start gap-3">
                        <span class="mt-1 text-blue-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <div>
                            <span class="font-semibold text-gray-800">Ingat Data</span>
                            <p class="text-gray-500 text-sm">Data project Anda tersimpan aman dan mudah diakses kapan saja.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="mt-1 text-blue-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12l2 2 4-4"/>
                            </svg>
                        </span>
                        <div>
                            <span class="font-semibold text-gray-800">Hitung</span>
                            <p class="text-gray-500 text-sm">Simulasi keekonomian otomatis, cepat, dan akurat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 flex justify-center">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" alt="Laptop" class="rounded-xl shadow-lg w-full max-w-xs md:max-w-sm">
            </div>
        </div>
    </section>

    <!-- Fitur Section -->
    <section id="fitur" class="w-full py-14 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-gray-900 mb-10">Keunggulan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                    <svg class="w-10 h-10 mb-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 014-4h3m4 0a4 4 0 00-4-4H7a4 4 0 00-4 4v4a4 4 0 004 4h1"/>
                    </svg>
                    <h3 class="font-semibold text-lg mb-2">Analisa Keekonomian</h3>
                    <p class="text-gray-500 text-sm">Simulasi keekonomian lapangan migas dengan berbagai parameter.</p>
                </div>
                <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                    <svg class="w-10 h-10 mb-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v4a1 1 0 001 1h3m10 0h3a1 1 0 001-1V7m-1 4V7a1 1 0 00-1-1h-3m-4 0H7a1 1 0 00-1 1v4"/>
                    </svg>
                    <h3 class="font-semibold text-lg mb-2">Data Terpusat</h3>
                    <p class="text-gray-500 text-sm">Semua data project Anda tersimpan rapi dan terpusat.</p>
                </div>
                <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                    <svg class="w-10 h-10 mb-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m0 0v6m0-6h-6"/>
                    </svg>
                    <h3 class="font-semibold text-lg mb-2">Perhitungan Pajak</h3>
                    <p class="text-gray-500 text-sm">Dapatkan perhitungan pajak otomatis sesuai regulasi terbaru.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                    <svg class="w-10 h-10 mb-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 6h18M3 14h18M3 18h18"/>
                    </svg>
                    <h3 class="font-semibold text-lg mb-2">Area Kas Bersih</h3>
                    <p class="text-gray-500 text-sm">Visualisasi arus kas bersih untuk analisa mendalam.</p>
                </div>
                <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                    <svg class="w-10 h-10 mb-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12l2 2 4-4"/>
                    </svg>
                    <h3 class="font-semibold text-lg mb-2">Visualisasi Data</h3>
                    <p class="text-gray-500 text-sm">Grafik dan chart interaktif untuk insight yang lebih baik.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t mt-16">
        <div class="max-w-7xl mx-auto px-4 py-10 flex flex-col md:flex-row justify-between items-center gap-6">
            <div>
                <div class="flex items-center space-x-2 mb-2">
                    <img src="{{ asset('img/sisfo.png') }}" alt="System Information FM Logo" class="h-7 w-7">
                    <span class="font-bold text-lg text-gray-900">System Information FM</span>
                </div>
                <div class="text-gray-500 text-sm">© {{ date('Y') }} System Information FM. All rights reserved.</div>
            </div>
            <div class="flex flex-col md:flex-row gap-4 items-center">
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-blue-600 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.58-2.47.69a4.3 4.3 0 001.88-2.37 8.59 8.59 0 01-2.72 1.04A4.28 4.28 0 0016.11 4c-2.37 0-4.29 1.92-4.29 4.29 0 .34.04.67.11.99C7.69 9.13 4.07 7.38 1.64 4.68c-.37.64-.58 1.38-.58 2.17 0 1.5.76 2.82 1.92 3.6a4.27 4.27 0 01-1.94-.54v.05c0 2.1 1.5 3.85 3.5 4.25-.36.1-.74.16-1.13.16-.28 0-.54-.03-.8-.08.54 1.7 2.1 2.94 3.95 2.97A8.6 8.6 0 012 19.54a12.13 12.13 0 006.56 1.92c7.88 0 12.2-6.53 12.2-12.2 0-.19 0-.39-.01-.58A8.7 8.7 0 0024 4.59a8.49 8.49 0 01-2.54.7z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-600 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.41 3.6 8.07 8.19 8.93.6.11.82-.26.82-.58v-2.03c-3.34.73-4.04-1.61-4.04-1.61-.54-1.37-1.32-1.74-1.32-1.74-1.08-.74.08-.73.08-.73 1.2.08 1.83 1.23 1.83 1.23 1.07 1.83 2.8 1.3 3.49.99.11-.78.42-1.3.76-1.6-2.67-.3-5.47-1.34-5.47-5.97 0-1.32.47-2.4 1.23-3.25-.12-.3-.53-1.52.12-3.16 0 0 1-.32 3.3 1.23a11.5 11.5 0 016 0c2.3-1.55 3.3-1.23 3.3-1.23.65 1.64.24 2.86.12 3.16.77.85 1.23 1.93 1.23 3.25 0 4.64-2.8 5.67-5.47 5.97.43.37.81 1.1.81 2.22v3.29c0 .32.22.7.83.58C20.36 20.07 24 16.41 24 12c0-5.5-4.46-9.96-9.96-9.96z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-600 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M21.54 7.2c-.13-.47-.52-.82-.99-.89-1.13-.17-2.27-.26-3.41-.26s-2.28.09-3.41.26c-.47.07-.86.42-.99.89-.13.47-.2.96-.2 1.45v6.7c0 .49.07.98.2 1.45.13.47.52.82.99.89 1.13.17 2.27.26 3.41.26s2.28-.09 3.41-.26c.47-.07.86-.42.99-.89.13-.47.2-.96.2-1.45v-6.7c0-.49-.07-.98-.2-1.45zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5zm0-5.5a2 2 0 100 4 2 2 0 000-4z"/></svg>
                    </a>
                </div>
                <div class="flex space-x-4 text-sm text-gray-500">
                    <a href="#" class="hover:text-blue-600 transition">Home</a>
                    <a href="#" class="hover:text-blue-600 transition">Fitur</a>
                    <a href="#" class="hover:text-blue-600 transition">Kontak</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>