@extends('admin.layout')

@section('title', 'EM Hair Salon - Customer Manager')

@section('content')
<!--Start Content-->
<article class="content static-tables-page">
    <!--Start Title Block-->
    <div class="title-block">
        <h1 class="title"> Quản lý lịch hẹn </h1>
        <p class="title-description"> Xem thông tin lịch hẹn, tạo mới và sửa, xóa lịch hẹn </p>
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
                            <h3 class="title"> Danh sách lịch hẹn </h3>
                        </div>
                        <a href="" class="btn btn-primary btn-sm rounded-s"> <i class="fas fa-plus"></i> Thêm </a>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<!--End Content-->

@endsection

