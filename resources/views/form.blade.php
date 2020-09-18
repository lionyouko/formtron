@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- Lion: important part here: it is part how to send the data through the request --}}
        <form action="/form" enctype="multipart/form-data" method="post">
            @csrf
            <div class="col-8 offset-2">

                <div class="row"><h3>Formulário para Rede</h3></div>
                <div>
                    <p>Se quiser participar da rede particionada para resolver a lentidão,
                    preencha o formulário.</p>
                    <p>Dê preferência a preencher pelo e-mail pelo qual receberam o pedido.</p>
                    <p>Preencha quantas vezes forem necessárias para os vossos portáteis.</p>
                    <p>Preencha o MAC com cuidado. Prefira copy e paste direto do dispositivo.</p>
                </div>
                <br>
                <div class="form-group row d-inline">

                    <label for="nome" class="col-md-4 col-form-label text-md-left">{{ __('Nome') }}:</label>

                    <input
                        id="nome"
                        type="text"
                        class="form-control @error('nome') is-invalid @enderror"
                        name="nome"
                        value="{{ old('nome') }}"
                        required autocomplete="nome" autofocus>

                    @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row d-inline">

                    <label for="email" class="col-md-4  col-form-label text-md-left">{{ __('E-mail') }}:</label>

                    <input
                        id="email"
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}"
                        required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row d-inline">

                    <label for="MAC" class="col-md-4 col-form-label text-md-left">{{ __('MAC') }}:</label>

                    <input
                        id="MAC"
                        type="text"
                        class="form-control @error('MAC') is-invalid @enderror"
                        name="MAC"
                        value="{{ old('MAC') }}"
                        required autocomplete="MAC" autofocus>

                    @error('MAC')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row pt-4">
                    <button class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
