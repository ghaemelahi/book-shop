import { useEffect } from 'react';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Head, Link, useForm } from '@inertiajs/react';

// export default function Register() {
//     const { data, setData, post, processing, errors, reset } = useForm({
//         name: '',
//         email: '',
//         password: '',
//         password_confirmation: '',
//     });

//     useEffect(() => {
//         return () => {
//             reset('password', 'password_confirmation');
//         };
//     }, []);

//     const handleOnChange = (event) => {
//         setData(event.target.name, event.target.type === 'checkbox' ? event.target.checked : event.target.value);
//     };

//     const submit = (e) => {
//         e.preventDefault();

//         post(route('register'));
//     };

//     return (
//         <GuestLayout>
//             <Head title="Register" />

//             <form onSubmit={submit}>
//                 <div>
//                     <InputLabel htmlFor="name" value="Name" />

//                     <TextInput
//                         id="name"
//                         name="name"
//                         value={data.name}
//                         className="mt-1 block w-full"
//                         autoComplete="name"
//                         isFocused={true}
//                         onChange={handleOnChange}
//                         required
//                     />

//                     <InputError message={errors.name} className="mt-2" />
//                 </div>

//                 <div className="mt-4">
//                     <InputLabel htmlFor="email" value="Email" />

//                     <TextInput
//                         id="email"
//                         type="email"
//                         name="email"
//                         value={data.email}
//                         className="mt-1 block w-full"
//                         autoComplete="username"
//                         onChange={handleOnChange}
//                         required
//                     />

//                     <InputError message={errors.email} className="mt-2" />
//                 </div>

//                 <div className="mt-4">
//                     <InputLabel htmlFor="password" value="Password" />

//                     <TextInput
//                         id="password"
//                         type="password"
//                         name="password"
//                         value={data.password}
//                         className="mt-1 block w-full"
//                         autoComplete="new-password"
//                         onChange={handleOnChange}
//                         required
//                     />

//                     <InputError message={errors.password} className="mt-2" />
//                 </div>

//                 <div className="mt-4">
//                     <InputLabel htmlFor="password_confirmation" value="Confirm Password" />

//                     <TextInput
//                         id="password_confirmation"
//                         type="password"
//                         name="password_confirmation"
//                         value={data.password_confirmation}
//                         className="mt-1 block w-full"
//                         autoComplete="new-password"
//                         onChange={handleOnChange}
//                         required
//                     />

//                     <InputError message={errors.password_confirmation} className="mt-2" />
//                 </div>

//                 <div className="flex items-center justify-end mt-4">
//                     <Link
//                         href={route('login')}
//                         className="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
//                     >
//                         Already registered?
//                     </Link>

//                     <PrimaryButton className="ml-4" disabled={processing}>
//                         Register
//                     </PrimaryButton>
//                 </div>
//             </form>
//         </GuestLayout>
//     );
// }


// import { Link } from 'react-router-dom'

import React from 'react'

const Register = () => {

    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        phone:'',
        password_confirmation: '',
    });

    useEffect(() => {
        return () => {
            reset('password', 'password_confirmation');
        };
    }, []);

    const handleOnChange = (event) => {
        setData(event.target.name, event.target.type === 'checkbox' ? event.target.checked : event.target.value);
    };

    const submit = (e) => {
        e.preventDefault();

        post(route('login'));
    };

    return (
        <div className='w-10/12 h-[80vh]  mx-auto my-10 rounded-md shadow-md flex overflow-hidden'>
            <div className='w-full h-full md:w-7/12 p-4'>
                <div className='w-full h-full flex flex-col items-end justify-center py-3'>
                    <a href="/">
                        <p className='text-sm text-slate-700'>بازگشت<i className='fa fa-arrow-left mr-2'></i></p>
                    </a>
                    <h1 className='font-bold text-3xl mx-auto py-4'>فرم ثبت نام</h1>
                    <form onClick={submit} className='w-full py-6 px-2 flex flex-col items-center'>
                        <div className='form-group w-full flex flex-col md:flex-row items-center justify-center my-2 gap-3'>
                            <input type="email" className='rounded-md text-lg py-2 w-9/12 px-3 outline-none border-2 focus:ring-2 text-right focus:ring-green-500' placeholder='ایمیل' />
                            <input type="text" className='rounded-md text-lg py-2 px-3 w-9/12 outline-none border-2 focus:ring-2 text-right focus:ring-green-500' placeholder='نام و نام خانوادگی' />
                        </div>

                        <div className='form-group w-full flex flex-col md:flex-row items-center justify-center my-2 gap-3'>
                            <input type="text" className='rounded-md text-lg py-2 w-9/12 px-3 outline-none border-2 focus:ring-2 text-right focus:ring-green-500' placeholder='نام کاربری' />
                            <input type="tel" className='rounded-md text-lg py-2 px-3 w-9/12 outline-none border-2 focus:ring-2 text-right focus:ring-green-500' placeholder='شماره تماس' />

                        </div>

                        <div className='form-group w-full flex flex-col md:flex-row items-center justify-center my-2 gap-3'>
                            <input type="password" className='rounded-md text-lg py-2 px-3 w-9/12 outline-none border-2 focus:ring-2 text-right focus:ring-green-500' placeholder='تکرار رمز عبور' />
                            <input type="password" className='rounded-md text-lg py-2 px-3 w-9/12 outline-none border-2 focus:ring-2 text-right focus:ring-green-500' placeholder='رمز عبور' />
                        </div>

                        <div className='form-group w-9/12 flex flex-row-reverse my-4'>
                            <input onChange={handleOnChange} type="checkbox" className='w-4 h-4' />
                            <span className='mx-2 text-right text-sm'>مرا به خاطر بسپار</span>
                        </div>
                        <button type='submit' className='bg-green-500 text-white font-bold rounded-md w-8/12 
          py-3 transition-all my-4 hover:bg-green-600'>ثبت نام</button>
                        <a href="/login">
                            <span className='text-sm text'>ورود به حساب کاربری</span>
                        </a>
                    </form>
                </div>
            </div>
            <div className='hidden md:block md:w-5/12 md:h-full'>
                <img src='../../../../../../image/book-5.png' className='w-full h-full object-cover ' />
            </div>
        </div>
    )
}

export default Register