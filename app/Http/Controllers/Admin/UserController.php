<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Illuminate\Validation\Rules;
use Endroid\QrCode\QrCode;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('profile')->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = new User();
        return view('admin.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $image = $request->file('image');
        if ($request->hasFile('image')) {

        }
        $user->profile()->create([
            'country' => $request->country,
            'city' => $request->city,
            'birthdate' => $request->birthdate,
            'image' => $image_url = $image->store('users', 'public')
        ]);
        return redirect()->route('admin.users.index')
            ->with('success', 'User Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $profile = UserProfile::where('user_id', $id)->first();
        $user = User::findOrFail($id);
//        $request->validate([
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
//            'password' => ['required', 'confirmed', Rules\Password::defaults()],
//            'country' => ['required', 'string', 'max:255'],
//
//        ]);max
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);


        if ($profile) {
            $profile->update([
                'country' => $request->country,
                'city' => $request->city,
                'birthdate' => $request->birthdate,

            ]);
            if ($request->hasFile('image')) {
                if ($profile->image) {
                    Storage::disk('public')->delete($user->image);
                }
                $image = $request->file('image');
                $image_url = $image->store('users', 'public');
                $profile->update([
                    'image' => $image_url,
                ]);
            }
        } else {
            UserProfile::create([
                'country' => $request->country,
                'city' => $request->city,
                'birthdate' => $request->birthdate,
                'user_id' => $id,
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_url = $image->store('users', 'public');
                $profile->image = $image_url;
            }
        }
        return redirect()->route('admin.users.index')
            ->with('success', 'User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if (isset($user->image)) {
            Storage::disk('public')->delete($user->image);
        }
        $user->delete();
        return redirect()->route('admin.users.index')
            ->with('success', 'User Deleted Successfully');
    }

    public function updateStatus(Request $request, User $user)
    {
        // Toggle the user's status
        $newStatus = $user->status === 'active' ? 'inactive' : 'active';
        $user->status = $newStatus;
        $user->save();

        return redirect()->back()->with('success', 'User status updated successfully');
    }
    public function generateQRCode($id)
    {
        $user = User::findOrFail($id);

        $profileUrl = route('admin.users.show', $user->id);
        $qrCodeImageUrl = 'https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=' . urlencode($profileUrl);
        return view('qrcode', compact('user', 'qrCodeImageUrl'));
    }
}
