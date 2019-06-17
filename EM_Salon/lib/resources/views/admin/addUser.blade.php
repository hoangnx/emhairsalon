@extends('admin.layout')

@section('title', 'EM Hair Salon - Users')

@section('content')
<!--Start Content-->
<article class="content static-tables-page">
    <!--Start Title Block-->
    <div class="title-block">
        <h1 class="title"> User Manager </h1>
        <p class="title-description"> Quản lý tài khoản </p>
    </div>
    <!--End Title Block-->
    @include('errors.note')
    <!--Start Form Add User-->
    <div class="title-block">
        <h3 class="title"> Thêm tài khoản </h3>
    </div>
    @if(isset($errors))
        @foreach($errors->all() as $er)
            <p class="alert alert-danger">{{$er}}<p>
        @endforeach
    @endif
    <!--Start Form Add User-->
    <form  method="post" enctype="multipart/form-data">
        <fieldset class="form-group">
            <label class="control-label" for="user_name">Tên tài khoản</label>
            <input type="text" class="form-control" name="user_name" required> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="password">Mật khẩu</label>
            <input type="password" class="form-control" name="password" required> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="email">Email</label>
            <input type="text" class="form-control" name="email" required> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="address">Address</label>
            <input type="text" class="form-control" name="address"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="phone">Số điện thoại</label>
            <input type="text" class="form-control" name="phone"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label">Chọn quyền</label>
            <select class="form-control form-control-sm" name="user_level" required>
                <option value="0">Admin</option>
                <option value="1">User</option>
            </select>
        <fieldset class="form-group">
            <label class="control-label" for="brand_id">Mã chi nhánh</label>
            <input type="number" class="form-control" name="brand_id" required> </fieldset>
        <fieldset class="form-group">
            <label class="control-label">Ảnh đại diện</label>
            <input class="form-control" type="file" name="avatar" onchange="changeImg(this)" required="">
        </fieldset>
        <button type="submit" class="btn btn-success" name="submit">Lưu</button>
        <button type="button" class="btn btn-danger" name="cancel">Hủy</button>
        @csrf
    </form>
    <!--End Form Add User-->
    
</article>
<!--End Content-->

@endsection

