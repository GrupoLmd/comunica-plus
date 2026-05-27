function Topbar() {
  return (
    <header className="flex items-center justify-between mb-8">
      <div>
        <p className="text-sm text-cyan-400 uppercase tracking-[0.25em] mb-2">Dashboard</p>
        <h2 className="text-3xl font-bold text-white">Visão Geral da Gestão</h2>
        <p className="text-slate-400 mt-2">Acompanhe indicadores, trilhas e sinais de atenção pedagógica.</p>
      </div>

      <div className="flex items-center gap-4">
        <div className="rounded-xl border border-slate-800 bg-slate-900 px-4 py-3">
          <p className="text-xs text-slate-400">Perfil</p>
          <p className="text-sm font-semibold text-white">Gestão Escolar</p>
        </div>
      </div>
    </header>
  );
}

export default Topbar;