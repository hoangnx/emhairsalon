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
    <!--Start Section Table-->
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Tất cả dịch vụ </h3>
                        </div>
                        <a href="{{ asset('/admin/service/add') }}" class="btn btn-primary btn-sm rounded-s"> <i class="fas fa-plus"></i> Thêm </a>
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên dịch vụ</th>
                                            <th>Mô tả</th>
                                            <th>Thời gian (phút)</th>
                                            <th>Tình trạng</th>
                                            <th>Thuộc Danh mục</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $service)
                                        <tr>
                                            <td>{{$service->id}}</td>
                                            <td>{{$service->name}}</td>
                                            <td>{{$service->description}}</td>
                                            <td>{{$service->duration}} phút</td>
                                            <td>@if($service->status == 0)
                                                {{'Tạm dừng'}}
                                                @elseif($service->status == 1){{'Đang bán và cho đặt lịch'}}
                                                @else{{'Đang bán'}}
                                                @endif
                                            </td>
                                            <td>
                                                @foreach($service_cate as $cate)
                                                    @if($service->cate_id==$cate->cate_id)
                                                        {{$cate->cate_name}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            
                                            <td>
                                                <a href="{{asset('admin/service/edit/'.$service->id)}}">
                                                    <button type="button" class="btn btn-info"><i title="Sửa" class="fas fa-pen-square"></i></button></a>
                                            </td>
                                            <td>
                                                <a href="{{asset('admin/service/delete/'.$service->id)}}" onClick="return confirm('Bạn có chắc xóa không?')">
                                                    <button type="button" class="btn btn-danger"><i title="Xóa" class="fas fa-trash-alt"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <!-- phân trang -->
                        {{ $services->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<!--End Content-->

@endsection

