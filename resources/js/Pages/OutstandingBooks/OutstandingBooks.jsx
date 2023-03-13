import { Swiper, SwiperSlide } from "swiper/react"
import { Navigation, Pagination, Scrollbar, A11y } from "swiper"




const OutstandingBooks = () => {
    return (
        <div className="w-11/12 flex flex-col text-center mx-auto py-5">
            <h1 className="text-3xl font-bold">کتاب های برجسته</h1>
            <div className="py-10">
                <Swiper
                    modules={[Navigation, Pagination, Scrollbar, A11y]}
                    spaceBetween={10}
                    slidesPerView={5}
                    navigation
                    breakpoints={{
                        0 : {
                            slidesPerView : 1
                        },
                        576: {
                            // width: 576,
                            slidesPerView: 2,
                        },
                        768: {
                            // width: 768,
                            slidesPerView: 3,
                        },
                        1024 : {
                            slidesPerView : 5
                        }
                    }}
                >
                    <SwiperSlide className="transition-all">
                        <div className="border rounded-md">
                            <div id="image" className="border">
                                <img src="../public/image/books/book-1.png" />
                            </div>

                            <div className="content flex flex-col p-4 items-center justify-center gap-4">
                                <h3 className="text-lg font-bold">کتاب  برجسته</h3>
                                <div id="price" className="flex items-center justify-between gap-4">
                                    <p className="font-bold">10 هزار تومان</p>
                                    <span className="text-xs opacity-70 line-through">15 هزار تومان</span>
                                </div>
                                <button className="my-2 py-2 px-3 text-sm bg-green-500 text-white
                                rounded transition-all hover:bg-green-600">اظافه به سبد خرید</button>
                            </div>
                        </div>
                    </SwiperSlide>

                    <SwiperSlide className="transition-all">
                        <div className="border rounded-md">
                            <div id="image" className="border">
                                <img src="../public/image/books/book-2.png" />
                            </div>

                            <div className="content flex flex-col p-4 items-center justify-center gap-4">
                                <h3 className="text-lg font-bold">کتاب  برجسته</h3>
                                <div id="price" className="flex items-center justify-between gap-4">
                                    <p className="font-bold">10 هزار تومان</p>
                                    <span className="text-xs opacity-70 line-through">15 هزار تومان</span>
                                </div>
                                <button className="my-2 py-2 px-3 text-sm bg-green-500 text-white
                                rounded transition-all hover:bg-green-600">اظافه به سبد خرید</button>
                            </div>
                        </div>
                    </SwiperSlide>

                    <SwiperSlide className="transition-all">
                        <div className="border rounded-md">
                            <div id="image" className="border">
                                <img src="../public/image/books/book-3.png" />
                            </div>

                            <div className="content flex flex-col p-4 items-center justify-center gap-4">
                                <h3 className="text-lg font-bold">کتاب  برجسته</h3>
                                <div id="price" className="flex items-center justify-between gap-4">
                                    <p className="font-bold">10 هزار تومان</p>
                                    <span className="text-xs opacity-70 line-through">15 هزار تومان</span>
                                </div>
                                <button className="my-2 py-2 px-3 text-sm bg-green-500 text-white
                                rounded transition-all hover:bg-green-600">اظافه به سبد خرید</button>
                            </div>
                        </div>
                    </SwiperSlide>

                    <SwiperSlide className="transition-all">
                        <div className="border rounded-md">
                            <div id="image" className="border">
                                <img src="../public/image/books/book-4.png" />
                            </div>

                            <div className="content flex flex-col p-4 items-center justify-center gap-4">
                                <h3 className="text-lg font-bold">کتاب  برجسته</h3>
                                <div id="price" className="flex items-center justify-between gap-4">
                                    <p className="font-bold">10 هزار تومان</p>
                                    <span className="text-xs opacity-70 line-through">15 هزار تومان</span>
                                </div>
                                <button className="my-2 py-2 px-3 text-sm bg-green-500 text-white
                                rounded transition-all hover:bg-green-600">اظافه به سبد خرید</button>
                            </div>
                        </div>
                    </SwiperSlide>

                    <SwiperSlide className="transition-all">
                        <div className="border rounded-md">
                            <div id="image" className="border">
                                <img src="../public/image/books/book-5.png" />
                            </div>

                            <div className="content flex flex-col p-4 items-center justify-center gap-4">
                                <h3 className="text-lg font-bold">کتاب  برجسته</h3>
                                <div id="price" className="flex items-center justify-between gap-4">
                                    <p className="font-bold">10 هزار تومان</p>
                                    <span className="text-xs opacity-70 line-through">15 هزار تومان</span>
                                </div>
                                <button className="my-2 py-2 px-3 text-sm bg-green-500 text-white
                                rounded transition-all hover:bg-green-600">اظافه به سبد خرید</button>
                            </div>
                        </div>
                    </SwiperSlide>

                    <SwiperSlide className="transition-all">
                        <div className="border rounded-md">
                            <div id="image" className="border">
                                <img src="../public/image/books/book-6.png" />
                            </div>

                            <div className="content flex flex-col p-4 items-center justify-center gap-4">
                                <h3 className="text-lg font-bold">کتاب  برجسته</h3>
                                <div id="price" className="flex items-center justify-between gap-4">
                                    <p className="font-bold">10 هزار تومان</p>
                                    <span className="text-xs opacity-70 line-through">15 هزار تومان</span>
                                </div>
                                <button className="my-2 py-2 px-3 text-sm bg-green-500 text-white
                                rounded transition-all hover:bg-green-600">اظافه به سبد خرید</button>
                            </div>
                        </div>
                    </SwiperSlide>
                </Swiper>
            </div>
        </div>
    )
}

export default OutstandingBooks