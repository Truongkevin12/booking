@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Danh sách loại hàng</h4>
                <p class="card-title-desc">Danh sách loại hàng
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Trạng thái</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        @foreach ($category as $categories )
                        <td>{{ $categories->id }}</td>
                        <td>{{ $categories->name }}</td>
                        <td>{{ $categories->status }}</td>
                        <td>fefefef</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection
