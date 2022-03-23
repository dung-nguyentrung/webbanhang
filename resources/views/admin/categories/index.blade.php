@extends('admin.layouts.app')

@section('title', 'Danh mục sản phẩm')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Danh mục sản phẩm</h4>
                </div>
                <div>
                    @can('category_delete')
                    <a href="#" id="deleteAllUserSelected" class="btn btn-danger add-list"><i
                            class="las la-trash"></i>Xóa lựa chọn</a>
                    @endcan
                    @can('category_create')
                    <a href="{{ route('categories.create') }}" class="btn btn-primary add-list"><i
                            class="las la-plus mr-3"></i>Thêm danh mục</a>
                    @endcan
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="table-responsive rounded mb-3">
                <table class="data-table table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="selectAll">
                                    <label for="selectAll" class="mb-0"></label>
                                </div>
                            </th>
                            <th>STT</th>
                            <th>Hình ảnh</th>
                            <th>Tên danh mục</th>
                            <th>Từ khóa</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        @foreach ($categories as $item)
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" value="{{ $item->id }}" class="checkbox-input" name="ids">
                                    <label for="ids" class="mb-0"></label>
                                </div>
                            </td>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ $item->getFirstMediaUrl('categories') }}" width="120"
                                    alt="{{ $item->name }}">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->keyword }}</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    @can('category_show')
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top"
                                        title="Xem chi tiết" data-original-title="View"
                                        href="{{ route('categories.show',['category' => $item->id]) }}"><i
                                            class="fa fa-eye mr-0"></i></a>
                                    @endcan
                                    @can('category_edit')
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                        title="Cập nhật" data-original-title="Edit"
                                        href="{{ route('categories.edit',['category' => $item->id]) }}"><i
                                            class="fa fa-pen mr-0"></i></a>
                                    @endcan
                                    @can('category_delete')
                                    <a href="#" data-id="{{ $item->id }}" class="btn btn-danger delete"><i
                                            class="fa fa-trash-alt mr-0"></i></a>
                                    <form action="{{ route('categories.destroy',['category' => $item->id]) }}"
                                        method="POST" id="cateForm{{ $item->id }}">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection

    @push('scripts')
    @can('category_delete')
    <script>
        $(document).ready(function () {
            $('.delete').click(function (e) { 
                e.preventDefault();
                const id = $(this).attr('data-id');
                Swal.fire({
                    title: 'Xóa danh mục',
                    text: "Bạn có chắc muốn xóa danh mục này không?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Xóa ngay'
                    }).then((result) => {
                        $('#cateForm'+id).submit();
                    }
            );
            });
            

    
                $("#selectAll").click(function(){
                    $("input[type=checkbox]").prop('checked', $(this).prop('checked'));
                });

                $("#deleteAllUserSelected").on("click", function () {
                    var ids = [];
                    $.each($("input[name='ids']:checked"), function() {
                        ids.push($(this).val());
                    });

                    $.ajax({
                        type: "DELETE",
                        url: 'users/massDestroy',
                        data: {
                            ids: ids,
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType: "json",
                        success: function (response) {
                            location.reload(); 
                        }
                    });
                });
                
            });
    </script>
    @endcan

    @endpush