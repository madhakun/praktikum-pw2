<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <h1>Fitur Upload</h1>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <label for="gambar">Upload gambar anda disini</label><br>
        <input type="file" name="gambar" id="gambar"><br>
        <input type="submit" value="Kirim" name="submit">
    </form>
</body>
</html>