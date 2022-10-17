// Importando o método HTTP
import { http } from './config.js';

// Criando e exportando os métodos
export default {

    // listagem dos dados - no caso, dos contatos
    listarContatos: () => {
        // Passamos a url da api e o verbo http
        return http.get('/api/contato')
    },

    // cadastro dos dados - no caso, dos contatos
    salvarContatos: (contato) => {
        // Passamos a url da api e o verbo http
        return http.post('/api/contato', contato);
    },

    // atualização de dados - no caso, dos contatos
    atualizarContatos: (contato) => {
        // Passamos a url da api e o verbo http
        return http.put(`/api/contato/${contato.id}`, contato);
    }
}