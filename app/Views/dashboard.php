<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Oil Cycle</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="p-8">
        <h1 class="text-3xl font-bold text-green-800">Selamat Datang di Dashboard!</h1>
        
        <p class="mt-2 text-lg">Halo, 
            <span class="font-semibold"><?= session()->get('username') ?></span>
        </p>

        <div class="mt-6">
            <p>Ini adalah halaman yang dilindungi. Hanya user yang sudah login yang bisa mengakses halaman ini.</p>
        </div>

        <a href="<?= base_url('/logout') ?>" class="mt-8 inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition duration-300">
            Logout
        </a>
    </div>
</body>
</html>