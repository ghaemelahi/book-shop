import axios from "axios";

export const bookListAction = () => async (dispatch) => {
    try {

        dispatch({ type: "BOOKS_LIST_REQUEST" });

        const { data } = await axios.get("https://localhost:8000/api/books");

        dispatch({
            type: "BOOKS_LIST_SUCCESS",
            payload: data
        })

    } catch (err) {
        console.log(err.message);
    }
}

export const bookDetailAction = (id) => async (dispatch) => {
    try {

        dispatch({ type: "BOOK_DETAIL_REQUEST" });
        const { data } = await axios(`https://localhost:8000/api/books/${id}`);

        dispatch({
            type: "BOOK_DETAIL_SUCCESS",
            payload: data
        })

    } catch (err) {
        console.log(err.message);
    }
}