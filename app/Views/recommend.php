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
        <div class="text-white">
            <br>
            <div class="text-center">
                <h1>Please Choose Your Preference</h1>
            </div>
            <form action="<?= site_url('recommend-attribute') ?>" method="GET">
                <div class="container">
                    <div class="m-5">
                        <?php
                        $session = session();
                        $alertMessage = $session->getFlashdata('alert');
                        if ($alertMessage) {
                            echo '<div class="alert alert-danger text-center d-flex justify-content-center" style="width:max-content;">' . $alertMessage . '</div>';
                        }
                        ?>
                        <select name="attack_type" class="form-select" aria-label="Default select example">
                            <option value="range">Attack Type</option>
                            <option value="melee">Melee</option>
                            <option value="range">Range</option>
                        </select>
                        <br>
                        <select name="complexity" class="form-select" aria-label="Default select example">
                            <option value="easy">Complexity</option>
                            <option value="easy">Easy</option>
                            <option value="medium">Medium</option>
                            <option value="hard">Hard</option>
                        </select>
                        <br>
                        <select name="lane" class="form-select" aria-label="Default select example">
                            <option value="mid">Lane</option>
                            <option value="mid">Mid</option>
                            <option value="exp">Exp</option>
                            <option value="gold">Gold</option>
                            <option value="jungle">Jungle</option>
                            <option value="roam">Roam</option>
                        </select>
                        <br>
                        <!-- <select name="expert_name" class="form-select" aria-label="Default select example">
                            <option selected>Expert</option>
                            <option value="udin">Udin</option>
                            <option value="robi">Robi</option>
                            <option value="andi">Andi</option>
                        </select>
                        <br> -->
                        <button class="btn btn-primary" type="submit">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php include('templates/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>