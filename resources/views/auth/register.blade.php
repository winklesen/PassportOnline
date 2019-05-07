@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jk" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>

                            <div class="col-md-6">                                                                
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="jk" name="jk" class="custom-control-input" value="l">
                                    <label class="custom-control-label" for="jk">Pria</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="jk2" name="jk" class="custom-control-input" value="p">
                                    <label class="custom-control-label" for="jk2">Wanita</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="tinggi" class="col-md-4 col-form-label text-md-right">Tinggi</label>

                            <div class="col-md-6">
                                <input id="tinggi" type="number" class="form-control{{ $errors->has('tinggi') ? ' is-invalid' : '' }}" name="tinggi" value="{{ old('tinggi') }}" required autofocus placeholder="Cm">

                                @if ($errors->has('tinggi'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tinggi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="tempat" class="col-md-4 col-form-label text-md-right">Tempat lahir</label>

                            <div class="col-md-6">
                                <input id="tempat" type="text" class="form-control{{ $errors->has('tempat') ? ' is-invalid' : '' }}" name="tempatLahir" value="{{ old('tempat') }}" required>

                                @if ($errors->has('tempat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tempat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tglLahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="tglLahir" type="date" class="form-control{{ $errors->has('tglLahir') ? ' is-invalid' : '' }}" name="tglLahir" value="{{ old('tglLahir') }}" required>

                                @if ($errors->has('tglLahir'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tglLahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="statusSipil" class="col-md-4 col-form-label text-md-right">Status Sipil</label>

                            <div class="col-md-6">
                                <input id="statusSipil" type="text" class="form-control{{ $errors->has('statusSipil') ? ' is-invalid' : '' }}" name="statusSipil" value="{{ old('statusSipil') }}" required>

                                @if ($errors->has('statusSipil'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('statusSipil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pekerjaan" class="col-md-4 col-form-label text-md-right">Pekerjaan</label>

                            <div class="col-md-6">
                                <input id="pekerjaan" type="text" class="form-control{{ $errors->has('pekerjaan') ? ' is-invalid' : '' }}" name="pekerjaan" value="{{ old('pekerjaan') }}" required>
                                <input id="role" type="text" class="form-control" name="role" value="user" hidden>

                                @if ($errors->has('pekerjaan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pekerjaan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
