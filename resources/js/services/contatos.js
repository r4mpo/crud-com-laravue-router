// Importando o método HTTP
import { http } from './config.js';

// Criando e exportando método
export default {
    listarContatos: () => {
        // Passamos a url da api e o verbo http
        return http.get('/api/contato')
    }
}