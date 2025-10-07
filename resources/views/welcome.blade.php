<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio | Raynor Sagraha</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

  <style>
    body {
      background-color: #f7faff;
      font-family: 'Inter', sans-serif;
      scroll-behavior: smooth;
    }
  </style>
</head>

<body class="text-gray-800">

  <!-- 🌐 Navbar -->
  <nav class="fixed top-0 w-full bg-white/80 backdrop-blur-md shadow z-50">
    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
      <h1 class="text-xl font-bold text-blue-600 flex items-center gap-2">
        <i data-lucide="user"></i> Raynor Sagraha
      </h1>
      <ul class="flex space-x-6 text-sm">
        <li><a href="#about" class="hover:text-blue-500 flex items-center gap-1"><i data-lucide="user"></i> Tentang</a></li>
        <li><a href="#experience" class="hover:text-blue-500 flex items-center gap-1"><i data-lucide="briefcase"></i> Pengalaman</a></li>
        <li><a href="#education" class="hover:text-blue-500 flex items-center gap-1"><i data-lucide="book"></i> Pendidikan</a></li>
        <li><a href="#skills" class="hover:text-blue-500 flex items-center gap-1"><i data-lucide="sparkles"></i> Keahlian</a></li>
        <li><a href="#projects" class="hover:text-blue-500 flex items-center gap-1"><i data-lucide="code-2"></i> Proyek</a></li>
        <li><a href="#contact" class="hover:text-blue-500 flex items-center gap-1"><i data-lucide="mail"></i> Kontak</a></li>
      </ul>
    </div>
  </nav>

  <!-- 🧑‍💻 Hero -->
  <section class="pt-32 pb-20 text-center bg-gradient-to-b from-blue-50 to-white">
    <img src="{{ asset('images/Gundam.jpg') }}" alt="Foto Raynor"
         class="w-44 h-44 rounded-full mx-auto border-4 border-blue-200 shadow-lg mb-6 hover:scale-105 transition-transform duration-500" data-aos="zoom-in">
    <h2 class="text-4xl font-extrabold text-blue-700" data-aos="fade-up">Raynor Sagraha</h2>
    <p class="text-gray-600 mt-2" data-aos="fade-up" data-aos-delay="100">Mahasiswa Sistem Informasi | Universitas Binadarma | Calon Data Analis</p>
    <div class="mt-5" data-aos="fade-up" data-aos-delay="200">
      <a href="#projects" class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition-all shadow-lg">Lihat Portofolio</a>
    </div>
  </section>

  <!-- 🧭 Tentang Saya -->
  <section id="about" class="max-w-5xl mx-auto p-8" data-aos="fade-up">
    <h3 class="text-2xl font-semibold text-blue-700 mb-4 flex items-center gap-2"><i data-lucide="user-circle"></i> Tentang Saya</h3>
    <p class="leading-relaxed text-gray-700">
      Saya adalah mahasiswa Sistem Informasi yang bersemangat dalam bidang teknologi, desain, dan pengembangan sistem.
      Saya senang menggabungkan kreativitas dan logika untuk menciptakan solusi digital yang fungsional dan menarik.
      Fokus saya saat ini adalah pada desain UI/UX, data analisis, pengembangan web, serta keamanan informasi.
    </p>
  </section>

  <!-- 💼 Pengalaman -->
  <section id="experience" class="max-w-5xl mx-auto bg-white shadow rounded-2xl p-8 mb-8 border border-blue-100" data-aos="fade-up">
    <h3 class="text-2xl font-semibold text-blue-700 mb-4 flex items-center gap-2"><i data-lucide="briefcase"></i> Pengalaman Kerja</h3>
    <div>
      <p class="font-medium">Magang Dinas Pariwisata Kota Palembang <span class="text-gray-500">| Feb–Jun 2025</span></p>
      <ul class="list-disc ml-6 mt-2 space-y-1 text-gray-700">
        <li>Merancang dan membuat surat resmi pemerintahan.</li>
        <li>Mengelola pengarsipan dan distribusi surat.</li>
        <li>Berkolaborasi dengan tim dalam pelaporan kegiatan pariwisata.</li>
      </ul>
    </div>
  </section>

  <!-- 🎓 Pendidikan -->
  <section id="education" class="max-w-5xl mx-auto bg-white shadow rounded-2xl p-8 mb-8 border border-blue-100" data-aos="fade-up">
    <h3 class="text-2xl font-semibold text-blue-700 mb-4 flex items-center gap-2"><i data-lucide="book"></i> Pendidikan</h3>
    <p><strong>Universitas Binadarma</strong> – S1 Sistem Informasi <span class="text-gray-500">| 2022–2026</span></p>
  </section>

  <!-- 🧠 Keahlian -->
  <section id="skills" class="max-w-5xl mx-auto bg-white shadow rounded-2xl p-8 mb-8 border border-blue-100" data-aos="fade-up">
    <h3 class="text-2xl font-semibold text-blue-700 mb-4 flex items-center gap-2"><i data-lucide="sparkles"></i> Keahlian</h3>
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 text-gray-700">
      <p>Public Speaking</p>
      <p>Analisis Sistem</p>
      <p>Bahasa Inggris</p>
      <p>UI/UX Design</p>
      <p>Project Management</p>
      <p>Cybersecurity</p>
    </div>
  </section>

  <!-- 🧩 Proyek Portofolio -->
  <section id="projects" class="max-w-6xl mx-auto p-8" data-aos="fade-up">
    <h3 class="text-2xl font-semibold text-blue-700 mb-6 text-center flex justify-center items-center gap-2"><i data-lucide="code-2"></i> Proyek Saya</h3>
    <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-6">
      <!-- Project 1 -->
      <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2 duration-300">
        <img src="{{ asset('images/project1.jpg') }}" alt="SIPAKAR" class="w-full h-48 object-cover">
        <div class="p-4">
          <h4 class="text-lg font-bold text-blue-700 flex items-center gap-2"><i data-lucide="car"></i> SIPAKAR</h4>
          <p class="text-gray-600 text-sm mt-1">Sistem parkir cerdas berbasis AI dan sensor IoT untuk smart campus.</p>
          <a href="#" class="text-blue-500 text-sm hover:underline mt-2 inline-block">Lihat Detail</a>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2 duration-300">
        <img src="{{ asset('images/project2.jpg') }}" alt="UKM Mie Ayam" class="w-full h-48 object-cover">
        <div class="p-4">
          <h4 class="text-lg font-bold text-blue-700 flex items-center gap-2"><i data-lucide="layout-dashboard"></i> Website UKM Mie Ayam</h4>
          <p class="text-gray-600 text-sm mt-1">Sistem informasi pemesanan dan manajemen stok bahan baku.</p>
          <a href="#" class="text-blue-500 text-sm hover:underline mt-2 inline-block">Lihat Detail</a>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2 duration-300">
        <img src="{{ asset('images/project3.jpg') }}" alt="Analisis Keamanan" class="w-full h-48 object-cover">
        <div class="p-4">
          <h4 class="text-lg font-bold text-blue-700 flex items-center gap-2"><i data-lucide="shield-check"></i> Analisis Risiko Keamanan</h4>
          <p class="text-gray-600 text-sm mt-1">Analisis risiko keamanan sistem informasi berbasis ISO 27005.</p>
          <a href="#" class="text-blue-500 text-sm hover:underline mt-2 inline-block">Lihat Detail</a>
        </div>
      </div>
    </div>
  </section>

  <!-- 📬 Kontak -->
  <section id="contact" class="max-w-5xl mx-auto bg-blue-50 rounded-2xl p-8 mt-8 mb-12 text-center" data-aos="fade-up">
    <h3 class="text-2xl font-semibold text-blue-700 mb-4 flex justify-center items-center gap-2"><i data-lucide="mail"></i> Hubungi Saya</h3>
    <p class="text-gray-700 mb-4">Saya terbuka untuk kolaborasi dan peluang kerja sama profesional.</p>
    <p><strong>Email:</strong> <a href="mailto:Renoldbkl@gmail.com" class="text-blue-600 hover:underline">Renoldbkl@gmail.com</a></p>
    <p><strong>Telepon:</strong> <span class="text-gray-800">+62 8964 4886 667</span></p>
  </section>

  <!-- 🔻 Footer -->
  <footer class="text-center text-gray-500 text-sm py-6 bg-white border-t">
    &copy; 2025 Raynor Sagraha — Dibuat dengan Laravel 10, TailwindCSS & Lucide.
  </footer>

  <!-- Initialize Icons & Animations -->
  <script>
    lucide.createIcons();
    AOS.init({ duration: 800, once: true });
  </script>
</body>
</html>
