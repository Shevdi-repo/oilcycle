<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OILCYCLE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-white flex items-center justify-center h-screen">

    <div class="w-[90%] max-w-sm border p-6 rounded-xl shadow-md text-center">
        <h2 class="text-green-700 text-xl font-bold mb-2">Masuk Akun</h2>

        <div class="flex justify-center my-2">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="Oil Cycle" class="w-20 h-20">
        </div>

        <h3 class="text-xl font-bold text-green-700">Oil Cycle</h3>
        <p class="text-sm text-gray-600 mb-4">Masuk ke Akun Anda</p>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-sm">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php elseif (session()->getFlashdata('error')): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/login/process') ?>" method="post">

            <?= csrf_field() ?>

            <div class="text-left mb-2">
                <label class="block text-sm text-gray-700">No Telepon:</label>
                <div class="flex items-center bg-green-100 p-2 rounded">
                    <span class="material-icons text-gray-500 mr-2">person</span>
                    <input type="text" name="nomorHp" placeholder="08xxxxx" class="bg-transparent focus:outline-none w-full" required>
                </div>
            </div>

            <div class="text-left mb-4">
                <label class="block text-sm text-gray-700">Password:</label>
                <div class="flex items-center bg-green-100 p-2 rounded">
                    <span class="material-icons text-gray-500 mr-2">lock</span>
                    <input type="password" name="password" placeholder="Password" class="bg-transparent focus:outline-none w-full" required>
                </div>
            </div>

            <button type="submit" class="w-full bg-lime-400 hover:bg-lime-500 text-green-900 font-bold py-2 rounded mb-4 transition duration-300">Masuk</button>

            <p class="text-sm text-gray-700 mb-2">Belum punya akun?</p>
            <a href="<?= base_url('/register') ?>" class="block text-center w-full border border-green-500 text-green-600 font-bold py-2 rounded hover:bg-green-50">
                Daftar Akun
            </a>
        </form> </div>

</body>
</html>