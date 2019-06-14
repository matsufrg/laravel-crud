@extends ('layouts.header');
    <div class="container">
    <h1 class="mt-2">Alterar informações</h1>
    <form action="/users/update/{{ $user->id }}" method="POST" class="mt-2">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name">Nome: <span class="text-danger"></span></label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email: <span class="text-danger"></span></label>
            <input type="text" id="email" name="email" value="{{ $user->email }}" class="form-control" required>
        </div> 
        @if ($userUpdating->admin == 1)
        <div class="form-group">
            <label for="email">Admin: <span class="text-danger"></span></label>
            <label for="true">True: <span class="text-danger"></span></label>
            <input type="radio" id="true" value="1" name="admin" required>
            <label for="false">False: <span class="text-danger"></span></label>
            <input type="radio" id="false" value="0" name="admin" required>
        </div>
        @endif
        <input type="submit" class="btn btn-success mt-2" value="Alterar">
    </form>
</div>
    </body>
</html>