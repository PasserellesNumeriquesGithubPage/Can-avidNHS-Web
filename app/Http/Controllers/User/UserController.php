<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //These is the Controller to Get all data from Database Except it's Own Data
    public function GetData()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $profiles = Profile::where('id', '<>', $user->profile->id)->get();
            return view('dashboard.user.admin.admin_tables.user_table', compact('profiles'));
        } else {
            return redirect()->route('user.login');
        }
    }
    // Login
    public function Check_User(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|max:30'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('user.home');
        } else {
            return redirect()->route('user.login')->with('fail', 'Incorrect Credentials');
        }
    }
    //To Create User
    public function CreateUser(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'age' => 'required|integer|min:18',
            'gender' => 'required|in:Male,Female',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if (!$validate) {
            return redirect()->back()->with('fail', 'Unable to Create User!');
        }
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make('12345678');
        $user->role = $request->input('role');
        $user->save();
        $profile = new Profile();
        $profile->age = $request->input('age');
        $profile->gender = $request->input('gender');
        $profile->position = $request->input('position');
        $profile->department = $request->input('department');
        $profile->phone_number = $request->input('phone_number');
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('images/profile_pictures', 'public');
            $profile->images = $picturePath;
        }
        $profile->user_id = $user->id;
        $user->profile()->save($profile);
        return redirect()->back()->with('success', 'Form submitted successfully.');
    }
    //Get Specific User
    public function GetUser($id)
    {
        if (Auth::check()) {
            $user = User::with('profile')->find($id);
            dd($user);
            return view('dashboard.user.admin.admin_tables.user_table', compact('user'));
        } else {
            return redirect()->route('user.login');
        }
    }
    //To EDIT User
    public function updateUser(Request $request)
    {
        $validate = $request->validate([
            'age' => 'required|integer|min:18',
            'gender' => 'required|in:Male,Female',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
        ]);
        if (!$validate) {
            return redirect()->back()->with('fail', 'Unable to Update User!');
        }
        $findUser = Profile::find($request->input('id'));
        if (!$findUser) {
            return redirect()->route('user.home')->with('fail', 'User not found!');
        }
        $findUser->user()->update([
            'name' => $findUser->user->name,
            'email' => $findUser->user->email,
            'role' => $validate['role']
        ]);
        $findUser->update([
            'age' => $validate['age'],
            'gender' => $validate['gender'],
            'position' => $validate['position'],
            'department' => $validate['department'],
            'phone_number' => $validate['phone_number'],
        ]);
        return redirect()->back()->with('success', 'User updated successfully.');
    }
    //To Delete User
    public function deleteUser(Request $request, $id)
    {
        $validate = $request->validate([
            'id' => 'required',
            'imagesURL' => 'required'
        ]);
        // Get the image filename or identifier you want to delete
        $imageFilename = $validate;
        // Determine the storage path of the image
        $storagePath = 'public/images/' . $imageFilename;

        // Delete the image file
        Storage::delete($storagePath);
        $user = User::find($validate['id']);
        $profile = Profile::find($validate['id']);
        if ($user && $profile) {
            // Perform the deletion
            $user->delete();
            $profile->delete();
            return redirect()->back()->with('success', 'User deleted successfully!');
        }
        return redirect()->back()->with('fail', 'Failed to delete the user.');
    }
}
