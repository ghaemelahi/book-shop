import React from 'react'

const AccountDetails = () => {
  return (
    <div className='w-full p-2 flex flex-col'>
      <h1 className='font-bold text-xl pb-8 text-slate-700'>اطلاعات حساب کاربری</h1>
      <form className='w-full flex flex-col flex-wrap items-start md:flex-row justify-center gap-5'>
        <div className='form-group flex flex-col'>
          <label className='font-semibold text-slate-600'>نام کاربری : </label>
          <input type="text" value="احمد احمدی" className='border py-2 px-3 rounded-md text-sm
          outline-none my-2'/>
        </div>
        <div className='form-group flex flex-col'>
          <label className='font-semibold text-slate-600'>ایمیل : </label>
          <input type="email" value="example@gamil.com"  className='border py-2 px-3 rounded-md text-sm
          outline-none my-2'/>
        </div>
        <div className='form-group flex flex-col'>
          <label className='font-semibold text-slate-600'>رمز عبور: </label>
          <input type="text" value="12345678"  className='border py-2 px-3 rounded-md text-sm
          outline-none my-2'/>
        </div>
        <div className='form-group flex flex-col'>
          <label className='font-semibold text-slate-600'>شماره تماس : </label>
          <input type="text" value="09000000000"  className='border py-2 px-3 rounded-md text-sm
          outline-none my-2'/>
        </div>
      </form>

      <div className='w-full text-center md:text-left'>
      <button className="my-7 py-2 px-5 text-sm bg-green-500 text-white
                                rounded transition-all hover:bg-green-600">ثبت</button>
      </div>
    </div>
  )
}

export default AccountDetails