<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?= base_url('css/styles.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MLRS | Heroes Page</title>


</head>

<body>
    <?php include('templates/navbar.php') ?>


    <div class="container mb-5">

        <br>
        <h2 class="text-white" style="text-shadow: 3px 3px black;">Heroes List</h2>
        <hr style="border: 2px solid white;">
        <p class="text-white">The current list shows a total of <?php echo $count ?> heroes.</p>

        <div class="mt-5">
            <div class="table-responsive">
                <table class="table table-bordered text-white heroesTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Hero</th>
                            <th scope="col">Hero Name</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Specialities</th>
                            <th scope="col">Lane</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($heroes as $hero) {
                        ?>
                            <tr>
                                <td>
                                    <div class="heroesText">
                                        <?php echo $hero['id'] ?>
                                    </div>
                                </td>
                                <td class="heroesList"><img src="<?php echo $hero['images'] ?>" alt="" class="heroesList"></td>
                                <td>
                                    <div class="heroesText">
                                        <a style="color: white;" href="<?php echo site_url('heroes/heroesDetail?id=' . $hero['id']); ?>">
                                            <?= $hero['names'] ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="heroesText">
                                        <?php echo $hero['roles'] ?>
                                    </div>
                                </td>

                                <td>
                                    <div class="heroesText">
                                        <?php echo $hero['specialities'] ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="heroesText">
                                        <?php echo $hero['lane'] ?>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <?php include('templates/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>