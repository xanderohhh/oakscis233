@extends('layout')

@section('content')
    <div class="container-fluid">
        <!-- Pagination Links and New Product Button at the top -->
        <div class="d-flex justify-content-start">
            <a class="btn btn-success mb-2" href="{{ route('products.create') }}">New Product</a>
            <div class="position-absolute top-5 end-0">{{ $products->links() }}</div>
        </div>


        <!-- Products List -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Item Number</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class=" align-middle " scope="row"><img src="{{ $product->image }}"
                                class="rounded img-thumbnail" /></th>
                        <td class=" align-middle "><a
                                href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></td>
                        <td class=" align-middle ">${{ $product->price }}</td>
                        <td class=" align-middle ">{{ $product->item_number }}</td>
                        <td class=" align-middle ">

                            <a href="{{route('products.edit', $product->id)}}" role="button" class="btn btn-warning mb-1">Edit</a>

                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger  mt-1" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Links at the bottom -->
        <div class="d-flex justify-content-center">{{ $products->links() }}</div>
    </div>
@endsection
