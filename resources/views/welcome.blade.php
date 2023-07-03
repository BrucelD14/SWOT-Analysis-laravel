<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPK | SWOT Analysis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    {{-- NAVBAR START --}}
    <nav class="navbar navbar-expand-lg bg-dark mb-4">
        <div class="container">
          <a class="navbar-brand text-white" href="/">SWOT4SPK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link text-white" href="/admin">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- NAVBAR END --}}

    <div class="container fs-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="text-center"><strong>SWOT ANALYSIS</strong></h1>
                <h2 class="text-center">Usaha Ayam Geprek Level</h2>
                <hr>
            </div>
        </div>

        {{-- STRENGTH TABLE --}}
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="mt-3 fw-bold">Strength</h3>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Faktor Strategis</th>
                        <th scope="col">Bobot</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Score</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $total_bobot_strength = 0;
                            $total_score_strength = 0;
                        ?>
                        @foreach ($data['strength'] as $strength)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $strength->faktor_strategis }}</td>
                                <td>{{ $strength->bobot }}</td>
                                <td>{{ $strength->rating }}</td>
                                <td>{{ $strength->score }}</td>
                            </tr>
                            <?php
                            $total_bobot_strength += $strength->bobot;
                            $total_score_strength += $strength->score;
                            ?>
                        @endforeach
                        
                            <tr>
                                <th colspan="2">Total</th>
                                <td>{{ $total_bobot_strength }}</td>
                                <td>-</td>
                                <td>{{ $total_score_strength }}</td>
                            </tr>
                    </tbody>
                  </table>
            </div>
        </div>

        {{-- WEAKNESS TABLE --}}
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="mt-3 fw-bold">Weakness</h3>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Faktor Strategis</th>
                        <th scope="col">Bobot</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Score</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $total_bobot_weakness = 0;
                            $total_score_weakness = 0;
                        ?>
                        @foreach ($data['weakness'] as $weakness)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $weakness->faktor_strategis }}</td>
                                <td>{{ $weakness->bobot }}</td>
                                <td>{{ $weakness->rating }}</td>
                                <td>{{ $weakness->score }}</td>
                            </tr>
                            <?php
                                $total_bobot_weakness += $weakness->bobot;
                                $total_score_weakness += $weakness->score;
                            ?>
                        @endforeach

                        <tr>
                            <th colspan="2">Total</th>
                            <td>{{ $total_bobot_weakness }}</td>
                            <td>-</td>
                            <td>{{ $total_score_weakness }}</td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>

        {{-- Opportunity TABLE --}}
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="mt-3 fw-bold">Opportunity</h3>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Faktor Strategis</th>
                        <th scope="col">Bobot</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Score</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $total_bobot_opportunity = 0;
                            $total_score_opportunity = 0;
                        ?>
                        @foreach ($data['opportunity'] as $opportunity)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $opportunity->faktor_strategis }}</td>
                                <td>{{ $opportunity->bobot }}</td>
                                <td>{{ $opportunity->rating }}</td>
                                <td>{{ $opportunity->score }}</td>
                            </tr>
                            <?php
                                $total_bobot_opportunity += $opportunity->bobot;
                                $total_score_opportunity += $opportunity->score;
                            ?>
                        @endforeach

                        <tr>
                            <th colspan="2">Total</th>
                            <td>{{ $total_bobot_opportunity }}</td>
                            <td>-</td>
                            <td>{{ $total_score_opportunity }}</td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>

        {{-- THREAT TABLE --}}
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="mt-3 fw-bold">Threat</h3>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Faktor Strategis</th>
                        <th scope="col">Bobot</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Score</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $total_bobot_threat = 0;
                            $total_score_threat = 0;
                        ?>
                        @foreach ($data['threat'] as $threat)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $threat->faktor_strategis }}</td>
                                <td>{{ $threat->bobot }}</td>
                                <td>{{ $threat->rating }}</td>
                                <td>{{ $threat->score }}</td>
                            </tr>
                            <?php
                                $total_bobot_threat += $threat->bobot;
                                $total_score_threat += $threat->score;
                            ?>
                        @endforeach

                        <tr>
                            <th colspan="2">Total</th>
                            <td>{{ $total_bobot_threat }}</td>
                            <td>-</td>
                            <td>{{ $total_score_threat }}</td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h3 class="mt-5 fw-bold">Titik Koordinat</h3>

            <table class="table mb-4">
              <thead>
                <tr>
                  <th scope="col">X</th>
                  <th scope="col">Y</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $Xkoordinat = ($total_score_strength - $total_score_weakness) / 2;
                  $Ykoordinat = ($total_score_opportunity - $total_score_threat) / 2;
                ?>
                <tr>
                  <td>{{ $Xkoordinat }}</td>
                  <td>{{ $Ykoordinat }}</td>
                </tr>
              </tbody>
            </table>

            <p>Jadi dari analisis diatas ditemukan bahwa usaha ayam geprek level berada pada titik koordinat <strong>{{ "(" . $Xkoordinat . "," . $Ykoordinat . ")" }}</strong>.</p> 
            <p>Kamu dapat menentukan kuadran dari titik koordinat tersebut dengan melihat gambar dibawah ini 👇</p>

            <div class="text-center">
              <img src="https://images2.imgbox.com/3c/b0/BNCXcS8h_o.jpeg" width="700" class="mb-5" alt="swot image">
            </div>

          </div>
        </div>
    </div>

    <div class="card text-center bg-dark">
      <div class="card-body">
        <h5 class="card-title text-white">Web Analisis SWOT, sebagai tugas kelompok SPK</h5>
        <p class="card-text text-white">Created with ❤️ by <a href="https://github.com/BrucelD14" class="text-decoration-none text-success">BrucelDev</a>. ©️ 2023</p>
      </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  </body>
</html>