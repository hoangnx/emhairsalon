@extends('admin.layout')

@section('title', 'EM Hair Salon - Service Categories')

@section('content')
<!--Start Content-->
<article class="content static-tables-page">
    <!--Start Title Block-->
    <div class="title-block">
        <h1 class="title"> Service Categories Manager </h1>
        <p class="title-description"> Quản lý danh mục dịch vụ </p>
    </div>
    <!--End Title Block-->
    @include('errors.note')
    <!--Start Form Add User-->
    <div class="title-block">
        <h3 class="title"> Sửa nhóm dịch vụ </h3>
    </div>
    @if(isset($errors))
        @foreach($errors->all() as $er)
            <p class="alert alert-danger">{{$er}}<p>
        @endforeach
    @endif
    <!--Start Form Add Service Category-->
    <form  method="post" enctype="multipart/form-data">
        <fieldset class="form-group">
            <label class="control-label" for="cate_name">Tên nhóm dịch vụ</label>
            <input type="text" class="form-control" name="cate_name" required="" value="{{$cate->cate_name}}"> </fieldset>
        <fieldset>
            <label class="control-label">Tình trạng</label>
            <select class="form-control form-control-sm" name="status">
                <option value="1" <?php if($cate->status == 1) echo 'selected'?>>Đang bán</option>
                <option value="0" <?php if($cate->status == 0) echo 'selected'?>>Ngừng bán</option>
            </select>
        </fieldset>
        <fieldset class="form-group">
            <label class="control-label">Ảnh nhóm dịch vụ</label>
            <input class="form-control" type="file" name="avatar" onchange="changeImg(this)">
            <img id="avatar" width="300px;" class="thumbnail" src="{{asset('lib/storage/app/avatar/'.$cate->cate_image)}}" value="{{$cate->cate_image}}">
        </fieldset>
        <button type="submit" class="btn btn-success" name="submit">Update</button>
        <button type="button" class="btn btn-danger" name="cancel">Hủy</button>
        @csrf
    </form>
    <!--End Form Add User-->
</article>
<!--End Content-->

@endsection

