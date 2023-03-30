<template>
    <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="#">Лабораторная работа №1 - Экспертная система "Выбор специальности для обучения в ВУЗе"</a>
            <div class="d-flex" v-if="flag">
                <a class="btn btn-outline-success" href="/start" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                    <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"></path>
                    </svg>
                    Начать тестирование</a>
            </div>
            <div class="d-flex" v-else>
                <a class="btn btn-outline-success" href="/start" role="button">Начать сначала</a>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "header",
    props:{
        flag:{default:null}
    }
}
</script>

<style scoped>

</style>
