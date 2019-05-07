@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">        
        <div class="col-md-8">
            <a href="{{route('home')}}" class="btn btn-primary mb-3">
                <i class="fas fa-arrow-left mr-2"></i>Back
            </a>
            <div class="card">
                <div class="card-header font-weight-bold">Form Permohonan Pembuatan Paspor</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pasport.store') }}">
                        @csrf
                                            
                        <input id="iduser" type="number" class="form-control" name="iduser" value="{{Auth::user()->id}}" hidden>
                        <input id="kode" type="text" class="form-control" name="kode" value="Menunggu Verifikasi" hidden>

                        <div class="form-group row">
                            <label for="kantor" class="col-md-4 col-form-label text-md-right">Kantor Imigrasi</label>

                            <div class="col-md-6">
                                <input id="kantor" type="text" class="form-control" name="kantor" autofocus placeholder="104 - Kanim Kelas | Khusus Jakarta Selatan" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl" class="col-md-4 col-form-label text-md-right">Tanggal</label>

                            <div class="col-md-6">
                                <input id="tgl" type="date" class="form-control" name="tgl" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="waktu" class="col-md-4 col-form-label text-md-right">Waktu</label>

                            <div class="col-md-6">                                                                
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="waktu" name="waktu" class="custom-control-input" value="Pagi (08:00 s/d 12:00)" required>
                                    <label class="custom-control-label" for="waktu">Pagi (08:00 s/d 12:00)</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="waktu2" name="waktu" class="custom-control-input" value="Siang (13:00 s/d 16:00/16:30)" required>
                                    <label class="custom-control-label" for="waktu2">Siang (13:00 s/d 16:00/16:30)</label>
                                </div>
                            </div>
                        </div>                                                

                        <div class="form-group row">
                            <label for="jenis" class="col-md-4 col-form-label text-md-right">Jenis Paspor</label>

                            <div class="col-md-6">
                                <select class="form-control" id="jenis" onchange="hitungHarga()" name="jenis">
                                    <option disabled selected>...</option>
                                    <option value="Paspor Biasa">Paspor Biasa</option>
                                    <option value="E-Paspor">E-Paspor</option>                                    
                                </select>                                
                            </div>
                        </div>                    

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">Harga Paspor</label>

                            <div class="col-md-6">
                                <input id="harga" type="text" class="form-control" name="harga" disabled value="Rp 0" required>
                            </div>
                        </div>                    

                        <div class="form-group row">
                            <label for="hargabio" class="col-md-4 col-form-label text-md-right">Harga Biometrik</label>

                            <div class="col-md-6">
                                <input id="hargabio" type="text" class="form-control" name="hargabio" disabled value="Rp 0" required>
                            </div>
                        </div>                    

                        <div class="form-group row">
                            <label for="biaya" class="col-md-4 col-form-label text-md-right">Total</label>

                            <div class="col-md-6">
                                <input id="totalbiaya" type="text" class="form-control" value="Rp 0" disabled>
                                <input id="biaya" type="number" class="form-control" name="biaya" hidden>
                            </div>
                        </div>                    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="submit" type="submit" class="btn btn-primary">
                                    Kirim
                                </button>
                            </div>
                        </div>                        
                    </form>

                    <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Permohonan terkirim</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>                            
                            <div class="modal-body">                                
                                <span id="modalContent">
                                    Silahkan tunggu permohonan paspor anda diverifikasi oleh admin
                                </span>                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                                
                            </div>
                            </div>
                        </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
