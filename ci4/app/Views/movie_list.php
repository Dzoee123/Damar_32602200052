<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Plays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'css/style.css'; ?>" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container my-2">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item  mx-3">
                        <a class="nav-link link-body-emphasis" aria-current="page" href="<?php echo base_url() . 'movie'; ?>">MOVIE</a>
                    </li>
                    <li class="nav-item  mx-3">
                        <a class="nav-link link-body-emphasis" href="<?php echo base_url() . 'admin'; ?>">ADMIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-3">DAFTAR FILM</h2>
        <div class="d-grid shadow mb-3">
            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Film</button>
        </div>
        <?php foreach ($movie_list as $movie) : ?>
            <div class="card mb-3 shadow">
                <div class="row d-flex g-0">
                    <div class="col-md-4 d-flex" style="width: 105px; height: auto;">
                        <a href="<?php echo base_url() . 'movie/detail/' . $movie['id']; ?>">
                            <img src="<?php echo base_url() . 'image/poster/' . $movie['poster']; ?>" class="card-img-top img-fluid rounded-start" style="max-width: 100%; max-height: auto; " alt="<?php echo $movie['judul']; ?>">
                        </a>
                    </div>
                    <div class="col d-flex">
                        <div class="card-body p-3">
                            <h5 class="card-title">
                                <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/' . $movie['id']; ?>">
                                    <?php echo $movie['judul']; ?>
                                </a>
                            </h5>
                            <p class="card-text"><small class="text-muted"><?php echo $movie['tahun']; ?></small></p>
                            <p class="card-text text-truncate-3"><?php echo $movie['deskripsi']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Modal Tambah Data-->
        <form method="post" action="<?php echo base_url() . 'action/tambah'; ?>">
            <div class="modal fade" id="tambahdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="TambahJudul">Judul:</label>
                                <input type="text" class="form-control" name="tambahjudul" id="TambahJudul" placeholder="Masukkan judul film">
                            </div>
                            <div class="mb-3">
                                <label for="TambahTahun">Tahun:</label>
                                <input type="number" class="form-control" name="tambahtahun" id="TambahTahun" placeholder="Masukkan tahun rilis">
                            </div>
                            <div class="mb-3">
                                <label for="TambahGenre">Genre:</label>
                                <input type="text" class="form-control" name="tambahgenre" id="TambahGenre" placeholder="Masukkan genre film">
                            </div>
                            <div class="mb-3">
                                <label for="TambahSutradara">Sutradara:</label>
                                <input type="text" class="form-control" name="tambahsutradara" id="TambahSutradara" placeholder="Masukkan nama sutradara">
                            </div>
                            <div class="mb-3">
                                <label for="TambahDeskripsi">Deskripsi:</label>
                                <textarea type="text" class="form-control" name="tambahdeskripsi" id="TambahDeskripsi" placeholder="Masukkan isi deskripsi" rows="2"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="TambahPoster">Poster:</label>
                                <input type="text" class="form-control" name="tambahposter" id="TambahPoster" placeholder="Masukkan path poster film">
                            </div>
                            <div class="mb-3">
                                <label for="TambahBackdrop">Backdrop:</label>
                                <input type="text" class="form-control" name="tambahbackdrop" id="TambahBackdrop" placeholder="Masukkan path backdrop film">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambahkan Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <footer class="bg-dark text-center text-white py-3">
        <p class="fs-10 mt-3">Copyright © 2024 Movie Plays by Damar. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>