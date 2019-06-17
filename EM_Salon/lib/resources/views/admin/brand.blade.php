@extends('admin.layout')

@section('title', 'EM Hair Salon - Users')

@section('content')
<!--Start Content-->
<article class="content static-tables-page">
    <!--Start Title Block-->
    <div class="title-block">
        <h1 class="title"> Chi nhánh </h1>
        <p class="title-description"> Quản lý chi nhánh </p>
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
                            <h3 class="title"> Danh sách chi nhánh </h3>
                        </div>
                            <a href="{{asset('admin/brand/add')}}" class="btn btn-primary btn-sm rounded-s"> <i class="fas fa-plus"></i> Thêm </a>
                        <div>
                        </div>
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên chi nhánh</th>
                                            <th>Địa chỉ</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($brands as $brand)
                                        <tr>
                                            <td>{{$brand->brand_id}}</td>
                                            <td>{{$brand->brand_name}}</td>
                                            <td>{{$brand->brand_address}}</td>
                                            <td>{{$brand->brand_email}}</td>
                                            <td>{{$brand->brand_phone}}</td>
                                            <td>
                                                <a href="{{asset('admin/brand/edit/'.$brand->brand_id)}}">
                                                    <button type="button" class="btn btn-info"><i title="Sửa" class="fas fa-pen-square"></i></button></a>
                                            </td>
                                            <td>
                                                <a href="{{asset('admin/brand/delete/'.$brand->brand_id)}}" onClick="return confirm('Bạn có chắc xóa không?')">
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
                        {{ $brands->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<!--End Content-->

@endsection

