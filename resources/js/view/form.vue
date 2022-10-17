<template>

    <!-- Associando o formulário com o método salvar -->
    <form @submit.prevent="salvar_contato">
        <div class="content-page">
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-bounding-box"></i></span>
                
                <!-- v-model="" serve para informarmos que o valor do input será passado para o data() -->
                <input type="text" class="form-control" v-model="contato.nome" placeholder="Nome do contato" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-plus"></i></span>
                
                <!-- v-model="" serve para informarmos que o valor do input será passado para o data() -->
                <input type="text" v-model="contato.numero" class="form-control" onkeypress="mask(this, mphone);" placeholder="Telefone do contato" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <button class="btn btn-primary btn-cadastrar"><i class="bi bi-sd-card"></i> Cadastrar</button>

        </div>
    </form>
</template>

<script>

    // Importando arquivo responsável pela requisição da api
    import Contatos from '../services/contatos.js';

    export default {

        // Referenciando dados que deverão retornar do formulário
        // Mencionamos os campos que deverão ser passados para a API
        data(){
            return {
                contato: {
                    nome: '', // nome do contato
                    numero: '' // número do contato
                }
            }
        },

        methods: {
            
            // Função para salvar contatos
            salvar_contato() {
                Contatos.salvarContatos(this.contato).then(resposta => {
                    // Trazendo o retorno da api
                    alert(resposta.data.mensagem);

                    // Redirecionando após a execução da função
                    this.$router.push({name: "table"});
                })
            }
        }
    }
</script>

<style>
    .content-page {
        margin-top: 5%;
        width: 300px;
        border: 1px solid rgb(36, 36, 255);
        background-color: rgb(0, 0, 75);
        color: #fff;
        padding: 10px 10px 10px 10px;
    }

    .btn-cadastrar {
        width: 150px;
    }
</style>