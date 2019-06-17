@extends('admin.layout')

@section('title')
    News Category
@endsection

@section('content')
    <article class="content responsive-tables-page">
    	<!--Start Title Block-->
	    <div class="title-block">
	        <h1 class="title"> News Categories Manager </h1>
	        <p class="title-description"> Quản lý danh mục tin tức </p>
	    </div>
	    <!--End Title Block-->
        
        @if ($message = Session::get('create_success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" style="color:#fff;" >&times;</button>
                {{$message}}
            </div>
        @endif
        @if( count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" style="color:#fff;" >&times;</button>
                <ul> 
                    @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-title-block">
            <h3 class="title"> All news categories </h3>
        </div>
        <div align="left">
            <button type="button" class="btn btn-oval btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fas fa-plus"></i> Add News Category </button>
        </div>
        
        <div style="box-sizing: border-box; padding: 10px;" class="table-responsive">
            <table style="text-align: center; " class="table table-bordered table-striped" id="user_table">
                <thead>
                    <tr>
                        <th width="20%">ID</th>
                        <th width="50%">News Category</th>
                        <th width="30%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-{{$category->id}}"> Edit </button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-{{ $category->id }}">Delete</button>
                        </td>
                    </tr>
                    <!-- Modal content-->
                    <div class="modal fade" id="edit-{{$category->id}}" role="dialog">
                        <div class="modal-dialog">
                            <div style="width:150%;" class="modal-content">
                                <div class="modal-header">
                                    <h4 align="left" class="modal-title">News Category
                                        <small>Edit</small>
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal -->
                                <!-- start edit -->
                                <div class="modal-body">
                                    <form method="post" action="news-categories/{{$category->id}}/edit" id="sample_form" class="form-horizontal">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label class="control-label" >Category Name : </label>
                                            <div class="input">
                                                <input type="text" name="name" class="form-control" value="{{ $category->name }}" />
                                            </div>
                                        </div>
                                        <div align="right">
                                            <button type="submit" class="btn btn-danger-oval btn-info"> Update </button>

                                            <button type="reset" class="btn btn-oval btn-danger">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end edit -->

                    <!-- start delete -->

                        <div id="delete-{{ $category->id }}" class="modal fade" role="dialog">
                            <form method="POST" action="news-categories/{{ $category->id }}">
                                @csrf
                                @method('DELETE')

                                    <div class="modal-dialog">
                                        <div style="width:150%;" class="modal-content">
                                            <div class="modal-header">
                                                <div align="left">
                                                    <h2 class="modal-title">News Category</h2>
                                                </div>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h4 align="center" style="margin:0;">Are you sure you want to remove "{{ $category->name }}"?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger-oval btn-danger">OK</button>
                                                <button type="button" class="btn btn-danger-oval btn-secondary" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                              </form>
                        </div>
                    <!-- end delete -->
                    @endforeach
                </tbody>
            </table>
        </div>
        <br />
        <!-- start add -->
        <div class="container">
          <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                    <div style="width:150%;" class="modal-content">
                        <div class="modal-header">
                            <h4 align="left" class="modal-title">News Category
                                <small>Add</small>
                            </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="news-categories" id="sample_form" class="form-horizontal">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label" for="name">Category Name: </label>
                                    <div class="">
                                        <input type="text" name="name" class="
                                        form-control"/>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="control-label col-md-4">Select Profile Image : </label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" id="image" />
                                        <span id="store_image"></span>
                                    </div>
                                </div> -->
                                <br />
                                <div align="right">
                                    <button type="submit" class="btn btn-oval btn-primary"> Save </button>

                                    <button type="reset" class="btn btn-oval btn-danger"> Reset </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end add  -->
    </article>
@endsection