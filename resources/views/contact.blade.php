<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Contatos</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Listagem de Contatos</h1>
        @foreach($contacts as $contact)
        <div>
            <p>{{ $contact->nome }}</p>
            <p>{{ $contact->email }}</p>
            <p>{{ $contact->telefone }}</p>
            <p>{{ $contact->data_nascimento }}</p>
        </div>
        @endforeach

        <h2>Salvar Contato</h2>
        <form action="{{ route('contato.salvar') }}" method="POST">
            @csrf
            <button type="submit">Salvar Contato</button>
        </form>
    </body>
</html>
