<template>
    <fragment>
        <footer class="bg-dark text-center text-white sticky-footer">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                {{currentDate.getFullYear()}}
                <br>
                Автор:
                <a class="text-white" href="https://vk.com/vlad20001006">Чинёнов Владислав Евгеньевич</a>
            </div>
            <!-- Copyright -->
        </footer>
    </fragment>
</template>

<script>
export default {
    name: "footer",
    data(){
        return {
            currentDate: new Date,
        }
    }
}

</script>

<style scoped>

</style>
