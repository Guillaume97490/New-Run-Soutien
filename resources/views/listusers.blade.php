
<ul>
    @foreach ($users as $user)
    <li>
        {{$user}}
        <a href="/listusers/{{$user -> id}}/edit">Modifier</a>
        <form action="/listusers/{{$user -> id}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit">Supprimer</button>
            {{-- <a href="/listusers/{{$user -> id}}">Supprimer</a> --}}
        </form>


    </li>
    @endforeach
</ul>


