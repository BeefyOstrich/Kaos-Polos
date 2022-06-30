@extends('dashboard.base')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar Pesanan</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover">

                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Aksi</th>
                                        <th scope="col">Tipe kaos</th>
                                        <th scope="col">Ukuran</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Nama Penerima</th>
                                        <th scope="col">No. Telp</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Total Harga</th>
                                        <th scope="col">Bukti Pembayaran</th>
                                        <th scope="col">Resi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>
                                                <div class="d-flex">

                                                    <button  data-coreui-toggle="tooltip" data-coreui-placement="top" title="Input Resi"
                                                        onclick="showResiForm({{ $item->id }})" class="mr-1 btn btn-sm btn-primary" 
                                                        data-toggle="modal" data-target="#exampleModal"><i
                                                            class="c-icon c-icon-sm cil-notes"></i></button>
                                                    <form method="POST" action="{{ route('pesanan.destroy', $item->id) }}" >
                                                        @csrf
                                                        @method("DELETE")
                                                        <button data-coreui-toggle="tooltip" data-coreui-placement="top" title="Delete"
                                                            type="submit" class="btn btn-sm btn-danger">
                                                            <i class="c-icon c-icon-sm cil-trash"></i></button>
                                                    </form>
                                                </div>
                                                
                                            </td>
                                            <td>{{ $item->varian }}</td>
                                            <td>{{ $item->ukuran }}</td>
                                            <td>{{ $item->jumlah }}</td>
                                            <td>{{ $item->nama_penerima }}</td>
                                            <td>{{ $item->no_telp }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->total_harga }}</td>
                                            <td>
                                                <img style="max-width:40px;max-height:40px;"
                                                    src="{{ asset('image/' . $item->bukti_tranfer) }}" alt="">
                                            </td>
                                            @if (!$item->resi)
                                                <td>-</td>
                                            @else
                                                <td>{{ $item->resi }}</td>
                                            @endif
                                            
                                        </tr>
                                    @endforeach
                                    {{-- <tr>
                                        <th scope="row">1</th>
                                        <td>Lengan Panjang</td>
                                        <td>S</td>
                                        <td>Bambang</td>
                                        <td>089614141414</td>
                                        <td>Jl. Setia Budi no. 12</td>
                                        <td><a href="#"><button class="btn btn-primary sm-btn">Input Resi</button></a>
                                        </td>
                                        <td><img style="max-width:40px;max-height:40px;"
                                                src="https://i.pinimg.com/736x/a5/0e/5e/a50e5e839949d2f19271d83c12bd0abc.jpg"
                                                alt="bukti-transfer"></td>
                                    </tr> --}}

                                </tbody>
                            </table>

                            <div class="card-footer text-muted">
                                <div class="d-flex justify-content-center">
                                    {{ $data->links() }}
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('pemesanan.updateResi') }}" method="post">
                    @csrf
                    <input hidden name="pesanan_id" type="text" value='300'>

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Resi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            {{-- <label for="name">Resi</label> --}}
                            <input name="resi" type="text" class="form-control" placeholder="Masukkan No. Resi">
                            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <script>
        const showResiForm = (pesanan_id) => {
            $('input[name=pesanan_id]').attr('value', pesanan_id)
        }

        
    </script>
@endsection
