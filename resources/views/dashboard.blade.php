<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <title>Dashboard</title>
    <style>
        .highlight {
            background-color: yellow;
            color: black;
        }
        #calendar {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
    <!-- Tambahkan FullCalendar CSS dan JS -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js'></script>
</head>

<body class="font-roboto bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-[#26425a] text-white w-1/6 h-screen p-6 sticky top-0 shadow-lg">
            <div class="text-2xl mb-5 font-bold tracking-wide">
                RefXplore
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
        <div class="w-5/6 p-10">
            <!-- Header Section -->
            <header class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Good Morning,</h1>
                    <p class="text-lg text-gray-500">Look at Agenda and Reminder Today</p>
                </div>
                <div class="bg-[#3e515e] text-white p-4 rounded-lg flex items-center space-x-4 shadow-md">
                    <img src="https://via.placeholder.com/50" alt="Profile" class="w-12 h-12 rounded-full">
                    <div>
                        <p class="text-lg font-semibold">John Thor</p>
                        <p class="text-sm">Undergraduate Student</p>
                        <a href="/profile" class="text-pink-300 hover:text-pink-400">View Profile</a>
                    </div>
                    <span class="text-lg">15334050</span>
                </div>
            </header>

            <!-- Kalender untuk Jadwal -->
            <div class="bg-white p-8 rounded-lg shadow-md mb-10">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Kalender Agenda</h2>
                <div id="calendar"></div>
            </div>

            <!-- Form untuk Menambahkan Agenda -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-10">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Tambahkan Agenda atau Jadwal Kuliah</h2>
                <form id="agendaForm">
                    <div class="mb-4">
                        <input type="text" id="eventTitle" placeholder="Nama Agenda" class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <input type="date" id="eventDate" class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg transition-all shadow-lg">Tambah Agenda</button>
                </form>
            </div>

            <!-- Incoming Class & Activities -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Incoming Class & Activities</h2>
                <div id="upcomingEvents" class="space-y-4">
                    <!-- Event yang akan datang akan muncul di sini -->
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [], // Ini akan diisi oleh form di bawah
                headerToolbar: {
                    left: '',
                    center: 'title',
                    right: 'prev,next'
                },
                height: 'auto', // Supaya kalender lebih minimalis
                contentHeight: 400,
                themeSystem: 'standard'
            });

            calendar.render();

            // Handle form submission untuk menambahkan event
            document.getElementById('agendaForm').addEventListener('submit', function (event) {
                event.preventDefault();

                const eventTitle = document.getElementById('eventTitle').value;
                const eventDate = document.getElementById('eventDate').value;

                if (eventTitle && eventDate) {
                    // Tambahkan event ke kalender
                    calendar.addEvent({
                        title: eventTitle,
                        start: eventDate,
                        allDay: true
                    });

                    // Tampilkan juga di Incoming Class & Activities
                    const upcomingEvents = document.getElementById('upcomingEvents');
                    const eventItem = document.createElement('div');
                    eventItem.classList.add('p-4', 'border', 'border-gray-300', 'rounded-lg', 'bg-gray-50', 'shadow-sm');
                    eventItem.textContent = `Class: ${eventTitle} - ${eventDate}`;
                    upcomingEvents.appendChild(eventItem);

                    // Bersihkan form setelah submit
                    document.getElementById('eventTitle').value = '';
                    document.getElementById('eventDate').value = '';
                }
            });
        });
    </script>
</body>

</html>
