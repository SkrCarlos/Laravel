<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primera Vista</title>
</head>
<body>
    {{-- <h1>Hola mundo - {!! "Hola mundo $nombre $apellido <script>alert('Hola Mundo')</script>" !!} </h1> --}}
    <h1>Hola mundo - {{ "Hola mundo $nombre $apellido" }} </h1>

    <ul>

        {{-- <?php foreach ($posts as $key => $post): ?>
            <li> {{ $post }} </li>
        <?php endforeach; ?> --}}

        {{-- @foreach ($posts as $post)
            <li> {{ $post }} </li>
        @endforeach --}}

        @forelse ($posts as $post)

            {{-- <?php dd($loop)?> --}}

            <li> 
                @if ($loop->first)
                    Primero:
                @elseif ($loop->last)
                    Último:
                @else
                    Medio: 
                @endif
                
                {{ $post }}
            </li>
        @empty 
            <li>Vacio</li>
        @endforelse

    </ul>

</body>
</html>