import { BrowserRouter, Navigate, Route, Routes } from 'react-router-dom' 
import DashboardGestaoPage from './pages/gestao/DashboardGestaoPage' 
import DashboardPsicoPage from './pages/psicopedagogico/DashboardPsicoPage' 
import AlunosSinalizadosPage from './pages/psicopedagogico/AlunosSinalizadosPage' 
function AppRoutes() { 
return ( 
<BrowserRouter> 
<Routes> 
<Route path="/" element={<Navigate to="/gestao" replace />} /> 
<Route path="/gestao" element={<DashboardGestaoPage />} /> 
<Route path="/psicopedagogico" element={<DashboardPsicoPage />} /> 
<Route path="/psicopedagogico/alunos" element={<AlunosSinalizadosPage />} /> 
</Routes> 
</BrowserRouter> 
) 
} 
export default AppRoutes
