@extends('layouts.master')
@section('title','لیست پرداختی ها')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>لیست پرداختی ها</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">لیست پرداختی ها</h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-responsive w-100">
                <thead>
                    <tr>
                        <th width="5%">ردیف</th>
                        <th>نام کاربر</th>
                        <th>شماره تماس کاربر</th>
                        <th>نام کتاب</th>
                        <th>نوع خرید کتاب</th>
                        <th>مبلغ پرداخت شده</th>
                        <th>وضعیت پرداخت</th>
                        <th>تاریخ پرداخت</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $key => $payment)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            {{-- User_name --}}
                            <td>{{ $payment->user_id }}</td>
                            {{-- User Phone --}}
                            <td>{{ $payment->user_id }}</td>
                            {{-- book name --}}
                            <td>{{ $payment->book_id }}</td>
                            {{-- book type bay --}}
                            <td>{{ $payment->total_prices }}</td>
                            <td>{{ $payment->status_pay }}</td>
                            <td>{{ jdate("l j F Y", strtotime($payment->created_at)) }}</td>
                        </tr>
                    @endforeach
                </tbody> 
            </table>
        </div>
        <div class="w-100 mt-3 d-flex justify-content-center"></div>
    </div>
</section>
@endsection
