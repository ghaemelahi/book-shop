import axios from 'axios';
import { createStore, combineReducers, applyMiddleware } from 'redux'
import thunk from 'redux-thunk'
import { bookDetailReducer, bookListReducer } from './reducer/bookReducer';
import { cartReducer } from './reducer/cartReducer';


const reducer = combineReducers({
    bookList: bookListReducer,
    bookDetail: bookDetailReducer,
    cart: cartReducer
});


// Get Items To Cart
let cartInformation = [];
const cartFromDB = async () => {
    try {
        let { data } = await axios.get("https://localhost:800/api/cart");
        cartInformation = data;
    } catch (err) {
        console.log(err.message);
    }
}
cartFromDB();



const initialState = {
    cart: { cartItems: cartInformation }
}


const middleware = [thunk];

const store = createStore(reducer, initialState, applyMiddleware(...middleware));


export default store;