import React from 'react'

const Book = () => {
    return (
        <>


            {/* Information Book */}
            <div className='w-full flex flex-col md:flex-row md:items-start p-8'>
                <div className='w-full flex flex-col p-3 border-0 m-0 md:w-9/12 md:flex-row md:border-l-2 md:ml-3'>
                    <div className='w-full flex items-center justify-center md:w-4/12'>
                        <img src='../../public/image/books/book-1.png' className='w-7/12' />
                    </div>
                    <div className='w-full p-3 flex flex-col justify-start gap-3 md:items-start md:w-8/12'>
                        <h1 className='text-xl font-bold'>کتاب جدید</h1>
                        <span className='text-sm mt-4'>نویسنده : آنتونی رابینز</span>
                        <span className='text-sm'>دسته بندی : انگیزشی</span>
                        <span className='text-sm'>ناشر : ناشر</span>
                    </div>
                </div>


                {/* Buy and Borrow and Download Book */}
                <div className='w-full py-5 flex items-center justify-center
                md:w-3/12 flex-col md:justify-start shadow-md rounded-md'>
                    <h1 className='text-xl font-bold inline border-b-2 border-green-500 pb-3 mb-3 md:text-xl'>تهیه کتاب</h1>
                    <div className='flex gap-3'>
                        <button className="my-3 py-3 px-7 bg-green-600 text-white 
                        rounded text-sm outline-none
        transition-all hover:bg-green-700">امانت</button>
                        <button className="my-3 py-3 px-7 bg-green-600 text-white rounded text-sm outline-none
        transition-all hover:bg-green-700">خرید</button>
                    </div>
                </div>
            </div>



            {/* Description Book */}
            <div className='w-full rounded-md p-5 mt-16 bg-slate-100 flex flex-col gap-3'>
                <div className='p-5 text-center md:text-right'>
                    <h1 className='text-lg font-bold py-2 mb-5 border-b-2 border-green-500 inline-block'>معرفی کتاب کتاب جدید</h1>
                    <p className='text-base leading-7'>
                        کتاب کارما؛ راهنمای یک یوگی برای ساختن سرنوشتتان نوشتهٔ سادگورو و ترجمهٔ منصور بیگدلی است و بهار سبز آن را منتشر کرده است. کارما، یادآور تفکربرانگیز و تحول‌برانگیز ظرفیت گستردهٔ ما برای ایجاد تغییر مثبت در زندگی خود و دیگران است؛ کتابی که هرکسی احساس گرفتار شدن و ناامیدی می‌کند باید بخواند.
                    </p>
                </div>
                <div className='p-5 text-center md:text-right'>
                    <h1 className='text-lg font-bold py-2 mb-5 border-b-2 border-green-500 inline-block'> درباره کتاب کتاب جدید</h1>
                    <p className='text-base leading-7'>
                        کتاب کارما؛ راهنمای یک یوگی برای ساختن سرنوشتتان نوشتهٔ سادگورو و ترجمهٔ منصور بیگدلی است و بهار سبز آن را منتشر کرده است. کارما، یادآور تفکربرانگیز و تحول‌برانگیز ظرفیت گستردهٔ ما برای ایجاد تغییر مثبت در زندگی خود و دیگران است؛ کتابی که هرکسی احساس گرفتار شدن و ناامیدی می‌کند باید بخواند.
                    </p>
                </div>
                <div className='p-5 text-center md:text-right'>
                    <h1 className='text-lg font-bold py-2 mb-5 border-b-2 border-green-500 inline-block'>کتاب جدید را به چه کسانی پیشنهاد میکنیم ؟</h1>
                    <p className='text-base leading-7'>
                        کتاب کارما؛ راهنمای یک یوگی برای ساختن سرنوشتتان نوشتهٔ سادگورو و ترجمهٔ منصور بیگدلی است و بهار سبز آن را منتشر کرده است. کارما، یادآور تفکربرانگیز و تحول‌برانگیز ظرفیت گستردهٔ ما برای ایجاد تغییر مثبت در زندگی خود و دیگران است؛ کتابی که هرکسی احساس گرفتار شدن و ناامیدی می‌کند باید بخواند.
                    </p>
                </div>
            </div>

        </>
    )
}

export default Book