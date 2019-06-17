@extends('admin.layout')

@section('title', 'EM Hair Salon - Users')

@section('content')
<!--Start Content-->
<article class="content static-tables-page">
    <!--Start Title Block-->
    <div class="title-block">
        <h1 class="title"> User Manager </h1>
        <p class="title-description"> Quản lý tài khoản </p>
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
                            <h3 class="title"> Danh sách tài khoản </h3>
                        </div>
                            <a href="{{asset('admin/user/add')}}" class="btn btn-primary btn-sm rounded-s"> <i class="fas fa-plus"></i> Thêm </a>
                        
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Ảnh</th>
                                            <th>Tên tài khoản</th>
                                            <th>Email</th>
                                            <th>Địa chỉ</th>
                                            <th>Số điện thoại</th>
                                            <th>Chi nhánh</th>
                                            <th>Quyền người dùng</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>
                                                <img style="width: 80px" src="{{asset('lib/storage/app/avatar/'.$user->avatar)}}">
                                            </td>
                                            <td>{{$user->user_name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->brand_id}}</td>
                                            <td>
                                                @if($user->user_level==0) Admin
                                                @elseif($user->user_level==1) User
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{asset('admin/user/edit/'.$user->id)}}">
                                                    <button type="button" class="btn btn-info"><i title="Sửa" class="fas fa-pen-square"></i></button></a>
                                            </td>
                                            <td>
                                                <a href="{{asset('admin/delete/'.$user->id)}}" onClick="return confirm('Bạn có chắc xóa không?')">
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
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<!--End Content-->

@endsection

