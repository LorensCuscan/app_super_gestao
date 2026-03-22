{{ $slot }}

<form action="{{ route('site.contato.salvar') }}" method="post">
    @csrf
    
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    @if ($errors->has('nome'))
        <span style="color: red;">{{ $errors->first('nome') }}</span>
    @endif
    <br>

    <input name="telefone" value="{{ old('telefone') }}" placeholder="Telefone" class="{{ $classe }}">
    <span style="color: red;">{{ $errors->has('telefone') ? $errors->first('telefone') : ''}}</span>
    <br>

    <input name="email" value="{{ old('email') }}" placeholder="E-mail" class="{{ $classe }}">
    <span style="color: red;">{{ $errors->has('email') ? $errors->first('email') : ''}}</span>
    <br>

    <select name="motivo_contato_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contato as $motivo)
            <option value="{{ $motivo->id }}" @selected(old('motivo_contato_id') == $motivo->id)>
                {{ $motivo->motivo_contato }}
            </option>
        @endforeach
    </select>
    <span style="color: red;">{{ $errors->has('motivo_contato_id') ? $errors->first('motivo_contato_id') : ''}}</span>
    <br>

    <textarea name="mensagem" class="{{ $classe }}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui sua mensagem' }}</textarea>
    <span style="color: red;">{{ $errors->has('mensagem') ? $errors->first('mensagem') : ''}}</span>
    <br>

    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
