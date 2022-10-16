<template>
    <div class="content-page">
        
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-bounding-box"></i></span>
            <input type="text" class="form-control" placeholder="Nome do contato" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-plus"></i></span>
            <input type="text" class="form-control" onkeypress="mask(this, mphone);" placeholder="Telefone do contato" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <button type="button" class="btn btn-primary btn-cadastrar"><i class="bi bi-sd-card"></i> Cadastrar</button>

    </div>
</template>

<script>
    export default {

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