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
    <style>
        .img-thumbnail {
            width: 200px;  
            height: auto;  
        }
    </style>
    <title>Products</title>
</head>

<body>
    <h1>Products</h1>

    <div class="container-fluid">
        <!-- Pagination Links at the top -->
        {{ $products->links() }}

        <!-- Products List -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Item Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row"><img src="{{ $product->image }}" class="rounded img-thumbnail"/></th>
                        <td><a href="{{route('products.show', $product->id)}}">{{ $product->name }}</a></td>
                        <td>${{ $product->price }}</td>
                        <td>{{ $product->item_number }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Links at the bottom -->
        {{ $products->links() }}
    </div>

</body>


</html>
