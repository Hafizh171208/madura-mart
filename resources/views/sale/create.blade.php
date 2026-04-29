@extends('be.master')
@section('menu')
    @include('be.menu')
@endsection
@section('sale')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $title }}</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">{{ $title }}</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                {{-- <div class="d-flex align-items-center">
                    <a href="{{ route('distributor.create') }}" class="btn bg-gradient-dark w-100 my-4 mb-4"> Add new Distributor</a>
                <div> --}}
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                            aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="{{ asset('be/assets/img/team-2.jpg') }}"
                                                class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="{{ asset('be/assets/img/small-logos/logo-spotify.svg') }}"
                                                class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                    opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <!--- Main Bagian Kanan --->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            {{-- <h6>Add New {{ $title }} Data</h6> --}}
                            <input type="text" class="form-control fs-1 fw-bold bg-primary text-white text-center" id="total_bayar" name="total_bayar" placeholder="Enter Total Pay" value="@if(isset(session('data')->total_bayar)) {{ session('data')->total_bayar }}@else{{ old('total_bayar') ? old('total_bayar') : 'Rp 0' }} @endif" disabled>
                        </div>
                        <div class="card-body px-0 pt-0 pb-0 border border-2 border-primary border-radius-lg mt-3 ms-4 me-4">
                            <form id="form" action="{{ route('sale.store') }}" method="POST">    
                                @csrf
                                <div class="row ms-3 me-3">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="no_struk" class="form-label">Invoive No</label>
                                            <input type="text" class="form-control" id="no_struk" name="no_struk" value="{{ $no_struk }}" maxlength="255" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="id_barang" class="form-label">Product</label>
                                            <select class="form-select" id="id_barang" name="id_barang">
                                                <option value="">Select Product</option>
                                                @foreach ($products as $product)
                                                    <option data-harga-jual="{{ $product->harga_jual }}" value="{{ $product->id }}" 
                                                    {{ old('id_barang') == $product->id ? 'selected' : '' }}>
                                                    {{ $product->nama_barang }}
                                                </option>
                                                
                                                @endforeach 
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="harga_jual" class="form-label">Selling Price</label>
                                            <input type="text" class="form-control" id="harga_jual" name="harga_jual"  value="{{ old('harga_jual') ? old('harga_jual') : 'Rp 0' }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jumlah_jual" class="form-label">Selling Amount</label>
                                            <input type="text" class="form-control" id="jumlah_jual" name="jumlah_jual"  value="{{ old('jumlah_jual') ? old('jumlah_jual') : 0 }}">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                            <label for="subtotal" class="form-label fs-1">Sub total</label>
                                            <input type="text" class="form-control fs-1 fw-bold bg-info text-blue-400 " id="subtotal" name="subtotal" placeholder="Enter Sub total" value="{{ old('subtotal') ? old('subtotal') : 'Rp 0' }}" readonly>
                                        </div>
                                </div>
                                <div class="row ms-3 me-3 mt-3">
                                    <div class="col-12">
                                        <div class="px-3 pb-3 text-end">
                                            <a href="{{ route('sale.index') }}" class="btn bg-gradient-secondary me-3">Cancel</a>
                                            <button type="button" id="simpan" class="btn bg-gradient-primary"> Save New {{ $title }} Data </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Sales Data</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2 border border-2 border-primary border-radius-lg mt-3 mb-3 ms-4 me-4">
                            <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">No.</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">No Invoice</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Invoice Date</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Distributor</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Product Name</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Image</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Product Type</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Expired Date</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Stock</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Selling Price</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Purchase Price</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Selling Margin</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Quantity</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Sub Total</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Total Pay</th>
                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($datas as $nmr => $data)
                    <tr>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">{{$nmr + 1 . "."}}</td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">{{$data->no_nota}}</td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">{{$data->tgl_nota}}</td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">{{$data->name_distributor}}</td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">{{$data->nama_barang}}</td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">
                            <img src="{{ asset('storage/'.$data->foto_barang) }}" class="img-thumbnail cursor-pointer" alt="gambar produk" width="50" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $data->id_purchases }}">
                        </td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">{{$data->jenis_barang}}</td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">{{$data->tgl_expired}}</td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">{{$data->stok}}</td>                          <td class="text-uppercase text-xs text-secondary mb-0 ps-4">Rp. {{number_format($data->harga_jual, 0, ',', '.')}}</td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">Rp. {{number_format($data->harga_jual, 0, ',', '.')}}</td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">{{$data->jumlah_beli}}</td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">Rp. {{number_format($data->subtotal, 0, ',', '.')}}</td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">Rp. {{number_format($data->total_bayar, 0, ',', '.')}}</td>
                        <td class="text-uppercase text-xs text-secondary mb-0 ps-4">
                            <a href="{{ route('sale.edit', $data->id_purchases) }}"><img src="{{asset('be/assets/img/icon/edit.png')}}" alt="" width="20"></a>
                            <a href="{{ route('sale.destroy', $data->id_purchases) }}" onclick="hapus(event, this)"><img src="{{asset('be/assets/img/icon/trash.png')}}" alt="gambar sampah" width="20" class="cursor-pointer me-2" title="delete"></a>
                        </td>
                    </tr>
                    <div class="modal fade" id="staticBackdrop{{ $data->id_purchases }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{ $data->id_purchases }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">{{ $data->nama_barang }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="{{ asset('storage/' .$data->foto_barang) }}" alt="gambar produk" class="img-thumbnail cursor-pointer" width="75%">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer pt-3  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                    Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                        target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                        target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                let btnSimpan = document.getElementById('simpan');
                let form = document.getElementById('form');
                let no_struk = document.getElementById('no_struk');
                let id_barang = document.getElementById('id_barang');
                let harga_jual = document.getElementById('harga_jual');
                let jumlah_jual = document.getElementById('jumlah_jual');
                let subtotal = document.getElementById('subtotal');
                let total_bayar = document.getElementById('total_bayar');

                const rupiah = (number) => {
                    return new Intl.NumberFormat("id-ID", {
                        style: "currency",
                        currency: "IDR",
                        minimumFractionDigits: 0
                    }).format(number);
                }
                
                btnSimpan.addEventListener('click', function() {
                    if(id_barang.value.trim() === '') {
                        id_barang.focus();
                        swal("Invalid!", "You have to choose the Product!", "error");
                    }
                    else if(jumlah_jual.value.trim() === '') {
                        jumlah_jual.focus();
                        swal("Invalid!", "Selling Amount Cannot Be Empty!", "error");
                    }
                    else {
                        form.submit();
                    }
                });

                function hanyaAngka(evt) {
                    var charCode = (evt.which) ? evt.which : evt.keyCode;
                    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                        evt.preventDefault();
                    } else {
                        return true;
                    }
                };

                jumlah_jual.addEventListener('keypress', hanyaAngka);

                jumlah_jual.addEventListener('focus', function() {
                    if(jumlah_jual.value.trim() === '0') {
                        jumlah_jual.value = '';
                    }
                });

                jumlah_jual.addEventListener('blur', function() {
                    if(jumlah_jual.value.trim() === '') {
                        jumlah_jual.value = '0';
                    }
                });
                function subTotal(hrg_beli, jml_beli) {
                    return hrg_beli * jml_beli;
                };

                id_barang.addEventListener('change', function() {
                    let selectedOption = id_barang.options[id_barang.selectedIndex];
                    let hargaJual = selectedOption.getAttribute('data-harga-jual');
                    harga_jual.value = rupiah(hargaJual);
                    if (jumlah_jual.value.trim() === '' || jumlah_jual.value.trim() === '0') {
                        subtotal.value = rupiah(subTotal(parseInt(harga_jual.value.replace(/[^0-9]/g, '')), 0));
                        total_bayar.value = rupiah(totalBayar());
                    }
                    else {
                        subtotal.value = rupiah(subTotal(parseInt(harga_jual.value.replace(/[^0-9]/g, '')), parseInt(jumlah_jual.value)));
                        @if (isset(session('data')->total_bayar))
                            total_bayar.value = rupiah(parseInt({{ session('data')->total_bayar }}) + parseInt(subtotal.value.replace(/[^0-9]/g, '')));
                        @else
                            total_bayar.value = subtotal.value;
                        @endif
                        }
                });

                function totalBayar(l) {
                    let total_bayar_lama;
                    @if(isset(session('data')->total_bayar))
                        total_bayar_lama = parseInt({{ session('data')->total_bayar }});
                    @else
                        total_bayar_lama = 0;
                    @endif
                    return total_bayar.value = parseInt(total_bayar_lama) + parseInt(subtotal.value.replace(/[^0-9]/g, ''));
                };

                

                jumlah_jual.addEventListener('keyup', function() {
                    if(jumlah_jual.value == '') {
                        subtotal.value = rupiah(subTotal(parseInt(harga_jual.value.replace(/[^0-9]/g, '')), 0));
                        totalBayar.value = rupiah(totalBayar());
                    }
                    else {
                        subtotal.value = rupiah(subTotal(parseInt(harga_jual.value.replace(/[^0-9]/g, '')), parseInt(jumlah_jual.value)));
                        @if(isset(session('data')->total_bayar))
                            total_bayar.value = rupiah(parseInt({{ session('data')->total_bayar }}) + parseInt(subtotal.value.replace(/[^0-9]/g, '')));
                        @else
                            total_bayar.value = subtotal.value;
                        @endif
                    }
                });
                    
                @if (session('success'))
                    swal({
                        title: "Success!",
                        text: "{{ session('success') }}",
                        type: "info",
                        showCancelButton: true,
                        confirmButtonClass: "btn-info",
                        confirmButtonText: "Add new item purchase data!",
                        cancelButtonText: "Back to purchase list!"
                        cancelButtonClass: "btn-secondary",
                        closeOnConfirm: true,
                    },
                function(isConfirm) {
                    if(isConfirm) {
                        no_struk.disabled = true;
                        tgl_nota.disabled = true;
                        distributor.disabled = true;
                    }
                    else {
                        window.location.href = "{{ route('purchase.index') }}";
                    }
                });
                @endif
            </script>
        </div>
    @endsection
