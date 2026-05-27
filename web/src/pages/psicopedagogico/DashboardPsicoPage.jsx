import { useEffect, useState } from 'react' 
import Sidebar from '../../components/layout/Sidebar' 
import { getDashboardPsicopedagogico } from '../../services/psicoService' 
import StatCard from '../../components/cards/StatCard' 
function DashboardPsicoPage() { 
const [dados, setDados] = useState(null) 
const [loading, setLoading] = useState(true) 
const [erro, setErro] = useState('') 
useEffect(() => { 
async function carregarPainel() { 
try { 
const resposta = await getDashboardPsicopedagogico() 
setDados(resposta) 
} catch (error) { 
setErro('Não foi possível carregar o painel psicopedagógico.') 
console.error(error) 
} finally { 
setLoading(false) 
} 
} 
carregarPainel() 
}, []) 
if (loading) { 
return ( 
<div className="min-h-screen bg-[#eeeeee] flex items-center justify-center"> 
<p className="text-lg text-gray-700">Carregando painel psicopedagógico...</p> 
</div> 
) 
} 
if (erro) { 
return ( 
<div className="min-h-screen bg-[#eeeeee] flex items-center justify-center"> 
<p className="text-lg text-red-500">{erro}</p> 
</div> 
) 
} 
return ( 
<div className="min-h-screen bg-[#eeeeee] text-gray-800"> 
<div className="flex"> 
<Sidebar /> 
<main className="flex-1 px-8 py-5"> 
<header className="mb-8"> 
<p className="text-sm font-bold text-green-600 uppercase tracking-wide"> 
Psicopedagógico 
</p> 
<h2 className="text-2xl font-extrabold text-gray-700 mt-1"> 
Observatório de Aprendizagem 
</h2> 
<p className="text-sm text-gray-700 mt-2"> 
Acompanhe alunos sinalizados, níveis de atenção e padrões recorrentes. 
</p> 
</header> 
<section className="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8"> 
<StatCard 
title="Total sinalizados" 
value={dados?.cards?.total_sinalizados ?? 0} 
subtitle="Alunos em observação" 
icon="    
/> 
<StatCard 
" 
title="Atenção moderada" 
value={ 
dados?.por_nivel?.find((item) => item.nivel_atencao === 'moderado')?.total 
?? 0 
} 
subtitle="Necessitam acompanhamento" 
icon="   
/> 
<StatCard 
" 
title="Atenção alta" 
value={ 
dados?.por_nivel?.find((item) => item.nivel_atencao === 'alto')?.total ?? 0 
} 
subtitle="Prioridade de observação" 
icon="      
/> 
</section> 
" 
<section className="grid grid-cols-1 xl:grid-cols-3 gap-6 mb-8"> 
<div className="xl:col-span-2 min-h-[330px] bg-white rounded-3xl border 
border-gray-300 shadow-[0_0_10px_rgba(0,0,0,0.20)] p-7"> 
<h3 className="text-xl font-bold text-gray-700 mb-2"> 
Motivos recorrentes 
</h3> 
<p className="text-sm text-gray-600 mb-6"> 
Principais causas registradas nas sinalizações pedagógicas. 
</p> 
<div className="space-y-4"> 
{dados?.motivos?.map((item, index) => ( 
<div 
key={`${item.motivo}-${index}`} 
className="rounded-xl bg-white border-2 border-sky-500 shadow
[0_4px_0_#22c55e] p-4" 
> 
<p className="text-gray-700 text-sm">{item.motivo}</p> 
<p className="text-green-600 font-extrabold mt-2"> 
{item.total} ocorrência(s) 
</p> 
</div> 
))} 
</div> 
</div> 
<div className="min-h-[330px] bg-white rounded-3xl border border-gray-300 
shadow-[0_0_10px_rgba(0,0,0,0.20)] p-7"> 
<h3 className="text-xl font-bold text-gray-700 mb-2"> 
Status de acompanhamento 
</h3> 
<p className="text-sm text-gray-600 mb-6"> 
Situação atual dos alunos sinalizados. 
</p> 
<div className="space-y-4"> 
{dados?.por_status?.map((item) => ( 
<div 
key={item.status} 
className="rounded-xl bg-white border-2 border-sky-500 shadow
[0_4px_0_#22c55e] p-4" 
> 
<p className="text-sm text-gray-700 capitalize"> 
{item.status.replaceAll('_', ' ')} 
</p> 
<p className="text-3xl font-extrabold text-black mt-2"> 
{item.total} 
</p> 
</div> 
))} 
</div> 
</div> 
</section> 
<section className="bg-white rounded-3xl border border-gray-300 shadow
[0_0_10px_rgba(0,0,0,0.20)] p-7"> 
<h3 className="text-xl font-bold text-gray-700 mb-2"> 
Alunos sinalizados 
</h3> 
<p className="text-sm text-gray-600 mb-6"> 
Lista dos alunos com indicadores de atenção pedagógica. 
</p> 
<div className="overflow-x-auto"> 
<table className="w-full text-left border-separate border-spacing-y-3"> 
<thead> 
<tr className="text-gray-600 text-sm"> 
<th className="px-4">Nome</th> 
<th className="px-4">Turma</th> 
<th className="px-4">Série</th> 
<th className="px-4">Dificuldade</th> 
<th className="px-4">Perfil</th> 
<th className="px-4">Nível</th> 
<th className="px-4">Status</th> 
</tr> 
</thead> 
<tbody> 
{dados?.alunos?.map((aluno) => ( 
<tr 
key={aluno.id} 
className="bg-white border-2 border-sky-500 shadow
[0_4px_0_#22c55e]" 
> 
<td className="px-4 py-4 rounded-l-xl font-bold text-gray-800"> 
{aluno.nome} 
</td> 
<td className="px-4 py-4 text-gray-700">{aluno.turma}</td> 
<td className="px-4 py-4 text-gray-700">{aluno.serie}</td> 
<td className="px-4 py-4 text-gray-700 capitalize"> 
{aluno.dificuldade_principal} 
</td> 
<td className="px-4 py-4 text-gray-700 capitalize"> 
{aluno.perfil_aprendizagem} 
</td> 
<td className="px-4 py-4 text-gray-700 capitalize"> 
{aluno.nivel_atencao} 
</td> 
<td className="px-4 py-4 rounded-r-xl text-gray-700 capitalize"> 
{aluno.status.replaceAll('_', ' ')} 
</td> 
</tr> 
))} 
</tbody> 
</table> 
</div> 
</section> 
</main> 
</div> 
</div> 
) 
} 
export default DashboardPsicoPage
