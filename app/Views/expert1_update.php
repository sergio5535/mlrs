<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/styles2.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MLRS | Admin - Update Page</title>

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
                <h2>Expert Page</h2>
            </div>
        </div>

        <div class="w3-container m-3">
            <div class="m-4">

                <form action="<?php echo site_url('admin/expert1Update'); ?>" method="POST" id="myForm">
                    <select name="expert_id" id="expert_id" class="form-select" onchange="submitForm();">
                        <option selected disabled>Expert</option>
                        <option value="1">Lanaya</option>
                        <option value="2">Winaldo</option>
                        <option value="3">Dxy0n</option>
                    </select>
                </form>

                <br>
                <h3>Expert <?php echo ucfirst($namaExpert) ?></h3>
                <hr>
                <form action="<?php echo site_url('admin/update_hero'); ?>" method="POST">
                    <a class="btn btn-danger" href="<?php echo site_url('expert1') ?>">Back</a>
                </form>


                <div class="m-4"></div>
                <div class="table-responsive">
                    <table class="table table-bordered heroesTable">
                        <thead>
                            <tr>
                                <th scope="col">Hero Name</th>
                                <th scope="col">Marksman Weight</th>
                                <th scope="col">Assassin Weight</th>
                                <th scope="col">Fighter Weight</th>
                                <th scope="col">Tank Weight</th>
                                <th scope="col">Support Weight</th>
                                <th scope="col">Mage Weight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($expertHeroes as $ex) {
                            ?>
                                <tr data-id="<?php echo $ex['id'] ?>">
                                    <td>
                                        <div class="heroesText">
                                            <?php echo $ex['hero_name'] ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="heroesText editable-cell" contenteditable="true" data-field="marksman">
                                            <?php echo $ex['marksman'] ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="heroesText editable-cell" contenteditable="true" data-field="assassin">
                                            <?php echo $ex['assassin'] ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="heroesText editable-cell" contenteditable="true" data-field="fighter">
                                            <?php echo $ex['fighter'] ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="heroesText editable-cell" contenteditable="true" data-field="tank">
                                            <?php echo $ex['tank'] ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="heroesText editable-cell" contenteditable="true" data-field="support">
                                            <?php echo $ex['support'] ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="heroesText editable-cell" contenteditable="true" data-field="mage">
                                            <?php echo $ex['mage'] ?>
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

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function submitForm() {
            var selectedExpert = document.getElementById('expert_id').value;
            document.getElementById('myForm').submit();
            console.log('Selected expert:', selectedExpert);
        }

        $(document).ready(function() {
            // Handle cell editing
            $(".editable-cell").on("input", function() {
                var cell = $(this);
                var id = cell.closest("tr").data("id");
                var field = cell.data("field");
                var value = cell.text();

                // Send AJAX request to update the data
                $.ajax({
                    url: "<?php echo site_url('admin/update_hero'); ?>",
                    method: "POST",
                    data: {
                        id: id,
                        field: field,
                        value: value
                    }
                });
            });
        });

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