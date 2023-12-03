<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\UserClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class registeredUserClient extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    
        

                  
        public function create()
        {
            return view('client.registerClient');
        }

                  
        public function loginClient()
        {
            return view('client.login');
        }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
     {
        $request->validate([
                 'nom' => ['required', 'string', 'max:255'],
                 'prenom' => ['required', 'string', 'max:255'],
                 'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
                 'password' => ['required', 'confirmed'],
                 'telephone' => ['required', 'numeric'], 
             ]);
            //  dd($request);
    
             $user = Client::create([
                 'nom' => $request->nom,
                 'prenom' => $request->prenom,
                 'email' => $request->email,
             'password' => Hash::make($request->password),
               'telephone' => $request->telephone,    
           ]);
           Auth::guard('admin')->login($user);
           return redirect()->route('dashboard');
    //         // event(new Registered($user));
    
    //         // Auth::login($user);
    
    //         // return redirect(RouteServiceProvider::HOME);
       }
  public function connexionClient (LoginRequest $request)
       {
        
         $credentials = $request->validated();
        
          if(Auth::guard('admin')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('evenements_listage'));
          
    
          }
          return redirect()->back()->withErrors([
             'email'=>'Email invalid'
           ])->onlyInput('email');
        }
        








          

    //             $request->authenticate();
        
    //             $request->session()->regenerate();
        
    //             return redirect()->intended(RouteServiceProvider::HOME);
    








    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
