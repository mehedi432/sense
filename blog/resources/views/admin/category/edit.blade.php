@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
              <li class="breadcrumb-item active">Edit Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Category</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool"  title="Remove">
            <a href="{{route('category.create')}}"><i class="fas fa-plus"></i></a>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('category.update', [$category->id]) }}" method='POST'>
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="category_name">Category Name</label>
                <input name='cat_name' type="text" class="form-control" id="name" placeholder="Enter category name" value="{{$category->name}}">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" >{{$category->name}}</textarea>
              </div>
            </div>
            <!-- /.card-body -->
            <button type="submit" class="btn btn-block btn-outline-secondary">Update Category</button>
          </form>
          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection