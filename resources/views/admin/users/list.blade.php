@extends('layouts.master')
@section('title','لیست کاربران')
@section('content')
@if ($message = Session::get('update'))
<div class=" alert alert-success mt-3"><b>{{ $message }}</b></div>
@endif
@if ($message = Session::get('delete'))
<div class="alert alert-danger mt-3"><b>{{ $message }}</b></div>
@endif
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>لیست کتاب ها</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">لیست کتاب ها</h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-responsive w-100">
                <thead>
                    <tr>
                        <th width="5%">ردیف</th>
                        <th>نام و نام خانوادگی</th>
                        <th>شماره تماس</th>
                        <th>ایمیل</th>
                        <th>نام کاربری</th>
                        <th>IP</th>
                        <th>نقش کاربری</th>
                        <th width="10%">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->IP }}</td>
                            <td>{{ get_type_role_users($user->id) }}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-warning btn-sm ml-2 d-flex align-items-center"
                                        href="{{ route('users.edit', $user->id) }}" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="ویرایش"><i
                                            class="fa fa-edit"></i></a>
                                    <div class="display-inline-block">
                                        <form method="POST" class="h-100"
                                            action="{{ route('users.destroy', $user->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button data-toggle="tooltip" data-placement="top" title="حذف"
                                                type="submit"
                                                class="h-100 delete-user-confirm btn btn-danger btn-sm d-flex align-items-center"><i
                                                    class="fa fa-close"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="w-100 mt-3 d-flex justify-content-center"></div>
    </div>
</section>
@endsection