// Importamos a biblioteca axios
import axios from 'axios'

// Passando a url base para o axios
export const http = axios.create({
    baseURL: 'http://127.0.0.1:8000'
})