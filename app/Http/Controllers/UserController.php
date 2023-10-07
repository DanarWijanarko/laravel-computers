<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use \Illuminate\Validation\Rules\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.login');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request) : RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with([
            'type' => 'danger',
            'message' => 'Incorrect Username or Password!'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        // TO GET DOUBLE PROTECTION FOR PASSWORD CONFIRMATION
        if ($validated['password'] !== $validated['password_confirmation']) {
            return redirect('/register')->with([
                'type' => 'danger',
                'message' => 'Confirmation Password do Not Match!'
            ]);
        }
        ;

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/login')->with([
            'type' => 'success',
            'message' => 'Registration Successful.'
        ]);
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Display the specified Profile.
     */
    public function show(User $user)
    {
        return view('admin.profile.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.profile.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if (Auth::user()->profile_image) {
            $if_exists = 0;
        } else {
            $if_exists = 1;
        }

        $validated = $request->validate([
            'name' => ['required'],
            'username' => ['required', Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'address' => ['required'],
            'profile_image' => ['image',  Rule::requiredIf($if_exists), File::image()->max(1024)],
            'profile_caption' => ['required', 'max:255'],
        ]);

        if ($request->file('profile_image')) {
            if ($request->oldImg) {
                Storage::delete($request->oldImg);
            }
            $validated['profile_image'] = $request->file('profile_image')->store('profile_images');
        }

        User::where('id', $user->id)->update($validated);

        return redirect()->route('profile', ['user' => $user->username])->with([
            'type' => 'success',
            'message' => 'Account with username "' . $user->username . '" Succesfully Updated!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
