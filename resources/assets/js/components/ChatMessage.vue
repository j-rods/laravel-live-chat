<template>
    <div>
        <p>{{ message.message }}</p>
        <small v-if="!message.user.name">{{ message.user.name }}</small>
        <small v-else>{{ message.user.name }}</small>
    </div>

</template>

<script>
export default {
    props: ['message'],

}

</script>

<style lang="css">
.chat-message {
    padding: 1rem;
}
.chat-message > p {
    margin-bottom: .5rem;
}
</style>

