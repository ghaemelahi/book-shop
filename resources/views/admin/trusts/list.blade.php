@extends('layouts.master')
@section('title', 'امانتی ها')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>لیست امانت ها</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="col">
                    <h3 class="card-title">فیلتر تراکنش&zwnj;ها</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="col">
                    <form action="http://localhost/pritinghouse/transactions/list.php" method="get">
                        <div class="form-row">
                            <div class="col-md-3"></div>
                            <div class="form-group form-inline col-md-4">
                                <label for="of_date" class="col-sm-3">از تاریخ</label>
                                <input type="text" value=""
                                    class="form-control observer-example form-control-sm pwt-datepicker-input-element"
                                    id="of_date" name="of_date">
                            </div>
                            <div class="form-group form-inline col-md-4">
                                <label for="to_date" class="col-sm-3">تا تاریخ</label>
                                <input type="text" value=""
                                    class="form-control observer-example form-control-sm pwt-datepicker-input-element"
                                    id="to_date" name="to_date">
                            </div>
                            <div class="col-md-1">
                                <button type="submit" id="filter" name="filter"
                                    class="btn col-md-8 btn-danger btn-sm ">فیلتر</button>
                                <button type="submit" id="all" name="all"
                                    class="btn col-md-8  btn-info btn-sm mt-2">بازنشانی</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">لیست امانت ها</h3>
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
                            <th>از تاریخ</th>
                            <th>تا تاریخ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trusts as $key => $trust)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                {{-- User_name --}}
                                <td>{{ $trust->user_id }}</td>
                                {{-- User Phone --}}
                                <td>{{ $trust->user_id }}</td>
                                {{-- book name --}}
                                <td>{{ $trust->book_id }}</td>
                                {{-- book type bay --}}
                                <td>{{ change_date_to_jalali($trust->of_date) }}</td>
                                <td>{{ change_date_to_jalali($trust->to_date) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="w-100 mt-3 d-flex justify-content-center"></div>
        </div>
    </section>
@endsection
