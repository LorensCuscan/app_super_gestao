@extends('app.layouts._partials.basico')

@section('titulo', 'Produto')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <h1>Listagem Produtos</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produtos.create')}}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="2" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>descrição</th>
                            <th>Peso</th>
                            <th>E-Unidade ID</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descrição }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->unidade_id }}</td>
                                <td><a href="{{ route('produtos.show', ['produto' => $produto->id]) }}">Visualizar</a></td>
                                <td><a href="">Excluir</a></td>
                                <td><a href="">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>                  
                </table>
                {{ $produtos->appends($request)->links() }}
          
            </div>
        </div>
     
    </div>
    
@endsection