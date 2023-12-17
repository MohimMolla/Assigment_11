<!-- resources/views/sell-product.blade.php -->

@extends('layouts.admin-templeate')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form method="POST" action="{{ url('sell') }}">
                    @csrf
                    <div class="form-group">
                        <label for="quantity">Sell Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}">
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
