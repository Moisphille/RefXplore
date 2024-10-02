<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <title>Konsultasi</title>
</head>

<body class="font-roboto bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-[#26425a] text-white w-1/6 h-screen p-6 sticky top-0 shadow-lg">
            <div class="text-2xl mb-5 font-semibold">Konsultasi</div>
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
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Konsultasi dengan Profesional</h1>

            <!-- Consultation Categories -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Pilih Kategori Konsultasi</h2>
                <select class="border border-gray-300 rounded-lg p-2 w-full mb-4">
                    <option value="" disabled selected>Pilih Kategori...</option>
                    <option value="akademik">Akademik</option>
                    <option value="karir">Karir</option>
                    <option value="keterampilan">Keterampilan</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>

            <!-- Consultation Options -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Pilih Metode Konsultasi</h2>
                <div class="flex space-x-4">
                    <button class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition">Jadwalkan Sesi</button>
                    <button class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition">Chat Langsung</button>
                    <button class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition">Konsultasi Teks</button>
                </div>
            </div>

            <!-- Mentor Profiles -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Mentor 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <img src="img/mentor1.png" alt="Mentor 1" class="w-16 h-16 rounded-full mr-4 shadow">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Dr. Ade Yuliana</h2>
                            <p class="text-gray-600">Expert in Public Administration</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Experienced in guiding students through research and public policy strategies. Available for consultation on government reform and digital governance.</p>
                    <button class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition">
                        Hubungi
                    </button>
                </div>

                <!-- Mentor 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <img src="img/mentor2.png" alt="Mentor 2" class="w-16 h-16 rounded-full mr-4 shadow">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Dr. Budi Santoso</h2>
                            <p class="text-gray-600">Business Administration Specialist</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Specializing in corporate governance and financial strategies, Dr. Budi is available to help businesses improve their financial performance and risk management.</p>
                    <button class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition">
                        Hubungi
                    </button>
                </div>

                <!-- Mentor 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <img src="img/mentor3.png" alt="Mentor 3" class="w-16 h-16 rounded-full mr-4 shadow">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Prof. Citra Widjaja</h2>
                            <p class="text-gray-600">Information Technology Advisor</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Prof. Citra is a leading expert in information systems and can assist with software development, cybersecurity, and the digital transformation of organizations.</p>
                    <button class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition">
                        Hubungi
                    </button>
                </div>

            </div>

        </div>
    </div>
</body>

</html>
