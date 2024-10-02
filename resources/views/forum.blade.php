<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <title>Forum</title>
</head>

<body class="font-roboto bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="bg-[#26425a] text-white w-1/6 h-screen p-6 sticky top-0 flex flex-col">
            <div class="text-2xl font-bold mb-6">
                Forum
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
            <h1 class="text-3xl font-bold text-gray-800 mb-8">Forum Tanya Jawab</h1>

            <!-- Form untuk Mengajukan Pertanyaan -->
            <div class="bg-white p-8 rounded-lg shadow-lg mb-10">
                <h2 class="text-2xl font-semibold mb-6">Ajukan Pertanyaan</h2>
                <form id="questionForm">
                    <div class="mb-4">
                        <input type="text" id="username" placeholder="Nama Anda" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <textarea id="question" placeholder="Pertanyaan Anda" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg transition-all">Kirim</button>
                </form>
            </div>

            <!-- Daftar Pertanyaan dan Jawaban -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-6">Pertanyaan Terbaru</h2>
                <div id="questionList">
                    <!-- Pertanyaan akan muncul di sini -->
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('questionForm').addEventListener('submit', function (event) {
            event.preventDefault();

            const username = document.getElementById('username').value;
            const question = document.getElementById('question').value;

            if (username && question) {
                addQuestion(username, question);
                document.getElementById('username').value = '';
                document.getElementById('question').value = '';
            }
        });

        function addQuestion(username, question) {
            const questionList = document.getElementById('questionList');

            // Membuat elemen untuk menampilkan pertanyaan baru
            const questionItem = document.createElement('div');
            questionItem.classList.add('mb-6', 'p-6', 'border', 'border-gray-300', 'rounded-lg', 'bg-gray-50', 'shadow-md');

            const questionHeader = document.createElement('div');
            questionHeader.classList.add('mb-2', 'font-semibold', 'text-lg', 'text-gray-700');
            questionHeader.textContent = `${username} bertanya:`;

            const questionText = document.createElement('p');
            questionText.classList.add('text-gray-700');
            questionText.textContent = question;

            // Tambahkan Like, Dislike, dan Laporkan
            const interactionContainer = document.createElement('div');
            interactionContainer.classList.add('flex', 'space-x-4', 'mt-4');

            const likeButton = document.createElement('button');
            likeButton.classList.add('text-green-500', 'hover:text-green-700', 'transition');
            likeButton.innerHTML = '<i class="fas fa-thumbs-up"></i> Like';
            let likeCount = 0;
            likeButton.addEventListener('click', () => {
                likeCount++;
                likeButton.innerHTML = `<i class="fas fa-thumbs-up"></i> Like (${likeCount})`;
            });

            const dislikeButton = document.createElement('button');
            dislikeButton.classList.add('text-red-500', 'hover:text-red-700', 'transition');
            dislikeButton.innerHTML = '<i class="fas fa-thumbs-down"></i> Dislike';
            let dislikeCount = 0;
            dislikeButton.addEventListener('click', () => {
                dislikeCount++;
                dislikeButton.innerHTML = `<i class="fas fa-thumbs-down"></i> Dislike (${dislikeCount})`;
            });

            const reportButton = document.createElement('button');
            reportButton.classList.add('text-yellow-500', 'hover:text-yellow-700', 'transition');
            reportButton.innerHTML = '<i class="fas fa-flag"></i> Laporkan';
            reportButton.addEventListener('click', () => {
                reportButton.textContent = 'Dilaporkan';
                reportButton.classList.add('disabled');
            });

            interactionContainer.appendChild(likeButton);
            interactionContainer.appendChild(dislikeButton);
            interactionContainer.appendChild(reportButton);

            questionItem.appendChild(questionHeader);
            questionItem.appendChild(questionText);
            questionItem.appendChild(interactionContainer);

            const answerForm = document.createElement('form');
            answerForm.classList.add('mt-4');

            const answerInput = document.createElement('input');
            answerInput.type = 'text';
            answerInput.placeholder = 'Tulis jawaban Anda...';
            answerInput.classList.add('w-full', 'p-3', 'border', 'border-gray-300', 'rounded-lg', 'mb-3', 'focus:outline-none', 'focus:ring-2', 'focus:ring-green-500');

            const answerButton = document.createElement('button');
            answerButton.type = 'submit';
            answerButton.classList.add('bg-green-500', 'hover:bg-green-600', 'text-white', 'px-4', 'py-2', 'rounded-lg', 'transition-all');
            answerButton.textContent = 'Kirim Jawaban';

            answerForm.appendChild(answerInput);
            answerForm.appendChild(answerButton);

            answerForm.addEventListener('submit', function (event) {
                event.preventDefault();
                if (answerInput.value.trim() !== '') {
                    addAnswer(questionItem, answerInput.value.trim());
                    answerInput.value = '';
                }
            });

            questionItem.appendChild(answerForm);

            questionList.appendChild(questionItem);
        }

        function addAnswer(questionItem, answer) {
            const answerSection = document.createElement('div');
            answerSection.classList.add('mt-4', 'p-4', 'border', 'border-gray-300', 'rounded-lg', 'bg-gray-100');

            const answerText = document.createElement('p');
            answerText.classList.add('text-gray-800');
            answerText.textContent = `Jawaban: ${answer}`;

            answerSection.appendChild(answerText);
            questionItem.appendChild(answerSection);
        }
    </script>
</body>

</html>
