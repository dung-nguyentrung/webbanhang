@extends('admin.layouts.app')

@section('title', 'Thêm danh mục')
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
                            <h4 class="card-title">Thêm mới danh mục</h4>
                        </div>
                        <a href="{{ route('categories.index') }}" class="float-right btn btn-primary">Quay lại</a>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
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
                                    <div class="form-group col-md-6">
                                        <label for="name">Hình ảnh chi tiết:</label>
                                        <div class="custom-file-container" data-upload-id="images">
                                            <label>Upload File
                                                <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                                    title="Clear Image">&times;</a></label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file" multiple name="image"
                                                    class="custom-file-container__custom-file__custom-file-input" accept="*"
                                                    aria-label="Choose File" />
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span
                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                    <x-select name="Danh mục sản phẩm" field="category" :categories="$categories" />
                                    <x-select name="Danh mục sản phẩm con" field="sub_category" :categories="$subCategories" />
                                    <x-input name="Tên sản phẩm" field="name" length="12"></x-input>
                                    <div class="col-lg-12">
                                        <label for="size">Kích thước sản phẩm:</label>
                                        @foreach ($sizes as $size)
                                            <input type="checkbox" value="{{ $size->id }}" name="sizes[]"
                                                id="size{{ $size->id }}">
                                            <label for="size{{ $size->id }}"
                                                class="mr-3">{{ $size->name }}</label>
                                        @endforeach
                                    </div>
                                    <x-input name="Giá sản phẩm" field="price" length="6"></x-input>
                                    <x-input name="Giá giảm" field="sale_price" length="6"></x-input>
                                    <x-input name="Số lượng sản phẩm" field="quantity" length="6"></x-input>
                                    <div class="col-lg-6">
                                        <label for="status">Trạng thái</label><br />
                                        <input type="radio" class="mr-1" checked value="Còn hàng" name="status"
                                            id="yes"><label class="mr-3" for="yes">Còn
                                            hàng</label>
                                        <input type="radio" class="mr-1" value="Hết hàng" name="status"
                                            id="no"><label for="no">Hết
                                            hàng</label>
                                    </div>
                                    <x-radio name="hot"></x-radio>
                                    <x-radio name="sale"></x-radio>
                                    <div class="form-group col-md-12">
                                        <label for="description">Mô tả:</label>
                                        <textarea name="description" class="form-control" rows="6" id="description"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="content">Nội dung:</label>
                                        <textarea name="content" class="form-control" rows="6" id="content"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="video">Video:</label>
                                        <textarea name="video" class="form-control" rows="6" id="video"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="info">Thông tin chung:</label>
                                        <textarea name="info" class="form-control" rows="6" id="info"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="shipping_options">Shipping options:</label>
                                        <textarea name="shipping_options" class="form-control" rows="6" id="shipping_options"></textarea>
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
    @include('ckfinder::setup')
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <script src="{{ asset('js/ckfinder/ckfinder.js') }}"></script>
    <script>
        var editor = CKEDITOR.replace('description');
        CKFinder.setupCKEditor(editor);
        var editor = CKEDITOR.replace('content');
        CKFinder.setupCKEditor(editor);
        var editor = CKEDITOR.replace('video');
        CKFinder.setupCKEditor(editor);
        var editor = CKEDITOR.replace('info');
        CKFinder.setupCKEditor(editor);
        var editor = CKEDITOR.replace('shipping_options');
        CKFinder.setupCKEditor(editor);
    </script>
    <script src="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.js"></script>
    <script>
        var upload = new FileUploadWithPreview("image");
        var upload = new FileUploadWithPreview("images");
    </script>
@endpush
