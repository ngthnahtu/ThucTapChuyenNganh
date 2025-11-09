@extends('layout/admin')
@section('body')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Bệnh Nhân</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Phòng Khám Nha Khoa Hoàn Mỹ</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã Bệnh Nhân</th>
                            <th>Tên Bệnh Nhân</th>
                            <th>Tuổi</th>
                            <th>Địa Chỉ</th>
                            <th>Số Điện Thoại</th>
                            <th>Ghi Chú</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>

                    <tr>
                        <td>NV1</td>
                        <td>Nguyễn Thanh Tú</td>
                        <td>22</td>
                        <td>HCM</td>
                        <td>0902321704</td>
                        <td></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Hành động">
                                <button class="btn btn-primary" title="Thêm"><i class="fas fa-plus"></i></button>
                                <button class="btn btn-info" title="Sửa"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger" title="Xóa"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tfoot>
                        <tr>
                            <th>Mã Bệnh Nhân</th>
                            <th>Tên Bệnh Nhân</th>
                            <th>Tuổi</th>
                            <th>Địa Chỉ</th>
                            <th>Số Điện Thoại</th>
                            <th>Ghi Chú</th>
                            <th>Hành Động</th>
                        </tr>
                    </tfoot>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection