<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Role;


class UsersController extends Controller
{
        public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->userId= Auth::user()->id;
            return $next($request);
        });
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $users = User::orderBy('id')->get();

        return view('listusers',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User;
        // role_id = 2 correspond au rôle Professeur
        $user->role_id = '2';
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();



        return redirect()->action('UsersController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $authId = $this->userId;
        $roles = Role::get();
        $user = User::where('id', $id)->first();

        return view('formedituser', ['user' => $user, 'authId' => $authId, 'roles' => $roles]);
        // return view('formedituser', ['user' => $user, 'roles' => $roles]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::where('id',$id)->update(['nom'=>$request->nom,
                                        'prenom'=>$request->prenom,
                                        'phone'=>$request->phone,
                                        'email'=>$request->email,
                                        'password'=>$request->password,
                                        'role_id'=>$request->role,
                                        ]);

        return redirect()->action('UsersController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();


        return redirect()->action('UsersController@index');
    }
}
