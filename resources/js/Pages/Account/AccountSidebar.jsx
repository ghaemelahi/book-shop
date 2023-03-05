import React, { useState } from 'react'
import { Link } from 'react-router-dom'


const AccountSidebar = () => {


  return (
    <div className="w-6/12 md:w-2/12 bg-green-500 p-5 flex flex-col text-right">
      <div>
        <h1 className="text-center font-bold text-lg text-slate-900 bg-white rounded-full py-2 cursor-default">پروفایل کاربری</h1>
        <div className="py-8">
          <Link to="/my-account">
            <h2 className="border-y-2 border-green-600 py-5"><i className="fa fa-dashboard ml-2 text-slate-800"></i>داشبورد</h2>
          </Link>
          <div className="py-5 flex flex-col gap-5">
            <Link to="downloaded">
              <i className="fa fa-download ml-2 text-slate-800"></i>دانلود شده
            </Link>
            <Link to="borrowed">
              <i className="fa fa-book ml-2 text-slate-800"></i>امانت گرفته شده
            </Link>
            <Link to="orders">
              <i className="fa fa-shopping-cart ml-2 text-slate-800"></i>سفارشات
            </Link>
            <Link to="account-details">
              <i className="fa fa-user ml-2 text-slate-800"></i>مشخصات حساب کاربری
            </Link>
            <Link to="/">
              <i className="fa fa-arrow-right ml-2 text-slate-800"></i>بازگشت به سایت
            </Link>
            <Link to="/my-account">
              <i className="fa fa-sign-out ml-2 text-slate-800"></i>خروج از حساب
            </Link>
          </div>
        </div>
      </div>
    </div>
  )
}

export default AccountSidebar