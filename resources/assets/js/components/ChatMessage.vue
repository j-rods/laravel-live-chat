<template>
    <div>
        <p>{{ message.message }}</p>
        <small>{{ message.user[0].name }}</small>
    </div>

</template>

<script>
export default {
    props: ['message']
}

</script>

<style lang="css">
</style>