<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>{{ $product->name }}</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Image Column -->
            <div class="col-6 d-flex justify-content-end align-items-center my-3">
                <img src="{{ $product->image }}" class="img-fluid">
            </div>
            <div class="col-6 d-flex justify-content-start align-items-center">
                <div class="card shadow p-3 my-3 bg-body-tertiary rounded" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Item Number: {{ $product->item_number }}</h6>
                        <p class="card-text">{{ $product->description }}</p>
                        <h5 class="card-title">${{ $product->price }}</h5>
                        <a href="#" class="card-link">Buy</a>
                        <a href="{{route('products.index')}}" class="card-link">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
