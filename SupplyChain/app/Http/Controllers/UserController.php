<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::get(); 

        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input=$request->all();
        if($file= $request->file('image'))
        {
            $directory='assets/uploads/images/';

            $name=Carbon::now()->timestamp; // getting current timestamp to create a unique image name
            $ext = $file->guessExtension(); // get extension of the image
            $name=$name.'.'.$ext;   // merging name and extension

            $file->move($directory,$name); // Moving file to given directory

            $input['image']=$name;

        }
        User::create($input);



        // echo $file->getClientOriginalName();
        // echo "<br>";
        // echo $file->getSize();

        // User::create($request->all());
        return redirect('/user');
    }

    public function saveFile(CreateUserRequest $request) {
        $md5Name = md5_file($request->file('image')->getRealPath());
        $guessExtension = $request->file('image')->guessExtension();
        $file = $request->file('image')->storeAs('image', $md5Name.'.'.$guessExtension  ,'assets/uploads/images/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::findOrFail($id);
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateUserRequest $request, $id)
    {
        $user=User::findOrFail($id);
        $user->update($request->all());
        return view('user.show',compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);

        $user->delete();

        return redirect('/user');
    }
}
