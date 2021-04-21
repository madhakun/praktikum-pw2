<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
</head>

<body>
    <h1>Program <?php echo $nama_prodi?></h1>
    <h2>Nama Ketua Jurusan : <?php echo $kajur ?></h2>
    <p>Nama Universitas : <b>{{$universitas}} </b></p>
    <p>Program studi sistem informasi mulai beroperasi pada tahun 2014</p>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque tempore dolorum repellendus quidem nihil
        similique libero fugiat, recusandae, assumenda labore voluptas! Expedita officiis soluta corrupti totam natus
        aliquam? Nam, accusamus.</p>

    @if(15 < 10)
        <h2>Berhasil</h2>
    @else
        <h2>salah</h2>
    @endif
</body>

</html>
