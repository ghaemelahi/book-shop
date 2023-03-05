import { Swiper, SwiperSlide } from "swiper/react"
import { Navigation, Pagination, Scrollbar, A11y } from "swiper"
import Book from "../Book/Book"


const NewBooks = () => {
    return (
        <div className="w-10/12 flex flex-col text-center mx-auto py-10 my-6">
            <h1 className="text-3xl font-bold">جدیدترین کتاب ها</h1>
            <div className="py-10">
                <Swiper
                    modules={[Navigation, Pagination, Scrollbar, A11y]}
                    spaceBetween={10}
                    slidesPerView={5}
                    autoplay={{
                        delay: 2500,
                        reverseDirection: true,

                    }}
                    pagination={{
                        clickable: true,
                    }}
                    breakpoints={{
                        0: {
                            slidesPerView: 1
                        },
                        576: {
                            // width: 576,
                            slidesPerView: 1,
                        },
                        768: {
                            // width: 768,
                            slidesPerView: 3,
                        }
                    }}
                >
                    <SwiperSlide className="transition-all">
                        <Book name="کتاب جدید" currentPrice="10 هزار تومان" previousPrice="15 هزار تومان" />

                        <Book name="کتاب جدید" currentPrice="10 هزار تومان" previousPrice="15 هزار تومان" />
                    </SwiperSlide>


                    <SwiperSlide className="transition-all">
                        <Book name="کتاب جدید" currentPrice="10 هزار تومان" previousPrice="15 هزار تومان" />

                        <Book name="کتاب جدید" currentPrice="10 هزار تومان" previousPrice="15 هزار تومان" />
                    </SwiperSlide>

                    <SwiperSlide className="transition-all">
                        <Book name="کتاب جدید" currentPrice="10 هزار تومان" previousPrice="15 هزار تومان" />

                        <Book name="کتاب جدید" currentPrice="10 هزار تومان" previousPrice="15 هزار تومان" />
                    </SwiperSlide>

                </Swiper>
            </div>
        </div>
    )
}

export default NewBooks