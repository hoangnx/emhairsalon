@extends('admin.layout')

@section('title', 'EM Hair Salon - Service Manager')

@section('content')
<!--Start Content-->
<article class="content static-tables-page">
    <!--Start Title Block-->
    <div class="title-block">
        <h1 class="title"> Service Type </h1>
        <p class="title-description"> Quản lý chi tiết dịch vụ: các tùy chọn và giá tiền </p>
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
                            <h3 class="title"> Các dịch vụ con </h3>
                        </div>
                        <a href="{{ asset('/admin/service-type/add') }}" class="btn btn-primary btn-sm rounded-s"> <i class="fas fa-plus"></i> Thêm </a>
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên dịch vụ</th>
                                            <th>Tùy chọn</th>
                                            <th>Giá bán</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($service_types as $service_type)
                                        <tr>
                                        	<td>{{$service_type->type_id}}</td>
                                            <td>
                                                @foreach($services as $service)
                                                    @if($service->id==$service_type->service_id)
                                                        {{$service->name}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{$service_type->type_name}}</td>
                                            <td>{{number_format($service_type->type_price,0,',','.')}} đ</td>
                                            <td>
                                                <a href="{{asset('admin/service-type/edit/'.$service_type->type_id)}}">
                                                    <button type="button" class="btn btn-info"><i title="Sửa" class="fas fa-pen-square"></i></button></a>
                                            </td>
                                            <td>
                                                <a href="{{asset('admin/service-type/delete/'.$service_type->type_id)}}" onClick="return confirm('Bạn có chắc xóa không?')">
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
                        {{ $service_types->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<!--End Content-->

@endsection

