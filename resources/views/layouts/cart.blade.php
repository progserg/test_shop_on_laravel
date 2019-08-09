@verbatim
    <transition name="bounce">
        <template v-if="open">
            <div class="cart-wrapper">
                <div class="cart">
                    <h1>Корзина</h1>
                    <div class="cart-items">
                        {{--<div class="row" v-for="product in products" :key="product.id">
                            <div class="col">{{product.id}}</div>
                            <div class="col">{{product.name}}</div>
                            <div class="col">{{product.weight}}</div>
                            <div class="col">{{product.price}}</div>
                            <div class="col">
                                <input type="number" v-model.number="product.count">
                            </div>
                            <div class="colg">
                                <button @click="delFromCart(product)">-</button>
                            </div>
                        </div>--}}
                        <div class="row">
                            <button @click="open = !open">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </transition>
@endverbatim