<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/styles2.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MLRS | Admin - Home Page</title>

</head>

<body>

    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close Menu &times;</button>
        <a href="<?php echo site_url('admin_view') ?>" class="w3-bar-item w3-button">Home</a>
        <a href="<?php echo site_url('expert1') ?>" class="w3-bar-item w3-button">Expert Page</a>
        <hr>
        <div class="w3-bar-item">
            <a href="<?php echo site_url('admin/logout') ?>" class="btn btn-outline-danger">Logout</a>
        </div>
    </div>

    <div id="main">

        <div class="w3-teal">
            <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h2>Admin Page</h2>
            </div>
        </div>

        <div class="w3-container m-3">
            <h3>Welcome to Admin Page</h3>
            <hr>
            <h5>What You Can Do ?</h5>
            <div class="homeDiv flexDiv">
                <div>
                    <img src="<?= base_url('images/avatar.jpg') ?>" class="moleHome" alt="">
                </div>
                <div class="marginMole">
                    <h1 style="text-shadow: 3px 3px black;">Change Expert Data</h1>
                    Pada halaman ini, sebagai admin, Anda memiliki kemampuan untuk melakukan perubahan pada data bobot pakar yang ada. Bobot pakar mengacu pada nilai atau skor yang digunakan dalam sistem pakar untuk memberikan penilaian atau rekomendasi berdasarkan pilihan yang user pilih. Dalam konteks ini, sebagai admin, Anda memiliki akses dan otoritas yang memungkinkan Anda untuk mengubah data bobot pakar. Jika ada perubahan pada penilaian atau skor yang digunakan, Anda dapat memperbarui data bobot pakar yang ada. Misalnya, jika terdapat kesalahan dalam penilaian awal atau ada penyesuaian yang perlu dilakukan, Anda dapat mengubah nilai bobot yang ada.
                </div>
            </div>
        </div>

    </div>

    <script>
        function w3_open() {
            if (window.innerWidth <= 767) {
                document.getElementById("main").style.marginLeft = "25%";
                document.getElementById("mySidebar").style.width = "25%";
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("openNav").style.display = 'none';
            } else {
                document.getElementById("main").style.marginLeft = "15%";
                document.getElementById("mySidebar").style.width = "15%";
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("openNav").style.display = 'none';
            }

        }

        function w3_close() {
            document.getElementById("main").style.marginLeft = "0%";
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("openNav").style.display = "inline-block";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>