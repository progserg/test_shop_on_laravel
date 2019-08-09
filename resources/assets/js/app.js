/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


if ($('#app').length > 0) {
    Vue.component('feedback', require('./components/Feedback.vue'));
    Vue.component('cart', require('./components/Cart.vue'));

    const app = new Vue({
        el: '#app',
        data: {
            products: [],
            cart: ''
        },
        methods: {
            add(product) {
                var arr = [];
                var exist = false;
                var data = {
                    id: product.id,
                    name: product.name,
                    price: product.price,
                    count: 1
                };
                if (window.localStorage.getItem('test')) {
                    var tmp = JSON.parse(window.localStorage.getItem('test'));

                    if (tmp[0]) {
                        for (var i = 0; i < tmp.length; i++) {
                            if (tmp[i].id === product.id) {
                                tmp[i].count++;
                                exist = true;
                            }
                            arr.push(tmp[i]);
                        }
                    }
                }

                if (!exist) {
                    arr.push(data);
                }
                this.cart = arr;
                arr = JSON.stringify(arr);
                window.localStorage.setItem('test', arr);
            },
            getAll(){
                axios.post('/products')
                    .then(response => {
                            this.products = response.data.products;
                        }
                    )
                    .catch(response => console.log(response.data));
            },
            fillCart(){
                if (window.localStorage.getItem('test')) {
                    this.cart = JSON.parse(window.localStorage.getItem('test'));
                }
            }
        },
        created: function () {
            this.getAll();
            this.fillCart();
        }
    });
}

if ($('#admin').length > 0) {
    const app = new Vue({
        el: '#admin',
        data: {
            products: [],
            units: [],
        },
        methods: {
            getAll(){
                axios.post('admin/products')
                    .then(response => {
                            this.products = response.data.products;
                        }
                    )
                    .catch(response => console.log(response.data));
            },
            getUnits(){
                axios.post('/units')
                    .then(response => {
                            this.units = response.data.units;
                        }
                    )
                    .catch(response => console.log(response.data));
            },
            saveChanges(product){
                axios.post('admin/savechanges/'+ JSON.stringify(product))
                    .then(response => {
                        //
                    })
                    .catch(response => console.log(response.data));
            },
            del(id, index){
                axios.post('admin/del/'+ id)
                    .then(response => {
                            this.products.splice(index, 1);
                    })
                    .catch(response => console.log(response.data));
            }
        },
        created: function () {
            this.getAll();
            this.getUnits();
        }
    });
}
