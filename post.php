<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POST</title>
    </head>
    <body>
        <form action="" method="post">
            <div>
                <label for="">Nama:</label>
                <input type="text" name="nama">
            </div>
            <div>
                <label for="">Kelas:</label>
                <input type="text" name="kelas">
            </div>
            <button type="submit">Kirim</button>
        </form>
        <p>
            <?php echo $_POST['nama'] ?>
        </p>
    </body>
</html>