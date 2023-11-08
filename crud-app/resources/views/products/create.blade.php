@extends('layout')
@section('content')
    <h3>Add New Product</h3>

    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <span>{{$error}}</span><br>
        @endforeach
    </div>
    @endif

    <form class="mx-1" method="POST" action="{{ route('products.store') }}">
        @csrf
        @include('products.form')
    </form>
@endsection
