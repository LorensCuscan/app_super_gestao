@extends('app.layouts._partials.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <h1>Fornecedor - Listar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.salvar') }}">Novo</a></li>
                <li><a href="{{ route('app.index') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="2" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>E-mail</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td>{{ $fornecedor->nome }}</td>
                                <td>{{ $fornecedor->site }}</td>
                                <td>{{ $fornecedor->uf }}</td>
                                <td>{{ $fornecedor->email }}</td>
                                <td><a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}">Excluir</a></td>
                                <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p>Lista de produtos</p>
                                    <table border="1" style="margin:20px">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{ $fornecedor->produtos->toJson() }}   
                                            @foreach ($fornecedor->produtos as $key => $produto)
                                                <tr>
                                                    <td>{{ $produto->id }}</td>
                                                    <td>{{ $produto->nome }}</td>
                                                </tr>
                                            @endforeach
                                      
                                    </tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    </table>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>                  
                </table>
                {{ $fornecedores->appends($request)->links() }}
          
            </div>
        </div>
     
    </div>
    
@endsection
