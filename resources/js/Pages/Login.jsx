import React from 'react'
import { Link } from 'react-router-dom'

const Login = () => {
  return (
    <div className='w-full h-screen flex flex-col items-center justify-center'>
      <div className='w-10/12 h-[80vh] rounded-md shadow-md flex overflow-hidden'>
        <div className='w-full h-full md:w-7/12 p-4'>
          <div className='w-full h-full flex flex-col items-end justify-center py-3'>
            <Link to="/">
              <p className='text-sm text-slate-700'>بازگشت<i className='fa fa-arrow-left mr-2'></i></p>
            </Link>
            <h1 className='font-bold mx-auto text-3xl py-4'>فرم ورود</h1>
            <form className='w-full py-6 px-2 flex flex-col gap-4 items-center'>
              <div className='form-group w-full flex flex-col items-center my-2'>
                <input type="text" className='rounded-md text-lg py-2 px-3 w-9/12 outline-none border-2 focus:ring-2 focus:ring-green-500' placeholder='نام کاربری' />
              </div>

              <div className='form-group w-full flex flex-col items-center my-2'>
                <input type="text" className='rounded-md text-lg py-2 px-3 w-9/12 outline-none border-2 focus:ring-2 focus:ring-green-500' placeholder='رمز عبور' />
              </div>
              <div className='form-group w-9/12 flex items-center justify-start my-2'>
                <input type="checkbox" className='w-4 h-4' />
                <span className='mx-2 text-sm'>مرا به خاطر بسپار</span>
              </div>
              <button type='submit' className='bg-green-500 text-white font-bold rounded-md w-8/12 
            py-3 transition-all hover:bg-green-600'>ورود</button>
              <span className='text-sm text-blue-500'>رمز خود را فراموش کرده اید؟</span>
              <Link to="/register">
                <span className='text-sm text'>ایجاد حساب کاربری</span>
              </Link>
            </form>
          </div>
        </div>
        <div className='hidden md:block md:w-5/12 md:h-full'>
          <img src='../../public/image/login.jpg' className='w-full h-full object-cover ' />
        </div>
      </div>
    </div>
  )
}

export default Login