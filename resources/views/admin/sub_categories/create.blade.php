@extends('admin.layouts.app')

@section('title', 'Thêm danh mục con')
@push('styles')
<link rel="stylesheet" type="text/css"
    href="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.css" />
@endpush
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Thêm mới danh mục con</h4>
                    </div>
                    <a href="{{ route('sub_categories.index') }}" class="float-right btn btn-primary">Quay lại</a>
                </div>
                <div class="card-body">
                    <div class="new-user-info">
                        <form method="POST" action="{{ route('sub_categories.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="name">Danh mục: (<span class="text-danger">*</span>)</label>
                                    <select name="category_id" class="form-control">
                                        <option value="" selected>-- Chọn danh mục --</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="name">Tên danh mục con: (<span class="text-danger">*</span>)</label>
                                    <input type="text" class="form-control" name="name" placeholder="Tên danh mục">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu lại</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.js"></script>
<script>
    var upload = new FileUploadWithPreview("image");
</script>
@endpush