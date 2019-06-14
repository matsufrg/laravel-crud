@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3 text-center">
            <h1 class="text-center">Informações do usuário</h1>
                <p class="m-0"><strong>Nome: {{ $user->name }}</strong></p>
                <p class="m-0"><strong>Email: {{ $user->email }}</strong></p>
                <p class="m-0"><strong>Admin: {{ ($user->admin) }}</strong></p>
                <p class="m-0"><strong>Criado em: {{ ($user->created_at) }}</strong></p>
                <a href="/users/update/{{ $user->id }}" class="btn bg-light">Alterar dados</a>
            </div>
            @if ($user->admin == 1)
            <div class="card p-3 mt-3 text-center">
            <h1 class="text-center">Área de Admin</h1>
                <a href="/users/list" class="btn bg-light">Listar usuário</a>
                <a href="/users/trash" class="btn bg-light">Listar usuários deletados</a>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
