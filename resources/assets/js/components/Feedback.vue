<template>
    <div>
        <form name="sentMessage" id="contactForm" @submit.prevent novalidate>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row control-group">
                        <div class="col-lg-12 controls">
                            <input type="text" @focus="noName = false" placeholder="Имя" v-model="name" id="name">
                            <p class="help-block text-danger" @click="noName = false" v-if="noName">
                                Пожалуйста, укажите Ваше имя</p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="col-lg-12">
                            <input type="email" placeholder="E-mail" @focus="noEmail = false" v-model="email"
                                   id="email">
                            <p class="help-block text-danger" @click="noEmail = false" v-if="noEmail">
                                Пожалуйста, укажите e-mail</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" placeholder="Телефон" v-model="phone" id="phone">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row control-group">
                        <div class="col-lg-12 controls">
                            <textarea name="" placeholder="Сообщение" @focus="noMsg = false" v-model="msg"
                                      id="message"></textarea>
                            <p class="help-block text-danger" @click="noMsg = false" v-if="noMsg">
                                Пожалуйста, напишите сообщение длинной не менее 30 символов</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="success"></div>
            <div class="row">
                <div class="col-lg-12 text-right">
                    <button @click="send" class="btn btn-success btn-lg brown">Отправить</button>
                </div>
            </div>
        </form>
        <div class="popup-msg text-center" v-if="success">
            <p>{{popupMsg}}</p>
            <button @click="success = false"><i class="fa fa-close"></i></button>
        </div>
        <div class="popup-msg" v-if="failed">
            <p>{{popupMsg}}</p>
            <button @click="failed = false"><i class="fa fa-close"></i></button>
        </div>
    </div>
</template>

<style scoped>
    .popup-msg {
        margin: auto;
        position: fixed;
        width: 320px;
        height: 160px;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: white;
        color: #2a88bd;
        font-size: 18px;
    }
</style>


<script>
    export default{
        data: function () {
            return {
                name: '',
                email: '',
                phone: '',
                msg: '',
                noName: false,
                noEmail: false,
                noMsg: false,
                success: false,
                failed: false,
                popupMsg: ''
            }
        },
        methods: {
            send: function () {
                if (this.name == '') {
                    this.noName = true;
                }
                if ((this.email == '') || (this.email.match(/^.+@.+\..+$/igm) == null)) {
                    this.noEmail = true;
                }
                if (this.msg == '' || this.msg.length < 30) {
                    this.noMsg = true;
                }
                if (!this.noName && !this.noEmail && !this.noMsg) {
                    axios.post('/send', {
                        name: this.name,
                        email: this.email,
                        phone: this.phone,
                        msg: this.msg
                    })
                        .then(response => {
                            var data = response.data;
                            if (data) {
                                if (data.status == 'success') {
                                    this.success = true;
                                    this.popupMsg = 'Ваша заявка принята';
                                } else if (data.status == 'failed') {
                                    this.failed = true;
                                    this.popupMsg = 'Ощибка при отправке';
                                }
                            }
                        })
                        .catch(response => console.log(response.data));
                }
            }
        }
    }
</script>