import Footer from "../Layouts/Footer/Footer"
import Header from "../Layouts/Header/Header"
import Slider from "../Layouts/Slider/Slider"


import '../../../node_modules/swiper/swiper.min.css';
import '../../../node_modules/swiper/swiper.css';
import '../../../node_modules/swiper/swiper-element.css';
import '../../../node_modules/swiper/swiper-element-bundle.css';
import '../../../node_modules/swiper/swiper-bundle.min.css';
import '../../../node_modules/swiper/swiper-bundle.css';
import NewsLetter from "NewsLetter/NewsLetter";
// import BestBooks from "BestBooks/BestBooks";
import Cart from "./Cart";
import { Routes, Route } from "react-router-dom";
import Account from "./Account/Account";
import Login from "./Auth/Login";
import Register from "./Auth/Register";
import Books from "./Books";
import Book from "./Book";
import Search from "./Search";



const App = () => {
  return (
    <>
      <Routes>
        {/* <Route path="/" element={<><Header />  <Slider />  <BestBooks /> <NewsLetter /> <Footer /></>} /> */}
        {/* <Route path="/" element={<><Header />  <NewsLetter /> <Footer /></>} /> */}
        {/* Temporary Route for example */}
        <Route path="/" element={<><Header /> <Slider /><Footer /></>} />
        {/* <Route path="/cart/:id?" element={<><Header /> <Cart /> <Footer /> </>} /> */}
        {/* <Route path="/search" element={<><Header /> <Search /> <Footer /> </>} />
        <Route path="/my-account/*" element={<Account />} />
        <Route path="/login" element={<Login />} />
        <Route path="/register" element={<Register />} /> */}
        {/* <Route path="/books" element={<><Header /> <Books /> <Footer /> </>} /> */}
        {/* <Route path="/books/:id" element={<><Header /> <Book /> <Footer /> </>} /> */}
      </Routes>
    </>
  )
}

export default App