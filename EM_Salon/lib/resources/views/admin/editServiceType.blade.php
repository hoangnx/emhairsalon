@extends('admin.layout')

@section('title', 'EM Hair Salon - Service Manager')

@section('content')
<!--Start Content-->
<article class="content static-tables-page">
    <!--Start Title Block-->
    <div class="title-block">
        <h1 class="title"> Service Type Manager </h1>
        <p class="title-description"> Quản lý dịch vụ con</p>
    </div>
    <!--End Title Block-->
    @include('errors.note')
    <div class="title-block">
        <h3 class="title"> Sửa dịch vụ con </h3>
    </div>
    @if(isset($errors))
        @foreach($errors->all() as $er)
            <p class="alert alert-danger">{{$er}}<p>
        @endforeach
    @endif
    <!--Start Form Add Service -->
    <form  method="post" enctype="multipart/form-data">
        <fieldset class="form-group">
            <label class="control-label" for="service_id">Chọn dịch vụ cha</label>
            <select class="form-control form-control-sm" name="service_id">
                @foreach($services as $service)
                    <option value="{{$service->id}}" @if($service_type->service_id == $service->id) selected @endif>{{$service->name}}</option>
                @endforeach
            </select>
        <fieldset class="form-group">
            <label class="control-label" for="type_name">Tùy chọn thuộc tính</label>
            <input type="text" class="form-control" name="type_name" value="{{$service_type->type_name}}"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="type_price">Giá bán</label>
            <input type="num" class="form-control" name="type_price" value="{{$service_type->type_price}}"> </fieldset>
        <fieldset class="form-group">
            <label class="control-label" for="unit">Đơn vị tính</label>
            <input type="text" class="form-control" name="unit" placeholder="ex: head, piece, gram, box, ..." value="{{$service_type->unit}}"> </fieldset>
        <button type="submit" class="btn btn-success" name="submit">Update</button>
        <a class="btn btn-danger" name="cancel" href="{{URL::previous()}}">Hủy</a>
        @csrf
    </form>
    <!--End Form-->
</article>
<!--End Content-->
@endsection

