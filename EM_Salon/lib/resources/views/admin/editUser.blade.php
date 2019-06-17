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
        <h3 class="title"> Sửa tài khoản </h3>
    </div>
    @if(isset($errors))
        @foreach($errors->all() as $er)
            <p class="alert alert-danger">{{$er}}<p>
        @endforeach
    @endif
    <!-- @include('errors.note') -->
    <form  method="post" enctype="multipart/form-data" role="form">
        <fieldset class="form-group">
            <label class="control-label" for="user_name">Tên tài khoản</label>
            <input type="text" class="form-control" name="user_name" value="{{$user->user_name}}"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="password">Mật khẩu</label>
            <input type="password" class="form-control" name="password"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="address">Address</label>
            <input type="text" class="form-control" name="address" value="{{$user->address}}"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="phone">Số điện thoại</label>
            <input type="text" class="form-control" name="phone" value="{{$user->phone}}"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label">Chọn quyền</label>
            <select class="form-control form-control-sm" name="user_level">
                <option value="0" <?php if($user->user_level == 0){echo 'selected';}?>>Admin</option>
                <option value="1" <?php if($user->user_level == 1){echo 'selected';}?>>User</option>
            </select>
        <fieldset class="form-group">
            <label class="control-label" for="brand_id">Mã chi nhánh</label>
            <input type="number" class="form-control" name="brand_id" value="{{$user->brand_id}}"> </fieldset>
        <fieldset class="form-group">
            <label>Ảnh đại diện</label>
            <input id="img" type="file" name="img" class="form-control" onchange="changeImg(this)">
            <img id="avatar" width="300px;" class="thumbnail" src="{{asset('lib/storage/app/avatar/'.$user->avatar)}}" value="{{$user->avatar}}">
        </fieldset>
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
        <button type="button" class="btn btn-danger" name="cancel">Hủy</button>
        @csrf
    </form>
    <!--End Form Add User-->
    
</article>
<!--End Content-->

@endsection

