@extends('layouts.master')
@section('title','لیست سفارشات')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>لیست سفارشات</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">لیست سفارشات</h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-responsive w-100">
                <thead>
                    <tr>
                        <th width="5%">ردیف</th>
                        <th>نام کاربر</th>
                        <th>نام کتاب</th>
                        <th>وضعیت پرداخت</th>
                        <th>نوع خرید</th>
                        <th>تاریخ ثبت سفارش</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $order)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $order->user_id }}</td>
                            <td>{{ $order->book_id }}</td>
                            <td>{{ $order->payment_id }}</td>
                            <td>{{ get_status_pay_order($order->id) }}</td>
                            <td>{{ $order->count_number }}</td>
                            <td>{{ $order->total_prices }}</td>
                            <td>{{ $order->type_pay }}</td>
                            <td>{{ jdate("l j F Y", strtotime($order->type_pay)) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="w-100 mt-3 d-flex justify-content-center"></div>
    </div>
</section>
@endsection