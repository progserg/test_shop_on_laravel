@extends('admin.layouts.app')
@section('content')
    @verbatim
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
                <div class="row" v-for="(product, index) in products" :key="index">
                    <div class="col-lg-2 col-lg-offset-1">
                        <input type="text" v-model="product.name">
                    </div>
                    <div class="col-lg-2">
                        <input type="text" v-model="product.price">&#8381;
                    </div>
                    <div class="col-lg-2">
                        <input type="text" v-model="product.amount">
                    </div>
                    <div class="col-lg-2">
                        <select v-model="product.unit_id">
                            <option v-for="(unit, index) in units" :key="index" v-bind:value="unit.id">{{unit.name}}
                        </select>
                        <input type="checkbox" v-model="product.show">
                    </div>
                    <div class="col-lg-2">
                        <button v-on:click="saveChanges(product)"><i class="fa fa-refresh"></i></button>
                        <button v-on:click="del(product.id, index)"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    @endverbatim
@endsection