@extends('layouts.app')

@section('content')
    @verbatim
        <div class="menu container">
            <h1>Наше меню</h1>
            <ul class="menu-list">
                <li v-for="product in products">
                <span>
                    {{product.name}}
                </span>
                    <span>{{product.amount}}{{product.units}}/{{(product.price)}}&#8381;
                        <button class="add_item" v-on:click="add(product)">
                            <svg class="add-steak-svg">
                                <use xlink:href="#add-steak-svg"></use>
                            </svg>
                        </button>
                    </span>
                </li>
            </ul>
        </div>
    @endverbatim
@endsection