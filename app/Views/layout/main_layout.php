<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Dashboard' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            overflow-x: hidden;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #343a40;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            transition: all 0.3s ease;
            overflow-y: auto;
            z-index: 1001;
        }

        .sidebar.hidden {
            transform: translateX(-220px);
        }

        .sidebar a,
        .dropdown-btn {
            color: #ddd;
            display: block;
            padding: 12px;
            text-decoration: none;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }

        .sidebar a:hover,
        .dropdown-btn:hover {
            background-color: #495057;
        }

        .dropdown-container {
            display: none;
            background-color: #3d434a;
            padding-left: 15px;
        }

        .dropdown-container a {
            padding: 10px 0;
            display: block;
        }

        .content {
            margin-left: 220px;
            transition: all 0.3s ease;
            padding: 20px;
        }

        .content.full {
            margin-left: 0;
        }

        .topbar {
            padding: 10px 20px;
            background: white;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-box {
            background: black;
            padding: 5px 10px;
            text-align: center;
            font-weight: bold;
            color: white;
        }

        .menu-toggle {
            font-size: 24px;
            background: none;
            border: none;
            margin-right: 15px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">
        <h5 class="text-white pt-4 ps-3">Amanah Response's</h5>
        <a href="/notes">Notes</a>
        <a href="/barang">Stock Barang</a>

        <button class="dropdown-btn">Transaksi Data ▾</button>
        <div class="dropdown-container">
            <a href="/barang-masuk">Barang Masuk / Kembali</a>
            <a href="/barangkeluar">Barang Keluar</a>
        </div>

        <a href="/auth/logout">Logout</a>
    </div>

    <!-- CONTENT -->
    <div class="content" id="main-content">
        <div class="topbar">
            <div>
                <button class="menu-toggle" onclick="toggleSidebar()">☰</button>
                <span class="fw-bold">Hi, Stock!</span>
            </div>
            <div class="d-flex align-items-center">
                <div class="me-3"><?= date('l, d F Y') ?></div>
                <div class="logo-box">LOGISTICS</div>
            </div>
        </div>

        <!-- Section untuk isi konten -->
        <?= $this->renderSection('content') ?>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('main-content');
        const dropdown = document.querySelector('.dropdown-btn');
        const dropdownContainer = document.querySelector('.dropdown-container');

        function toggleSidebar() {
            sidebar.classList.toggle('hidden');
            content.classList.toggle('full');
        }

        dropdown.addEventListener('click', () => {
            const isShown = dropdownContainer.style.display === 'block';
            dropdownContainer.style.display = isShown ? 'none' : 'block';
            dropdown.innerHTML = isShown ? 'Transaksi Data ▾' : 'Transaksi Data ▴';
        });
    </script>

</body>

</html>