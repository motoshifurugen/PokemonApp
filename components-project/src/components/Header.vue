<template>
    <div>
        <h1>{{ title }}</h1>
        <p>{{ text }}</p>
        <p>Welcome! {{ username }}!</p>
    </div>
</template>

<script>
export default {
    props: {
        username: String
    },
    data(){
        return {
            title: "Header",
            text: "Hello Vue.js!"
        }
    }
}
</script>

<style scoped>
div{
    border: 1px solid blue
}
h1{
    color: blue
}
p{
    color:blue
}
</style>
