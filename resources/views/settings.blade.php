<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        /* .logout{
            position: absolute;
            left: 105vh;
            bottom: 75vh;
            border: 1px solid black;
            padding: 10vh;
            margin: -20vh;

        }
        .logout-btn{
            border: 1px solid red;
        } */
    </style>
    <title>Settings</title>
</head>
<body class="font-roboto bg-gray-100 min-h-screen">
    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-[#26425a] text-white w-1/5 h-screen p-6 sticky top-0 shadow-lg">
            <div class="text-2xl font-bold mb-5 text-center">User Profile</div>
            <nav>
                <ul class="space-y-6">
                    <li class="flex items-center space-x-2 cursor-pointer hover:text-gray-300 transition duration-200">
                        <i class="fas fa-home"></i>
                        <a href="/" class="text-lg">Dashboard</a>
                    </li>
                    <li class="flex items-center space-x-2 cursor-pointer hover:text-gray-300 transition duration-200">
                        <i class="fas fa-user"></i>
                        <a href="/profile" class="text-lg">Profile</a>
                    </li>
                    <li class="flex items-center space-x-2 cursor-pointer hover:text-gray-300 transition duration-200">
                        <i class="fas fa-cogs"></i>
                        <a href="/settings" class="text-lg">Settings</a>
                    </li>
                </ul>
            </nav>
        </div>

        {{-- <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
            <div class="logout-btn">
                <a href="/logout">logout</a>
            </div>
        </div> --}}
        
        <div class="w-4/5 p-8">
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Logout</h2>
                    <p class="text-gray-700">Log off from website</p>
                    <a href="/logout" class="mt-4 inline-block bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition duration-200">
                        Logout
                    </a>
                </div>
            </div>
        </div>

    </div>
</body>
</html>