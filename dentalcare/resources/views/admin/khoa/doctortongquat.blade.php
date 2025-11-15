@extends('layout/admin')
@section('body')
<h1>Quản Lý Bác Sĩ Tổng Quát</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
      <td><a href=""><i class="fa-solid fa-pen"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
      

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
      <td><a href=""><i class="fa-solid fa-pen"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
    </tr>
        <tr>
      <th scope="row">2</th>
      <td>Tu</td>
      <td>Tuan</td>
      <td>@fat</td>
      <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
      <td><a href=""><i class="fa-solid fa-pen"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
    </tr>
  </tbody>
</table>

@endsection