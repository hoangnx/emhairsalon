@extends('admin.layout')

@section('title', 'EM Hair Salon - Service Manager')

@section('content')
<!--Start Content-->
<article class="content static-tables-page">
    <!--Start Title Block-->
    <div class="title-block">
        <h1 class="title"> Service Manager </h1>
        <p class="title-description"> Quản lý dịch vụ </p>
    </div>
    <!--End Title Block-->
    @include('errors.note')
    <div class="title-block">
        <h3 class="title"> Sửa dịch vụ </h3>
    </div>
    @if(isset($errors))
        @foreach($errors->all() as $er)
            <p class="alert alert-danger">{{$er}}<p>
        @endforeach
    @endif
    <!--Start Form Add Service -->
    <form  method="post" enctype="multipart/form-data">
        <fieldset class="form-group">
            <label class="control-label" for="name">Tên dịch vụ</label>
            <input type="text" class="form-control" name="name" required="" value="{{$service->name}}"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="description">Mô tả dịch vụ</label>
            <input type="text" class="form-control" name="description" value="{{$service->description}}"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="duration">Thời gian thực hiện (phút)</label>
            <input type="num" class="form-control" name="duration" value="{{$service->duration}}"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="cate_id">Thuộc nhóm dịch vụ</label>
            <!-- <input type="text" class="form-control" name="cate_id" required="" value="{{$service->cate_id}}"> </fieldset> -->
            <select class="form-control form-control-sm" name="cate_id">
                @foreach($service_cates as $service_cate)
                    <option value="{{$service_cate->cate_id}}" @if($service->cate_id==$service_cate->cate_id) selected @endif>{{$service_cate->cate_name}}</option>
                @endforeach
            </select>
        </fieldset>
        <fieldset>
            <label class="control-label">Tình trạng</label>
            <select class="form-control form-control-sm" name="status">
                <option value="1" <?php if($service->status == 1) echo 'selected'?>>Đang bán và hiển thị ở đặt lịch</option>
                <option value="2" <?php if($service->status == 2) echo 'selected'?>>Đang bán</option>
                <option value="0" <?php if($service->status == 0) echo 'selected'?>>Tạm ngừng</option>
            </select>
        </fieldset>
        <button type="submit" class="btn btn-success" name="submit">Update</button>
        <a class="btn btn-danger" name="cancel" href="{{URL::previous()}}">Hủy</a>
        @csrf
    </form>
    <!--End Form-->
</article>
<!--End Content-->
@endsection

