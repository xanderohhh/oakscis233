<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Episodes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @foreach ($episodes as $episode)
                <div class="col-md-2 mb-2">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $episode->imageURL }}" class="card-img-top" alt="a still from the respective episode">
                        <div class="card-body">
                            <strong><p class="card-text">Name: {{$episode->name}}</p></strong>
                            <p class="card-text">Season: {{$episode->season}} Episode: {{$episode->episode}}</p>
                            <p class="card-text">Summary: {!!$episode->summary!!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
