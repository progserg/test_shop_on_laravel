<template>
    <div>
        <transition name="bounce">
            <div class="cart-wrapper" v-if="open">
                <div class="cart">
                    <h1>Корзина</h1>
                    <div class="cart-items">
                        <div class="row" v-for="(product, index) in products" :key="index">
                            <div class="col">{{product.name}}</div>
                            <div class="colg">
                                <button @click="minus([index, product])">-</button>
                            </div>
                            <div class="col">
                                <input type="number" v-model.number="product.count">
                            </div>
                            <div class="colg">
                                <button @click="add([index, product])">+</button>
                            </div>
                            <div class="col">{{(product.price) * product.count}}&#8381;</div>
                            <div class="colg" style="margin-left: 10px;">
                                <button @click="del(product)"><i class="fa fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            Всего товаров: {{sumProducts}}

                        </div>
                        <div class="col">
                            Сумма к оплате: {{sumMoney}}&#8381;

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <button @click="">Заказать</button>
                        </div>
                        <div class="col-lg-6">
                            <button @click="open = !open">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
        <div class="cartBottom" v-if="!open && products.length > 0" v-on:click="open = !open"></div>
    </div>
</template>

<script>
    export default {
        props: ['products'],
        data: function () {
            return {
                open: false,
            }
        },
        methods: {
            add(arr){
                this.products[arr[0]].count++;
                var tmp = JSON.stringify(this.products);
                window.localStorage.setItem('test', tmp);
            },
            minus(arr){
                if (this.products[arr[0]].count > 1) {
                    this.products[arr[0]].count--;
                    var tmp = JSON.stringify(this.products);
                    window.localStorage.setItem('test', tmp);
                }
            },
            del(product){
                this.products.splice(this.products.indexOf(product), 1);
                var tmp = JSON.stringify(this.products);
                window.localStorage.setItem('test', tmp);
            },
        },
        computed: {
            sumMoney: function () {
                var sum = 0;
                for (var i = 0; i < this.products.length; i++) {
                    sum += (this.products[i].price * this.products[i].count);
                }
                return (sum);
            },
            sumProducts: function () {
                var sum = 0;
                for (var i = 0; i < this.products.length; i++) {
                    sum += this.products[i].count;
                }
                return sum;
            }
        }
    }
</script>
