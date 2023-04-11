<template>
    <fragment>
        <main-header :flag=3></main-header>
        <main class="container mb-4 mt-4 flex-fill">
            <vue-tree
                ref="tree"
                style="width: 100%; height: 80vh; border: 1px solid gray; z-index: 0"
                :dataset="this.dataGraph"
                :config="this.treeConfig">
                <template v-slot:node="{ node, collapsed }">
                    <div class="card" :style="{ border: collapsed ? '2px solid grey' : '' }">
                        <div class="card-header .bg-warning">
                            {{ node.mark }}
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#info" @click="show_modal(node, $event)"
                                    v-model="isModalVisible">Подробнее</button>
                        </div>
                    </div>
                </template>
            </vue-tree>
            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-outline-warning btn-lg col mr-4" @click="controlScale('+')">+</button>
                <button class="btn btn-outline-warning btn-lg col ml-4" @click="controlScale('-')">-</button>
            </div>
            <div class="modal fade" data-backdrop="static" id="info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{this.current_node.mark}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" @click="closeModal()">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{this.current_node.text}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="closeModal()">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <main-footer></main-footer>
    </fragment>
</template>

<script>
export default {
    name: "ShowingGraphPage",
    data() {
        return {
            flag_start: true,
            treeConfig: {nodeWidth: 200, nodeHeight: 200, levelHeight: 200},
            current_node: {
                mark: null,
                text: null
            },
            isModalVisible:false
        }
    },
    methods:{
        show_modal(node_info, event){
            event.stopPropagation();
            this.current_node.mark = node_info.mark
            this.current_node.text = node_info.text
            this.isModalVisible = true

        },
        closeModal()
        {
            this.isModalVisible = false
        },
      controlScale(command)
      {
          switch (command)
          {
              case "+":
              {
                  this.$refs.tree.zoomIn();
                  break
              }
              case "-":
              {
                  this.$refs.tree.zoomOut();
                  break
              }
          }
      }
    },
    props: ['dataGraph'],
    mounted() {
        console.log(this.dataGraph)
    }
}
</script>

<style scoped>
.rich-media-node {
    width: 80px;
    padding: 8px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    color: white;
    background-color: #f7c616;
    border-radius: 4px;
}
</style>
