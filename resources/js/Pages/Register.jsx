import { Link } from 'react-router-dom'

import React from 'react'

const Register = () => {
  return (
    <div className='w-10/12 h-[80vh]  mx-auto my-10 rounded-md shadow-md flex overflow-hidden'>
      <div className='w-full h-full md:w-7/12 p-4'>
        <div className='w-full h-full flex flex-col items-end justify-center py-3'>
          <Link to="/">
            <p className='text-sm text-slate-700'>بازگشت<i className='fa fa-arrow-left mr-2'></i></p>
          </Link>
          <h1 className='font-bold text-3xl mx-auto py-4'>فرم ثبت نام</h1>
          <form className='w-full py-6 px-2 flex flex-col items-center'>
            <div className='form-group w-full flex flex-col md:flex-row items-center justify-center my-2 gap-3'>
              <input type="text" className='rounded-md text-lg py-2 w-9/12 px-3 outline-none border-2 focus:ring-2 focus:ring-green-500' placeholder='نام کاربری' />
              <input type="email" className='rounded-md text-lg py-2 w-9/12 px-3 outline-none border-2 focus:ring-2 focus:ring-green-500' placeholder='ایمیل' />
            </div>

            <div className='form-group w-full flex flex-col md:flex-row items-center justify-center my-2 gap-3'>
              <input type="text" className='rounded-md text-lg py-2 px-3 w-9/12 outline-none border-2 focus:ring-2 focus:ring-green-500' placeholder='نام و نام خانوادگی' />
              <input type="text" className='rounded-md text-lg py-2 px-3 w-9/12 outline-none border-2 focus:ring-2 focus:ring-green-500' placeholder='شماره تماس(اختیاری)' />

            </div>

            <div className='form-group w-full flex flex-col md:flex-row items-center justify-center my-2 gap-3'>
              <input type="text" className='rounded-md text-lg py-2 px-3 w-9/12 outline-none border-2 focus:ring-2 focus:ring-green-500' placeholder='رمز عبور' />
              <input type="text" className='rounded-md text-lg py-2 px-3 w-9/12 outline-none border-2 focus:ring-2 focus:ring-green-500' placeholder='تکرار رمز عبور' />
            </div>

            <div className='form-group w-9/12 flex items-center justify-center my-4'>
              <input type="checkbox" className='w-4 h-4' />
              <span className='mx-2 text-sm'>مرا به خاطر بسپار</span>
            </div>
            <button type='submit' className='bg-green-500 text-white font-bold rounded-md w-8/12 
          py-3 transition-all my-4 hover:bg-green-600'>ثبت نام</button>
            <Link to="/login">
              <span className='text-sm text'>ورود به حساب کاربری</span>
            </Link>
          </form>
        </div>
      </div>
      <div className='hidden md:block md:w-5/12 md:h-full'>
        <img src='../../public/image/register.jpg' className='w-full h-full object-cover ' />
      </div>
    </div>
  )
}

export default Register