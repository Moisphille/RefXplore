<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <title>Certification</title>
</head>

<body class="font-roboto bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-[#26425a] text-white w-1/6 h-screen p-6 sticky top-0 shadow-lg">
            <div class="text-2xl mb-5">
                Certification
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
        <div class="w-5/6 p-6">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Pencapaian dan Sertifikasi</h1>
            <p class="text-gray-700 mb-4">Kami mengakui dan memberikan sertifikat atas penyelesaian kursus atau pencapaian tertentu kepada mahasiswa. Sertifikat ini akan meningkatkan kredibilitas dan nilai profesional Anda.</p>

            <!-- Achievement Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:shadow-xl">
                <h2 class="text-xl font-semibold mb-4">Daftar Pencapaian</h2>
                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li>Menjadi peserta terbaik dalam kursus Manajemen Proyek.</li>
                    <li>Menyelesaikan pelatihan Kepemimpinan dan Etika Bisnis.</li>
                    <li>Mendapatkan sertifikat keahlian dalam Pengembangan Web.</li>
                    <li>Berpartisipasi dalam kompetisi nasional dan memenangkan juara kedua.</li>
                </ul>
            </div>

            <!-- Certification Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg mt-6 transition-transform duration-300 hover:shadow-xl">
                <h2 class="text-xl font-semibold mb-4">Sertifikat yang Diberikan</h2>
                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li>Sertifikat Penyelesaian Kursus Manajemen Proyek.</li>
                    <li>Sertifikat Pelatihan Kepemimpinan.</li>
                    <li>Sertifikat Keahlian Pengembangan Web.</li>
                    <li>Sertifikat Partisipasi dalam Kompetisi Nasional.</li>
                </ul>
                <button class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 mt-4 transition duration-200">
                    Unduh Sertifikat
                </button>
            </div>
        </div>
    </div>
</body>

</html>
