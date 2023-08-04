<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php 
    $nama = "Bambang Triatmaja";
    $univ = "STT Terpadu Nurul Fikri";
    $domisili = "Bogor"
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Bambang Triatmaja</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
    </nav>
    
    
    <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <br><br>
                <!-- Masthead Avatar Image-->
                <img style="height: 10rem" src="foto_bambang.jpg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Bambang Triatmaja</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Web Developer - Web Designer - Illustrator</p>
            <br><br>
            </div>
        </header>

    <section class="bg-light py-5">
        <div class="container px-5">
          <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
              <div class="text-center my-5">
                <h2 class="display-5 fw-bolder">
                  <span class="text-gradient d-inline">About Me</span>
                </h2>
                <p class="lead fw-light mb-4">
                  Halo, Perkenalkan Nama Saya <?= $nama . " saya bertempat tinggal di" . $domisili . " dan berkuliah di ". $univ ?>
                </p>
                <p class="text-muted">
                  Ini adalah website profile saya yang berisi projek yang saya kerjakan,  riwayat pendidikan dan pengalaman saya selama ini
                </p>
                <div class="d-flex justify-content-center fs-2 gap-4">
                  <a class="text-gradient" href="#!"
                    ><i class="bi bi-twitter"></i
                  ></a>
                  <a class="text-gradient" href="#!"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                  <a class="text-gradient" href="#!"
                    ><i class="bi bi-github"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- footer -->
      <footer class="bg-white py-4 mt-auto">
      <div class="container px-5">
        <div
          class="row align-items-center justify-content-between flex-column flex-sm-row"
        >
          <div class="col-auto">
            <div class="small m-0">Copyright &copy; dibuat pada tahun 2023</div>
          </div>
          <div class="col-auto">
            <a class="small" href="#!">Privacy</a>
            <span class="mx-1">&middot;</span>
            <a class="small" href="#!">Terms</a>
            <span class="mx-1">&middot;</span>
            <a class="small" href="#!">Contact</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>