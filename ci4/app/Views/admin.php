<!doctype html>
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

  <div class="container mt-3">
    <h1 class="text-center">Movie Database</h1>
    <section class="content">
      <div class="d-grid gap-2 col-2 mb-2">
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Data</button>
      </div>
      <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
          <tr>
            <th class="text-center">NO</th>
            <th class="text-center">JUDUL</th>
            <th class="text-center">TAHUN</th>
            <th class="text-center">GENRE</th>
            <th class="text-center">SUTRADARA</th>
            <th class="text-center">DESKRIPSI</th>
            <th class="text-center">POSTER</th>
            <th class="text-center">BACKDROP</th>
            <th class="text-center">AKSI</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php
          $no = 1;
          foreach ($movie_list as $m) :
          ?>
            <tr>
              <td class="align-middle text-center"><?php echo $no++ ?></td>
              <td class="align-middle" style="max-width: 120px;"><?php echo $m['judul'] ?></td>
              <td class="align-middle"><?php echo $m['tahun'] ?></td>
              <td class="text-truncate align-middle" style="max-width: 90px;"><?php echo $m['genre'] ?></td>
              <td class="align-middle" style="max-width: 10px;"><?php echo $m['sutradara'] ?></td>
              <td class="align-middle" style="max-width: 300px;"><?php echo $m['deskripsi'] ?></td>
              <td class="align-middle text-center">
                <img src="<?php echo base_url() . 'image/poster/' . $m['poster']; ?>" style="max-width: auto; max-height: 120px;"></img>
              </td>
              <td class="align-middle text-center">
                <img src="<?php echo base_url() . 'image/backdrop/' . $m['backdrop']; ?>" style="max-width: auto; max-height: 120px;"></img>
              </td>
              <td class="align-middle text-center">
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editdata<?php echo $m['id'] ?>">
                  <i class="bi bi-pencil"></i>
                </button>
                <?php echo anchor(
                  'action/hapus_admin/' . $m['id'],
                  '<button class="btn btn-danger btn-sm"><i class="bi bi-trash align-middle"></i></button>',
                  array('onclick' => "return confirm('Apakah Anda yakin ingin menghapus data ini?');")
                ) ?>
              </td>
            </tr>

            <!-- Modal Edit Data-->
            <form method="post" action="<?php echo base_url() . 'action/edit_admin'; ?>">
              <div class="modal fade" id="editdata<?php echo $m['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <input type="hidden" class="form-control" name="editid" id="EditId" placeholder="Masukkan judul film" value="<?php echo $m['id'] ?>">
                      <div class="mb-3">
                        <label for="EditJudul">Judul:</label>
                        <input type="text" class="form-control" name="editjudul" id="EditJudul" placeholder="Masukkan judul film" value="<?php echo $m['judul'] ?>">
                      </div>
                      <div class="mb-3">
                        <label for="EditTahun">Tahun:</label>
                        <input type="number" class="form-control" name="edittahun" id="EditTahun" placeholder="Masukkan tahun rilis" value="<?php echo $m['tahun'] ?>">
                      </div>
                      <div class="mb-3">
                        <label for="EditGenre">Genre:</label>
                        <input type="text" class="form-control" name="editgenre" id="EditGenre" placeholder="Masukkan genre film" value="<?php echo $m['genre'] ?>">
                      </div>
                      <div class="mb-3">
                        <label for="EditSutradara">Sutradara:</label>
                        <input type="text" class="form-control" name="editsutradara" id="EditSutradara" placeholder="Masukkan nama sutradara" value="<?php echo $m['sutradara'] ?>">
                      </div>
                      <div class="mb-3">
                        <label for="EditDeskripsi">Deskripsi:</label>
                        <textarea type="text" class="form-control" name="editdeskripsi" id="EditDeskripsi" placeholder="Masukkan isi deskripsi" rows="2"><?php echo $m['deskripsi'] ?></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="EditPoster">Poster:</label>
                        <input type="text" class="form-control" name="editposter" id="EditPoster" placeholder="Masukkan nama file poster film" value="<?php echo $m['poster'] ?>">
                      </div>
                      <div class="mb-3">
                        <label for="EditBackdrop">Poster:</label>
                        <input type="text" class="form-control" name="editbackdrop" id="EditBackdrop" placeholder="Masukkan nama file backdrop film" value="<?php echo $m['backdrop'] ?>">
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
          <?php endforeach ?>
        </tbody>
      </table>
    </section>
  </div>

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
              <label for="TambahBackdrop">Poster:</label>
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

  <footer class="bg-dark text-center text-white py-3">
    <p class="fs-10 mt-3">Copyright © 2024 Movie Plays by Damar. All Rights Reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>