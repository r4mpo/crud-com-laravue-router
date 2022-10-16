// Importando componentes vue.js
import Table from '../view/table.vue';
import Form from '../view/form.vue';

// Métodos importados do Vue3 para criar rotas e histórico
import {createRouter, createWebHistory} from "vue-router";

// Criando caminhos das rotas
const routes = [
    {
        path: '/spa/table',
        name: 'table',
        component: Table
    },

    {
        path: '/spa/form/create',
        name: 'form',
        component: Form
    },
];

// Criando a instância da rota
const router = new createRouter({
    history: createWebHistory(),
    routes
});

// Exportando a instância de rotas
export default router;