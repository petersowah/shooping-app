// api.ts file
import axios from 'axios';
const instance = axios.create({
  baseURL: import.meta.env.VITE_API_BASE_URL,
});

instance.interceptors.response.use((response) => {
    return response.data;
})
export default instance