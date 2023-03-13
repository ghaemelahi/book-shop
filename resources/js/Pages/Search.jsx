import React from 'react'

const Search = () => {
    return (
        <div className='w-full p-3 my-5 flex flex-col items-center justify-center'>
            <h1 className='font-bold text-slate-900 text-xl'>جستجوی پیشرفته</h1>
            <form className='py-3 flex flex-wrap justify-center gap-3'>
                <div className='form-group flex flex-col p-3'>
                    <label className='py-3'>نام کتاب</label>
                    <input type="text" className='block w-full p-2 pl-10 text-md rounded-md
                                         outline-none transition-all focus:ring-2 focus:ring-green-500 focus:border-0'/>
                </div>
                <div className='form-group flex flex-col p-3'>
                    <label className='py-3'>نام نویسنده</label>
                    <input type="text" className='block w-full p-2 pl-10 text-md rounded-md
                                         outline-none transition-all  focus:ring-2 focus:ring-green-500 focus:border-0'/>
                </div>
                <div className='form-group flex flex-col p-3'>
                    <label className='py-3'>موضوع</label>
                    <input type="text" className='block w-full p-2 pl-10 text-md rounded-md
                                         outline-none transition-all focus:ring-2 focus:ring-green-500 focus:border-0'/>
                </div>
                <div className='form-group flex flex-col p-3'>
                    <label className='py-3'>نام مترجم</label>
                    <input type="text" className='block w-full p-2 pl-10 text-md rounded-md
                                         outline-none transition-all focus:ring-2 focus:ring-green-500 focus:border-0'/>
                </div>
                <div className='form-group flex flex-col p-3'>
                    <label className='py-3'>نام ناشر </label>
                    <input type="text" className='block w-full p-2 pl-10 text-md rounded-md
                                         outline-none transition-all  focus:ring-2 focus:ring-green-500 focus:border-0'/>
                </div>
            </form>
            <button type='submit' className="my-3 py-3 px-7 bg-green-600 text-white rounded text-sm outline-none
        transition-all hover:bg-green-700">جستجو</button>


            <div className=''></div>
        </div>
    )
}

export default Search