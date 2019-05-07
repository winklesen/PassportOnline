@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data User</div>

                <div class="card-body">
                    <form method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}"  autofocus>                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" >
                            </div>
                        </div>

                        {{--  <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>  --}}

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone" value="{{$user->phone}}" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jk" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>

                            <div class="col-md-6">                                                                
                                <div class="custom-control custom-radio custom-control-inline">                                    
                                    @if($user->jk == 'l')
                                        <input type="radio" id="jk" name="jk" class="custom-control-input" value="l" checked>
                                        <label class="custom-control-label" for="jk">Pria</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="jk2" name="jk" class="custom-control-input" value="p">
                                        <label class="custom-control-label" for="jk2">Wanita</label>
                                    @else
                                        <input type="radio" id="jk" name="jk" class="custom-control-input" value="l">
                                        <label class="custom-control-label" for="jk">Pria</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="jk2" name="jk" class="custom-control-input" value="p" checked>
                                        <label class="custom-control-label" for="jk2">Wanita</label>
                                    @endif                                    
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="tinggi" class="col-md-4 col-form-label text-md-right">Tinggi</label>

                            <div class="col-md-6">
                                <input id="tinggi" type="number" class="form-control" name="tinggi" value="{{$user->tinggi}}"  autofocus placeholder="Cm">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="tempat" class="col-md-4 col-form-label text-md-right">Tempat lahir</label>

                            <div class="col-md-6">
                                <input id="tempat" type="text" class="form-control" name="tempatLahir" value="{{ $user->tempatLahir }}" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tglLahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="tglLahir" type="date" class="form-control" name="tglLahir" value="{{ $user->tglLahir }}" >                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="statusSipil" class="col-md-4 col-form-label text-md-right">Status Sipil</label>

                            <div class="col-md-6">
                                <input id="statusSipil" type="text" class="form-control" name="statusSipil" value="{{ $user->statusSipil }}" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pekerjaan" class="col-md-4 col-form-label text-md-right">Pekerjaan</label>

                            <div class="col-md-6">
                                <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="{{ $user->pekerjaan }}" >
                                <input id="role" type="text" class="form-control" name="role" value="user" hidden>                                
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Data Permohonan</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update',$pasport->id) }}">
                        @csrf                                                            
                        <div class="form-group row">
                            <label for="kantor" class="col-md-4 col-form-label text-md-right">Kantor Imigrasi</label>

                            <div class="col-md-6">
                                <input id="kantor" type="text" class="form-control" name="id" value="{{$pasport->id}}">
                                <input id="kantor" type="text" class="form-control" name="kantor" value="{{$pasport->kantor}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl" class="col-md-4 col-form-label text-md-right">Tanggal</label>

                            <div class="col-md-6">
                                <input id="tgl" type="date" class="form-control" name="tgl" value="{{$pasport->tgl}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="waktu" class="col-md-4 col-form-label text-md-right">Waktu</label>

                            <div class="col-md-6">                                                                
                                @if($pasport->waktu == 'Pagi (08:00 s/d 12:00)')
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="waktu" name="waktu" class="custom-control-input" value="Pagi (08:00 s/d 12:00)" checked>
                                    <label class="custom-control-label" for="waktu">Pagi (08:00 s/d 12:00)</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="waktu2" name="waktu" class="custom-control-input" value="Siang (13:00 s/d 16:00/16:30)" >
                                    <label class="custom-control-label" for="waktu2">Siang (13:00 s/d 16:00/16:30)</label>
                                </div>                            
                                @else
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="waktu" name="waktu" class="custom-control-input" value="Pagi (08:00 s/d 12:00)">
                                    <label class="custom-control-label" for="waktu">Pagi (08:00 s/d 12:00)</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="waktu2" name="waktu" class="custom-control-input" value="Siang (13:00 s/d 16:00/16:30)" checked>
                                    <label class="custom-control-label" for="waktu2">Siang (13:00 s/d 16:00/16:30)</label>
                                </div>                                                
                                @endif                                
                            </div>
                        </div>                                                

                        <div class="form-group row">
                            <label for="jenis" class="col-md-4 col-form-label text-md-right">Jenis Paspor</label>

                            <div class="col-md-6">
                                <input id="jenis" type="text" class="form-control" name="jenis" value="{{$pasport->jenis}}" >
                            </div>
                        </div>                    

                        {{--  <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">Harga Paspor</label>

                            <div class="col-md-6">
                                <input id="harga" type="text" class="form-control" name="harga" disabled value="Rp 0" >
                            </div>
                        </div>                    

                        <div class="form-group row">
                            <label for="hargabio" class="col-md-4 col-form-label text-md-right">Harga Biometrik</label>

                            <div class="col-md-6">
                                <input id="hargabio" type="text" class="form-control" name="hargabio" disabled value="Rp 0" >
                            </div>
                        </div>                      --}}

                        <div class="form-group row">
                            <label for="biaya" class="col-md-4 col-form-label text-md-right">Total Biaya</label>

                            <div class="col-md-6">
                                <input id="totalbiaya" type="text" class="form-control" value="Rp {{$pasport->biaya}}" disabled>
                                {{--  <input id="biaya" type="number" class="form-control" name="biaya" hidden>  --}}
                            </div>
                        </div>                    

                        <button id="submit" type="submit" class="btn btn-primary">
                            Verifikasi
                        </button>
                    </form>

                    <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Berhasil</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>                            
                            <div class="modal-body">                                
                                <span id="modalContent">
                                    Permohonan paspor berhasil diverfikasi
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
