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
                <!-- Inserindo dados do array, como se fosse um loop de repetição -->
                <tr v-for="contato of contatos" :key="contato.id">
                    <th scope="row">{{ contato.id }}</th>
                    <td>{{ contato.nome }}</td>
                    <td>{{ contato.numero }}</td>
                    <td><button type="button" class="btn btn-primary"><i class="bi bi-pencil-fill"></i></button></td>
                    <td><button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></td>
                </tr>
            </tbody>

        </table>
    </div>
</template>

<script>

    // Importando arquivo responsável pela requisição da api
    import Contatos from '../services/contatos.js';

    export default {

        // Criando array para armazenar os contatos (dados da api)
        data() {
            return {
                contatos: []
            }
        },

        // Ao instanciar o App.vue, chamamos o método para listar nossos contatos
        mounted () {
            Contatos.listarContatos().then(resposta => {
                console.log(resposta.data.contatos);
                this.contatos = resposta.data.contatos;
            })
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