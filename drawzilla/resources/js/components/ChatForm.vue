<template>
    <div class="input-group">
        <input id="btn-input" type="text" name="message" class="input-group" placeholder="Type your answer here..." v-model="newMessage" @keyup.enter="sendMessage">
        <span class="input-group-btn">
            <!--<button class="btn-sm" id="btn-chat" @click="sendMessage">-->
                <!--Send-->
            <!--</button>-->
        </span>
    </div>
</template>

<script>
    export default {
       //name: "ChatForm.vue",
        props: ['user'],

        data() {
            return {
                newMessage: '',
            }
        },

        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });

                this.newMessage = ''
            }
        }
    }
</script>

<style scoped>

</style>