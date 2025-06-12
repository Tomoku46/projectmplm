<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - System Information FM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navbar -->
    <nav class="w-full bg-white shadow-sm fixed top-0 left-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 flex items-center justify-between h-16">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('img/sisfo.png') }}" alt="System Information FM Logo" class="h-8 w-8">
                <span class="font-bold text-lg text-gray-900">System Information FM</span>
            </div>
            <div class="flex items-center space-x-6">
                <a href="{{ url('/home') }}" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                <a href="{{ url('/projectdata') }}" class="text-gray-700 hover:text-blue-600 transition">Project Saya</a>
                <a href="{{ url('/tentangkami') }}"
                   class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1 transition">
                   Tentang Pengembang
                </a>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class="w-full bg-gradient-to-r from-blue-50 to-purple-50 py-12 mb-8 pt-24">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Tentang Tim Kami</h1>
            <p class="text-gray-600 text-lg">Kami adalah tim pengembang System Information FM yang berdedikasi untuk memberikan solusi terbaik di bidang ekonomi migas.</p>
        </div>
    </section>

    <!-- Team Section -->
    <section class="max-w-5xl mx-auto px-4 pb-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Anggota 1 -->
            <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center hover:shadow-lg transition">
                <img src="{{ asset('img/bewok.png') }}" alt="Foto Anggota 1" class="w-28 h-28 rounded-full object-cover mb-4 border-4 border-blue-100 shadow">
                <h2 class="text-xl font-semibold text-gray-900 mb-1">M Iqbal Ramadhan</h2>
                <p class="text-blue-600 font-medium mb-1">UI/UX Designer</p>
                <p class="text-gray-500 text-sm mb-2">NIM: 124220133</p>
                <p class="text-gray-600 text-center text-sm">Bertanggung jawab atas perancangan prototype dari sistem yang ingin dibangun</p>
            </div>
            <!-- Anggota 2 -->
            <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center hover:shadow-lg transition">
                <img src="{{ asset('img/tomo.jpg') }}" alt="Foto Anggota 2" class="w-28 h-28 rounded-full object-cover mb-4 border-4 border-blue-100 shadow">
                <h2 class="text-xl font-semibold text-gray-900 mb-1">Dafa Bagus U</h2>
                <p class="text-purple-600 font-medium mb-1">Frontend Developer</p>
                <p class="text-gray-500 text-sm mb-2">NIM: 124220134</p>
                <p class="text-gray-600 text-center text-sm">Bertugas pada desain antarmuka, pengalaman pengguna, dan implementasi tampilan sistem.</p>
            </div>
            <!-- Anggota 3 -->
            <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center hover:shadow-lg transition">
                <img src="{{ asset('img/lutpi3.png') }}" alt="Foto Anggota 3" class="w-28 h-28 rounded-full object-cover mb-4 border-4 border-blue-100 shadow">
                <h2 class="text-xl font-semibold text-gray-900 mb-1">Nama Anggota 3</h2>
                <p class="text-pink-600 font-medium mb-1">Backend Developer</p>
                <p class="text-gray-500 text-sm mb-2">NIM: 124220140</p>
                <p class="text-gray-600 text-center text-sm">Mengembangkan dan mengelola logika, dan database untuk mendukung kebutuhan aplikasi.</p>
            </div>
        </div>
    </section>

    <!-- Footer (sama seperti home) -->
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