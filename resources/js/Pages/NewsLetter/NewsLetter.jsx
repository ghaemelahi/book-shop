
const NewsLetter = () => {
  return (
    <>
      <div className="w-full bg-[url('../../../public/image/letter-bg.jpg')] 
    bg-no-repeat bg-center bg-cover bg-fixed py-16 ">
        <div className="flex flex-col items-center justify-center gap-4 w-full md:w-2/4  p-10 text-center">
          <h1 className="text-xl md:text-2xl text-white">برای آخرین بروزرسانی مشترک شوید</h1>
          <input type="email" className="w-full py-3 px-3 rounded text-sm outline-none" placeholder="لطفا ایمیل خود را وارد کنید" />
          <button className="py-2 px-4 text-sm md:text-lg bg-green-500 text-white
                                rounded">عضویت</button>
        </div>
      </div>

      <section className="flex flex-col justify-center items-center bg-[#f3f3f3] p-5 md:flex-row
md:px-20 md:py-12">

        <div className="flex flex-col items-start justify-center w-full 
    md:w-3/6 text-right mb-5">
          <h1 className="font-bold text-xl text-green-600 py-2">معامله روز</h1>
          <h1 className="text-3xl md:text-4xl py-3 text-slate-800 font-bold">تا 50% تخفیف</h1>
          <p className="text-sm py-3 text-slate-700 leading-7">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
          <button className="my-3 py-3 px-7 bg-green-600 text-white rounded text-sm outline-none
        transition-all hover:bg-green-700">اکنون خرید کنید</button>
        </div>

        <div className="w-full md:w-3/6">
          <img src="../public/image/deal-img.jpg" />
        </div>
      </section>
    </>
  )
}

export default NewsLetter;