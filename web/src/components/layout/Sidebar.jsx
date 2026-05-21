import { NavLink } from 'react-router-dom';
import logoComunica from '../../assets/logo-comunica.png';

function Sidebar() {
  const baseClass = 'w-full text-left px-4 py-4 rounded-2xl font-semibold transition block';
  const inactiveClass = 'bg-sky-600 text-white hover:bg-sky-700 shadow-sm';
  const activeClass = 'bg-sky-700 text-white shadow-md';

  return (
    <aside className="w-64 min-h-screen bg-[#efefef] border-r border-gray-300 px-4 py-6 flex flex-col">
      {/* Header com Logo */}
      <div className="flex flex-col items-center text-center mb-10">
        <div className="w-40 h-28 mb-2 flex items-center justify-center overflow-hidden">
          <img
            src={logoComunica}
            alt="Logo Comunica"
            className="w-full h-full object-contain"
          />
        </div>
        <h1 className="text-[20px] font-bold text-gray-700 leading-tight">
          Painel Educacional
        </h1>
      </div>

      {/* Navegação */}
      <nav className="space-y-4">
        <NavLink
          to="/gestao"
          className={({ isActive }) =>
            `${baseClass} ${isActive ? activeClass : inactiveClass}`
          }
        >
          Dashboard Gestão
        </NavLink>

        <NavLink
          to="/psicopedagogico"
          className={({ isActive }) =>
            `${baseClass} ${isActive ? activeClass : inactiveClass}`
          }
        >
          Painel Psicopedagógico
        </NavLink>

        <NavLink
          to="/psicopedagogico/alunos"
          className={({ isActive }) =>
            `${baseClass} ${isActive ? activeClass : inactiveClass}`
          }
        >
          Alunos Sinalizados
        </NavLink>
      </nav>
    </aside>
  );
}

export default Sidebar;