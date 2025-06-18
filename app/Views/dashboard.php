<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Oil Cycle</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
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
        <div class="card">
            <div class="card-header">
                <h4>Lokasi Pengepul Terdekat</h4>
            </div>
            <div class="card-body">
                <div id="petaDashboard" style="height: 450px;"></div>
            </div>
        </div>

        <a href="<?= base_url('/logout') ?>" class="mt-8 inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition duration-300">
            Logout
        </a>
    </div>

    <script>
        // Inisialisasi Peta pada div 'petaDashboard'
        var peta = L.map('petaDashboard').setView([-7.77, 110.39], 12);

        // Tambahkan Tile Layer dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(peta);

        // Ambil data marker yang dikirim dari Controller Dashboard
        var markersData = <?= json_encode($markers); ?>;

        // Loop data marker dan tambahkan ke peta
        markersData.forEach(function(markerInfo) {
            L.marker([markerInfo.lat, markerInfo.lng])
                .addTo(peta)
                .bindPopup('<b>' + markerInfo.title + '</b>');
        });
    </script>
</body>

</html>