<template>
    <fragment>
        <main-header></main-header>
        <error-component :text_error="this.text_error"></error-component>
        <main-footer></main-footer>
    </fragment>
</template>

<script>
export default {
    name: "ErrorPage",
    data() {
        return {
            flag_start:false
        }
    },
    props: ['text_error']
}
</script>

<style scoped>

</style>
