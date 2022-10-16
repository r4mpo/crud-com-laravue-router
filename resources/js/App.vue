<!-- O App.vue é o arquivo principal. Este será acompanhado pelos outros componentes -->

<template>

    <div>
        
        <nav class="navbar navbar-expand-lg bg-light">
            
            <div class="container-fluid nav-style">
                
                <!-- A tag router-link funciona como um a href, podemos passar a referência sendo ela o nome da rota. -->
                <router-link class="navbar-brand link-style" :to='{name: "table"}'><i class="bi bi-house-door"></i> Página Inicial</router-link>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
                        <li class="nav-item">
                            <router-link class="nav-link link-style" :to='{name: "form"}'><i class="bi bi-person-plus-fill"></i> Novo Contato</router-link>
                        </li>

                    </ul>

                </div>
            </div>

        </nav>
        
        <div class="container">

            <!-- A tag "router-view" exibirá os conteúdos dos componentes -->
            <router-view></router-view>

        </div>

    </div>

</template>

<script>
    // Exportando o componente App.vue
    export default {
        name: "App",
    }
</script>

<style>
    .nav-style {
        background-color:rgb(0, 0, 75);
        border-bottom: 1px solid rgb(36, 36, 255);
        position: fixed;
        top: 0;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .link-style {
        color: #fff;
    }
</style>