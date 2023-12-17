@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="col-md-10">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                <a class="btn btn-info" href="{{route('product.create')}}">Create Product</a>
                <a class="btn btn-info" href="{{url('sellshow')}}">Sell Product</a>
               
                <table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        {{--<td>Category</td>--}}
                        <td>Action</td>
                    </tr>
                   
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        {{--<td>{{ $product->category }}</td>--}}
                        {{--<td>{{ $product->quantity }}</td>--}}
                        <td>
                            <a href="{{route('product.edit',$product->id)}}">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
            
        </div>
        
    </div>
@endsection
