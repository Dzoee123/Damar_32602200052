<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Plays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search Movie" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h1 class="mb-0">
            <?php echo $movie['judul']; ?>
            (<?php echo $movie['tahun']; ?>)
        </h1>
        <p><a class="bi bi-arrow-left link-secondary link-underline link-underline-opacity-0 fs-5" onclick="window.history.back()" style="cursor: pointer;"> Kembali</a></p>
        <div class="row row-cols-3 d-flex mt-3">
            <div class="col-3 d-flex ">
                <img src="<?php echo base_url() . 'image/poster/' . $movie['poster']; ?>" class="rounded shadow" style="max-width: 100%; height: auto;">
            </div>
            <div class="col-8 d-flex">
                <img src="<?php echo base_url() . 'image/backdrop/' . $movie['backdrop']; ?>" class="rounded shadow" style="max-width: 100%; height: auto;">
            </div>
            <div class="col-1 d-flex">
                <div class="row">
                    <div class="col mb-2">
                        <button type="button" class="btn btn-outline-dark btn-sm shadow w-100 h-100" data-bs-toggle="modal" data-bs-target="#editdata">
                            <i class="bi bi-pencil"></i>
                        </button>
                    </div>
                    <div class="col mt-2">
                        <?php echo anchor(
                            'action/hapus_detail/' . $movie['id'],
                            '<button class="btn btn-outline-dark btn-sm shadow w-100 h-100"><i class="bi bi-trash align-middle"></i></button>',
                            array('onclick' => "return confirm('Apakah Anda yakin ingin menghapus data ini?');")
                        ) ?>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mt-4">SINOPSIS:</h4>
        <p class="mt-2"><?php echo $movie['deskripsi']; ?></p>
        <hr class="border border-dark border-2 opacity-50">
        <h6>
            GENRE:
            <span class="text-secondary"><?php echo $movie['genre']; ?></span>
        </h6>
        <hr class="border border-dark border-2 opacity-50">
        <h6>
            SUTRADARA:
            <span class="text-secondary"><?php echo $movie['sutradara']; ?></span>
        </h6>


        <!-- Modal Edit Data-->
        <form method="post" action="<?php echo base_url() . 'action/edit_detail'; ?>">
            <div class="modal fade" id="editdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" class="form-control" name="editid" id="EditId" placeholder="Masukkan judul film" value="<?php echo $movie['id'] ?>">
                            <div class="mb-3">
                                <label for="EditJudul">Judul:</label>
                                <input type="text" class="form-control" name="editjudul" id="EditJudul" placeholder="Masukkan judul film" value="<?php echo $movie['judul'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="EditTahun">Tahun:</label>
                                <input type="number" class="form-control" name="edittahun" id="EditTahun" placeholder="Masukkan tahun rilis" value="<?php echo $movie['tahun'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="EditGenre">Genre:</label>
                                <input type="text" class="form-control" name="editgenre" id="EditGenre" placeholder="Masukkan genre film" value="<?php echo $movie['genre'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="EditSutradara">Sutradara:</label>
                                <input type="text" class="form-control" name="editsutradara" id="EditSutradara" placeholder="Masukkan nama sutradara" value="<?php echo $movie['sutradara'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="EditDeskripsi">Deskripsi:</label>
                                <textarea type="text" class="form-control" name="editdeskripsi" id="EditDeskripsi" placeholder="Masukkan isi deskripsi" rows="2"><?php echo $movie['deskripsi'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="EditPoster">Poster:</label>
                                <input type="text" class="form-control" name="editposter" id="EditPoster" placeholder="Masukkan path poster film" value="<?php echo $movie['poster'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="EditBackdrop">Backdrop:</label>
                                <input type="text" class="form-control" name="editbackdrop" id="EditBackdrop" placeholder="Masukkan path backdrop film" value="<?php echo $movie['backdrop'] ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
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