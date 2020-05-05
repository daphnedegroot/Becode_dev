<template>
    <div class="timer">{{ time | prettify }}</div>
</template>

<script>
    export default {
        name: "timer.vue",

        props: [
            'timer'
        ],
        filters: {
            prettify : function(value) {
                let data = value.split(':')
                let minutes = data[0]
                let secondes = data[1]
                if (minutes < 10) {
                    minutes = "0"+minutes
                }
                if (secondes < 10) {
                    secondes = "0"+secondes
                }
                return minutes+":"+secondes
            }
        }
    }
</script>

<style scoped>

</style>