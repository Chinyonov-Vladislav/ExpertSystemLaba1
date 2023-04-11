<template>
    <fragment>
        <main-header :flag = 1></main-header>
        <main class="container flex-fill">
            <section class="text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <img src="/photos/main.png" class="img-fluid" alt="Responsive image">
                        <p class="lead text-muted">Экспертная система по подбору специальности в ВУЗе</p>
                        <p>
                            <a href="/start" class="btn btn-primary my-2">Старт</a>
                        </p>
                    </div>
                </div>
            </section>
        </main>
        <main-footer></main-footer>
    </fragment>
</template>

<script>
export default {
name: "MainPage"
}
</script>

<style scoped>

</style>
