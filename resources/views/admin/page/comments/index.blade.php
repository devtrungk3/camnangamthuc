@extends('layouts.app')


@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bình luận</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Bình luận</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            @if (Session::has('success'))
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i>{{ Session::get('success') }}</h5>

                </div>
            @endif
            <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                
                                <th>Bài viết</th>
                                <th>Số bình luận</th>
                               

                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recipes as $re)
                                @if($re->recipesComments->count() > 0)
                                <tr>
                                    
                                    <td>{{ $re->title }}</td>
                                    <td>
                                        {{ $re->recipesComments->count() }}

                                    </td>
                                    {{-- <td>Update software</td> --}}
                                    <td>
                                        <div class="btn-group">

                                            <a href="{{ route('comments.show', ['comments' => $re->id]) }}" type="button"
                                                class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                            
                                                    
                                    </td>
                                </tr>
                                @endif
                               
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        
                    </ul>
                </div>
            </div>
            <!-- /.card -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection