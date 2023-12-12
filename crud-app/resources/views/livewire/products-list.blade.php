<div>
    <div class="search-bar col-2">
       <form wire:submit='searchProducts' class="input-group">
        <input type="text" wire:model="q" class="form-control"/>
        <button type="submit" class="btn btn-info btn-sm">Search</button>
        <button type="button" wire:click="cancel" class="btn btn-danger btn-sm">Cancel</button>
    </form> 
    </div>
    
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
</div>
