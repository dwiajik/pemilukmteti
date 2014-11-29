<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    if(Session::get('logged_in') == 'yes')
    {
        return View::make('login');
    }
    else
    {
	   return View::make('auth');
    }
});

Route::post('/login', function()
{
    if(Input::get('authcode') == "pemilukmteti")
    {
        Session::put('logged_in', 'yes');
        return View::make('login');
    }
    else
    {
        return 'wrong passcode<br> <button onclick="goBack()">Go Back</button>

                <script>
                function goBack() {
                    window.history.back()
                }
                </script>';
    }
});

Route::get('/login', function()
{
	echo "You have no permission.";
});

Route::post('/vote', function()
{
    $nim = Input::get('nim');
    $password = Input::get('password');
    
    if (Auth::attempt(array('nim' => $nim, 'password' => $password)))
    {
        return Redirect::intended('vote');
    }
    else if ($nim == 'admin' && $password == 'pemilukmteti')
    {
        return View::make('admin');
    }
});

Route::get('/vote', array('before' => 'auth', function()
{
    if(Auth::check())
    {
    return View::make('vote');
    }
}));

Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to('/');
});

Route::get('/generatePassword', function()
{
    $pemilihTable = User::get();
    
    foreach($pemilihTable as $pemilih)
    {
        $pemilih->nim = substr($pemilih->nim, -5);
        $pemilih->save();
    }
    
    foreach($pemilihTable as $pemilih)
    {
        $pemilih->psswd = md5($pemilih->nim);
        $pemilih->save();
    }
    
    $pemilihTable = User::get();
    
    foreach($pemilihTable as $pemilih)
    {
        $pemilih->password = Hash::make($pemilih->psswd);
        $pemilih->save();
    }
    return 'success';
    return substr($pemilih->nim, -5);
});

Route::post('/voteCalon', function()
{
    if(Auth::check())
    {
        $nomorCalon = Input::get('nomorCalon');
        $calon = Calon::find($nomorCalon);
        $calon->suara = $calon->suara + 1;
        $calon->save();
        return Redirect::to('/logout');
    }
});

//Route::get('/admin', function()
//           {
//               return View::make('admin');
//           }
//          );

Route::get('/endSession', function()
{
    Session::forget('logged_in');
    return View::make('auth');
});