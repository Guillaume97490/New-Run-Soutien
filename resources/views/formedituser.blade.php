<form action="/listusers/{{$user->id}}" method="POST">
    @csrf
    @method("PATCH")

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" required value="{{$user->nom}}">
        </div>

        @if ($errors->has('nom'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('nom') }}</strong>
            </span>
        @endif

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" required value="{{$user->prenom}}">
        </div>

        @if ($errors->has('prenom'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('prenom') }}</strong>
            </span>
        @endif

        <div class="form-group">
            <label for="phone">Téléphone :</label>
            <input type="text" name="phone" required value="{{$user->phone}}">
        </div>

        @if ($errors->has('phone'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('phone') }}</strong>
            </span>
        @endif

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" name="email" required value="{{$user->email}}">
        </div>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required minlength="6" value="{{$user->password}}">
        </div>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('password') }}</strong>
            </span>
        @endif

        @php
         $roleid = $user->role_id;
         $userid = $user->id;
        @endphp

        @if ($authId !== $userid)
            {{-- @if ($authId !== $userid) --}}
                <div class="form-group">
                    <label for="role"> Role : </label>
                    <select name="role" class="browser-default custom-select" style="width: 250px">
                        @foreach($roles as $role)
                            <option value="{{$role->id}}" {{($role->id == $user->role_id) ? "selected" : ""}}> {{$role->nom}}</option>
                        @endforeach
                    </select>
                </div>

                @if ($errors->has('role'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('role') }}</strong>
                    </span>
                @endif
            {{-- @endif --}}
        @endif

        @if ($authId == $userid)
                    <input type="hidden" name="role" value=<?php echo $user->role_id; ?>>
        @endif

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
