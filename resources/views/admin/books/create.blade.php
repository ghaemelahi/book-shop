@extends('layouts.master')
@section('title', 'عملیات')
@section('css')
    <style>
        .card-danger:not(.card-outline) .card-header {
            /* background-color: #dc3545; */
            background-color: darkblue;
        }
    </style>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection
@section('content')
    @if ($message = Session::get('not_image'))
        <div class=" alert alert-danger mt-3"><b>{{ $message }}</b></div>
    @endif
    <section class="content">
        <div class="container-fluid">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>{{ $action == 'edit' ? 'فرم ویرایش کتاب' : 'فرم ایجاد کتاب' }}</h1>
                        </div>
                    </div>
                </div>
            </section>

            @include('layouts.partials.error')

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">{{ $action == 'edit' ? 'فرم ویرایش کتاب' : 'فرم ایجاد کتاب' }}
                                    </h3>
                                </div>
                                <form role="form"
                                    action="{{ $action == 'edit' ? route('books.edit', $books->id) : route('books.store') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @if ($action == 'edit')
                                        @method('PATH')
                                    @else
                                        @method('POST')
                                    @endif
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="book_name" class="star">نام کتاب</label>
                                                    <input type="text" required
                                                        oninvalid="this.setCustomValidity('نام کتاب را وارد کنید.')"
                                                        class=" form-control" name="book_name"
                                                        value="{{ $action == 'edit' ? $books->book_name : old('book_name') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="book_title" class="star">موضوع</label>
                                                    <input type="text" required
                                                        oninvalid="this.setCustomValidity('موضوع کتاب را وارد کنید.')"
                                                        class=" form-control" name="book_title"
                                                        value="{{ $action == 'edit' ? $books->book_title : old('book_title') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-inline-block" id="result-get-user-info">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="book_writer" class="star">نویسنده</label>
                                                            <input type="text" required
                                                                oninvalid="this.setCustomValidity('نویسنده کتاب را وارد کنید.')"
                                                                class=" form-control" name="book_writer"
                                                                value="{{ $action == 'edit' ? $books->book_writer : old('book_writer') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="status" class="star">نوع پرداخت</label>
                                                    <select required=""
                                                        oninvalid="this.setCustomValidity('نوع پرداخت را انتخاب کنید')"
                                                        oninput="setCustomValidity('')" class=" form-control select2"
                                                        name="status" id="status">
                                                        <option selected disabled>انتخاب کنید</option>
                                                        {{-- <option value="">{{get_status_pay_book($books->id)}}</option> --}}
                                                        <option value="pay_and_trust">پرداخت و امانت</option>
                                                        <option value="pay">پرداخت</option>
                                                        <option value="trust">امانت گرفتن</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="translator" class="star">مترجم</label>
                                                    <input type="text" autocomplete="off" type="text"
                                                        class="custom-field form-control" required=""
                                                        oninvalid="this.setCustomValidity(' نام مترجم کتاب را وارد کنید')"
                                                        oninput="setCustomValidity('')" id="translator" name="translator">
                                                </div>
                                            </div>
                                            <div class=" col-md-3">
                                                <div class=" form-group">
                                                    <label for="print_publisher" class="star">ناشر چاپی</label>
                                                    <div class="form-group">
                                                        <input type="text" required=""
                                                            oninvalid="this.setCustomValidity(' ناشر چاپی کتاب را وارد کنید')"
                                                            oninput="setCustomValidity('')" class=" form-control"
                                                            name="print_publisher"
                                                            value="{{ $action == 'edit' ? $books->print_publisher : old('print_publisher') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-3">
                                                <div class=" form-group">
                                                    <label for="year_of_publication" class="star">سال انتشار</label>
                                                    <div class="form-group">
                                                        <input type="text" required=""
                                                            oninvalid="this.setCustomValidity(' سال انتشار کتاب را وارد کنید')"
                                                            oninput="setCustomValidity('')"
                                                            class=" form-control observer-example"
                                                            name="year_of_publication">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="format_book" class="star">فرمت کتاب</label>
                                                    <select required=""
                                                        oninvalid="this.setCustomValidity('فرمت کتاب را انتخاب کنید')"
                                                        oninput="setCustomValidity('')" class=" form-control select2"
                                                        name="format_book" id="">
                                                        <option selected disabled>انتخاب کنید</option>
                                                        <option value="pdf">PDF</option>
                                                        <option value="word">Word</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=" col-md-3">
                                                <div class=" form-group">
                                                    <label for="electronic_price" class="star">قیمت نسخه
                                                        الکترونیک</label>
                                                    <div class="form-group">
                                                        <input onkeyup="javascript:this.value=separate(this.value);"
                                                            type="text" required=""
                                                            oninvalid="this.setCustomValidity('قیمت نسخه الکترونیک کتاب را انتخاب کنید')"
                                                            oninput="setCustomValidity('')" class=" form-control"
                                                            name="electronic_price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="description" class="star">توضیحات</label>
                                                    <textarea name="description" required="" oninvalid="this.setCustomValidity('توضیحات کتاب را انتخاب کنید')"
                                                        oninput="setCustomValidity('')" id="description" rows="5" class=" form-control"
                                                        onkeyup="javascript:this.value=separate(this.value);">{{ $action == 'edit' ? $books->description : old('description') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6"></div>
                                            <div class="w-100 mr-1 mt-4 mb-4">
                                                <div class="form-group">
                                                    <label for="image_book">بارگذاری تصاویر کتاب</label>
                                                    <input type="hidden" name="image_book[]" id="image_book" />
                                                    <div class="col-md-12">
                                                        <div id="photo_dropzone" class="dropzone form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer col-md-12">
                                        <button type="submit" name="create"
                                            class="btn btn-success btn-lg float-left">ذخیره</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
@section('script')
    <script>
        function separate(Number) {
            Number += '';
            Number = Number.replace(',', '');
            x = Number.split('.');
            y = x[0];
            z = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(y))
                y = y.replace(rgx, '$1' + ',' + '$2');
            return y + z;
        }
    </script>
    <script>
        Dropzone.autoDiscover = true;
        var photoList = [];
        var drop = new Dropzone('#photo_dropzone', {
            addRemoveLinks: true,
            dictRemoveFile: "حذف عکس", 
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            url: "{{ route('dropzone') }}",
            sending: function(file, xhr, formData) {
                formData.append("_token", "{{ csrf_token() }}");
            },
            success: function(file, response) {
                photoList.push(response.id)

            }
        });
        productGallery = function() {
            document.getElementById('image_book').value = photoList;
        }
    </script>
@endsection
