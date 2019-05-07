@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(Auth::user()->role == 'admin')        
            <div class="col-md-11">
            {{--  Dashboard admin  --}}
            <div class="card shadow">                
                <div class="card-header font-weight-bold">Dashboard</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jenis</th>                            
                            {{--  <th scope="col">Biaya</th>  --}}
                            <th class="text-center" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>                             
                            @if(count($listPasport) > 0)
                                @foreach ($listPasport as $data)
                                <tr>
                                    <th>{{$data->created_at->format('d F Y')}}</th>
                                    <td>{{$data->waktu}}</td>
                                    <td>{{$data->kantor}}</td>
                                    <td>{{$data->kode}}</td>
                                    <td>{{$data->jenis}}</td>
                                    {{--  <td>{{$data->biaya}}</td>  --}}
                                    <td>
                                        <a href="{{route('details',['id'=>$data->id, 'idUser'=>$data->iduser])}}" class="btn btn-sm btn-primary">View</a>                                        
                                        <a href="{{route('deletePasport',$data->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>                                    
                                </tr>
                                @endforeach                            
                            @else
                                <tr class="text-center">
                                    <th colspan="6">Anda tidak memiliki request permohonan pasport</th>
                                </tr>
                            @endif
                            
                        </tbody>
                    </table>
                </div>

                <div class="card shadow">                
                <div class="card-header font-weight-bold">Data User</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Hp</th>
                            <th scope="col">Tanggal Daftar</th>
                            {{--  <th scope="col">Jenis</th>  --}}
                            {{--  <th scope="col">Biaya</th>  --}}
                            <th class="text-center" scope="col" >Aksi</th>
                            </tr>
                        </thead>
                        <tbody>                             
                            @if(count($listUser) > 0)
                                @foreach ($listUser as $data)
                                <tr>                                    
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->phone}}</td>
                                    <td>{{$data->created_at->format('d F Y')}}</td>
                                    {{--  <td>{{$data->jenis}}</td>  --}}
                                    {{--  <td>{{$data->biaya}}</td>  --}}
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-primary">View</a>                                        
                                        <a href="{{route('deleteUser',$data->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>                                                                                                            
                                </tr>                                
                                @endforeach                            
                            @else
                                <tr class="text-center">
                                    <th colspan="5">Tidak ada user yang terdaftar</th>
                                </tr>
                            @endif
                            
                        </tbody>
                    </table>
                </div>
            </div>            
        </div>


        {{--  Index User  --}}
        @else                
        <div class="col-md-10">
            {{--  Card syarat  --}}
            <div class="card shadow">                
                <div class="card-header font-weight-bold">Syarat Membuat Paspor</div>
                <div class="card-body">
                    <ul>
                        <li>Akte kelahiran asli dan fotokopi (jika tidak mempunyai, maka Anda bisa menggantinya dengan buku nikah serta akte ijazah dari SD sampai SMA yang asli dan fotokopi).</li>
                        <li>Kartu Tanda Penduduk (KTP) asli dan fotokopi</li>                        
                        <li>Kartu Keluarga (KK) asli dan fotokopi</li>                        
                        <li>Buku nikah orang tua dan paspor orang tua jika mempunyai anak yang ikut</li>                        
                        <li>Formulir permohonan paspor yang bisa diambil langsung di kantor imigrasi</li>                        
                        <li>Materai</li>                                            
                    </ul>
                </div>
            </div>            
        </div>

        {{--  Card container  --}}
        <div class="row col-10">                    
            <div class=" justify-content-between d-flex">
                    {{--  Card manual  --}}
                <div class="card shadow col-6 my-2 mr-1 py-2">
                    <div class="card-header font-weight-bold">Prosedur Pembuatan Paspor Manual</div>

                    <div class="card-body">
                        <ul>
                            <li>Datanglah ke kantor imigrasi setempat yang ada di wilayah kabupaten atau kota tempatmu tinggal. Usahakan datang pagi hari sebelum pukul 12.00, sebab jumlah pemohon hanya dibatasi 200 orang setiap harinya.</li>
                            <li>Jangan lupa untuk bawa seluruh dokumen yang sudah dipersiapkan.</li>
                            <li>Setelah sampai, isi formulir permohonan paspor yang tersedia di loket permohonan paspor kantor imigrasi. Pastikan mengisi data sesuai dengan informasi yang ada di dokumen resmi.</li>
                            <li>Jika sudah selesai, kamu bisa menyerahkan formulir tersebut ke loket untuk pembuatan paspor baru untuk mendapatkan bukti tanda terima serta jadwal pengambilan sidik jari dan foto.</li>
                            <li>Setelah melalui proses pengambilan sidik jari dan foto, tahap yang harus kamu lewati adalah tahap wawancara. Wawancara ini dilakukan untuk memverifikasi dokumen asli dengan keterangan yang ditulis di formulir pembuatan paspor.</li>
                            <li>Kalau semua tahapan ini telah selesai kamu lalui, hal yang harus dilakukan selanjutnya adalah melakukan pembayaran. Jika sudah, kamu akan mendapatkan informasi kapan paspor akan selesai dan bisa diambil.</li>
                        </ul>
                    </div>
                </div>

                {{--  Card online  --}}
                <div class="card shadow col-6 my-2 ml-1 py-2">
                    <div class="card-header font-weight-bold">Prosedur Pembuatan Paspor Online</div>

                    <div class="card-body">
                        <ul>
                            <li>Mengisi data diri</li>
                            <li>Pilih kantor imigrasi terdekat dengan tempat tinggalmu.</li>
                            <li>Lengkapi data permohonan antre paspor. Data tersebut meliputi tanggal rencana pengurusan paspor.</li>
                            <li>Cek kembali jadwal antre yang kamu ajukan apakah sudah disetujui atau belum.</li>
                            <li>Jika sudah disetujui, langkah selanjutnya adalah datang ke kantor imigrasi sesuai dengan jadwal. Tunjukan barcode saat datang ke sana untuk mendapatkan bukticetak nomor urut panggilan.</li>
                            <li>Tunggu hingga mendapatkan panggilan, lalu serahkan berkas pengurusan paspor dan melakukan pembayaran. Tunggu hingga semua proses berhasil dilakukan.</li>                        
                        </ul>
                    </div>   
                    {{--  <a href="{{route('permohonan')}}" class="btn btn-primary">Buat Permohonan</a>               --}}
                    <a href="{{route('pasport.create')}}" class="btn btn-primary">Buat Permohonan</a>             
                </div>
            </div>
        </div>
    
        {{--  Card paspor saya  --}}
        <div class="col-md-10">            
            <div class="card shadow">                
                <div class="card-header font-weight-bold">Paspor Saya</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>                             
                            @if(count($pasport) > 0)
                                @foreach ($pasport as $data)
                                <tr>
                                    <th>{{$data->created_at->format('d F Y')}}</th>
                                    <td>{{$data->waktu}}</td>
                                    <td>{{$data->kantor}}</td>
                                    <td>{{$data->kode}}</td>
                                </tr>
                                @endforeach                            
                            @else
                                <tr class="text-center">
                                    <th colspan="4">Anda tidak memiliki antrian pasport</th>
                                </tr>
                            @endif
                            
                        </tbody>
                    </table>
                </div>
            </div>            
        </div>        
        @endif
    </div>
</div>
@endsection

