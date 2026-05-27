import { fetchApi } from './api';

export async function getDashboardPsicopedagogico() {
  return fetchApi('/dashboard/psicopedagogico');
}