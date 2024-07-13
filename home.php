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

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="<?php echo base_url() . 'movie/detail/6'; ?>">
                    <img src="<?php echo base_url() . 'image\banner\the_fall_guy.jpg'; ?>" class="backdrop d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h3>THE FALL GUY</h3>
                        <p>BUKA KEPRIBADIAN BARU DENGAN MENONTON THE FALL GUY</p>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="<?php echo base_url() . 'movie/detail/3'; ?>">
                    <img src="<?php echo base_url() . 'image\banner\a_quiet_place_day_one.jpg'; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h3>A QUIET PLACE: DAY ONE</h3>
                        <p>AWAL MULA DUNIA MENJADI HENING DAN MEMATIKAN</p>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="<?php echo base_url() . 'movie/detail/10'; ?>">
                    <img src="<?php echo base_url() . 'image\banner\inside_out_2.jpg'; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h3>INSIDE OUT 2</h3>
                        <p>BERTEMU EMOSI BARU 'ANXIETY' DI FILM TERBARU INSIDE OUT 2</p>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="<?php echo base_url() . 'movie/detail/13'; ?>">
                    <img src="<?php echo base_url() . 'image\banner\dilan_wo_ai_ni.jpg'; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h3>DILAN 1983: WO AI NI</h3>
                        <p>INI BUKAN TENTANG CINTA KARENA DIA MASIH DI SEKOLAH DASAR</p>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="<?php echo base_url() . 'movie/detail/11'; ?>">
                    <img src="<?php echo base_url() . 'image\banner\my_boo.jpg'; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h3>MY BOO</h3>
                        <p>LDR PALING JAUH, PRIA INI MALAH JATUH CINTA SAMA HANTU</p>
                    </div>
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-2">
        <h2 class="mt-5">FEATURED</h2>
        <div id="carouselExample" class="carousel slide mt-3">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row row-cols-md-4 g-4">
                        <div class="col">
                            <a href="<?php echo base_url() . 'movie/detail/1'; ?>">
                                <img src="<?php echo base_url() . 'image\poster\interstellar.jpg'; ?>" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="...">
                            </a>
                            <div style="width: 100%;">
                                <h5 class="mt-2 text-truncate" style="max-width: 100%;">
                                    <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/1'; ?>">INTERSTELLAR</a>
                                </h5>
                                <p>2014</p>
                            </div>
                        </div>
                        <div class="col">
                            <a href="<?php echo base_url() . 'movie/detail/6'; ?>">
                                <img src="<?php echo base_url() . 'image\poster\the_fall_guy.jpg'; ?>" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="...">
                            </a>
                            <div style="width: 100%;">
                                <h5 class="mt-2 text-truncate" style="max-width: 100%;">
                                    <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/6'; ?>">THE FALL GUY</a>
                                </h5>
                                <p>2024</p>
                            </div>
                        </div>
                        <div class="col">
                            <a href="<?php echo base_url() . 'movie/detail/10'; ?>">
                                <img src="<?php echo base_url() . 'image\poster\inside_out_2.jpg'; ?>" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="...">
                            </a>
                            <div style="width: 100%;">
                                <h5 class="mt-2 text-truncate" style="max-width: 100%;">
                                    <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/12'; ?>">INSIDE OUT 2</a>
                                </h5>
                                <p>2024</p>
                            </div>
                        </div>
                        <div class="col">
                            <a href="<?php echo base_url() . 'movie/detail/4'; ?>">
                                <img src="<?php echo base_url() . 'image\poster\the_boy_and_the_heron.jpg'; ?>" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="...">
                            </a>
                            <div style="width: 100%;">
                                <h5 class="mt-2 text-truncate" style="max-width: 100%;">
                                    <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/4'; ?>">THE BOY AND THE HERON</a>
                                </h5>
                                <p>2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row row-cols-md-4 g-4">
                        <div class="col">
                            <a href="<?php echo base_url() . 'movie/detail/5'; ?>">
                                <img src="<?php echo base_url() . 'image\poster\kkn_di_desa_penari.jpg'; ?>" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="...">
                            </a>
                            <div style="width: 100%;">
                                <h5 class="mt-2 text-truncate" style="max-width: 100%;">
                                    <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/5'; ?>">KKN DI DESA PENARI</a>
                                </h5>
                                <p>2022</p>
                            </div>
                        </div>
                        <div class="col">
                            <a href="<?php echo base_url() . 'movie/detail/7'; ?>">
                                <img src="<?php echo base_url() . 'image\poster\kingdom_of_the_planet_of_the_apes.jpg'; ?>" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="...">
                            </a>
                            <div style="width: 100%;">
                                <h5 class="mt-2 text-truncate" style="max-width: 100%;">
                                    <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/7'; ?>">KINGDOM OF THE PLANET OF THE APES</a>
                                </h5>
                                <p>2024</p>
                            </div>
                        </div>
                        <div class="col">
                            <a href="<?php echo base_url() . 'movie/detail/2'; ?>">
                                <img src="<?php echo base_url() . 'image\poster\despicable_me_4.jpg'; ?>" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="...">
                            </a>
                            <div style="width: 100%;">
                                <h5 class="mt-2 text-truncate" style="max-width: 100%;">
                                    <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/2'; ?>">DESPICABLE ME 4</a>
                                </h5>
                                <p>2024</p>
                            </div>
                        </div>
                        <div class="col">
                            <a href="<?php echo base_url() . 'movie/detail/9'; ?>">
                                <img src="<?php echo base_url() . 'image\poster\the_boys.jpg'; ?>" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="...">
                            </a>
                            <div style="width: 100%;">
                                <h5 class="mt-2 text-truncate" style="max-width: 100%;">
                                    <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/9'; ?>">THE BOYS</a>
                                </h5>
                                <p>2019</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row row-cols-md-4 g-4">
                        <div class="col">
                            <a href="<?php echo base_url() . 'movie/detail/14'; ?>">
                                <img src="<?php echo base_url() . 'image\poster\sengkolo.jpg'; ?>" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="...">
                            </a>
                            <div style="width: 100%;">
                                <h5 class="mt-2 text-truncate" style="max-width: 100%;">
                                    <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/16'; ?>">SENGKOLO MALAM SATU SURO</a>
                                </h5>
                                <p>2024</p>
                            </div>
                        </div>
                        <div class="col">
                            <a href="<?php echo base_url() . 'movie/detail/13'; ?>">
                                <img src="<?php echo base_url() . 'image\poster\dilan_wo_ai_ni.jpg'; ?>" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="...">
                            </a>
                            <div style="width: 100%;">
                                <h5 class="mt-2 text-truncate" style="max-width: 100%;">
                                    <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/15'; ?>">DILAN 1983 WO AI NI</a>
                                </h5>
                                <p>2024</p>
                            </div>
                        </div>
                        <div class="col">
                            <a href="<?php echo base_url() . 'movie/detail/8'; ?>">
                                <img src="<?php echo base_url() . 'image\poster\oppenheimer.jpg'; ?>" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="...">
                            </a>
                            <div style="width: 100%;">
                                <h5 class="mt-2 text-truncate" style="max-width: 100%;">
                                    <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/8'; ?>">OPPENHEIMER</a>
                                </h5>
                                <p>2023</p>
                            </div>
                        </div>
                        <div class="col">
                            <a href="<?php echo base_url() . 'movie/detail/11'; ?>">
                                <img src="<?php echo base_url() . 'image\poster\my_boo.jpg'; ?>" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="...">
                            </a>
                            <div style="width: 100%;">
                                <h5 class="mt-2 text-truncate" style="max-width: 100%;">
                                    <a class="link-body-emphasis link-underline link-underline-opacity-0" href="<?php echo base_url() . 'movie/detail/13'; ?>">MY BOO</a>
                                </h5>
                                <p>2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
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
    </div>

    <footer class="bg-dark text-center text-white py-3">
        <p class="fs-10 mt-3">Copyright © 2024 Movie Plays by Damar. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>