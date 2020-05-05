/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/game.vue -> <example-component></example-component>
 */


Vue.component('chat-form', require('./components/ChatForm.vue').default);
Vue.component('chat-messages', require('./components/ChatMessages.vue').default);
Vue.component('timer', require('./components/Timer.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

    data: {
        messages: [],
    },

    created() {
        this.fetchMessages();

        Echo.private('chat')
            .listen('MessageSent', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.user,
                });
            });
    },

    methods: {
        fetchMessages() {
            axios.get('/messages').then(response => {
               this.messages = response.data;
            });
        },

        addMessage(message) {
            this.messages.push(message);

            axios.post('/messages', message).then(response => {
               console.log(response.data);
            });
        }
    }
});

const createTimer = new Vue({
    el: '#timer',
    components: {
        'timer': Timer
    },
    data: {
        isRunning: false,
        minutes:0,
        secondes:5,
        time:0,
        timer:null,
        rounds: 3
    },
    computed: {
        prettyTime () {
            let time = this.time / 60
            let minutes = parseInt(time)
            let secondes = Math.round((time - minutes) * 60)
            return minutes+":"+secondes
        }
    },
    methods: {
        start () {
            this.isRunning = true
            if (!this.timer) {
                this.timer = setInterval( () => {
                    if (this.time > 0) {
                        this.time--
                    } else {
                        clearInterval(this.timer);
                        if (this.rounds !== 0) {
                            this.rounds--;
                        } else {
                            this.reset()
                        }
                    }
                }, 1000 )
            }
        },
        reset () {
            this.isRunning = false
            this.time = 0
            this.secondes = 5
            this.minutes = 0
        }
    }

});
