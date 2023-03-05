import { useState } from "react"
import { Link } from "react-router-dom";

const Header = () => {

    const [isOpen, setIsOpen] = useState(true);

    return (
        <>

            <header className="shadow-md">
                <nav class="p-5 border-gray-200 rounded dark:bg-gray-800 dark:border-gray-700 justify-center
        items-center">
                    <div class="w-full md:px-20 flex flex-wrap md:flex-no-wrap justify-center items-center mx-auto">
                        <Link to="/" className="w-3/4 md:w-1/4">
                            <i className="fa fa-book fa-lg ml-2 text-green-600"></i>
                            <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">کتابخانه</span>
                        </Link>
                        <button type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600
                        md:hidden" onClick={() => setIsOpen(!isOpen)}>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        </button>

                        <div className={`${isOpen ? "flex" : "hidden"} w-full text-center flex-col md:flex-row md:justify-around md:w-3/4
                        items-center p-4 md:p-0 gap-y-8 md:gap-0`}>
                            <div className="w-full md:w-3/4 flex items-center justify-center">
                                <form className="relative w-2/3">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <button><i className="fa fa-search fa-lg transition-all text-slate-500 hover:text-green-600"></i></button>
                                    </div>
                                    <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-md rounded-md
                                         outline-none transition-all border-2 focus:ring-2 focus:ring-green-500 focus:border-0" placeholder="جستجو...." />
                                </form>
                            </div>

                            <div className="w-full md:w-1/4">
                                <ul class="rounded-lg dark:bg-gray-800 dark:border-gray-700 md:flex md:justify-end
                            gap-4">

                                    <Link to="/cart">
                                        <li className="text-2xl p-2 transition-all hover:text-green-500 cursor-pointer">
                                            <i className="fa fa-shopping-cart"></i>
                                        </li>
                                    </Link>
                                    <Link to="/login">
                                        <li className="text-2xl p-2 transition-all hover:text-green-500 cursor-pointer">
                                            <i className="fa fa-user"></i>
                                        </li>
                                    </Link>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <div className="md:hidden bg-green-600 w-full flex items-center
                 justify-center fixed bottom-0  transition-all z-20">
                    <ul className=" flex content-center justify-center text-center">
                        <Link to="/">
                            <li className="text-white font-semibold text-3xl py-4 px-4 cursor-pointer transition-all hover:bg-green-700">
                                <i className="fa fa-home"></i>
                            </li>
                        </Link>

                        <li className="text-white font-semibold text-3xl py-4 px-4 cursor-pointer transition-all hover:bg-green-700">
                            <i className="fa fa-list"></i>
                        </li>
                        <li className="text-white font-semibold text-3xl py-4 px-4 cursor-pointer transition-all hover:bg-green-700">
                            <i className="fa fa-tags"></i>
                        </li>
                        <Link to="/comments">
                            <li className="text-white font-semibold text-3xl py-4 px-4 cursor-pointer transition-all hover:bg-green-700">
                                <i className="fa fa-comments"></i>
                            </li>
                        </Link>
                        <Link to="/blog">
                            <li className="text-white font-semibold text-3xl py-4 px-4 cursor-pointer transition-all hover:bg-green-700">
                                <i className="fa fa-archive"></i>
                            </li>
                        </Link>
                    </ul>
                </div>

                <div className="hidden md:flex bg-green-600 items-center justify-center z-20
                 transition-all">
                    <ul className="flex items-center justify-center">
                        <Link to="/">
                            <li className="text-white py-4 px-4 cursor-pointer transition-all hover:bg-green-700">خانه</li>
                        </Link>
                        <Link to="/books">
                            <li className="text-white py-4 px-4 cursor-pointer transition-all hover:bg-green-700">کتاب ها</li>
                        </Link>
                        <li className="text-white py-4 px-4 cursor-pointer transition-all hover:bg-green-700">جدید ها</li>
                    </ul>
                </div>
            </header>
        </>

    )
}

export default Header