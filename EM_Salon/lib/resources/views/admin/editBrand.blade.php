@extends('admin.layout')

@section('title', 'EM Hair Salon - Users')

@section('content')
<!--Start Content-->
<article class="content static-tables-page">
    <!--Start Title Block-->
    <div class="title-block">
        <h1 class="title"> Danh sách chi nhánh </h1>
        <p class="title-description"> Quản lý chi nhánh </p>
    </div>

    <!--End Title Block-->
    @include('errors.note')
    <!--Start Form Add User-->
    <div class="title-block">
        <h3 class="title"> Sửa chi nhánh </h3>
    </div>
    @if(isset($errors))
        @foreach($errors->all() as $er)
            <p class="alert alert-danger">{{$er}}<p>
        @endforeach
    @endif
    <!-- @include('errors.note') -->
    <form  method="post">
        <fieldset class="form-group">
            <label class="control-label" for="brand_name">Tên chi nhánh</label>
            <input type="text" class="form-control" name="brand_name" required value="{{$brand->brand_name}}"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="brand_address">Địa chỉ</label>
            <input type="text" class="form-control" name="brand_address" required value="{{$brand->brand_address}}"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="brand_email">Email</label>
            <input type="email" class="form-control" name="brand_email" required value="{{$brand->brand_email}}"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="brand_phone">Số điện thoại</label>
            <input type="text" class="form-control" name="brand_phone" required value="{{$brand->brand_phone}}"> </fieldset>
        <button type="submit" class="btn btn-success" name="submit">Lưu</button>
        <button type="reset" class="btn btn-danger" name="cancel">Hủy</button>
        @csrf
    </form>
    <!--End Form Add User-->
    
</article>
<!--End Content-->

@endsection


