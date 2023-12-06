<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>Episodes</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @if (count($episodes)===0)
                <p>There are no episodes to show.</p>
            @else
                @foreach ($episodes as $episode)
                    <div class="col-auto mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $episode->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Season: {{ $episode->season }} Episode: {{ $episode->episode }}
                                </h5>
                                <h5 class="card-title">Name: {{ $episode->name }}</h5>
                                <p class="card-text">{{ $episode->summary }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>

</body>

</html>
