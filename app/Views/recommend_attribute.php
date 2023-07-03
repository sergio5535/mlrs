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

<body>
    <?php include('templates/navbar.php') ?>

    <div class="container">
        <div class="text-white">
            <br>
            <div class="text-center">
                <h1>Define According To Your Role</h1>
            </div>
            <br>
            <form action="<?= site_url('recommend-result') ?>" method="GET">
                <input type="hidden" name="attack_type" value="<?php echo $attack_type ?>">
                <input type="hidden" name="complexity" value="<?php echo $complexity ?>">
                <input type="hidden" name="lane" value="<?php echo $lane ?>">
                <?php foreach ([
                    "marksman_assassin",
                    "marksman_fighter",
                    "marksman_tank",
                    "marksman_support",
                    "marksman_mage",
                    "assassin_fighter",
                    "assassin_tank",
                    "assassin_support",
                    "assassin_mage",
                    "fighter_tank",
                    "fighter_support",
                    "fighter_mage",
                    "tank_support",
                    "tank_mage",
                    "support_mage",
                ] as $key => $value) : ?>
                    <div class="col">
                        <?php
                        $string = "$value";
                        $values = explode("_", $string);

                        $labelFor = ucfirst($values[0]);
                        $labelValue = ucfirst($values[1]);
                        ?>
                        <label for="" class="form-label d-flex justify-content-between">
                            <div>Lebih Penting <?= $labelFor ?></div>
                            <div>Lebih Penting <?= $labelValue ?></div>
                        </label>
                        <label for="<?= $value ?>" class="form-label d-flex justify-content-between">
                            <div>5</div>
                            <div>4</div>
                            <div>3</div>
                            <div>2</div>
                            <div>1</div>
                            <div>2</div>
                            <div>3</div>
                            <div>4</div>
                            <div>5</div>
                        </label>
                        <input type="range" class="form-range" min="-4" max="4" step="1" id="<?= $value ?>" name="<?= $value ?>">
                    </div>

                <?php endforeach; ?>

                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
            <br>
        </div>
    </div>


    <?php include('templates/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>