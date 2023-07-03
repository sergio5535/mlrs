<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?= base_url('css/styles.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MLRS | Recommendation Page</title>


</head>

<body class="d-flex flex-column min-vh-100">
    <?php include('templates/navbar.php') ?>

    <div class="container">
        <br>
        <div class="text-white">
            <h1 class="text-center">Hero Recommendation Result</h1>
            <div class="w-100 align-items-center">
                <label class="form-label d-flex justify-content-center flex-wrap">
                    <?php $counter = 1 ?>
                    <?php foreach ($agregateValues as $rec) : ?>
                        <?php if ($counter >= 6) break; ?>
                        <label class="form-label d-flex flex-column m-4">
                            <div class="text-center m-3"><?php echo $counter ?></div>
                            <div><img style="width: 200px; height: 200px;" class="rounded-circle shadow" src="<?php echo $rec['hero_image'] ?>"></div>
                            <div class="text-center m-3"><?php echo (number_format($rec['value'] * 100, 2) . ' %') ?></div>
                            <div class="text-center"><?php echo $rec['hero'] ?></div>
                        </label>
                        <?php $counter++; ?>
                    <?php endforeach; ?>
                </label>
            </div>

        </div>

        <br>
    </div>


    <?php include('templates/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>