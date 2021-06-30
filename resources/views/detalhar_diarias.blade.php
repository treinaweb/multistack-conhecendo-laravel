@extends('layout')

@section('titulo-pagina')
  Detalhes da diária
@endsection

@section('conteudo-principal')
  <h1>Detalhes da diária {{ $diaria->id }}</h1>

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Detalhes</h5>
      <p class="card-text">
        <strong>Nome Cliente: </strong> {{ $diaria->nome_cliente }}
      </p>
      <p class="card-text">
        <strong>Nome Diarista: </strong> {{ $diaria->nome_diarista }}
      </p>
      <p class="card-text">
        <strong>Atendimento: </strong> {{ $diaria->atendimento }}
      </p>
      <p class="card-text">
        <strong>Valor: </strong> {{ $diaria->valor }}
      </p>
      <a href="{{ route('index') }}" class="btn btn-primary">Voltar para lista</a>
    </div>
  </div>
@endsection      

 