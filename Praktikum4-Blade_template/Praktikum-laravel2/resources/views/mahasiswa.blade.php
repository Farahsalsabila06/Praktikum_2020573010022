<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title> Data Mahasiswa</title>
</head>
<body>
    {{-- tanpa kode blade --}}
    <h1>Data Mahasiswa</h1>
    <div class="container text-center mt-3 pt-3 bf-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nama ?>
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nilai?>
        </h1>
    </div> 
 
    {{-- menggunakan kode blade --}}
    <h1>Data Mahasiswa</h1>
    <div class="container text-center mt-3 pt-3 bf-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
           {{ $nama }}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nilai }}
        </h1>
    </div> 


    {{-- menggunakan kode blade {{ !! dan !! }} --}}
    <h1>Data Mahasiswa</h1>
    <div class="container text-center mt-3 pt-3 bf-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
           {{ !! $nama !! }}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ !! $nilai !!}}
        </h1>
    </div> 

     {{-- Kondisi if else --}}
     <h1>Data Mahasiswa</h1>
     <div class="container text-center mt-3 pt-3 bf-white">
         <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
         <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nilai }}</h1>
            <br>
            @if (($nilai >= 0) and (($nilai<50))
         <div class="alert alert-denger d-inline-block">
            Maaf,anda tidak lulus
            </div>
             @elseif(($nilai >=50) and ($nilai<=100))
             <div class="alert alert-success d-inline-block">
                Selamat anda lulus
                </div>
            @endif
        </div>

         {{-- Kondisi if else 2--}}
     <h1>Data Mahasiswa</h1>
     <div class="container text-center mt-3 pt-3 bf-white">
         <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
         <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nilai }}</h1>
            <br>
            @if (($nilai >= 0) and ($nilai<=50))
         <div class="alert alert-success d-inline-block">Maaf, anda tidak lulus</div>
             @elseif(($nilai >=50) and ($nilai<=100))
             <div class="alert alert-dark d-inline-block">Selamat anda lulus</div>
            @endif
        </div>
        

        {{-- Kondisi switch --}}
     <h1>Data Mahasiswa</h1>
     <div class="container text-center mt-3 pt-3 bf-white">
         <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
         <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nilai }}</h1>
            <br>
            @switch($nilai)
            @case(0)
         <div class="alert alert-danger d-inline-block">Tidak ikut ujian</div>
            @switch
            @case(75)
             <div class="alert alert-success d-inline-block">Lumanyan</div>
             @switch
            @case(100)
             <div class="alert alert-success d-inline-block">Sempurna</div>
             @switch
            @default
             <div class="alert alert-dark d-inline-block">nilai tidak valid</div>
            @endswitch
        </div>

        {{-- perulangan for--}}
        <div class="container text-center mt-3 pt-3 bf-white">
            @for ($i=0;$i<5;$++)
            <div class="alert alert-info d-inline-block">  Laravel </div>
            @endfor
            </div>

            {{-- perulangan for2--}}
        <div class="container text-center mt-3 pt-3 bf-white">
            @for ($i=0;$i<5;$++)
            <div class="alert alert-info d-inline-block">{{ $i }}</div>
            @endfor
            </div>

            {{-- perulangan while--}}
        <div class="container text-center mt-3 pt-3 bf-white">
           <?php $i=0;?>
           @while($i<5)
            <div class="alert alert-info d-inline-block"> {{ $i }} </div>
            <?php $i++?>
            @endwhile
            </div>


    {{-- perulangan forelse --}}
    <div class="container text-center mt-3 pt-3 bf-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <br>
        {{ 
        @foreach ($nilai as $val)
        @if ($val>=0) and ($val <50)
        <div class="alert alert-success d-inline-block">
            {{ $val }} 
            </div>
            @elseif(($val>=50) and ($val <=100)) 
            <div class="alert alert-success d-inline-block">
            {{ $val }}
            </div>
            @continue
            @endif
            <div class="alert alert-success d-inline-block">Tidak ada data... </div>
                {{ $val }} 
                </div>
                @endforelse
        </div> 

    {{-- contoh perintah @continue --}}
    <div class="container text-center mt-3 pt-3 bf-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <br>
        {{ 
        @foreach ($nilai as $val)
        @if ($val<50)
        @continue
        @endif
        <div class="alert alert-success d-inline-block">
            {{ $val }} 
            </div>
            @endforeach
            -}}
    </div> 

    {{-- contoh menggunakan perintah break --}}
    <div class="container text-center mt-3 pt-3 bf-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <br>
        {{ 
        @foreach ($nilai as $val)
        @if ($val<50)
        @break
        @endif
        <div class="alert alert-success d-inline-block">
            {{ $val }} 
            </div>
            @endforeach
            -}}
    </div> 

    {{-- Baris komentar dan php mode --}}
    <div class="container text-center mt-3 pt-3 bf-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <br>
        {{ 
        @foreach ($nilai as $val)
        @if ($val<50)
        @break
        @endif
        <div class="alert alert-success d-inline-block">
            {{ $val }} 
            </div>
            @endforeach
            -}}
    </div> 

    {{-- <div> copyright &copy; <?php echo date("Y"); ?>Program Studi Teknik Informatika - PNL </div> --}}
    </ol>
</body>
</html>