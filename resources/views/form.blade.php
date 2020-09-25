@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- Lion: important part here: it is part how to send the data through the request --}}
        <form action="/form" enctype="multipart/form-data" method="post">
            @csrf
            <div class="col-8 offset-2">

                <div class="row"><h3>Formulário para Recursos 2020/2021</h3></div>
                <br><br>
                <div>
                    <h4>Por favor, leia antes de iniciar:</h4>
                    <p>Como informados por e-mail, é necessário da nossa parte termos um melhor entendimento das vossas necessidades computacionais.</p>
                    <p>Nesse formulário poderão preencher alguns requisitos.</p>

                    <p>É muito importante que descrevam com maior precisão possível quais softwares e frameworks
                        têm por objetivo usar, além das que já usam. Pedimos sensibilidade no preenchimento
                    de forma a fazermos o melhor uso para os novos recursos.</p>
                    <p>No final, um campo com observações estará disponível para que outros adendos sejam postos
                        se o Professor(a) achar necessário.</p>
                    <p>Tendo em vista esses requisitos, nós iremos avaliar qual a solução que melhor se encaixa
                        ao Departamento a viabilizar a maioria dos casos (i.e. Cloud, ou Cluster).
                    </p>
                    <p>
                        Caso tenha mais de uma UC, simplesmente separe por ";" ou coloque apenas aquela que o(a) Professor(a) sinta que mais haverá diferença e benefício imediato face ao atual.
                    </p>
                    <p>
                        Em relação ao número de alunos, colocar da UC que tenha sido escolhida nos critérios acima preenchidos. Separar por ";", se preciso.
                    </p>
                    <p>Ao responder o formulário, retornará à página inicial e o processo está concluído.</p>
                </div>
                <br>
                <div class="form-group row d-inline">

                    <label for="nome" class="col-md-8 col-form-label text-md-left pl-0">{{ __('1. Nome') }}:</label>

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

                    <label for="email" class="col-md-8  col-form-label text-md-left">{{ __('2. E-mail') }}:</label>

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

                    <label for="uc" class="col-md-8 col-form-label text-md-left">{{ __('3. Nome da Unidade Curricular (UC)') }}:</label>

                    <input
                        id="uc"
                        type="text"
                        class="form-control @error('uc') is-invalid @enderror"
                        name="uc"
                        value="{{ old('uc') }}"
                        required autocomplete="uc" autofocus>

                    @error('uc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row d-inline">

                    <label for="nalunos" class="col-md-8 col-form-label text-md-left">{{ __('4. Número de Alunos Esperado') }}:</label>

                    <input
                        id="nalunos"
                        type="text"
                        class="form-control @error('nalunos') is-invalid @enderror"
                        name="nalunos"
                        value="{{ old('nalunos') }}"
                        required autocomplete="nalunos" autofocus>

                    @error('nalunos')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>
                <br>
                <div class="pl-4">
                    <h5>5. Descrição dos Componentes de Hardware:</h5>
                    <p>Esses campos são opcionais, mas recomendados de se preencher:</p>
                    <div class="form-group row d-inline">

                        <label for="cpu" class="col-md-8 col-form-label text-md-left">{{ __('5.1. Requisitos de CPU (num cores)') }}:</label>

                        <input
                            id="cpu"
                            type="text"
                            class="form-control @error('cpu') is-invalid @enderror"
                            name="cpu"
                            value="{{ old('cpu') }}"
                             autocomplete="cpu" autofocus>

                        @error('cpu')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-group row d-inline">

                        <label for="ram" class="col-md-8 col-form-label text-md-left pl-4">{{ __('5.2. Requisitos de RAM (em GB)') }}:</label>

                        <input
                            id="ram"
                            type="text"
                            class="form-control @error('ram') is-invalid @enderror"
                            name="ram"
                            value="{{ old('ram') }}"
                             autocomplete="ram" autofocus>

                        @error('ram')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-group row d-inline">
                        <label for="storage" class="col-md-14 col-form-label text-md-left pl-4">{{ __('5.3. Requisitos de Armazenamento <<SSD/HDD>:quantidade>') }} :</label>

                        <input
                            id="storage"
                            type="text"
                            class="form-control @error('storage') is-invalid @enderror"
                            name="storage"
                            value="{{ old('storage') }}"
                             autocomplete="storage" autofocus>

                        @error('storage')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-group row d-inline">

                        <label for="gpu" class="col-md-12 col-form-label text-md-left pl-4">{{ __('5.4. Requisitos Gráficos (GPU) (Sim ou Não)') }}:</label>

                        <input
                            id="gpu"
                            type="text"
                            class="form-control @error('gpu') is-invalid @enderror"
                            name="gpu"
                            value="{{ old('gpu') }}"
                             autocomplete="gpu" autofocus>

                        @error('gpu')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-group row d-inline">

                        <label for="net" class="col-md-8 col-form-label text-md-left pl-4">{{ __('5.5. Requisitos de Rede') }}:</label>

                        <input
                            id="net"
                            type="text"
                            class="form-control @error('net') is-invalid @enderror"
                            name="net"
                            value="{{ old('net') }}"
                             autocomplete="net" autofocus>

                        @error('net')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                </div>


                <div class="form-group row d-inline">

                    <label for="frameworks" class="col-md-8 col-form-label text-md-left pl-0">{{ __('6. Frameworks que se pretende Utilizar') }}:</label>

                    <input
                        id="frameworks"
                        type="text"
                        class="form-control @error('frameworks') is-invalid @enderror"
                        name="frameworks"
                        value="{{ old('frameworks') }}"
                        required autocomplete="frameworks" autofocus>

                    @error('frameworks')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row d-inline">

                    <label for="observations" class="col-md-8 col-form-label text-md-left">{{ __('7. Observações Extras') }}:</label>

                    <input
                        id="observations"
                        type="text"
                        class="form-control @error('observations') is-invalid @enderror"
                        name="observations"
                        value="{{ old('observations') }}"
                         autocomplete="observations" autofocus>

                    @error('observations')
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
