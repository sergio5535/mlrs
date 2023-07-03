<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?= base_url('css/styles.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MLRS | <?= $hero['names'] ?> Detail Page</title>

</head>

<body>
    <?php include('templates/navbar.php') ?>


    <div class="container mb-5">

        <br>
        <h2 class="text-white" style="text-shadow: 3px 3px black;">Heroes Detail</h2>
        <hr style="border: 2px solid white;">

        <div class="container ">
            <div class="d-flex flex-column flex-md-row justify-content-between ">
                <div class="fs-3 row align-items-center text-white">
                    <div class="col-md-12">
                        <p>Hero Name: <?= $hero['names'] ?></p>
                        <p>Hero Role: <?= $hero['roles'] ?></p>
                        <p>Hero Specialities: <?= $hero['specialities'] ?></p>
                        <p>Hero Lane: <?= $hero['lane'] ?></p>
                    </div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <img class="w-100" src="<?= $hero['images'] ?>" alt="<?= $hero['names'] ?>">
                </div>
            </div>
            <div class="mt-3 bg-light p-3">
                <h3><?= $hero['names'] ?></h3>
                <p><?= $hero['desc'] ?></p>
            </div>
        </div>
    </div>



    </div>

    <?php include('templates/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>