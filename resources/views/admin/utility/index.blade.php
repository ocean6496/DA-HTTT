@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý tiện ích</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{ route('admin.utility.add') }}" class="btn btn-success btn-md">Thêm</a>
                                </div>
                            </div>
                            @if (Session::has('msg'))
                                <h4 style="color: red">{{ Session::get('msg') }}</h4>
                            @endif
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên loại</th>
                                        <th width="160px">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   	@foreach($utilities as $utility)
                                    @php
                                        $id = $utility->uid;
                                        $urlEdit = route('admin.utility.edit', $id);
                                        $urlDelete = route('admin.utility.delete', $id);
                                    @endphp
                                    <tr class="gradeX">
                                        <td>{{ $id }}</td>
                                        <td>{{ $utility->uname }}</td>
                                        <td class="center">
                                            <a href="{{ $urlEdit }}" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                                            <a href="{{ $urlDelete }}" title="" onclick="return confirm(&#39;Bạn có chắc chắn muốn xóa&#39)" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-6" style="text-align: right;">
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                        <ul class="pagination">
                                            {{ $utilities->links() }}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>

</div>
<!-- /. PAGE INNER  -->
@stop