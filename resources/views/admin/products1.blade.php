@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Hi, Admin!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Товары</h2>
            </div>
            @foreach($products as $key => $product)
                <div class="row">
                    <form action="admin/update" method="post">
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <div class="col-lg-2 col-lg-offset-1">
                            <input type="text" name="name" value="{{$product->name}}">
                        </div>
                        <div class="col-lg-2">
                            <input type="text" name="price" value="{{$product->price}}">&#8381;
                        </div>
                        <div class="col-lg-2">
                            <input type="text" name="amount" value="{{$product->amount}}">
                        </div>
                        <div class="col-lg-2">
                            <input name="show" type="checkbox" @if($product->show) checked @endif>
                        </div>
                        <div class="col-lg-2">
                            <input type="submit">
                            {{--<button v-on:click="del(product.id, index)"><i class="fa fa-trash"></i></button>--}}
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection