import React from 'react'
import { Link } from 'react-router-dom'

const Book = ({ name, currentPrice, previousPrice }) => {
    return (
        <Link to={`/books/${1}`}>
            <div className="border rounded-md flex w-full justify-start items-center my-2 p-3">
                <div id="image" className="border w-3/12 md:w-6/12">
                    <img src="../public/image/books/book-1.png" />
                </div>
                <div className="w-8/12 md:w-6/12 text-right mr-3">
                    <h3 className="text-lg font-bold py-2">{name}</h3>
                    <div id="price" className="flex items-center justify-start gap-4 py-2">
                        <p>{currentPrice}</p>
                        <span className="text-xs opacity-70 line-through">{previousPrice}</span>
                    </div>
                    <div className="py-1">
                        <i className="fa fa-star text-green-600"></i>
                        <i className="fa fa-star text-green-600"></i>
                        <i className="fa fa-star text-green-600"></i>
                        <i className="fa fa-star text-green-600"></i>
                        <i className="fa fa-star-half-o text-green-600"></i>
                    </div>
                </div>
            </div>
        </Link>
    )
}

export default Book