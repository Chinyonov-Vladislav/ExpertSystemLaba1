<template>
    <fragment>
        <main-header  :flag = flag_start></main-header>
        <question-component
            :question="question"
            :answers="answers_on_question"></question-component>
        <main-footer></main-footer>
    </fragment>
</template>

<script>
import QuestionComponent from "../LayoutComponents/QuestionComponent";

export default {
    name: "QuestionPage",
    components: {QuestionComponent},
    props: {
        question: {default: null},
        answers_on_question: {default:null},
        flag_start:{default:null}
    },
    data() {
        return {
            Number_question: {
                type: Number,
                default: 1
            }
        }
    }
}
</script>

<style scoped>

</style>
