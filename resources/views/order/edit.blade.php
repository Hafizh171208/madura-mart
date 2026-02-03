@extends('be.master')
@section('menu')@include('be.menu')@endsection
@section('order')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"><div class="container-fluid py-1 px-3"><nav aria-label="breadcrumb"><ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0"><li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li><li class="breadcrumb-item text-sm text-dark active">{{ $title }}</li></ol><h6 class="font-weight-bolder mb-0">{{ $title }}</h6></nav></div></nav>
<div class="container-fluid py-4"><div class="row"><div class="col-12"><div class="card mb-4"><div class="card-header pb-0"><h6>Edit {{$title}}</h6></div>
<div class="card-body"><form action="{{ route('order.update', $data->id)}}" method="POST">@csrf @method('PUT')
<div class="row">
<div class="col-md-6 mb-3"><label class="form-label">Tanggal Pemesanan</label><input type="date" class="form-control" name="tgl_pemesanan" value="{{$data->tgl_pemesanan}}" required></div>
<div class="col-md-6 mb-3"><label class="form-label">Pelanggan</label><select class="form-control" name="id_pelanggan" required>@foreach($users as $u)<option value="{{$u->id}}" @if($data->id_pelanggan == $u->id) selected @endif>{{$u->name}}</option>@endforeach</select></div>
<div class="col-md-6 mb-3"><label class="form-label">Status Pemesanan</label><select class="form-control" name="status_pemesanan" required><option value="Pending" @if($data->status_pemesanan == 'Pending') selected @endif>Pending</option><option value="Processing" @if($data->status_pemesanan == 'Processing') selected @endif>Processing</option><option value="Completed" @if($data->status_pemesanan == 'Completed') selected @endif>Completed</option><option value="Cancelled" @if($data->status_pemesanan == 'Cancelled') selected @endif>Cancelled</option></select></div>
<div class="col-md-6 mb-3"><label class="form-label">Metode Pembayaran</label><select class="form-control" name="metode_pembayaran" required><option value="Cash" @if($data->metode_pembayaran == 'Cash') selected @endif>Cash</option><option value="Transfer" @if($data->metode_pembayaran == 'Transfer') selected @endif>Transfer</option><option value="COD" @if($data->metode_pembayaran == 'COD') selected @endif>COD</option></select></div>
<div class="col-md-6 mb-3"><label class="form-label">Total Bayar</label><input type="number" class="form-control" name="total_bayar" value="{{$data->total_bayar}}" required></div>
<div class="col-md-6 mb-3"><label class="form-label">Keterangan Status</label><input type="text" class="form-control" name="keterangan_status" value="{{$data->keterangan_status}}"></div>
</div>
<div class="text-end"><a href="{{ route('order.index')}}" class="btn bg-gradient-secondary me-3">Cancel</a><button type="submit" class="btn bg-gradient-primary">Update</button></div>
</form></div></div></div></div></div>
@endsection
