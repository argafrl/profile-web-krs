<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles/style.css";
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script type="text/javascript" src="app.js"></script>
    <title>Profile Web</title>
  </head>
  <body>
    <main>
    <header>
        
        <nav id="navbar-main" class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                  <img src="./assets/image/linkedin-icon-2.svg" alt="linkedin">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#personal">Personal Info</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#experience">Experience</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#education">Education</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#licenses">Licenses & Certification</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="jumbotron" style="background-image: url('./assets/image/pexels.jpg')"/>
    </header>
    
    <div class="bg" >
        <div class="wrapper-out" >
            <div class="wrapper-profil">
                <div class="row">
                    <div class="profil-diri">
                        <div class="foto-profil">
                            <img src="./assets/image/Foto 4x6_Muhammad Arga Farrel Arkaan.jpg" class="card-img-top" alt="fotoProfil">                      
                        </div>
                        <h2>Muhammad Arga</h2>
                        <p class="mahasiswa">Mahasiswa Teknik Komputer Fakultas Ilmu Komputer UB</p>
                        <p class="tempat">Jakarta, Indonesia</p>
                    </div>
                    <div class="about">
                        <h3>About Me</h3>
                        <p>Saya merupakan mahasiswa Fakultas Ilmu Komputer program studi Teknik Komputer yang
                            memiliki semangat dalam pengembangan web. Dengan berbagai pengalaman
                            organisasi yang telah dijalani, saya merasa memiliki berbagai pengalaman dalam
                            mengorganisasi dan memimpin sebuah tim atau kelompok.</p>
                    </div>
                </div>
            </div>
    
            <div class="wrapper-personal" id="personal">
                <div class="wrapper-bg">
                    <div class="content">
                        <div class="personal">
                            <h3>Personal Info</h3>
                        </div>
                        <section>
                            <table>
                                <tr>
                                    <th>Nama</th>
                                    <td>Muhammad Arga Farrel Arkaan</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>23 September 2000</td>
                                </tr>
                                <tr>
                                    <th>Nomor HP</th>
                                    <td>081393254809</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>arga_muhammad@yahoo.co.id</td>
                                </tr>
                                <tr>
                                    <th>Kota Domisili</th>
                                    <td>Jakarta Selatan</td>
                                </tr>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
            <div class="wrapper-experience" >
                <div class="wrapper-bg">
                    <div class="content">
                        <div class="experience">
                            <h3 id="experience">Experience</h3>
                        </div>
                        <section>
                            <div class="row">
                                <div class="gambarHima col-3">
                                    <img src="./assets/image/himatekkom.png" alt="himatekkom">
                                </div>
                                <div class="col-9 align-self-center fs-5 mt-4" >
                                    <b>Himpunan Mahasiswa Teknik Komputer</b>
                                    <br><p class="fs-6">1 Tahun 5 Bulan</p>
                                </div>
                                <div class="titik col-3">
                                    <h1>.</h1>
                                </div>
                                <div class="col-9 align-self-center fs-5 mt-3" >
                                    Anggota Pengembangan Sumber Daya Internal
                                    <br><p class="fs-6">2 Bulan</p>
                                </div>
                                <div class="titik col-3">
                                    <h1>.</h1>
                                </div>
                                <div class="col-9 align-self-center fs-5 mt-3" >
                                    Ketua Komisi Aspirasi
                                    <br><p class="fs-6">1 Tahun 1 Bulan</p>
                                </div>
                                <div class="titik col-3">
                                    <h1>.</h1>
                                </div>
                                <div class="col-9 align-self-center fs-5 mt-3" >
                                    Staf Komisi Aspirasi
                                    <br><p class="fs-6">4 Bulan</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="gambarNolder col-3">
                                    <img src="./assets/image/ndf.jpg" alt="himatekkom">
                                </div>
                                <div class="col-9 align-self-center fs-5 mt-4" >
                                    <b>Nol Derajat Film</b>
                                    <br><p class="fs-6">1 Tahun 1 Bulan</p>
                                </div>
                                <div class="titik col-3">
                                    <h1>.</h1>
                                </div>
                                <div class="col-9 align-self-center fs-5 mt-3" >
                                    Ketua Bidang PSDM
                                    <br><p class="fs-6">2 Bulan</p>
                                </div>
                                <div class="titik col-3">
                                    <h1>.</h1>
                                </div>
                                <div class="col-9 align-self-center fs-5 mt-3" >
                                    Staf Bidang PSDM
                                    <br><p class="fs-6">1 Tahun</p>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="wrapper-bg-tengah">
                        <div class="content">
                            <div class="experience" id="education">
                                <h3>Education</h3>
                            </div>
                            <section>
                                <div class="row">
                                    <div class="gambarHima col-3">
                                        <img src="./assets/image/ub.svg" alt="himatekkom">
                                    </div>
                                    <div class="col-9 align-self-center fs-5 mt-4" >
                                        <b>Universitas Brawijaya</b>
                                        <br><p class="fs-6">Teknik Komputer, Fakultas Ilmu Komputer<br>2019-2023</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    

                    <div class="wrapper-bg-tengah">
                        <div class="content">
                            <div class="experience" id="licenses">
                                <h3>Licenses & Certifications</h3>
                            </div>
                            <section>
                                <div class="row mb-3">
                                    <div class="gambarHima col-3">
                                        <img src="./assets/image/dts.png" alt="himatekkom">
                                    </div>
                                    <div class="col-9 align-self-center fs-5 mt-0" >
                                        <b>HTML, CSS, JAVASCRIPT</b>
                                        <br><p class="fs-6">Digital Talent Scholarship<br>Issued Jun 2020 . No Expiration Date<br>Credential ID NO.0447677131</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="gambarHima col-3">
                                        <img src="./assets/image/progate.png" alt="himatekkom">
                                    </div>
                                    <div class="col-9 align-self-center fs-5 mt-0" >
                                        <b>Path Pengembangan Web (Node.js)</b>
                                        <br><p class="fs-6">Progate<br>Issued May 2020 . No Expiration Date<br>Credential ID d151c288q9x6yq</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="gambarHima col-3">
                                        <img src="./assets/image/dicoding.png" alt="himatekkom">
                                    </div>
                                    <div class="col-9 align-self-center fs-5 mt-0" >
                                        <b>Belajar Dasar Pemrograman Web</b>
                                        <br><p class="fs-6">dicoding<br>Issued Jun 2020 . Expires Jun 2023<br>Credential ID 758201</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>           
            </div>  
        </div>
        <div class="wrapper-personal matkul" id="personal">
            <div class="wrapper-bg">
                <div class="content">
                    <div class="personal">
                        <h3>Pilih Mata Kuliah</h3>
                    </div>
                    <section>
                        <form action="#form-login" id="form-login" method="GET">
                        <div id="loginDiv">
                            <table>
                                <tr>
                                    <h3>Silahkan Login untuk merancang KRS</h3>
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" value="<?=isset($_POST['password']) ? $_POST['password'] : ''?>">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    <!-- <input type="submit" name="login" value="Login"/> -->
                                    <button class="btn btn-primary" type="submit" name="login">Login</button>
                                    </div>
                                </tr>
                            </table>
                        </div>
                        </form>
                        <form action="#form-ipDiv" id="form-ipDiv" method="GET">
                        <div id="ipDiv" style="display: none">
                            <table>
                                <tr>
                                    <h3>Login Berhasil!<br/>Silahkan Input IP (Indeks Prestasi) Anda Semester Ini</h3>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="ip" class="form-control" id="floatingIp" placeholder="4.00" value="<?=isset($_POST['ip']) ? $_POST['ip'] : ''?>">
                                        <label for="floatingInput">Indeks Prestasi</label>
                                    </div>
                                    <!-- <input type="submit" name="login" value="Login"/> -->
                                    <button class="btn btn-primary" type="submit" name="input">Input</button>     
                                    </div>
                                </tr>
                            </table>
                        </div>
                        </form>
                        <form action="#form-matkulDiv" id="form-matkulDiv" method="POST">
                        <div id="matkulDiv" style="display: none">
                            <?php
                                if (isset($_GET['input'])) {
                                    $ip = $_GET['ip'];
                                    $sks = array();
                                    if ($ip >= 3.0){
                                        $sks[0] = 22;
                                        $sks[1] = 24;
                                    }
                                    else if (2.5 <= $ip && $ip < 3.0){
                                        $sks[0] = 19;
                                        $sks[1] = 21;
                                    }
                                    else if (2.0 <= $ip && $ip < 2.5){
                                        $sks[0] = 16;
                                        $sks[1] = 18;
                                    }
                                    else if (1.5 <= $ip && $ip < 2.0){
                                        $sks[0] = 12;
                                        $sks[1] = 15;
                                    }
                                    else if ($ip < 1.5){
                                        $sks[0] = 0;
                                        $sks[1] = 11;
                                    }
                                    echo '<script type="text/JavaScript">
                                                document.getElementById("loginDiv").style.display = "none";  
                                                document.getElementById("ipDiv").style.display = "none";
                                                document.getElementById("matkulDiv").style.display = "block";
                                        </script>';
                                    echo '<style type="text/css">
                                        .matkul {
                                            height: 770px;
                                        }
                                        </style>'; 
                                }?>
                            <table>
                                <tr>
                                    <h3>Input IP Berhasil!<br/>Anda dapat memilih Mata Kuliah dengan Total Rentang SKS <?php echo $sks[0] ?> s/d <?php echo $sks[1] ?></h3>
                                    <div class="form-floating mb-3">
                                    <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Mata Kuliah</th>
                                        <th scope="col">SKS</th>
                                        <th scope="col">Pilih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>CID61132</td>
                                        <td>Metode Numerik</td>
                                        <td name="sks3[]">3</td>
                                        <td><input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="checkbox[]"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>CCE60130</td>
                                        <td>Rangkaian & Elektronika</td>
                                        <td>3</td>
                                        <td><input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="checkbox[]"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>COM60011</td>
                                        <td>Arsitektur & Organisasi Komputer</td>
                                        <td>3</td>
                                        <td><input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="checkbox[]"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">4</th>
                                        <td>CCE61031</td>
                                        <td>Sistem Mikrokontroler</td>
                                        <td>4</td>
                                        <td><input class="form-check-input" type="checkbox" value="4" id="flexCheckDefault" name="checkbox[]"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">5</th>
                                        <td>CCE60032</td>
                                        <td>Sistem Linier</td>
                                        <td>3</td>
                                        <td><input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="checkbox[]"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">6</th>
                                        <td>CID61133</td>
                                        <td>Sistem Operasi</td>
                                        <td>3</td>
                                        <td><input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="checkbox[]"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">7</th>
                                        <td>CCE61550</td>
                                        <td>Pemrosesan Parallel</td>
                                        <td>3</td>
                                        <td><input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="checkbox[]"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">8</th>
                                        <td>CCE62561</td>
                                        <td>High Performance Computer System</td>
                                        <td>3</td>
                                        <td><input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="checkbox[]"></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                        <button class="btn btn-primary" type="submit" name="inputMatkul">Input Matkul</button>
                                    <!-- <input type="submit" name="login" value="Login"/> -->
                                </tr>
                            </table>
                        </div>
                        </form>
                        <form action="#form-matkulYakinDiv" id="form-matkulYakinDiv" method="POST">
                        <div id="matkulYakinDiv" style="display: none">
                        <?php
                            if (isset($_POST['inputMatkul'])) {
                                $checked_arr = $_POST['checkbox'];
                                $hasil = 0;
                                $count = count($checked_arr);
                                foreach($_POST['checkbox'] as $checked){
                                    $hasil = $hasil + $checked;
                                }
                                echo '<script type="text/JavaScript">
                                            document.getElementById("loginDiv").style.display = "none";  
                                            document.getElementById("ipDiv").style.display = "none";
                                            document.getElementById("matkulDiv").style.display = "none";
                                            document.getElementById("matkulYakinDiv").style.display = "block";
                                    </script>';
                                echo '<style type="text/css">
                                    .matkul {
                                        height: 375px;
                                    }
                                    </style>'; 
                            }?>
                            <table>
                                <tr>
                                <h3>Input Matkul Berhasil!<br/>Anda memilih <?php echo $count ?> Mata Kuliah dengan Total <?php echo $hasil ?> SKS</h3>
                                    <!-- <input type="submit" name="login" value="Login"/> -->
                                    <h5>Apakah anda yakin?</h5>
                                    
                                    <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary" type="submit" name="inputMatkulYakin">Ya</button>
                                    <button class="btn btn-primary" type="submit" name="inputMatkulTidakYakin">Tidak</button>
                                    </div>
                                    
                                    <?php
                                        if (isset($_POST['inputMatkulTidakYakin'])) {
                                            echo '<script type="text/JavaScript">
                                                        document.getElementById("loginDiv").style.display = "none";  
                                                        document.getElementById("ipDiv").style.display = "none";
                                                        document.getElementById("matkulYakinDiv").style.display = "none";
                                                        document.getElementById("matkulFix").style.display = "none";
                                                        document.getElementById("matkulDiv").style.display = "block";
                                                </script>';
                                            echo '<style type="text/css">
                                                .matkul {
                                                    height: 770px;
                                                }
                                                </style>'; 
                                        }?>
                                </tr>
                            </table>
                        </div>
                        </form>
                        <form action="#form-matkulFix" id="form-matkulFix" method="GET">
                        <div id="matkulFix" style="display: none">
                        <?php
                            if (isset($_POST['inputMatkulYakin'])) {
                                echo '<script type="text/JavaScript">
                                            document.getElementById("loginDiv").style.display = "none";  
                                            document.getElementById("ipDiv").style.display = "none";
                                            document.getElementById("matkulDiv").style.display = "none";
                                            document.getElementById("matkulYakinDiv").style.display = "none";
                                            document.getElementById("matkulFix").style.display = "block";
                                    </script>';
                                echo '<style type="text/css">
                                    .matkul {
                                        height: 310px;
                                    }
                                    </style>'; 
                            }?>
                        <table>
                                <tr>
                                <h3>Terima kasih telah menginput KRS, selamat menempuh semester baru!</h3>
                                <button class="btn btn-primary" type="submit" name="inputLogout">Logout</button>
                                </tr>
                            </table>
                        </div>
                        </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>        
</div>     
    
   

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="./app.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</main>
<style>
  <?php include "style.css" ?>
</style>
<?php
if (isset($_GET['login'])) {
	$email = $_GET['email'];
    $password = $_GET['password'];
    if ($email == 'a@g.com' && $password == '123'){
        // echo '<script type="text/JavaScript">  
        //         document.getElementById("alertDiv").style.display = "block";
        //         var nama = document.getElementById("floatingInput").value;
        //         var e_mail = document.getElementById("floatingPassword").value;
        //         document.getElementById("showNama").innerHTML = nama;
        //         document.getElementById("showEmail").innerHTML = e_mail;
        //         </script>'
        //     ;
        // echo '<style type="text/css">
        //         .matkul {
        //             height: 700px;
        //         }
        //         </style>'; 
        echo '<script type="text/JavaScript">  
                document.getElementById("loginDiv").style.display = "none";
                document.getElementById("ipDiv").style.display = "block";
                </script>'
        ;
    } else {
        echo 'Email atau password yang anda masukkan salah';
    }
}?>

<?php
if (isset($_POST['inputMatkul'])) {
    
}?>

</body>
<footer>
    <p>&copy; All Right Reserved, Design by Muhammad Arga Farrel Arkaan</p>
</footer> 
</html>