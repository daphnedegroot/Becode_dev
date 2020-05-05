<template>
    <ul class="chat">
        <li class="left clearfix" v-for="message in messages">
            <div class="chat-body clearfix" >
                <!--<div class="header">
                    <strong class="primary-font">
                        {{ message.user.name }}
                    </strong>
                </div>-->
                <p>
                    {{ message.message }}
                </p>
            </div>
            <small class="badge badge-pill float-right" :style="badgeClass">
                {{ message.user.firstname}}
            </small>
        </li>
    </ul>
</template>

<script>
    export default {
        // name: "ChatMessages.vue",
        props: [
            'messages',
            'color',
            'user'
        ],
        computed: {
            badgeClass(){
                return 'background-color:#eee; font-size: 0.6em; color: #000';
            }
        }
    }
</script>

<style scoped>

</style>