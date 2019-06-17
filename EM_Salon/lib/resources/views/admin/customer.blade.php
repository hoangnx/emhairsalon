@extends('admin.layout')

@section('title', 'EM Hair Salon - Customer Manager')

@section('content')
<!--Start Content-->
<article class="content static-tables-page">
    <!--Start Title Block-->
    <div class="title-block">
        <h1 class="title"> Quản lý khách hàng </h1>
        <p class="title-description"> Thêm, sửa, xóa thông tin khách hàng </p>
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
                            <h3 class="title"> Danh sách khách hàng </h3>
                        </div>
                        <a href="" class="btn btn-primary btn-sm rounded-s"> <i class="fas fa-plus"></i> Thêm </a>
                        <section class="example">
                            <h3 class="title"> Chức năng này hiện chưa khả dụng </h3>
                            <a href="{{URL::previous()}}">Quay lại trang trước</a>
                            Hoặc đi đến <a href="{{asset('admin/home')}}">Trang Chủ</a>
                        </section>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<!--End Content-->

@endsection

