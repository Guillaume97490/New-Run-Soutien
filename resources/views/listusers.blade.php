 @extends('layouts.layout')
 @section('content')




 <div class="container mt-3">
    <div class="card-group d-flex justify-content-between flex-column mb-5">

    @foreach($users as $user)

                <div class="card border-0">
                    <div class="card-body">
                        <h4 class="card-title"> ID :{{$user->id}}, {{$user->nom}} {{$user->prenom}}</h4>
                        <p class="card-text text-black">Tel : {{$user->phone}}</p>
                        <p class="card-text text-black">Role : {{$user->role->nom}}</p>
                        @auth
                            <form action="/listusers/{{$user -> id}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <a href="/listusers/{{$user -> id}}/edit" class="btn btn-warning btn-xs" role="button">Modifier</a>
                                <a href="#"></a>
                                @if ($authId !== $user->id)
                                    <button type="submit" onclick="return confirm('Etes vous sûr ?')" class="btn btn-danger btn-xs">Supprimer</button>
                                @endif
                            </form>
                        @endauth
                    </div>
                </div>


    @endforeach

</div>

{{ $users->links() }}

</div>





{{-- <ul>
    @foreach ($users as $user)
    <li>
        {{$user}}
        <a href="/listusers/{{$user -> id}}/edit">Modifier</a>


        <form action="/listusers/{{$user -> id}}" method="POST">
            @csrf
            @method("DELETE")
            @if ($authId !== $user->id)
                <button type="submit" onclick="return confirm('Etes vous sûr ?')" class="btn btn-danger btn-xs">Supprimer</button>
            @endif
        </form>


    </li>
    @endforeach
</ul>
<a href="/listusers/create">Ajouter</a> --}}

@endsection

