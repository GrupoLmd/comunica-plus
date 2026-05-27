import { fetchApi } from './api' 
export async function getDashboardGestao() { 
return fetchApi('/dashboard/gestao') 
} 
