@extends('layout.app')

@section('title')
    Barang
@endsection

@section('content')
<div class="card">
    <div class="card mt-3">
        <div class="card-title">
            <h5>Data Barang</h5>

            <button class="btn btn-success btn-sm float-end"data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fa fa-plus"></i></button>
    </div>
</div>

<div class="card-body">
<table class="table table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Supplier</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
       </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Kursi</td>
            <td>55.000</td>
            <td>6</td>
            <td>Mediatek</td>
            <td>ATK</td>
            <td>
                <a href="#" class="btn btn-warning btn sm"> <i class="fa fa-edit"></i> </a>
                <a href="#" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash-can"></i> </a>
        </tr>
    </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>   
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </div>
@endsection