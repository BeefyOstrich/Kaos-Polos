@extends('layouts.main')

@section('content')
    <!-- Modal -->
    <div style="max-width: 1000px" class="modal-dialog modal-dialog-centered" role="document">


        <div style="border:0cm !important;" class="modal-content shadow p-3 mb-5 bg-white rounded">
            <form action="{{ route('pemesanan.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><b>Pemesanan</b> </h5>

                </div>
                <div class="modal-body">


                    <div class="row">
                        <div class="col-md-6">
                            <h6><b>Detail Pesanan</b></h6>
                            <hr />
                            {{-- Info Kaos --}}
                            <div class="form-group">
                                <label for="varian">Varian</label>
                                <select class="custom-select" name="varian">
                                    <option disabled selected>Pilih Varian</option>
                                    <option value="lengan pendek">Lengan Pendek</option>
                                    <option value="lengan panjang">Lengan Panjang</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="ukuran">Ukuran</label>
                                <img class="w-100 rounded mb-2" src="{{ asset('assets/img/ukuran.jpeg') }}"
                                    alt="ukuran">
                                <select class="custom-select" name="ukuran">
                                    <option disabled selected>Pilih Ukuran</option>
                                    <option value="S">S Rp25.0000</option>
                                    <option value="M">M Rp25.0000</option>
                                    <option value="L">L Rp25.0000</option>
                                    <option value="XL">XL Rp25.0000</option>
                                    <option value="XXL">XXL Rp25.0000</option>
                                    {{-- <option value="3">Three</option> --}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Jumlah</label>
                                <input name="jumlah" type="number" class="form-control" placeholder="Ketik Jumlah Item">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h6><b>Detail Penerima</b></h6>
                            <hr />

                            <div class="form-group">
                                <label for="name">Nama Penerima</label>
                                <input name="nama_penerima" type="text" class="form-control"
                                    placeholder="Ketik Nama Penerima">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>

                            <div class="form-group">
                                <label for="no_telp">No. Telp</label>
                                <input name="no_telp" type="text" class="form-control" placeholder="Ketik No. Telp">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" class="form-control" rows="3"></textarea>
                            </div>

                            <h6><b>Detail Pembayaran</b></h6>
                            <hr />

                            <div class="form-group">
                                <label for="alamat">Total Harga</label>
                                <p><span id="total_harga">IDR 0.00</span></p>
                            </div>

                            <div class="form-group">
                                <label for="bukti_tranfer">Bukti Pembayaran</label>
                                <input required name="bukti_tranfer" type="file" class="form-control-file">
                                <small>Silahkan upload bukti pembayaran sesuai nominal yang tertera.</small>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="submit" class="btn btn-primary">Pesan</button>
                </div>
            </form>
        </div>

        {{-- Info Pembeli --}}
    </div>
@endsection

@section('javascript')
    <script>
        // Money Formatter
        let idr = new Intl.NumberFormat('en-US', {
            style: "currency",
            currency: 'IDR',
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        })

        // Show Total Harga
        let harga_kaos = 25000
        $('input[name=jumlah]').on('input', function(e) {
            let jumlah = $('input[name=jumlah]').val()
            let harga = harga_kaos * jumlah

            $('#total_harga').text(idr.format(harga))
        });
    </script>
@endsection
