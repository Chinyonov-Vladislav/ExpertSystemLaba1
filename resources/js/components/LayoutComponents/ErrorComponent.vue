<template>
    <fragment>
        <main class="container flex-fill">
            <section class="text-center container">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <img src="/photos/error.png" class="img-fluid" alt="Responsive image" width="">
                        <p class="lead text-muted">{{text_error}}</p>
                        <p><a href="/" class="btn btn-primary my-2">Стартовая страница</a></p>
                    </div>
                </div>
            </section>
        </main>
    </fragment>
</template>

<script>
export default {
    name: "ErrorComponent",
    props: ['text_error']
}
</script>

<style scoped>

</style>
