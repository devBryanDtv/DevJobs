<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;



class AdminProfileController extends Controller
{
    public function index()
    {
        $currentUserId = auth()->id();
        $users = User::where('status', 1)->where('id', '!=', $currentUserId)->get();
        return view('adminprofile.index', compact('users'));
    }

    public function create()
    {
        return view('adminprofile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'rol' => 'required|integer',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->rol = $request->rol;
        $user->save();

        return redirect()->route('adminprofile.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function show(User $adminprofile)
    {
        return view('adminprofile.show', ['user' => $adminprofile]);
    }

    public function edit(User $adminprofile)
    {
        return view('adminprofile.edit', ['user' => $adminprofile]);
    }

    public function update(Request $request, User $adminprofile)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$adminprofile->id,
            'rol' => 'required|integer',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $adminprofile->name = $request->name;
        $adminprofile->email = $request->email;
        $adminprofile->rol = $request->rol;

        if ($request->filled('password')) {
            $adminprofile->password = Hash::make($request->password);
        }

        $adminprofile->save();

        return redirect()->route('adminprofile.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy(User $adminprofile)
    {
        $adminprofile->status = 0; // Actualizar el estado a inactivo
        $adminprofile->save();

        return redirect()->route('adminprofile.index')->with('success', 'Usuario desactivado exitosamente.');
    }

    
}
