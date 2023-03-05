import { Link } from "react-router-dom"

const Footer = () => {
  return (
    <footer className="w-full pt-10 bg-white border-t-2 mb-20 md:mb-0">
      <div className="container flex flex-col justify-between mx-auto px-4 py-5 md:flex-row gap-7 md:gap-2">

        <div className="text-center md:text-right md:pr-5 w-full md:w-1/4">
          <Link to="/">
            <i className="fa fa-book fa-lg ml-2 text-green-600"></i>
            <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">کتابخانه</span>
          </Link>
          <div className="p-2 mt-3 w-2/4 mx-auto md:w-full">
            <p className="leading-8">لورم ایپسوم متن ساختگی با تولید نامفهوم برای طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید نامفهوم برای طراحان گرافیک است.</p>
          </div>
        </div>


        <div className="text-center w-full md:w-1/4">
          <h2 className="font-bold text-lg p-3">کتابخانه</h2>
          <ul className="p-2 mt-3 flex flex-col gap-2">
            <Link className="mb-4 transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>تماس با ما</span>
            </Link>
            <Link className="mb-4 transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>وبلاگ</span>
            </Link>
            <Link className="mb-4 transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>سوال های متداول</span>
            </Link>
          </ul>
        </div>

        <div className="text-center w-full md:w-1/4">
          <h2 className="font-bold text-lg p-3">کتاب های پیشنهادی</h2>
          <ul className="p-2 mt-3 flex flex-col gap-6">
            <Link className="transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>رمان سالتو</span>
            </Link>
            <Link className="transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>شازده کوچولو</span>
            </Link>
            <Link className=" transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>غرور و تعصب</span>
            </Link>
            <Link className=" transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>اثر مرکب</span>
            </Link>
            <Link className=" transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>وقتی نیچه گریست</span>
            </Link>
            <Link className="transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>نیمه تاریک وجود</span>
            </Link>
          </ul>
        </div>

        <div className="text-center w-full md:w-1/4">
          <h2 className="font-bold text-lg p-3">دسته بندی پیشنهادی</h2>
          <ul className="p-2 mt-3 flex flex-col gap-6">
            <Link className="transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>رمان عاشقانه</span>
            </Link>
            <Link className="transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>کتاب های علمی</span>
            </Link>
            <Link className="transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>کتاب های صوتی</span>
            </Link>
            <Link className="transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>کتاب های پزشکی</span>
            </Link>
            <Link className=" transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>کتاب های صوتی رایگان</span>
            </Link>
            <Link className="transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-arrow-right text-green-500 ml-3"></i>
              <span>کتاب های انگیزشی</span>
            </Link>
          </ul>
        </div>

        <div className="text-center w-full md:w-1/4">
          <h2 className="font-bold text-lg p-3">اطلاعات تماس</h2>
          <ul className="p-2 mt-3 flex flex-col gap-6">
            <li className=" transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-phone text-green-500 ml-3"></i>
              <span>+123-456-789</span>
            </li>
            <li className=" transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-phone text-green-500 ml-3"></i>
              <span>+111-222-3333</span>
            </li>
            <li className=" transition-all cursor-pointer hover:mr-4">
              <i className="fa fa-envelope text-green-500 ml-3"></i>
              <span>bookshop@gamil.com</span>
            </li>
          </ul>
        </div>
      </div>


      <div className="flex flex-col justify-center items-center">
        <div className="py-5">
          <ul className="flex justify-center items-center gap-4">
            <li className="flex justify-center items-center text-center text-white py-4 px-5 text-2xl bg-green-500 rounded-full
            cursor-pointer transition-all hover:bg-green-600">
              <a href="https://github.com/ghaemelahi" target="_blank">

              <i className="fa fa-github p-0"></i>
              </a>
            </li>
            {/* <li className="flex justify-center items-center text-center text-white p-4 text-2xl bg-green-500 rounded-full
            cursor-pointer transition-all hover:bg-green-600">
              <i className="fa fa-twitter p-0"></i>
            </li>
            <li className="flex justify-center items-center text-center text-white p-4 text-2xl bg-green-500 rounded-full
            cursor-pointer transition-all hover:bg-green-600">
              <i className="fa fa-instagram p-0"></
              i></li>
            <li className="flex justify-center items-center text-center text-white p-4 text-2xl bg-green-500 rounded-full
            cursor-pointer transition-all hover:bg-green-600">
              <i className="fa fa-linkedin p-0"></i
              ></li>
            <li className="flex justify-center items-center text-center text-white py-4 px-5 text-2xl bg-green-500 rounded-full
            cursor-pointer transition-all hover:bg-green-600">
              <i className="fa fa-facebook p-0">
              </i></li>  */}
          </ul>
        </div>
        <div className="w-3/4 border-t-2 py-5 text-center">
          <p className="text-slate-700"><span className="text-green-500 font-bold">لورم ایپسوم </span>متن ساختگی با تولید نامفهوم برای طراحان گرافیک است</p>
        </div>
      </div>
    </footer>
  )
}

export default Footer