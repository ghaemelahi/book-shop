import axios from "axios"

export const cartAction = (id) => async (dispatch, getState) => {
    const { data } = await axios.get(`http://localhost:8000/api/${id}`);

    dispatch({
        type: "CART_ADD_ITEM",
        payload: {
            id: data.id,
            book_name: data.book_name,
            path_image: data.path_image,
            book_writer : data.book_writer,
            print_publisher : data.print_publisher,
            electronic_price : data.electronic_price
        }
    });
}


export const removeFromCart = (id) => async (dispatch, getState) => {
    try {
        const response = await axios.delete(`http://localhost:8000/api/${id}`);
        dispatch({
            type: "CART_REMOVE_ITEM",
            payload: id
        });
    } catch (err) {
        console.log(err.message);
    }

}