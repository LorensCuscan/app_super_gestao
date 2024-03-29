@extends('app.layouts._partials.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

<div class="conteudo">

    <div class="conteudo-pagina">

        <div class="titulo-pagina" >
           <h1> Fornecedor - Adicionar<h1>
        </div>

       

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.salvar') }}">Novo</a></li>
                <li><a href="{{ route('app.index') }}">Consulta</a></li>
            </ul>
        </div>
                <div class="informacao-pagina">
                    {{ $msg ?? '' }}
                    <div style="width: 30%; margin-left: auto; margin-right: auto;">
                        <form method="post" action=" {{ route('app.fornecedor.salvar') }} ">
                            <input type="hidden" name="id" value="{{ isset($fornecedor) ? $fornecedor->id : '' }}">
                            @csrf
                            
                            <input type="text" name="nome" value="{{ $fornecedor->nome ?? old('nome') }}"  placeholder="Nome"   class="borda-preta">
                            {{$errors->has('nome') ? $errors->first('nome') : '' }}

                            <input type="text" name="site" value="{{ $fornecedor->site ?? old('site') }}"  placeholder="Site"   class="borda-preta">
                            {{$errors->has('site') ? $errors->first('site') : '' }}

                            <input type="text" name="uf" value="{{ $fornecedor->uf ?? old('uf') }}"    placeholder="Uf"     class="borda-preta">
                            {{$errors->has('uf') ? $errors->first('uf') : '' }}

                            <input type="text" name="email" value="{{ $fornecedor->email ?? old('email') }}" placeholder="E-mail" class="borda-preta">
                            {{$errors->has('email') ? $errors->first('email') : '' }}

                            <button type="submit" class="borda-preta">Cadastrar</button>
                        </form>
                    </div>
                </div>
            

        <div class="informacao-pagina">

        </div>
    
   

        

</div>

@endsection