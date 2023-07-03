<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MLRS | About Page</title>


</head>

<body>
    <?php include('templates/navbar.php') ?>

    <br>

    <div class="container text-white">
        <h2 style="text-shadow: 3px 3px black;">About This Website</h2>
        <hr style="border: 2px solid white;">
        <div class="homeDiv flexDiv">
            <div>
                <img src="<?= base_url('images/web.jpg') ?>" class="moleHome" alt="">
            </div>
            <div class="marginMole">
                <h1 style="text-shadow: 3px 3px black;">MLRS</h1>
                Website Sistem Rekomendasi Pemilihan Hero Mobile Legends dengan Metode Analytical Hierarchy Process (AHP) adalah sebuah platform online yang bertujuan untuk membantu pemain Mobile Legends dalam memilih hero yang tepat untuk digunakan dalam pertandingan. Metode AHP digunakan untuk memperoleh rekomendasi hero yang paling sesuai berdasarkan preferensi dan kebutuhan pemain.
            </div>

        </div>
    </div>

    <br>

    <div class="container text-white">
        <h2 style="text-shadow: 3px 3px black;">How To Use This Website</h2>
        <hr style="border: 2px solid white;">
        <div class="aboutDiv d-flex flex-column">
            <div>
                <img src="<?= base_url('images/1.png') ?>" class="hapeAbout" alt="">
            </div>
            <div class="marginMole text-center">
                <h1 style="text-shadow: 3px 3px black;">Step 1</h1>
                Pada langkah ini, pengguna akan menghadapi tugas untuk mengisi beberapa pilihan penting terkait karakter hero dalam suatu permainan atau aplikasi. Tiga pilihan yang harus diisi oleh pengguna adalah attack type hero, complexity hero, dan lane hero. Attack type hero mengacu pada jenis serangan yang dikuasai oleh hero, sedangkan complexity hero berkaitan dengan tingkat kesulitan dalam mengendalikan hero tersebut. Sementara itu, lane hero menggambarkan peran atau jalur yang akan diambil oleh hero dalam permainan. Setelah semua pilihan telah diisi, pengguna akan dapat melanjutkan ke tahap berikutnya dengan menekan tombol "Next". Tahap selanjutnya mungkin akan melibatkan langkah-langkah tambahan atau konfirmasi sebelum pengguna dapat melanjutkan perjalanan mereka dalam aplikasi atau permainan tersebut. Perlu diketahui bahwa, lane yang pengguna inginkan harus disesuaikan dengan role yang pengguna inginkan. Lane yang dipilih akan menentukan role apa yang pengguna inginkan. Bentuk lane yang biasanya digunakan pada permainan Mobile Legends yaitu lane mid untuk mage, lane gold untuk marksman, lane exp untuk fighter, lane jungle untuk assassin, dan lane roam untuk tank dan support.
            </div>
        </div>

        <div class="aboutDiv d-flex flex-column">
            <div>
                <img src="<?= base_url('images/2.png') ?>" class="hapeAbout" alt="">
            </div>
            <div class="marginMole text-center">
                <h1 style="text-shadow: 3px 3px black;">Step 2</h1>
                Pada langkah berikutnya, pengguna akan diminta untuk memberikan nilai dari 1 hingga 9 untuk setiap role yang tersedia dengan menggeser sebuah bar sesuai dengan preferensi pengguna. Langkah ini bertujuan untuk membandingkan tingkat kepentingan dari setiap peran dalam permainan. Misalnya, jika pengguna ingin fokus bermain sebagai marksman, pengguna dapat menggeser semua bar ke arah marksman dan membiarkan bar yang tidak terkait dengan marksman tetap bernilai 5. Namun, jika pengguna memberikan nilai yang tinggi untuk setiap role, sistem mungkin akan menolak dan meminta pengguna untuk memasukkan ulang nilai-nilai dari awal. Setelah pengguna selesai memberikan nilai-nilai tersebut, mereka dapat menekan tombol "Submit" untuk melihat rekomendasi hasil yang diberikan oleh sistem berdasarkan preferensi pengguna.
            </div>
        </div>

        <div class="aboutDiv d-flex flex-column">
            <div>
                <img src="<?= base_url('images/3.png') ?>" class="hapeAbout" alt="">
            </div>
            <div class="marginMole text-center">
                <h1 style="text-shadow: 3px 3px black;">Step 3</h1>
                Setelah melalui langkah-langkah sebelumnya, pengguna akan diarahkan ke halaman hasil yang menampilkan rekomendasi dari sistem berdasarkan pilihan yang telah mereka masukkan sebelumnya. Pada halaman ini, pengguna akan melihat daftar hero yang mendapatkan nilai tertinggi berdasarkan preferensi yang telah mereka tentukan sebelumnya. Hero-hero ini dipilih oleh sistem karena dianggap paling sesuai dengan preferensi dan prioritas pengguna. Hal ini membantu pengguna untuk mendapatkan panduan yang tepat dalam memilih hero yang sesuai dengan peran dan gaya bermain yang mereka inginkan. Dengan melihat hasil rekomendasi ini, pengguna dapat dengan mudah memilih hero yang tepat dan siap untuk melangkah ke medan pertempuran dalam permainan Mobile Legends.
            </div>
        </div>
    </div>

    <br>

    <div class="container text-white mb-5">
        <h2 style="text-shadow: 3px 3px black;">About The Experts</h2>
        <hr style="border: 2px solid white;">
        <div class="homeDiv flexDiv">
            <div>
                <img src="<?= base_url('images/delvin.jpg') ?>" class="moleHome" alt="">
            </div>
            <div class="marginMole">
                <h1 style="text-shadow: 3px 3px black;">Delvin "Lanaya" Gunawan</h1>
                Delvin Gunawan, dikenal dengan nickname "Lanaya", adalah seorang pemain Mobile Legends profesional yang menjadi bagian dari tim Dewa United. Sebagai seorang jungler, perannya sangat penting dalam menjaga keseimbangan tim. Delvin telah menunjukkan kepiawaiannya dalam mengendalikan pertempuran dan melakukan serangan balik yang mematikan. Dengan gaya permainan yang agresif dan keahlian taktis yang tinggi, Delvin telah berhasil membawa tim Dewa United meraih banyak kemenangan, termasuk menjadi runner-up di MDL Indonesia Season 7.
            </div>
        </div>

        <div class="homeDiv flexDiv">
            <div>
                <img src="<?= base_url('images/winaldo.jpg') ?>" class="moleHome" alt="">
            </div>
            <div class="marginMole">
                <h1 style="text-shadow: 3px 3px black;">Winaldo "Winaldo"</h1>
                Winaldo, yang juga dikenal dengan nickname yang sama, adalah seorang pemain Mobile Legends profesional yang merupakan bagian tak tergantikan dari tim Dewa United. Memegang peran sebagai EXP Lane, Winaldo telah menunjukkan kemampuannya yang luar biasa dalam menguasai wilayah EXP dan mengumpulkan pengalaman dengan efektif. Kecepatan dan kecerdasannya dalam memanfaatkan setiap kesempatan untuk meningkatkan level karakternya telah membuatnya menjadi salah satu pemain terbaik dalam peran EXP Lane di dunia Mobile Legends.
            </div>
        </div>

        <div class="homeDiv flexDiv">
            <div>
                <img src="<?= base_url('images/yanto.jpg') ?>" class="moleHome" alt="">
            </div>
            <div class="marginMole">
                <h1 style="text-shadow: 3px 3px black;">Supryanto "Dxy0n" Salim</h1>
                Supryanto Salim, yang dikenal dengan nickname "Dxy0n", adalah seorang pemain Mobile Legends profesional yang menjadi bagian dari tim Dewa United. Memegang peran sebagai EXP Lane, Supryanto telah mengukir namanya sebagai salah satu pemain terbaik dalam mengumpulkan pengalaman dan meningkatkan level karakternya. Dengan pemahaman yang mendalam tentang mekanisme permainan dan keahlian dalam menguasai wilayah EXP Lane, Supryanto telah menjadi tulang punggung tim Dewa United dalam banyak pertandingan penting.
            </div>
        </div>
    </div>



    <?php include('templates/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>