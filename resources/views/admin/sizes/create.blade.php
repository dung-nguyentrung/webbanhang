@extends('admin.layouts.app')

@section('title', 'Thêm kích thước')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Thêm mới kích thước</h4>
                    </div>
                    <a href="{{ route('sizes.index') }}" class="float-right btn btn-primary">Quay lại</a>
                </div>
                <div class="card-body">
                    <div class="new-user-info">
                        <form method="POST" action="{{ route('sizes.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="name">Tên kích thước: (<span class="text-danger">*</span>)</label>
                                    <input type="text" class="form-control" name="name" placeholder="Tên kích thước">
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