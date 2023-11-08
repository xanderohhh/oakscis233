<div class="form-floating shadow bg-body-tertiary rounded mb-3">
    <input type="string" class="form-control" placeholder="Name" name="name" id="name" value="{{old('name', $product->name)}}">
    <label for="name">Name</label>
</div>
<div class="form-floating shadow bg-body-tertiary rounded mb-3">
    <input type="text" class="form-control" placeholder="Description" name="description" id="description" value="{{old('description', $product->description)}}">
    <label for="description">Description</label>
</div>
<div class="form-floating shadow bg-body-tertiary rounded mb-3">
    <input type="number" class="form-control" placeholder="Item Number" name="item_number" id="item_number" value="{{old('item_number', $product->item_number)}}">
    <label for="item_number">Item Number</label>
</div>
<div id="max_price" class="form-text">
    The maximum price you can enter is 999999.99
  </div>
<div class="form-floating shadow bg-body-tertiary rounded mb-3">
    <input type="decimal" class="form-control" placeholder="Price" name="price" id="price" value="{{old('price', $product->price)}}">
    <label for="price">Price</label>
</div>

<div class="form-floating shadow bg-body-tertiary rounded mb-3">
    <input type="string" class="form-control" placeholder="Image URL" name="image" id="image" value="{{old('image', $product->image)}}">
    <label for="image">Image URL</label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<a class="btn btn-danger" href="{{ route('products.index') }}">Cancel</a>

