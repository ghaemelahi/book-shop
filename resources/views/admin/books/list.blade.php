@extends('layouts.master')
@section('title', 'لیست کتاب ها')
@section('content')
    @if ($message = Session::get('success'))
        <div class=" alert alert-success mt-3"><b>{{ $message }}</b></div>
    @endif
    @if ($message = Session::get('update'))
        <div class=" alert alert-primary mt-3"><b>{{ $message }}</b></div>
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
                <a href="{{ Route('books.create') }}"
                    class="d-flex align-items-center btn btn-success btn-sm mr-auto text-white">
                    <i class="fa fa-plus ml-2"></i> افزودن کتاب
                </a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-responsive w-100">
                    <thead>
                        <tr>
                            <th width="5%">شماره</th>
                            <th>عنوان</th>
                            <th>موضوع</th>
                            <th>نویسنده</th>
                            <th>وضعیت خرید</th>
                            <th>جزئیات</th>
                            <th width="10%">عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $key => $book)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $book->book_name }}</td>
                                <td>{{ $book->book_title }}</td>
                                <td>{{ $book->book_writer }}</td>
                                <td>{{ get_status_pay_book($book->id) }}</td>
                                <td>
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="">
                                        <button type="button" class="btn btn-info btn-sm" data-id="4"
                                            data-toggle="modal" data-target="#infoModal2"><i
                                                class="fa fa-info"></i></button>
                                        <div class="modal fade" id="infoModal2" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <span>جزئیات</span>
                                                        <button type="button" class="close mr-auto ml-0"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <thead>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>مترجم</td>
                                                                    <td>{{ $book->translator }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>ناشر</td>
                                                                    <td>{{ $book->print_publisher }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>نوبت و تاریخ چاپ</td>
                                                                    <td>{{ change_date_to_jalali($book->year_of_publication) }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>فرمت کتاب</td>
                                                                    <td>{{ $book->format_book }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>قیمت نسخه الکترونیک</td>
                                                                    <td>{{ number_format( $book->electronic_price );}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>توضیحات</td>
                                                                    <td>{{ $book->description }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-warning btn-sm ml-2 d-flex align-items-center"
                                            href="{{ route('books.edit', $book->id) }}" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="ویرایش"><i
                                                class="fa fa-edit"></i></a>
                                        <div class="display-inline-block">
                                            <form method="POST" class="h-100"
                                                action="{{ route('books.destroy', $book->id) }}">
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
