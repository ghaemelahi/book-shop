import { Link } from "react-router-dom"

const Dashboard = () => {
  return (
    <div className="w-full flex flex-col items-center">

        <div className="flex flex-col md:flex-row items-center justify-center gap-4 w-full">
            <Link to="downloaded" className="rounded-md w-full md:w-4/12 bg-indigo-500 p-4 shadow-lg flex flex-col 
            items-start transition-all hover:scale-105">
                <div className="flex items-center justify-between p-3 border-b w-full text-white font-bold">
                    <h1 className="text-sm">تعداد دانلود ها  </h1>
                    <span>0</span>
                </div>
                <span className="text-slate-100 text-xs p-3">جزئیات بیشتر</span>
            </Link>


            <Link to="borrowed" className="rounded-md w-full md:w-4/12 bg-yellow-500 p-4 shadow-lg flex flex-col 
            items-start transition-all hover:scale-105">
                <div className="flex items-center justify-between p-3 border-b w-full text-white font-bold">
                    <h1 className="text-sm">تعداد امانت ها</h1>
                    <span>0</span>
                </div>
                <span className="text-slate-100 text-xs p-3">جزئیات بیشتر</span>
            </Link>


            <Link to="orders" className="rounded-md w-full md:w-4/12 bg-emerald-500 p-4 shadow-lg flex flex-col 
            items-start transition-all hover:scale-105">
                <div className="flex items-center justify-between p-3 border-b w-full text-white font-bold">
                    <h1 className="text-sm">تعداد سفارشات</h1>
                    <span>0</span>
                </div>
                <span className="text-slate-100 text-xs p-3">جزئیات بیشتر</span>
            </Link>
            
        </div>

        <div className="w-full mt-10 flex flex-col border-2 border-slate-200 rounded-md">
            <div className="text-right p-3 shadow rounded-md">
                <h1 className="font-bold py-3 inline">اطلاعات حساب کاربری</h1>
            </div>
            <div className="py-6 px-5 flex flex-col gap-4 md:flex-row items-center">
                <p className="font-bold text-sm">نام و نام خانوادگی : <span className="font-normal">احمد احمدی</span></p>
                <p className="font-bold text-sm">ایمیل : <span className="font-normal">example@gmail.com</span></p>
                <p className="font-bold text-sm">شماره تماس : <span className="font-normal">09000000000</span></p>
            </div>
        </div>
    </div>
  )
}

export default Dashboard