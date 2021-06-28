@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
              <li class="breadcrumb-item active">Category List</li>
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
          <h3 class="card-title">Category List</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool"  title="Remove">
            <a href="{{route('category.create')}}"><i class="fas fa-plus"></i></a>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped text-center">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Post Count</th>
                    <th style="width: 40px">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                    <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>{{$category->slug}}</td>
                      <td>{{$category->id}}</td>
                      <td class="d-flex">
                          <a href="{{route( 'category.edit', [$category->id]) }}"><button type="button" class="btn btn-sm btn-success mr-1"><i class="far fa-edit"></i></button></a>
                          <form action="{{route( 'category.destroy', [$category->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary mr-1"><i class="fas fa-trash"></i></i></button>
                          </form>
                          <a href="{{route( 'category.show', [$category->id]) }}"><button type="button" class="btn btn-sm btn-secondary mr-1 disabled"><i class="far fa-eye"></i></button></a>
                      </td>
                    </tr> 
                  @endforeach
                
                </tbody>
            </table>
            <!-- /.card-body -->
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection