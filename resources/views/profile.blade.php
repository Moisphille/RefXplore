<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <title>User Profile</title>
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

        <!-- Main Content -->
        <div class="w-4/5 p-8">
            <h1 class="text-4xl font-bold mb-4 text-[#26425a]">Profile Information</h1>

            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center space-x-4 mb-6">
                    <img src="img/default-avatar.png" alt="User Avatar" class="w-24 h-24 rounded-full border-4 border-indigo-600">
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">John Doe</h2>
                        <p class="text-gray-600">username123</p>
                        <button class="mt-2 text-indigo-600 hover:underline" onclick="document.getElementById('avatar-input').click()">Change Avatar</button>
                        <input type="file" id="avatar-input" class="hidden" accept="image/*" onchange="previewAvatar(event)">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="nim" class="block text-gray-700">NIM</label>
                    <input type="text" id="nim" value="123456789" class="border border-gray-300 p-2 w-full rounded" disabled>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email Address</label>
                    <input type="email" id="email" value="user@example.com" class="border border-gray-300 p-2 w-full rounded" disabled>
                </div>
                <div class="mb-4">
                    <label for="full-name" class="block text-gray-700">Full Name</label>
                    <input type="text" id="full-name" value="John Doe" class="border border-gray-300 p-2 w-full rounded">
                </div>
                <div class="flex space-x-4">
                    <button class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition duration-200">
                        Save Changes
                    </button>
                    <button class="bg-gray-300 text-gray-800 py-2 px-4 rounded-lg hover:bg-gray-400 transition duration-200">
                        Cancel
                    </button>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Security</h2>
                    <p class="text-gray-700">Update your password and enable two-factor authentication.</p>
                    <a href="/security" class="mt-4 inline-block bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition duration-200">
                        Go to Security
                    </a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Notification Settings</h2>
                    <p class="text-gray-700">Manage your email and push notification preferences.</p>
                    <a href="/notification-settings" class="mt-4 inline-block bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition duration-200">
                        Go to Notifications
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewAvatar(event) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function() {
                const img = document.querySelector('img[alt="User Avatar"]');
                img.src = reader.result;
            }

            reader.readAsDataURL(input.files[0]);
        }
    </script>
</body>

</html>
