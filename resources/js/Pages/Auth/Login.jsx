import { useEffect } from 'react';
// import Checkbox from '@/Components/Checkbox';
// import GuestLayout from '@/Layouts/GuestLayout';
// import InputError from '@/Components/InputError';
// import InputLabel from '@/Components/InputLabel';
// import PrimaryButton from '@/Components/PrimaryButton';
// import TextInput from '@/Components/TextInput';
import { Head, Link, useForm } from '@inertiajs/react';


// export default function Login({ status, canResetPassword }) {
//     const { data, setData, post, processing, errors, reset } = useForm({
//         email: '',
//         password: '',
//         remember: '',
//     });

//     useEffect(() => {
//         return () => {
//             reset('password');
//         };
//     }, []);

//     const handleOnChange = (event) => {
//         setData(event.target.name, event.target.type === 'checkbox' ? event.target.checked : event.target.value);
//     };

//     const submit = (e) => {
//         e.preventDefault();

//         post(route('login'));
//     };

//     return (
//         <GuestLayout>
//             <Head title="Log in" />

//             {status && <div className="mb-4 font-medium text-sm text-green-600">{status}</div>}

//             <form onSubmit={submit}>
//                 <div>
//                     <InputLabel htmlFor="email" value="Email" />

//                     <TextInput
//                         id="email"
//                         type="email"
//                         name="email"
//                         value={data.email}
//                         className="mt-1 block w-full"
//                         autoComplete="username"
//                         isFocused={true}
//                         onChange={handleOnChange}
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
//                         autoComplete="current-password"
//                         onChange={handleOnChange}
//                     />

//                     <InputError message={errors.password} className="mt-2" />
//                 </div>

//                 <div className="block mt-4">
//                     <label className="flex items-center">
//                         <Checkbox name="remember" value={data.remember} onChange={handleOnChange} />
//                         <span className="ml-2 text-sm text-gray-600">Remember me</span>
//                     </label>
//                 </div>

//                 <div className="flex items-center justify-end mt-4">
//                     {canResetPassword && (
//                         <Link
//                             href={route('password.request')}
//                             className="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
//                         >
//                             Forgot your password?
//                         </Link>
//                     )}

//                     <PrimaryButton className="ml-4" disabled={processing}>
//                         Log in
//                     </PrimaryButton>
//                 </div>
//             </form>
//         </GuestLayout>
//     );
// }
// import { Link } from 'react-router-dom'

const Login = ({ status, canResetPassword }) => {

    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: '',
    });

    useEffect(() => {
        return () => {
            reset('password');
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
        <div className='w-full h-screen flex flex-col items-center justify-center'>
            <div className='w-10/12 h-[80vh] rounded-md shadow-md flex overflow-hidden'>
                <div className='w-full h-full md:w-7/12 p-4'>
                    <div className='w-full h-full flex flex-col items-end justify-center py-3'>
                        {/* <Link to="/">
              <p className='text-sm text-slate-700'>بازگشت<i className='fa fa-arrow-left mr-2'></i></p>
            </Link> */}
                        <h1 className='font-bold mx-auto text-3xl py-4'>فرم ورود</h1>
                        {status && <div className="mb-4 font-medium text-sm text-green-600">{status}</div>}
                        <form onSubmit={submit
                        } className='w-full py-6 px-2 flex flex-col gap-4 items-center'>
                            <div className='form-group w-full flex flex-col items-center my-2'>
                                <input value={data.email} onChange={(e) => setData(e.target.value)} type="email" className='rounded-md text-lg py-2 px-3 w-9/12 outline-none border-2 focus:ring-2 focus:ring-green-500' placeholder='ایمیل' />
                            </div>

                            <div className='form-group w-full flex flex-col items-center my-2'>
                                <input value={data.password} type="text" className='rounded-md text-lg py-2 px-3 w-9/12 outline-none border-2 focus:ring-2 focus:ring-green-500' placeholder='رمز عبور' />
                            </div>
                            <div className='form-group w-9/12 flex items-center justify-start my-2'>
                                <input onChange={handleOnChange} type="checkbox" className='w-4 h-4' />
                                <span className='mx-2 text-sm'>مرا به خاطر بسپار</span>
                            </div>
                            <button type='submit' className='bg-green-500 text-white font-bold rounded-md w-8/12 
            py-3 transition-all hover:bg-green-600'>ورود</button>
                            {canResetPassword && (
                                <Link
                                    href={route('password.request')}
                                    className="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                >
                                    <span className='text-sm text-blue-500'>رمز خود را فراموش کرده اید؟</span>

                                </Link>
                            )}


                            <a href="/register">
                                <span className='text-sm text'>ایجاد حساب کاربری</span>
                            </a>
                        </form>
                    </div>
                </div>
                <div className='hidden md:block md:w-5/12 md:h-full'>
                    <img src="../../../../../../../public/image/blog-1.jpg" className='w-full h-full object-cover ' />
                </div>
            </div>
        </div>
    )
}

export default Login
