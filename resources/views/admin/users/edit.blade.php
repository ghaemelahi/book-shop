@extends('layouts.master')
@section('title','آپدیت')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>تغیر سِمَت کاربری</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">{{$users->name}}تغیر سِمَت کاربری</h3>
                    </div>
                    <form role="form" action="{{uoute('users.update',$users->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="rolse" class="star">سِمَت کاربر</label>
                                        <select required="" oninvalid="this.setCustomValidity(' سِمَت کاربر را وارد کنید')" oninput="setCustomValidity('')" class="form-control" id="rolse" name="rolse">
                                            <option selected="" disabled="">انتخاب کنید...</option>
                                            <option value="boss">مدیریت</option>
                                            <option value="writer">نویسنده</option>
                                            <option value="user">کاربر معمولی</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="create" class="btn btn-success btn-lg float-left">ذخیره</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection