<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Renang Vector</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        html {
            overflow-y: scroll; /* Memaksa scrollbar vertikal selalu ada ruangnya */
        }
    </style>
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= base_url('/'); ?>">Vector Swimming Club</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/'); ?>">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/kategori'); ?>">Kategori</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/venue'); ?>">Venue & Schedule</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/galeri'); ?>">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/track-record'); ?>">Track Record</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/contact'); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <?= $this->renderSection('content'); ?>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; 2026 Vector Swimming Club. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>