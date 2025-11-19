@extends('admin.master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Add New Category</h1>

<form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  @include('admin.categories._form')
    <button class="btn btn-success"><i class="fas fa-save"> Add</i></button>
</form>


@endsection
@section('title',"dashboard")
@section('js')
<script>
    function showImg(e){
          const [file] = e.target.files
      if (file) {
    preview.src = URL.createObjectURL(file)
    }}
</script>
@endsection

