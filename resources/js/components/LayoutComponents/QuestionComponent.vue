<template>
    <fragment>
        <main class="container">
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <p class="lead text-muted">Номер вопроса из базы данных - {{ id_question }}</p>
                        <p class="lead text-muted">{{ text_question }}</p>
                        <div v-for="answer in answers_on_question">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                       :id="'inlineRadio'+answer.id"
                                       :value="answer.id">
                                <label class="form-check-label" :for="'inlineRadio'+answer.id">{{
                                        answer.text_answer }}</label>
                            </div>
                        </div>
                        <button type="button" style="margin-top: 3%" class="btn btn-lg btn-outline-primary" @click="NextQuestion(id_question)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                            Далее
                        </button>
                        <div>
                            <modal :text_help="text_help"></modal>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </fragment>
</template>

<script>
export default {
    name: "QuestionComponent",
    data() {
        return {
            id_question: {default:null},
            text_question:{default:null},
            answers_on_question:{default:null},
            text_help: {default: null}
        }
    },
    created() {
        //первый вопрос
        if (this.help === null) {
            this.text_help = "Основной критерий, который будет влиять на подбор зал в интернет –кафе – это цель визита посетителя. Вам предложено на выбор один из трёх видов: выпить кофе, работа за компьютером, перекус. От вашего выбора будет зависеть результирующий ответ экспертной системы.";
            this.id_question = this.question.id;
            this.text_question = this.question.text_question;
            this.answers_on_question = this.answers;
        }
        //остальные вопросы
        else {
            this.text_help = this.help;
        }
    },
    props: {
        question: {default: null},
        answers: {default: null},
        help: {default: null}
    },
    methods: {
        NextQuestion(id_question) {
            try {
                console.log("Следующий вопрос")
                let radiobuttons = document.getElementsByName("inlineRadioOptions");
                let number_answer = 0;
                for (let i = 0; i < radiobuttons.length; i++) {
                    if (radiobuttons[i].checked) {
                        number_answer = radiobuttons[i].value;

                    }
                }
                console.log("Номер вопроса: "+id_question);
                console.log("Номер ответа: "+number_answer);
                if (number_answer === 0) {
                    alert("Выберите ответ")
                } else if (number_answer > 0) {
                    axios.post('/get_next_question', {
                        id_question: id_question,
                        id_answer: number_answer
                    }).then((response) => {
                        if (response.data.isResult === true) {
                            console.log(response.data)
                            if(response.data.id_result.length===1)
                            {
                                window.location.href = "/result/"+response.data.id_result[0].id_result;
                            }
                        } else if (response.data.isNextQuestion === true) {
                            this.answers_on_question = response.data.answers_for_next_question;
                            if (response.data.next_question.length ===1) {
                                this.id_question = response.data.next_question[0].id;
                                this.text_question = response.data.next_question[0].text_question;
                            }
                            if (response.data.help.length ===1) {
                                this.text_help = response.data.help[0].text_help;
                            }
                            let radiobuttons = document.getElementsByName("inlineRadioOptions");
                            let number_answer = 0;
                            for (let i = 0; i < radiobuttons.length; i++) {
                               radiobuttons[i].checked = false;
                            }
                        }
                    })
                }
            }
            catch (err)
            {
                alert(err);
            }

        },
    },

}
</script>

<style scoped>

</style>
