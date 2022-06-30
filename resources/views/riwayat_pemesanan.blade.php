@extends('layouts.main')

@section('content')
    <!-- Modal -->
    <div style="max-width: 1000px" class="modal-dialog modal-dialog-centered" role="document">


        <div style="border:0cm !important; min-height:500px;" class="modal-content shadow p-3 mb-5 bg-white rounded">
            <div class="modal-header">
                <h5 class="modal-title">Riwayat Pemesanan</h5>
            </div>
            <div class="modal-body">
                <table class="table table-hover">

                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tipe kaos</th>
                            <th scope="col">Ukuran</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Nama Penerima</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Resi</th>
                            <th scope="col">Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->varian }}</td>
                                <td>{{ $item->ukuran }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->nama_penerima }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->alamat }}</td>
                                @if (!$item->resi)
                                    <td> <button class="btn btn-sm btn-warning">Diproses</button> </td>
                                @else
                                    <td> 
                                        <button  data-coreui-toggle="tooltip" data-coreui-placement="top" title="Copy"
                                        onclick="copyToClipboard( {{ $item->id }} )" id="resi_{{ $item->id }}" style="color:#4f5d73;"
                                            class="btn btn-sm"> {{ $item->resi }} 
                                        </button>
                                    </td>
                                @endif
                                <td>{{ $item->total_harga }}</td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                {{ $data->links() }}
            </div>
        </div>

        {{-- Info Pembeli --}}
    </div>
@endsection

@section('javascript')
    <script>
        function copyToClipboard(id) {
            /* Get the text field */
            let copyText = $('#resi_' + id)
            // var copyText = document.getElementById("myInput");

            /* Select the text field */
            copyText.select();
            // copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.text());

            /* Alert the copied text */
            // alert("Copied the text: " + copyText.text());
        }
    </script>
@endsection
