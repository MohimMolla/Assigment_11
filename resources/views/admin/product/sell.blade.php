<!-- resources/views/sell-product.blade.php -->

@extends('layouts.admin-templeate')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                {{-- <form method="POST" action="  {{ url('/product/sell', ['id' => $product->id, 'quantity' => $product->quantity])  }}"> --}}
                <form method="POST"
                    action="{{ url('/product/sell', ['id' => $product->id, 'quantity' => $product->quantity]) }}">
                    @csrf
                    <div class="form-group">
                        {{$product->quantity}} <br>
                        <label for="quantity">Sell Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity"
                            value="{{ old('quantity') }}">
                        @error('quantity')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Sell Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
