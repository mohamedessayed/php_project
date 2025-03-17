<?php
session_start();

if (isset($_SESSION['message'])) {
    # code...
$message= $_SESSION['message'];
unset($_SESSION['message']);
}

$users = [
    [
        "id" => 1,
        "first" => 'Ali',
        'last' => 'Samy',
        "age" => 25
    ],
    [
        "id" => 2,
        "first" => 'Ahmed',
        'last' => 'Samir',
        "age" => 29
    ],
    [
        "id" => 3,
        "first" => 'Mohamed',
        'last' => 'Yasser',
        "age" => 23
    ]
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <section class="container my-5">

    <?php if(isset($message)){?>
    <div class="alert alert-success" role="alert">
        <?php echo isset($message)? $message:'';?>
    </div>

    <?php } ?>

        <div class="my-3">
            <a class="btn btn-primary" href="./create.php">Create user</a>
        </div>


        <h1>Users table</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Age</th>
                </tr>
            </thead>
            <tbody>

                <!-- <?php

                    foreach ($users as $user) {
                        # code...

                        $id = $user['id'];
                        $first = $user['first'];
                        $last = $user['last'];
                        $age = $user['age'];

                        echo "
                        <tr>
                        <th scope='row'>$id</th>
                        <td>$first</td>
                        <td>$last</td>
                        <td>$age</td>
                        </tr>
                            ";
                    }


                ?> -->

                    <?php foreach ($users as $user){ ?>
                        
                    <tr>
                        <th scope="row"><?php echo $user['id'] ?></th>
                        <td><?php echo $user['first'] ?></td>
                        <td><?php echo $user['last'] ?></td>
                        <td><?php echo $user['age'] ?></td>
                    </tr>

                    <?php } ?>
            </tbody>
        </table>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>