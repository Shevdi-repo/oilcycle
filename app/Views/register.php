<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Oil Cycle</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Menambahkan style khusus untuk placeholder agar mirip dengan desain */
        ::placeholder {
            color: #9CA3AF; /* gray-400 */
            opacity: 1; 
        }
    </style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-sm bg-white p-8 rounded-lg shadow-md">
        
        <h1 class="text-2xl font-bold text-center text-green-800 mb-8">Daftar Akun</h1>

        <?php if(session()->getFlashdata('errors')): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Terjadi Kesalahan!</strong>
                <ul>
                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/register/process') ?>" method="post">
            
            <?= csrf_field() ?>

            <div class="mb-4">
                <label class="block text-green-800 text-sm font-semibold mb-2" for="nama">
                    Nama:
                </label>
                <input class="w-full p-3 bg-lime-100 border border-lime-200 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-lime-500" id="nama" name="nama" type="text" placeholder="Tuliskan nama lengkap anda" value="<?= old('nama') ?>" required>
            </div>

            <div class="mb-4">
                <label class="block text-green-800 text-sm font-semibold mb-2" for="nomorHp">
                    No Telepon:
                </label>
                <input class="w-full p-3 bg-lime-100 border border-lime-200 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-lime-500" id="nomorHp" name="nomorHp" type="tel" placeholder="Tuliskan nomer telepon anda" value="<?= old('no_telepon') ?>" required>
            </div>

            <div class="mb-4">
                <label class="block text-green-800 text-sm font-semibold mb-2" for="password">
                    Password:
                </label>
                <div class="relative">
                    <input class="w-full p-3 bg-lime-100 border border-lime-200 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-lime-500" id="password" name="password" type="password" placeholder="Tuliskan password Anda" required>
                    </div>
            </div>

            <!-- <div class="mb-4">
                <label class="block text-green-800 text-sm font-semibold mb-2" for="email">
                    Email:
                </label>
                <input class="w-full p-3 bg-lime-100 border border-lime-200 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-lime-500" id="email" name="email" type="email" placeholder="Tuliskan email Anda" value="<?= old('email') ?>" required>
            </div> -->

            <div class="mb-6">
                <label class="block text-green-800 text-sm font-semibold mb-2" for="alamat">
                    Alamat:
                </label>
                <textarea class="w-full p-3 bg-lime-100 border border-lime-200 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-lime-500" id="alamat" name="alamat" rows="3" placeholder="Tuliskan alamat rumah Anda" required><?= old('alamat') ?></textarea>
            </div>

            <div class="mb-6">
                <h2 class="text-md font-bold text-center text-green-800 mb-2">Syarat & Ketentuan</h2>
                <ol class="list-decimal list-inside text-xs text-gray-600 space-y-1">
                    <li>Pengguna wajib memberikan informasi yang akurat dan lengkap.</li>
                    <li>Pengguna bertanggung jawab atas aktivitas yang dilakukan melalui akun mereka.</li>
                    <li>Oil Cycle berhak menolak pendaftaran pengguna yang tidak memenuhi persyaratan.</li>
                    <li>Dengan mendaftar ke aplikasi ini, pengguna dianggap telah membaca, memahami dan menyetujui seluruh syarat dan ketentuan yang berlaku.</li>
                </ol>
            </div>

            <div class="flex items-center mb-6">
                <input id="persetujuan" name="persetujuan" type="checkbox" class="w-5 h-5 text-lime-600 bg-gray-100 border-gray-300 rounded focus:ring-lime-500" required>
                <label for="persetujuan" class="ml-2 text-sm font-medium text-green-800">Persetujuan</label>
            </div>

            <button class="w-full bg-lime-400 hover:bg-lime-500 text-green-900 font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300" type="submit">
                Daftar
            </button>
        </form>
    </div>

</body>
</html>