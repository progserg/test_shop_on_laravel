@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    @forelse ($products as $product)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                {{ $product->name }}
                            </div>

                            <div class="panel-body">
                                {{ $product->price }} - {{$product->unitName}}
                            </div>
                        </div>
                    @empty
                        <p>No post created.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
