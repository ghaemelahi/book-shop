import React from 'react'

const Cart = () => {
  return (
    <div className='w-full flex flex-col md:flex-row items-start p-4 gap-4'>

      {/* Added products */}
      <div className='w-full flex flex-col border-2 rounded-md p-5 md:w-8/12 gap-3'>
        <div>
          <div className='flex flex-col w-full p-4 rounded-md border-2'>
            <div className='w-full flex'>
              <div className='w-3/12 md:w-2/12'>
                <img src='../../public/image/books/book-1.png' />
              </div>
              <div className='w-9/12 md:w-10/12 px-5 flex flex-col gap-2'>
                <h1 className='font-bold text-xl'>نام کتاب :</h1>
                <p className='text-sm'>نویسنده :</p>
                <p className='text-sm'>ناشر :</p>
                <p className='text-sm'>دسته بندی :</p>
              </div>
            </div>
            <div className='w-full flex items-center justify-end'>
              <div className='border border-green-500 p-3 rounded-md'>
                <button className='px-3 text-lg cursor-pointer'>+</button>
                <span className='text-xl border-b border-slate-700'>1</span>
                <button className='px-3 text-lg cursor-pointer'>-</button>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div className='flex flex-col w-full p-4 rounded-md border-2'>
            <div className='w-full flex'>
              <div className='w-3/12 md:w-2/12'>
                <img src='../../public/image/books/book-1.png' />
              </div>
              <div className='w-9/12 md:w-10/12 px-5 flex flex-col gap-2'>
                <h1 className='font-bold text-xl'>نام کتاب : </h1>
                <p className='text-sm'>نویسنده :</p>
                <p className='text-sm'>ناشر :</p>
                <p className='text-sm'>دسته بندی :</p>
              </div>
            </div>
            <div className='w-full flex items-center justify-end'>
              <div className='border border-green-500 p-3 rounded-md'>
                <button className='px-3 text-lg cursor-pointer'>+</button>
                <span className='text-xl border-b border-slate-700'>1</span>
                <button className='px-3 text-lg cursor-pointer'>-</button>
              </div>
            </div>
          </div>
        </div>
      </div>



      {/* Output Price */}
      <div className='w-full border-2 rounded-md p-4 md:w-4/12'>
        <ul className='w-full flex flex-col gap-4'>
          <li className='flex items-center justify-between border-b-2 py-2 px-4 text-sm'>
            <span className='font-bold '>تخفیف</span>
            <span>15%</span>
          </li>
          <li className='flex items-center justify-between border-b-2 py-2 px-4 text-sm'>
            <span className='font-bold'>تعداد</span>
            <span>2</span>
          </li>
          <li className='flex items-center justify-between border-b-2 py-2 px-4 text-sm'>
            <span className='font-bold'>جمع کل</span>
            <span>25000 تومان</span>
          </li>
        </ul>
        <button className="py-2 px-4 my-3 w-full text-sm md:text-lg bg-green-500 text-white rounded transition-all hover:bg-green-600">خرید</button>
      </div>
    </div>
  )
}

export default Cart


