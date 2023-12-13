<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <label for="name">nama</label>
        <input type="text" name="name" id="name">
        <br>
        <br>
        <label for="email">email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="pesan">pesanan</label>
        <textarea name="pesan" id="pesan" cols="30" rows="10"></textarea>
        <button type="submit" name="submit">
            enter
        </button>
    </form>
    <?php
    if (isset($_GET["submit"])) {
        $nama = $_GET["name"];
        $email = $_GET["email"];
        $pesan = $_GET["pesan"];
    ?>

        <h1><?= $nama ?></h1>
        <h1><?= $email ?></h1>
        <h1><?= $pesan ?></h1>
    <?php
    }
    ?>

</body>

</html>