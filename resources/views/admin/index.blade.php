<!-- Content Header (Page header) -->
@extends('layouts.master')
@section('css')
    <style>
        .background {
            background-image: url('dist/img/books.jpg');
            background-repeat: no-repeat;
            background-position: right top;
            background-attachment: scroll;
        }
    </style>
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">داشبورد</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info-gradient">
                        <div class="inner">
                            <h3>65</h3>

                            <p>کاربران</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="{{ route('users.index') }}" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary-gradient">
                        <div class="inner">
                            <h3>150</h3>

                            <p>کتاب ها</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <a href="{{ route('books.index') }}" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success-gradient">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px"></sup></h3>

                            <p>سفارشات</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-shopping-bag"></i>
                        </div>
                        <a href="{{ route('orders.index') }}" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning-gradient text-white">
                        <div class="inner">
                            <h3>44</h3>

                            <p>پرداختی ها</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="{{ route('payments.index') }}" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger-gradient">
                        <div class="inner">
                            <h3>65</h3>

                            <p>کتاب های امانتی</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <a href="{{ route('trusts.index') }}" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <center>
                </center>
            </div>
        </div>
    </section>
@endsection
