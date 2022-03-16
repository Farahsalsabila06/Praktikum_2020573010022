<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    {{-- <h1>Daftar Mahasiswa</h1>
    <ol>
        <li>Farah Salsabila</li>
        <li>Khairul Khazil</li>
        <li>Anisa Salwa</li>
        <li>Sepkha Wulan Dari</li>  --}}

        {{-- <h1>Daftar Mahasiswa</h1>
        <ol>
        <li><?php echo $mahasiswa01; ?></li>
        <li>Khairul Khazil</li>
        <li>Anisa Salwa</li>
        <li>Sepkha Wulan Dari</li>
        <ol>  --}}

        {{-- <h1>Daftar Mahasiswa</h1>
        <ol>
        <li><?php echo $mahasiswa01; ?></li>
        <li><?php echo $mahasiswa02; ?></li>
        <li><?php echo $mahasiswa03; ?></li>
        <li><?php echo $mahasiswa04; ?></li>
    </ol>    --}}

     {{-- <h1>Daftar Mahasiswa</h1>
        <ol>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>
    </ol>   --}}

    {{-- <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php foreach ($mahasiswa as $nama){
            echo "<li>$nama</li>";
        }
        ?>
    </ol>   --}}

   {{-- <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php echo $mahasiswa01; ?></li>
    </ol>   --}}

    {{-- <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php foreach ($mahasiswa as $nama){
            echo "<li>$nama</li>";
        }
        ?>
    </ol>   --}}
    <div class="container text-center mt-3 pt-3 bf-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nama }}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nilai }}
        </h1>
    </div>

    <div> copyright &copy; <?php echo date("Y"); ?>Program Studi Teknik Informatika - PNL </div>
    </ol>
</body>
</html>