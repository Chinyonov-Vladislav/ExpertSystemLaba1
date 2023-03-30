<template>
    <fragment>
        <main-header :flag = flag_start></main-header>
        <main class="container">
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <img src="/photos/main.jpg" class="img-fluid" alt="Responsive image">
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
name: "MainPage",
    props:{
        flag_start:{default:null}
    }
}
</script>

<style scoped>

</style>
