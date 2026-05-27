import { useEffect, useState } from 'react';
import Sidebar from '../../components/layout/Sidebar';
import StatCard from '../../components/cards/StatCard';
import { getDashboardGestao } from '../../services/dashboardService';

function DashboardGestaoPage() {
  const [dados, setDados] = useState(null);
  const [loading, setLoading] = useState(true);
  const [erro, setErro] = useState('');

  useEffect(() => {
    async function carregarDashboard() {
      try {
        const resposta = await getDashboardGestao();
        setDados(resposta);
      } catch (error) {
        setErro('Não foi possível carregar o dashboard.');
        console.error(error);
      } finally {
        setLoading(false);
      }
    }
    carregarDashboard();
  }, []);

  if (loading) return <div className="min-h-screen bg-[#eeeeee] flex items-center justify-center"><p>Carregando...</p></div>;
  if (erro) return <div className="min-h-screen bg-[#eeeeee] flex items-center justify-center text-red-500"><p>{erro}</p></div>;

  return (
    <div className="min-h-screen bg-[#eeeeee] text-gray-800">
      <div className="flex">
        <Sidebar />
        <main className="flex-1 px-8 py-5">
          {/* Header + Cards + Seções de Dificuldades e Perfis */}
          {/* (Código completo está no PDF - posso enviar a versão completa se precisar) */}
        </main>
      </div>
    </div>
  );
}

export default DashboardGestaoPage;