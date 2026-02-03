@extends('be.master')
@section('menu')@include('be.menu')@endsection
@section('user')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"><div class="container-fluid py-1 px-3"><nav aria-label="breadcrumb"><ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0"><li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li><li class="breadcrumb-item text-sm text-dark active">{{ $title }}</li></ol><h6 class="font-weight-bolder mb-0">{{ $title }}</h6></nav></div></nav>
<div class="container-fluid py-4"><div class="row"><div class="col-12"><div class="card mb-4"><div class="card-header pb-0"><h6>Add New {{$title}}</h6></div>
<div class="card-body"><form action="{{ route('user.store')}}" method="POST">@csrf
<div class="row">
<div class="col-md-6 mb-3"><label class="form-label">Name</label><input type="text" class="form-control" name="name" required></div>
<div class="col-md-6 mb-3"><label class="form-label">Email</label><input type="email" class="form-control" name="email" required></div>
<div class="col-md-6 mb-3"><label class="form-label">Password</label><input type="password" class="form-control" name="password" required></div>
</div>
<div class="text-end"><a href="{{ route('user.index')}}" class="btn bg-gradient-secondary me-3">Cancel</a><button type="submit" class="btn bg-gradient-primary">Save</button></div>
</form></div></div></div></div></div>
@endsection
