<<<<<<< HEAD
@extends('layouts.app')

@section('content')
    <!-- statistical -->
    <div class="col-md-12">
       
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                   <h3 class="card-title">Danh Mục Sản Phẩm</h3>
                </div>         
                <div class="card-body col-12 ">
                    <div class="my-2">
                        @include('error.error')
                    </div>
                    <table class="table table-hover table-border">
                        <thead>
                        <tr>
                            <th>Mã DM</th>
                            <th>Tên Danh Mục</th>
                            <th>Hành Động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($danhmucs as $danhmuc)
                        <tr>
                            <td>{{ $danhmuc->iddm }}</td>
                            <td>{{ $danhmuc->tendm }}</td>
                            <td>
                                <a href="{{ route('admincat.edit', $danhmuc->iddm) }}" class="btn btn-warning btn-sm">Sửa</a>
                                <form class="d-inline-block" action="{{route('admincat.destroy', $danhmuc->iddm)}}" method="post">
                                     @csrf
                                     @method('DELETE')
                                     <input type="submit" value="Xoá" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="d-flex justify-content-center">{{ $danhmucs->links() }}</div> --}}
                    {{-- <p class="d-flex justify-content-end">
                       <a class="btn btn-info btn-sm" href="{{ route('admincat.create') }}">Thêm danh mục</a>
                    </p> --}}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
=======

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Lý Danh Mục</title>
    @include('layouts.user.link.toplibs')
    @include('layouts.admin.link.toplibs')
</head>

<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    @include('layouts.admin.header')
    <!-- Sidebar menu-->
    @include('layouts.admin.sidebar')
    <main class="app-content">
       
    
   
       
    </main>
    @include('layouts.user.link.botlibs')
    @include('layouts.admin.link.botlibs')
   
</body>

</html>
>>>>>>> 6d22204579a8886ab5f1adb309ae264455280ab5
