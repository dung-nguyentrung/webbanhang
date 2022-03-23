@extends('admin.layouts.app')

@section('title', 'Cập nhật danh mục')
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
                        <h4 class="card-title">Cập nhật danh mục</h4>
                    </div>
                    <a href="{{ route('categories.index') }}" class="float-right btn btn-primary">Quay lại</a>
                </div>
                <div class="card-body">
                    <div class="new-user-info">
                        <form method="POST" action="{{ route('categories.update',['category' => $category->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="{{ $category->getFirstMediaUrl('categories') }}"
                                        alt="{{ $category->name }}" width="200">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="name">Hình ảnh:</label>
                                    <div class="custom-file-container" data-upload-id="image">
                                        <label>Upload File
                                            <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                                title="Clear Image">&times;</a></label>
                                        <label class="custom-file-container__custom-file">
                                            <input type="file" name="image"
                                                class="custom-file-container__custom-file__custom-file-input" accept="*"
                                                aria-label="Choose File" />
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span
                                                class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="name">Tên danh mục: (<span class="text-danger">*</span>)</label>
                                    <input type="text" class="form-control" value="{{ $category->name }}" name="name"
                                        placeholder="Tên danh mục">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="keyword">Từ khóa:</label>
                                    <input type="text" class="form-control" value={{ $category->keyword }}
                                    name="keyword" placeholder="Địa chỉ">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="description">Mô tả:</label>
                                    <textarea name="description" class="form-control" rows="6"
                                        id="description">{{ $category->description }}</textarea>
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