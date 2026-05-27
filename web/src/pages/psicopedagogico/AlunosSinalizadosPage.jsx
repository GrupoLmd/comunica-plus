import { useEffect, useState } from 'react' 
import Sidebar from '../../components/layout/Sidebar' 
import { getDashboardPsicopedagogico } from '../../services/psicoService' 
function AlunosSinalizadosPage() { 
const [dados, setDados] = useState(null) 
const [loading, setLoading] = useState(true) 
const [erro, setErro] = useState('') 
useEffect(() => { 
async function carregarDados() { 
try { 
const resposta = await getDashboardPsicopedagogico() 
        setDados(resposta) 
      } catch (error) { 
        setErro('Não foi possível carregar os alunos sinalizados.') 
        console.error(error) 
      } finally { 
        setLoading(false) 
      } 
    } 
 
    carregarDados() 
  }, []) 
 
  if (loading) { 
    return ( 
      <div className="min-h-screen bg-[#eeeeee] flex items-center justify-center"> 
        <p className="text-lg text-gray-700">Carregando alunos sinalizados...</p> 
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
 
  const alunos = dados?.alunos ?? [] 
 
  return ( 
    <div className="min-h-screen bg-[#eeeeee] text-gray-800"> 
       
 
      <div className="flex"> 
        <Sidebar /> 
 
        <main className="flex-1 px-8 py-5"> 
          <header className="mb-8 flex items-start justify-between"> 
            <div> 
              <p className="text-sm font-bold text-green-600 uppercase tracking-wide"> 
                Psicopedagógico 
              </p> 
 
              <h2 className="text-2xl font-extrabold text-gray-700 mt-1"> 
                Alunos Sinalizados 
              </h2> 
 
              <p className="text-sm text-gray-700 mt-2"> 
                Visualização detalhada dos estudantes com sinais de atenção pedagógica. 
              </p> 
            </div> 
 
            <div className="bg-white rounded-xl border-2 border-sky-500 shadow
[0_4px_0_#22c55e] px-5 py-3"> 
              <p className="text-xs text-gray-600">Total</p> 
              <p className="text-xl font-extrabold text-black"> 
                {alunos.length} alunos 
              </p> 
            </div> 
          </header> 
 
          <section className="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8"> 
  <div className="min-h-32 rounded-xl bg-white border-2 border-sky-500 shadow
[0_5px_0_#22c55e] px-5 py-4 flex flex-col justify-between"> 
    <div> 
      <p className="text-sm text-gray-700">Atenção moderada</p> 
      <h3 className="text-4xl font-extrabold text-black mt-2"> 
        {alunos.filter((aluno) => aluno.nivel_atencao === 'moderado').length} 
      </h3> 
    </div> 
    <p className="text-xs text-gray-700 mt-3"> 
      Necessitam acompanhamento 
    </p> 
  </div> 
 
  <div className="min-h-32 rounded-xl bg-white border-2 border-sky-500 shadow
[0_5px_0_#22c55e] px-5 py-4 flex flex-col justify-between"> 
    <div> 
      <p className="text-sm text-gray-700">Atenção alta</p> 
      <h3 className="text-4xl font-extrabold text-black mt-2"> 
        {alunos.filter((aluno) => aluno.nivel_atencao === 'alto').length} 
      </h3> 
    </div> 
    <p className="text-xs text-gray-700 mt-3"> 
      Prioridade de observação 
    </p> 
  </div> 
 
  <div className="min-h-32 rounded-xl bg-white border-2 border-sky-500 shadow
[0_5px_0_#22c55e] px-5 py-4 flex flex-col justify-between"> 
    <div> 
      <p className="text-sm text-gray-700">Em acompanhamento</p> 
      <h3 className="text-4xl font-extrabold text-black mt-2"> 
        {alunos.filter((aluno) => aluno.status === 'em_acompanhamento').length} 
      </h3> 
    </div> 
    <p className="text-xs text-gray-700 mt-3"> 
      Casos já em análise 
    </p> 
  </div> 
</section> 
 
          <section className="bg-white rounded-3xl border border-gray-300 shadow
[0_0_10px_rgba(0,0,0,0.20)] p-7"> 
            <h3 className="text-xl font-bold text-gray-700 mb-2"> 
              Lista detalhada 
            </h3> 
 
            <p className="text-sm text-gray-600 mb-6"> 
              Dados consolidados a partir da triagem pedagógica inicial. 
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
                    <th className="px-4">Motivo</th> 
                    <th className="px-4">Status</th> 
                  </tr> 
                </thead> 
 
                <tbody> 
                  {alunos.map((aluno) => ( 
                    <tr 
                      key={aluno.id} 
                      className="bg-white border-2 border-sky-500 shadow-[0_4px_0_#22c55e]" 
                    > 
                      <td className="px-4 py-4 rounded-l-xl font-bold text-gray-800"> 
                        {aluno.nome} 
                      </td> 
 
                      <td className="px-4 py-4 text-gray-700"> 
                        {aluno.turma} 
                      </td> 
 
                      <td className="px-4 py-4 text-gray-700"> 
                        {aluno.serie} 
                      </td> 
 
                      <td className="px-4 py-4 text-gray-700 capitalize"> 
                        {aluno.dificuldade_principal} 
                      </td> 
 
                      <td className="px-4 py-4 text-gray-700 capitalize"> 
                        {aluno.perfil_aprendizagem} 
                      </td> 
 
                      <td className="px-4 py-4"> 
                        <span 
                          className={`px-3 py-1 rounded-full text-xs font-bold capitalize ${ 
                            aluno.nivel_atencao === 'alto' 
                              ? 'bg-red-100 text-red-700' 
                              : 'bg-yellow-100 text-yellow-700' 
                          }`} 
                        > 
                          {aluno.nivel_atencao} 
                        </span> 
                      </td> 
 
                      <td className="px-4 py-4 text-gray-700 max-w-[360px]"> 
                        {aluno.motivo} 
                      </td> 
 
                      <td className="px-4 py-4 rounded-r-xl"> 
                        <span className="px-3 py-1 rounded-full text-xs font-bold bg-sky-100 text-sky
700 capitalize"> 
                          {aluno.status.replaceAll('_', ' ')} 
                        </span> 
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
export default AlunosSinalizadosPage 
