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
    <!--Start Section Table-->
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Tất cả nhóm dịch vụ </h3>
                        </div>
                        <a href="{{ asset('/admin/service-category/add') }}" class="btn btn-primary btn-sm rounded-s"> <i class="fas fa-plus"></i> Thêm </a>
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Ảnh</th>
                                            <th>Tên danh mục</th>
                                            <th>Tình trạng</th>
                                            <th>Thời gian tạo</th>
                                            <th>Sửa đổi lần cuối</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($service_categories as $service_category)
                                        <tr>
                                            <td>{{$service_category->cate_id}}</td>
                                            <td>
                                                <img style="width: 100px" src="{{asset('lib/storage/app/avatar/'.$service_category->cate_image)}}">
                                            </td>
                                            <td>{{$service_category->cate_name}}</td>
                                            <td>@if($service_category->status == 0)
                                                {{'Tạm dừng'}}
                                                @else{{'Đang bán'}}
                                                @endif
                                            </td>
                                            <td>{{$service_category->created_at}}</td>
                                            <td>{{$service_category->update_at}}</td>
                                            <td>
                                                <a href="{{asset('admin/service-category/edit/'.$service_category->cate_id)}}">
                                                    <button type="button" class="btn btn-info"><i title="Sửa" class="fas fa-pen-square"></i></button></a>
                                            </td>
                                            <td>
                                                <a href="{{asset('admin/service-category/delete/'.$service_category->cate_id)}}" onClick="return confirm('Bạn có chắc xóa không?')">
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
                        {{ $service_categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<!--End Content-->

@endsection

