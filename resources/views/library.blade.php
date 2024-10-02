<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <title>Library</title>
</head>

<body class="font-roboto bg-gray-100 min-h-screen flex flex-col">

    <div class="flex flex-grow">
        <!-- Sidebar -->
        <div class="bg-[#26425a] text-white w-1/6 h-screen p-6 sticky top-0 shadow-lg">
            <div class="text-2xl mb-5">
                library
            </div>
            <div class="mb-3">
                <div class="bg-[#0b1e48] p-4 text-center mb-2 rounded-lg shadow-md">
                    <span class="text-lg">
                        <img src="img/stiamakassar.png" alt="stia lan makassar" width="141">
                    </span>
                </div>
            </div>
            <nav>
                <ul class="space-y-6">
                    <li class="flex items-center space-x-2 cursor-pointer hover:bg-[#0b1e48] p-2 rounded-lg transition">
                        <i class="fas fa-home"></i>
                        <a href="/" class="hover:text-gray-300">Dashboard</a>
                    </li>
                    <li class="flex items-center space-x-2 cursor-pointer hover:bg-[#0b1e48] p-2 rounded-lg transition">
                        <i class="fas fa-book"></i>
                        <a href="/library" class="hover:text-gray-300">Library</a>
                    </li>
                    <li class="flex items-center space-x-2 cursor-pointer hover:bg-[#0b1e48] p-2 rounded-lg transition">
                        <i class="fas fa-comments"></i>
                        <a href="/forum" class="hover:text-gray-300">Forum</a>
                    </li>
                    <li class="flex items-center space-x-2 cursor-pointer hover:bg-[#0b1e48] p-2 rounded-lg transition">
                        <i class="fas fa-handshake"></i>
                        <a href="/konsultasi" class="hover:text-gray-300">Konsultasi</a>
                    </li>
                    <li class="flex items-center space-x-2 cursor-pointer hover:bg-[#0b1e48] p-2 rounded-lg transition">
                        <i class="fas fa-certificate"></i>
                        <a href="/certification" class="hover:text-gray-300">Certification</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="w-4/5 p-10">
            <h1 class="text-3xl font-bold text-gray-800 mb-10">Referensi Artikel dan Jurnal</h1>

            <!-- Search Bar -->
            <div class="mb-6">
                <input type="text" id="search" onkeyup="filterArticles()" placeholder="Search for articles..." 
                       class="p-2 border border-gray-300 rounded w-full" />
            </div>

            <!-- Administrasi Negara Section -->
            <div class="mb-10" id="articles">
                <h2 class="text-2xl font-semibold text-[#26425a] mb-4">Administrasi Negara</h2>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <ul class="list-disc pl-6 space-y-3">
                        <li>
                            <a href="https://ejournal.warmadewa.ac.id/index.php/public-inspiration/article/view/4311" class="text-blue-500 hover:underline">Pembangunan Administrasi Publik di Indonesia: Tantangan dan Peluang</a> - Jurnal Administrasi Publik
                        </li>
                        <li>
                            <a href="https://journal-stiayappimakassar.ac.id/index.php/srj" class="text-blue-500 hover:underline">Pengaruh Reformasi Birokrasi terhadap Efektivitas Pelayanan Publik</a> - Jurnal Ilmu Pemerintahan
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Perkembangan Good Governance di Indonesia</a> - Jurnal Governance dan Kebijakan Publik
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Peran E-Government dalam Meningkatkan Transparansi Administrasi Negara</a> - Jurnal Teknologi Informasi dan Pemerintahan
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Administrasi Bisnis Section -->
            <div class="mb-10">
                <h2 class="text-2xl font-semibold text-[#26425a] mb-4">Administrasi Bisnis</h2>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <ul class="list-disc pl-6 space-y-3">
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Strategi Bisnis dalam Menghadapi Era Digitalisasi</a> - Jurnal Manajemen Bisnis
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Analisis Keuangan dan Peranannya dalam Keberhasilan Perusahaan</a> - Jurnal Akuntansi dan Keuangan
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Peran Inovasi dalam Meningkatkan Daya Saing Perusahaan</a> - Jurnal Inovasi Bisnis
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Manajemen Risiko dalam Pengambilan Keputusan Bisnis</a> - Jurnal Manajemen Risiko
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Learning Tools Section -->
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Tool Pembelajaran</h1>

            <!-- Learning Tools Management -->
            <div class="mb-10">
                <h2 class="text-2xl font-semibold text-[#26425a] mb-4">Alat Pembelajaran Anda</h2>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <ul class="list-disc pl-6 space-y-3">
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Buat Alat Pembelajaran</a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Lihat Alat yang Disimpan</a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Statistik Penggunaan</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Quizzes Section -->
            <div class="mb-10">
                <h2 class="text-2xl font-semibold text-[#26425a] mb-4">Kuis</h2>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <ul class="list-disc pl-6 space-y-3">
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Kuis: Administrasi Publik dan Reformasi Birokrasi</a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Kuis: Strategi Bisnis Digital</a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Kuis: Manajemen Risiko dalam Pengambilan Keputusan</a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Kuis: Perkembangan Good Governance di Indonesia</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Simulations Section -->
            <div class="mb-10">
                <h2 class="text-2xl font-semibold text-[#26425a] mb-4">Simulasi</h2>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <ul class="list-disc pl-6 space-y-3">
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Simulasi: Pengambilan Keputusan dalam Manajemen Risiko</a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Simulasi: Penyusunan Strategi Bisnis di Era Digital</a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Simulasi: Implementasi Good Governance pada Instansi Publik</a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-500 hover:underline">Simulasi: Evaluasi Efektivitas Reformasi Birokrasi</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <script>
        function filterArticles() {
            const input = document.getElementById('search');
            const filter = input.value.toLowerCase();
            const articles = document.getElementById('articles');
            const items = articles.getElementsByTagName('li');

            for (let i = 0; i < items.length; i++) {
                const a = items[i].getElementsByTagName("a")[0];
                const txtValue = a.textContent || a.innerText;

                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    items[i].style.display = "";
                } else {
                    items[i].style.display = "none";
                }
            }
        }
    </script>

</body>

</html>
