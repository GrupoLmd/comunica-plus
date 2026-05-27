function StatCard({ title, value, subtitle, icon }) { 
  return ( 
    <div className="h-24 rounded-xl bg-white border-2 border-sky-500 shadow
[0_5px_0_#22c55e] px-4 py-3 flex items-center justify-between"> 
      <div> 
        <p className="text-sm text-gray-700">{title}</p> 
 
        <h3 className="text-3xl font-extrabold text-black leading-none mt-1"> 
          {value} 
        </h3> 
 
        <p className="text-xs text-gray-700 mt-2"> 
          {subtitle} 
        </p> 
      </div> 
 
      <div className="text-3xl text-gray-700"> 
        {icon} 
      </div> 
    </div> 
  ) 
} 
 
export default StatCard
