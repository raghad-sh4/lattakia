@extends('admin.master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">All Categories</h1>
@if (session()->has('msg'))
<div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
 {{ session('msg') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
<table class="table table-bordered table-hover">
<tr class="bg-dark text-white text-center">
<th># </th>
<th>IMAGE</th>
<th>NAME</th>
<th>PRODUCTS COUNT</th>
<th>ACTIONS</th>
</tr>
@forelse ( $categories as $category )
<tr>
    <td>{{ $loop->iteration }}</td>

    <td><img width="100" src="{{ $category->img_path }}" alt=""></td>
    <td>{{ $category->trans_name }}</td>
    <td>{{ $category->id }}</td>
    <td>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.categories.edit' ,$category->id) }}"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{ route('admin.categories.destroy',$category->id) }}" method="POST">@csrf @method('delete')
            <button onclick="return confirm('Are you Sure?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
        </form>
    </td>
</tr>
@empty
<tr>
    <td colspan="5" class="text-center">No Data Founde</td>
</tr>
@endforelse
</table>
{{ $categories->links() }}
@endsection
@section('title',"dashboard")
