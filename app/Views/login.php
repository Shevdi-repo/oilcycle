<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OILCYCLE</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <body class="bg-white flex items-center justify-center h-screen">
        <div class="w-[90%] max-w-sm border p-6 rounded-xl shadow-md text-center">
            <h2 class="text-green-700 text-xl font-bold mb-2">Masuk Akun</h2>

            <div class="flex justify-center my-2">
                <!-- Gambar logo (gunakan image kamu sendiri) -->
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="Oil Cycle" class="w-20 h-20">
            </div>

            <h3 class="text-xl font-bold text-green-700">Oil Cycle</h3>
            <p class="text-sm text-gray-600 mb-4">Masuk ke Akun Anda</p>

            <form>
                <div class="text-left mb-2">
                    <label class="block text-sm text-gray-700">No Telepon:</label>
                    <div class="flex items-center bg-green-100 p-2 rounded">
                        <span class="material-icons text-gray-500 mr-2">person</span>
                        <input type="text" placeholder="08xxxxx" class="bg-transparent focus:outline-none w-full">
                    </div>
                </div>

                <div class="text-left mb-4">
                    <label class="block text-sm text-gray-700">Password:</label>
                    <div class="flex items-center bg-green-100 p-2 rounded">
                        <span class="material-icons text-gray-500 mr-2">lock</span>
                        <input type="password" placeholder="Password" class="bg-transparent focus:outline-none w-full">
                    </div>
                </div>

                <button type="submit" class="w-full bg-green-500 text-white font-bold py-2 rounded mb-4">Masuk</button>

                <p class="text-sm text-gray-700 mb-2">Belum punya akun?</p>
                <a href="#" class="block text-center w-full border border-green-500 text-green-600 font-bold py-2 rounded">
                    Daftar Akun
                </a>

            </form>
        </div>

        <!-- Tambahkan Google Material Icons jika ingin ikon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </body>

</html>