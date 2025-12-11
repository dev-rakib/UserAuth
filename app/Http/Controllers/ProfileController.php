<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile($id){
        $user = User::findorFail($id);
        return view('profile.view', compact('user'));
    }
    public function editpage($id){
        $user = User::findorFail($id);
        return view('profile.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validate input
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'required|string|max:20',

            // Optional but must be confirmed
            'password' => 'nullable|min-6|confirmed',
            'old_password' => 'required_with:password', 
        ]);

        // 🔐 If user wants to change password
        if ($request->filled('password')) {

            // 1️⃣ Check if old password matches database
            if (!Hash::check($request->old_password, $user->password)) {
                return back()->withErrors(['old_password' => 'Old password is incorrect.']);
            }

            // 2️⃣ Update with new password
            $validated['password'] = bcrypt($request->password);

        } else {
            unset($validated['password']); // Don't overwrite if empty
        }

        $user->update($validated);

        return redirect()->route('profile',Auth::id())->with('success', 'Account updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/')->with('success', 'Account deleted successfully!');
    }


}
