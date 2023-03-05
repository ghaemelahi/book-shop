import React from 'react'

const AccountHeader = () => {
    return (
        <div className="w-full flex items-center justify-end shadow-md p-3">
            <div className="flex items-center">
                <div className="flex gap-4 px-4">
                    <span><i className="fa fa-bell text-slate-700 cursor-pointer"></i></span>
                    <span><i className="fa fa-comment text-slate-700 cursor-pointer"></i></span>
                </div>
                <div className="flex items-center justify-center gap-3 px-4 border-r-2">
                    <span className="font-bold text-sm cursor-pointer">احمد احمدی</span>
                    <img src="../../public/image/pic-2.png" className="w-12 h-12 rounded-full" />
                </div>
            </div>
        </div>
    )
}

export default AccountHeader