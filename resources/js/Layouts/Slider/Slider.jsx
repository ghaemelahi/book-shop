import { Swiper, SwiperSlide } from "swiper/react"
import { Navigation, Pagination, Scrollbar, A11y } from "swiper"


const Slider = ({ }) => {
    return (
        <>
            <div className="w-full py-14 md:px-20 md:py-20 flex flex-col md:flex-row border items-center justify-center 
        bg-[url('../../../public/image/banner-bg.jpg')] gap-7 ">
                <div className="w-2/4 text-center md:text-right">
                    <h1 className="text-3xl md:text-5xl py-3 text-slate-800 font-bold">تا 75% تخفیف</h1>
                    <p className="text-sm py-3 text-slate-700 leading-7">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    <button className="my-3 py-3 px-7 bg-green-600 text-white rounded text-sm outline-none
                transition-all hover:bg-green-700">اکنون خرید کنید</button>
                </div>
                <div className="w-2/4 flex flex-col items-center justify-center">
                    <div className="w-full">
                        <Swiper
                            modules={[Navigation, Pagination, Scrollbar, A11y]}
                            slidesPerView={3}
                        >
                            <SwiperSlide className="transition-all hover:scale-90">
                                <img src='../public/image/books/book-1.png' />
                            </SwiperSlide>
                            <SwiperSlide className="transition-all hover:scale-90">

                                <img src='../public/image/books/book-2.png' />
                            </SwiperSlide>
                            <SwiperSlide className="transition-all hover:scale-90">

                                <img src='../public/image/books/book-3.png' />
                            </SwiperSlide>
                            <SwiperSlide className="transition-all hover:scale-90">

                                <img src='../public/image/books/book-4.png' />
                            </SwiperSlide>
                            <SwiperSlide className="transition-all hover:scale-90">

                                <img src='../public/image/books/book-5.png' />
                            </SwiperSlide>
                            <SwiperSlide className="transition-all hover:scale-90">

                                <img src='../public/image/books/book-6.png' />
                            </SwiperSlide>

                        </Swiper>
                    </div>
                    <div className="w-full">
                        <img src="../public/image/stand.png" />
                    </div>
                </div>
            </div>

            <section className="w-full flex items-center justify-center py-14 flex-wrap">
                <div className="flex items-center gap-4 m-10">
                    <i className="fa fa-download text-green-600 text-5xl"></i>
                    <div>
                        <h3 className="text-xl font-bold text-slate-700 py-3">دانلود رایگان</h3>
                        <p className="text-sm text-slate-500">کتاب ها </p>
                    </div>
                </div>

                <div className="flex items-center gap-4 m-10">
                    <i className="fa fa-lock text-green-600 text-5xl"></i>
                    <div>
                        <h3 className="text-xl font-bold text-slate-700 py-3">پرداخت امن</h3>
                        <p className="text-sm text-slate-500">100 پردات مطمئن</p>
                    </div>
                </div>
                <div className="flex items-center gap-4 m-10">
                    <i className="fa fa-repeat text-green-600 text-5xl"></i>
                    <div>
                        <h3 className="text-xl font-bold text-slate-700 py-3">بازگشت آسان</h3>
                        <p className="text-sm text-slate-500">10 روز مهلت بازگشت</p>
                    </div>
                </div>
                <div className="flex items-center gap-4 m-10">
                    <i className="fa fa-phone text-green-600 text-5xl"></i>
                    <div>
                        <h3 className="text-xl font-bold text-slate-700 py-3">پشتیبانی 7/24</h3>
                        <p className="text-sm text-slate-500">در هر زمان با ما تماس بگیرید</p>
                    </div>
                </div>
            </section>
        </>
    )
}

export default Slider