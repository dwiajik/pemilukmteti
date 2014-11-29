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
	return View::make('auth');
});

Route::post('/login', function()
{
    if(Input::get('authcode') == "pemilukmteti")
    {
        return View::make('login')->with('loggedin', "1");
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

//Route::get('/login', function()
//{
//	echo "You have no permission.";
//});

Route::post('/vote', function()
{
    $nim = Input::get('nim');
    $password = Input::get('password');
    echo $nim;
    echo $password;
    echo Hash::make($password);
    if (Auth::attempt(array('nim' => $nim, 'password' => $password)))
    {
//        return Redirect::to('/dashboard');
        
//        return View::make('vote');
        return 'success';
    }
    else
    {
        return 'pecundang';
    }
});

Route::get('/generatePassword', function()
{
    $pemilihTable = User::get();
    
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
});