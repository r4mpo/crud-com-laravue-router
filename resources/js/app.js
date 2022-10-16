// Importando método da biblioteca vue
import { createApp } from 'vue';

// Importando componente que criamos
import App from './App.vue';

// Importando componente que criamos
import router from "./routers/router";

// Criando constante e anexando os métodos e a div responsável pelo componente no front-end
const app = 
    createApp(App);
    app.use(router);
    app.mount("#app");