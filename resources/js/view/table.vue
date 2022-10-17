<template>
    <div>
        <table class="table tb-style table-bordered border-primary">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">NÚMERO</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">DELETAR</th>
                </tr>
            </thead>

            <tbody>
                <!-- Inserindo dados do array, v-for funciona como se fosse um loop de repetição -->
                <tr v-for="contato of contatos" :key="contato.id">
                    <th scope="row">{{ contato.id }}</th>
                    <td>{{ contato.nome }}</td>
                    <td>{{ contato.numero }}</td>

                    <!-- @click serve como o onclick -->
                    <td><button @click="editar(contato)" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"><i class="bi bi-pencil-fill"></i></button></td>
                    <td><button @click="excluir_contato(contato)" type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></td>
                </tr>
            </tbody>

        </table>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR CONTATO</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- submit do laravue -->
                    <form @submit.prevent="atualizar_contato">
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="bi bi-person-bounding-box"></i></span>

                                <!-- v-model="" serve para informarmos que o valor do input será passado para o data() -->
                                <input type="text" class="form-control" v-model="contato.nome"
                                    placeholder="Nome do contato" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="bi bi-telephone-plus"></i></span>

                                <!-- v-model="" serve para informarmos que o valor do input será passado para o data() -->
                                <input type="text" v-model="contato.numero" class="form-control"
                                    onkeypress="mask(this, mphone);" placeholder="Telefone do contato"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-success">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

// Importando arquivo responsável pela requisição da api
import Contatos from '../services/contatos.js';

export default {

    // Criando array para armazenar os contatos (dados da api)
    data() {
        return {
            contatos: [],
            contato: {
                id: '',
                nome: '', // nome do contato
                numero: '' // número do contato
            }
        }
    },

    // Ao instanciar o App.vue, chamamos o método para listar nossos contatos
    mounted() {
        this.listar();
    },

    methods: {

        listar() {
            Contatos.listarContatos().then(resposta => {
                console.log(resposta.data.contatos);
                this.contatos = resposta.data.contatos;
            })
        },

        // Função para salvar contatos
        atualizar_contato() {
            Contatos.atualizarContatos(this.contato).then(resposta => {
                // Trazendo o retorno da api
                alert(resposta.data.mensagem);

                // listando dados atualizados
                this.listar();
            })
        },

        // Enviar os dados para o modal
        editar(contato) {
            this.contato = contato
        },

        // Excluindo contatos
        excluir_contato(contato) {
            Contatos.excluirContatos(contato).then(resposta => {
                // trazendo retorno da api
                alert(resposta.data.mensagem);

                // listando dados atualizados
                this.listar();
            })
        }
    }
}

</script>

<style>
.tb-style {
    width: 500px;
    color: #fff;
    margin-top: 7%;
    text-align: center;
    margin-left: 25%;
}
</style>