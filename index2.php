<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Daily Journal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #f8f9fa;
        }
        .header {
            background-color: #f8d7da;
            padding: 50px 0;
        }
        .header h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .header p {
            font-size: 1.5rem;
        }
        .navbar-nav .nav-link {
            color: #000;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .card-text {
            font-size: 1rem;
        }
        .card-footer {
            font-size: 0.875rem;
            color: #6c757d;
        }
        .gallery-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">My Daily Journal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-md-start">
                    <h1>Create Memories, Save Memories, Everyday</h1>
                    <p>Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="https://storage.googleapis.com/a1aa/image/fcVBhvGWjawla6UGP4YJDSjCLevxVCGH7dWelwyuPBjL6iFoA.jpg" 
                         class="img-fluid" alt="Polaroid Memories" width="300" height="400">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 d-flex flex-column align-items-center justify-content-center" style="min-height: 100vh;">
        <h1 class="text-center fw-bold">Article</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3">
            <div class="col">
                <div class="card h-100">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="A person reading a book">
                    <div class="card-body">
                        <h5 class="card-title">Perpustakaan Kampus</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="An empty classroom">
                    <div class="card-body">
                        <h5 class="card-title">Ruang Kelas</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="A group of students studying together">
                    <div class="card-body">
                        <h5 class="card-title">Kelompok Belajar</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 d-flex flex-column align-items-center justify-content-center" style="min-height: 100vh; background-color: #f8d7da; padding: 20px;">
    <div class="gallery-title">Gallery</div>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://storage.googleapis.com/a1aa/image/ESR8HyRTPRZ8OpcHfXSYAkqqqAvufFhRq2UzLxjgIMmrtxCUA.jpg" 
                     class="d-block w-100 img-fluid" alt="A lush green pathway">
            </div>
            <div class="carousel-item">
                <img src="https://storage.googleapis.com/a1aa/image/5BuB0Bg6yxoGIZpkXYqEeEXXDLlioUyqj7KZmJmjXcDP3YBKA.jpg" 
                     class="d-block w-100 img-fluid" alt="A mountain range view">
            </div>
            <div class="carousel-item">
                <img src="https://storage.googleapis.com/a1aa/image/VmW6495NsU4XMRQPOfm79k6jCflMh4nS6cDapEMBXbBduxCUA.jpg" 
                     class="d-block w-100 img-fluid" alt="A sunset over the ocean">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>Follow Us</h5>
                <div class="d-flex justify-content-center mt-3">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com" target="_blank" class="text-white me-3">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <!-- Twitter -->
                    <a href="https://www.twitter.com" target="_blank" class="text-white me-3">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com" target="_blank" class="text-white me-3">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com" target="_blank" class="text-white me-3">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <!-- YouTube -->
                    <a href="https://www.youtube.com" target="_blank" class="text-white">
                        <i class="fab fa-youtube fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <p class="mb-0">© 2025 My Daily Journal. All Rights Reserved.

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Jr59Pp36CIB5L8Kz8L+AxUW1z" crossorigin="anonymous"></script>
</body>
</html>
