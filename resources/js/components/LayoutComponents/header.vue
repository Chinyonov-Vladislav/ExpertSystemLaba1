<template>
    <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container-fluid flex-column">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand text-dark" href="/">Лабораторная работа №1 - Экспертная система "Выбор
                        специальности для обучения в ВУЗе"</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="d-flex" v-if="flag===1">
                        <a class="btn btn-outline-success d-flex align-items-center justify-content-center"
                           href="/admin" role="button">Войти в админ-панель</a>
                        <a class="btn btn-outline-success mr-4 ml-4 d-flex align-items-center justify-content-center"
                           href="/show_graph" role="button">Просмотр графа</a>
                        <a class="btn btn-outline-success d-flex align-items-center justify-content-center"
                           href="/start" role="button">Начать тестирование</a>
                    </div>
                    <div class="d-flex" v-else-if="flag===2">
                        <a class="btn btn-outline-success d-flex align-items-center justify-content-center  mr-4" href="/"
                           role="button">На главную страницу</a>
                        <a class="btn btn-outline-success d-flex align-items-center justify-content-center ml-4"
                           href="/start" role="button">Начать сначала</a>
                    </div>
                    <div class="d-flex" v-else>
                        <a class="btn btn-outline-success d-flex align-items-center justify-content-center" href="/"
                           role="button">На главную страницу</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "header",
    props: {
        flag: {default: null}
    }
}
</script>

<style scoped>

</style>
