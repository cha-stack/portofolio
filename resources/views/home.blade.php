<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $nama }} — Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Cormorant Garamond', serif; }
    </style>
</head>
<body class="bg-[#FAF5EF] text-[#2B2440]">
{{-- NAVBAR --}}
<nav class="sticky top-0 z-50 bg-[#FAF5EF]/90 backdrop-blur-md border-b border-[#2B2440]/10">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
        <span class="font-display font-bold text-lg">✦ {{ $nama }} Studio</span>

        {{-- Menu desktop --}}
        <div class="hidden sm:flex gap-8 text-sm font-medium">
            <a href="#home" class="hover:text-[#E8785A] transition">Home</a>
            <a href="#about" class="hover:text-[#E8785A] transition">About</a>
            <a href="#education" class="hover:text-[#E8785A] transition">Education</a>
            <a href="#skills" class="hover:text-[#E8785A] transition">Skills</a>
            <a href="#projects" class="hover:text-[#E8785A] transition">Projects</a>
            <a href="#certificates" class="hover:text-[#E8785A] transition">Certificates</a>
            <a href="#contact" class="hover:text-[#E8785A] transition">Contact</a>
        </div>

        {{-- Tombol hamburger (mobile) --}}
        <button id="menuBtn" class="sm:hidden text-[#2B2440]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    {{-- Menu mobile --}}
    <div id="mobileMenu" class="hidden sm:hidden flex-col gap-4 px-6 pb-4 text-sm font-medium">
        <a href="#home" class="block hover:text-[#E8785A]">Home</a>
        <a href="#about" class="block hover:text-[#E8785A]">About</a>
        <a href="#education" class="block hover:text-[#E8785A]">Education</a>
        <a href="#skills" class="block hover:text-[#E8785A]">Skills</a>
        <a href="#projects" class="block hover:text-[#E8785A]">Projects</a>
        <a href="#certificates" class="block hover:text-[#E8785A]">Certificates</a>
        <a href="#contact" class="block hover:text-[#E8785A]">Contact</a>
    </div>
</nav>

<script>
    document.getElementById('menuBtn').addEventListener('click', () => {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
</script>

    {{-- HERO --}}
    <section id="home"class="max-w-6xl mx-auto px-6 py-44">
        <div class="grid sm:grid-cols-5 gap-8 items-start">
            <div class="sm:col-span-3">
                <h1 class="font-display font-bold text-5xl sm:text-5xl leading-[0.95] mb-6">Hello I'm</h1>
                <h2 class="font-display font-bold text-5xl sm:text-8xl leading-[0.95] mb-6">{{ $nama }}</h2>
                <div class="flex flex-wrap gap-6 text-xs text-[#2B2440]/70 border-t border-[#2B2440]/10 pt-4">

                </div>
            </div>

            <div class="sm:col-span-2 relative flex justify-center">
                <div class="w-56 h-56 sm:w-64 sm:h-64 rounded-full bg-gradient-to-br from-[#C9BEEA] to-[#E3B8B0] flex items-center justify-center overflow-hidden">
                    {{-- Ganti sesuai nama file foto kamu di public/images/ --}}
                    <img src="{{ asset('images/aisyah.jpeg') }}" class="w-full h-full object-cover scale-[1.8] object-center">
                </div>
                {{-- STATISTIK --}}
                <div class="absolute -bottom-4 -left-4 sm:-left-10 bg-[#2B2440] text-white rounded-2xl px-6 py-5 shadow-xl">
                    @foreach ($stats as $s)
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT / PROFIL ALA LINKEDIN --}}
    <section id="about" class="max-w-6xl mx-auto px-6 py-44">
          <h1 class="font-display text-5xl font-semibold mb-2 text-center">About me</h1>
        <div class="bg-white rounded-2xl p-8 border border-[#2B2440]/5 grid sm:grid-cols-3 gap-8">
            {{-- BAGIAN about  --}}
            <div class="sm:col-span-3">
                <p class="text-sm text-[#2B2440]/70 leading-relaxed text-justify">{{ $about }}</p>
            </div>
        </div>
    </section>

    {{-- EDUCATION --}}
    <section id="education" class="max-w-6xl mx-auto px-6 pt-20 pb-48">
        <h2 class="font-display text-5xl font-semibold mb-2 text-center">Education</h2>
            <div class="grid md:grid-cols-1 gap-6">
        <!-- Card 1 -->
        <div class="bg-[#F8F6FC] rounded-xl p-6 hover:shadow-lg transition">
            <p class="text-sm text-[#E8785A] font-semibold">2023 - Sekarang</p>

            <h3 class="text-xl font-bold mt-2">
                Universitas Pamulang
            </h3>

            <p class="text-[#2B2440]/70 mt-2">
                S1 Teknik Informatika
            </p>

            <p class="text-sm text-[#2B2440]/60 mt-4">
                Semester 6
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-[#F8F6FC] rounded-xl p-6 hover:shadow-lg transition">
            <p class="text-sm text-[#E8785A] font-semibold">2020 - 2023</p>

            <h3 class="text-xl font-bold mt-2">
                SMK Negeri ...
            </h3>

            <p class="text-[#2B2440]/70 mt-2">
                Teknik Komputer dan Jaringan (TKJ)
            </p>

            <p class="text-sm text-[#2B2440]/60 mt-4">
                Lulus
            </p>
        </div>


    </div>
    </section>

    {{-- SKILLS --}}
    <section id="skills" class="max-w-6xl mx-auto px-6 pt-20">
        <h2 class="font-display text-5xl font-semibold mb-2 text-center">Skills & GPA</h2>
        <div class="grid md:grid-cols-1 gap-6">
        <div class="bg-white rounded-2xl p-8 border border-[#2B2440]/5 grid sm:grid-cols-3 gap-8">
            @foreach ($skills as $skill)
                <div class="bg-[#2B2440]/5 px-4 py-3 rounded-lg text-center">
                    <span class="text-sm font-medium">{{ $skill }}</span>
                </div>
            @endforeach
        </div>

         <div class="bg-[#2B2440] text-white rounded-2xl p-8">
            <h2 class="font-display text-3xl font-semibold mb-1">GPA Development</h2>
            <p class="text-xs text-white/50 mb-6">Grade history per semester</p>
            <canvas id="ipkChart" height="90"></canvas>
        </div>
    </section>


    {{-- PROJECT DARI GITHUB --}}
    <section id="projects" class="max-w-6xl mx-auto px-6 pt-20 pb-28">
        <h2 class="font-display text-5xl font-semibold mb-2 text-center  ">Projects</h2>
        <div class="bg-[#2B2440] text-white rounded-2xl p-9">
              <div class="flex gap-6 overflow-x-auto pb-4">
                
              

        <!-- Project 1 -->
        <div class="bg-[#3A3155] rounded-xl p-5 hover:scale-105 transition duration-300 cursor-pointer min-w-[300px]">
        <!-- Judul -->
        <h3 class="text-l font-semibold text-center mb-4">
            Waerebo tim Zuzur Zanggal
        </h3>

        <!-- Foto -->
        <img
            src="{{ asset('images/waerebo.png') }}"
            alt="Website Warebo tim Zuzur Zanggal"
            class="w-full h-48 object-cover rounded-lg mb-4"
        >

        <!-- Keterangan -->
         <div class="flex justify-center">
          <a href="https://zuzur-zanggal.vercel.app/" class="text-white hover:underline text-justify text-sm">
            Ketuk untuk info selanjutnya</a>
         </div>

    </div>
        <!--project 2-->    
            <div class="bg-[#3A3155] rounded-xl p-5 hover:scale-105 transition duration-300 cursor-pointer min-w-[300px]">
        <!-- Judul -->
        <h3 class="text-l font-semibold text-center mb-4">
            Senita Restoran tim 1
        </h3>

        <!-- Foto -->
        <img
            src="{{ asset('images/senita.png') }}"
            alt="Website Sistem Informasi Senita Restoran"
            class="w-full h-48 object-cover rounded-lg mb-4"
        >

        <!-- Keterangan -->
       <div class="flex justify-center">
        <a href="https://oursrsystem.page.gd/Senita_Rest/costumer/menu.php" class="text-white hover:underline text-justify text-sm">
            Ketuk untuk info selanjutnya</a>
    </div>

    </div>
     <!--project 3-->    
            <div class="bg-[#3A3155] rounded-xl p-5 hover:scale-105 transition duration-300 cursor-pointer min-w-[300px]">
        <!-- Judul -->
        <h3 class="text-l font-semibold text-center mb-4">
            Setting IP di Linux Debian
        </h3>

        <!-- Foto -->
        <img
            src="{{ asset('images/tanaman.png') }}"
            alt="Website Penjualan Tanaman"
            class="w-full h-48 object-cover rounded-lg mb-4"
        >

        <!-- Keterangan -->
         <div class="flex justify-center">
          <a href="https://google.com" class="text-white hover:underline text-justify text-sm">
            Ketuk untuk info selanjutnya</a>
         </div>

    </div>

     <!--project 3-->    
            <div class="bg-[#3A3155] rounded-xl p-5 hover:scale-105 transition duration-300 cursor-pointer min-w-[300px]">
        <!-- Judul -->
        <h3 class="text-l font-semibold text-center mb-4">
            Setting IP di Linux Debian
        </h3>

        <!-- Foto -->
        <img
            src="{{ asset('images/tanaman.png') }}"
            alt="Website Penjualan Tanaman"
            class="w-full h-48 object-cover rounded-lg mb-4"
        >

        <!-- Keterangan -->
         <div class="flex justify-center">
          <a href="https://google.com" class="text-white hover:underline text-justify text-sm">
            Ketuk untuk info selanjutnya</a>
         </div>

    </div>

         <!--project 3-->    
            <div class="bg-[#3A3155] rounded-xl p-5 hover:scale-105 transition duration-300 cursor-pointer min-w-[300px]">
        <!-- Judul -->
        <h3 class="text-l font-semibold text-center mb-4">
            Setting IP di Linux Debian
        </h3>

        <!-- Foto -->
        <img
            src="{{ asset('images/tanaman.png') }}"
            alt="Website Penjualan Tanaman"
            class="w-full h-48 object-cover rounded-lg mb-4"
        >

        <!-- Keterangan -->
         <div class="flex justify-center">
          <a href="https://google.com" class="text-white hover:underline text-justify text-sm">
            Ketuk untuk info selanjutnya</a>
         </div>

    </div>

        </div>
        </div>
        </div>
        
    </section>


{{-- Certificates --}}
<section id="certificates" class="max-w-6xl mx-auto px-6 pt-20 pb-28">
    <h2 class="font-display text-5xl font-semibold mb-2 text-center  ">Certificates</h2>

          <div class="flex gap-6 overflow-x-auto pb-4">
            
          

    <!-- Certificate 1 -->
    <div class="bg-[#3A3155] rounded-xl p-5 hover:scale-105 transition duration-300 cursor-pointer min-w-[300px]">
    <!-- Judul -->
    <h3 class="text-l font-semibold text-center mb-4">
        Sertifikat Data Analyst
    </h3>

    <!-- Foto -->
    <img
        src="{{ asset('images/cert1.png') }}"
        alt="Sertifikat Data Analyst"
        class="w-full h-48 object-cover rounded-lg mb-4"
    >
    <!-- Keterangan -->
     <div class="flex justify-center">
      <a href="#" class="text-white hover:underline text-justify text-sm">
        Ketuk untuk info selanjutnya</a>
     </div>
     
</section>

 {{-- CONTACT + SOCIAL --}}
<section id="contact" class="bg-[#2B2440] text-white">
    {{-- Container utama untuk konten + social media --}}
    <div class="max-w-6xl mx-auto px-6 py-14">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
            <div>
                <h2 class="font-display text-4xl font-semibold mb-2">
                    Let's Create Something Amazing!!!
                </h2>
                <p class="text-white/60 max-w-sm text-sm mb-4">
                    Open to collaborations and new projects. Tell me what you need.
                </p>
                {{-- SOCIAL MEDIA --}}
                <div class="flex gap-4 text-sm">
                    @foreach ($socials as $s)
                        <a href="{{ $s['link'] }}" target="_blank" class="text-white/70 hover:text-[#E8785A]">
                            {{ $s['nama'] }}
                        </a>
                    @endforeach
                </div>
            </div>
            {{-- Bisa ditambah elemen lain di sini jika perlu --}}
        </div>
    </div>

    {{-- COPYRIGHT - PISAHKAN DI BAWAH --}}
    <div class="border-t border-white/10 text-center text-xs text-white/40 py-4">
        &copy; {{ date('Y') }} {{ $nama }}. Dibuat pakai Laravel &amp; Tailwind.
    </div>
</section>


    {{-- SCRIPT GRAFIK IPK --}}
    <script>
        const ipkData = @json($ipk);

        new Chart(document.getElementById('ipkChart'), {
            type: 'line',
            data: {
                labels: ipkData.map(item => item.semester),
                datasets: [{
                    label: 'IPK',
                    data: ipkData.map(item => item.nilai),
                    borderColor: '#E8785A',
                    backgroundColor: 'rgba(232, 120, 90, 0.15)',
                    tension: 0.35,
                    fill: true,
                    pointBackgroundColor: '#E8785A',
                    pointRadius: 4,
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: {
                    y: {
                        min: 0, max: 4,
                        ticks: { color: 'rgba(255,255,255,0.6)' },
                        grid: { color: 'rgba(255,255,255,0.08)' }
                    },
                    x: {
                        ticks: { color: 'rgba(255,255,255,0.6)' },
                        grid: { display: false }
                    }
                }
            }
        });
    </script>

</body>
</html>     