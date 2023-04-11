<template>
    <fragment>
        <main-header :flag=3></main-header>
        <main class="container flex-fill">
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <img src="/photos/photo.png" class="img-fluid" alt="Responsive image">
                        <p class="lead text-muted">Результат работы экспертной системы</p>
                        <p class="lead text-muted">{{ result }}</p>
                        <div>
                            <a class="btn btn-lg btn-outline-success" style="margin-top: 3%" href="/" role="button">Стартовая
                                страница</a>
                        </div>
                        <div>
                            <a class="btn btn-lg btn-outline-success" style="margin-top: 3%" href="/start"
                               role="button">Начать сначала</a>
                        </div>
                        <div>
                            <modal :text_help="help"></modal>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <main-footer></main-footer>
    </fragment>
</template>

<script>
export default {
    name: "ResultPage",
    data() {
        return {
            help: {default: null},
            result: {default: null}
        }
    },
    props: {
        text_help: {default: null},
        text_result: {default: null},
        flag_start: {default: null}
    },
    created() {
        if (this.text_help.length === 1) {
            this.help = this.text_help[0].text_help;

        }
        if (this.text_result.length === 1) {
            this.result = this.text_result[0].text_result;
        }
    },
    mounted() {
        console.log(this.text_help);
        console.log(this.text_result);
    }
}
</script>

<style scoped>

</style>
