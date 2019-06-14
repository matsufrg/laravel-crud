@extends ('layouts.header');
        <div class="container">
        <h1 class="mt-2">Usuários</h1>
            <table class="table mt-2 text-center">
                    <tr>
                <th>Id</th>
                <th class="text-left">Nome</th>
                <th>Email</th>
                <th>Password</th>
                <th>Admin</th>
                <th>Deleted At</th>
                <th></th>
                    </tr>
                    @foreach ($user as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td class="text-left"> {{ $p->name }}</td>
                            <td> {{ $p->email }}</td>
                            <td> {{ $p->password }} </td>
                            <td>{{ $p->admin }}</td>
                            <td>{{ $p->deleted_at }}</td>
                            <td><a href="/users/restore/{{ $p->id }}"><button class="btn btn-success">Restaurar</button></a></td>
                        </tr>
                    @endforeach
                </table>
      </div>
    </body>
</html>