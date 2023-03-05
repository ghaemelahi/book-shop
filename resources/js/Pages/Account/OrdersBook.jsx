import React from 'react'

const OrdersBook = () => {
  return (
    <div className='w-full p-2 overflow-scroll md:overflow-auto'>
      <h1 className='font-bold text-xl pb-8 text-slate-700'>سفارشات</h1>
      <table className='border w-full text-center'>
        <thead>
          <tr className='bg-blue-500 text-white'>
            <th className='p-3 font-bold'>ردیف</th>
            <th className='p-3 font-bold'>نام کتاب</th>
            <th className='p-3 font-bold'>تاریخ</th>
            <th className='p-3 font-bold'>وضعیت سفارش</th>
          </tr>
        </thead>
        <tbody>
          <tr className='border cursor-pointer transition-all hover:bg-slate-100'>
            <td className='py-4 px-2'>1</td>
            <td className='py-4 px-2'>اثر مرکب</td>
            <td className='py-4 px-2'>1401/02/11</td>
            <td className='py-4 px-2'>پرداخت شده</td>
          </tr>
        </tbody>
      </table>
    </div>
  )
}

export default OrdersBook