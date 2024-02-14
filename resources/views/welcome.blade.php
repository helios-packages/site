<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/js/tabler.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css">



</head>
<body>

    @php
        $packages = config('helios.packages');

      // {{-- @dd(
      //     $packages
      // ) --}}
    @endphp





    <div class="col-md-6 mx-auto">
      @foreach ($packages as $packageName => $package)
        <h3 class="mt-5">{{$packageName}}</h3>
        <div class="list-group">
          @foreach ($package as $title)
            <div class="list-group-item">
              <a href="#" class="text-body d-block">{{$title}}</a>
              <div class="text-secondary text-truncate mt-n1">
                mkdir {{$packageName}}
                ;
                cd ./{{$packageName}}
                ;
                composer init
                ;
                helios-packages/{{$packageName}}
              </div>
              <div class="text-secondary text-truncate mt-n1">
                helios-packages/{{$packageName}}
              </div>
            </div>
          @endforeach
        </div>
      @endforeach
    </div>



</body>
</html>
