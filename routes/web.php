<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Home', [
            'frameworks' => ['laravel', 'vue'],
        ]);
    });

    Route::get('/users', function () {
        return Inertia::render('Users/Index', [
            'time' => now()->toTimeString(),
            'users' => User::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'can' => [
                        'edit' => Auth::user()->can('edit', $user),
                    ]
                ]),
            'filters' => Request::only(['search']),
            'can' => [
                'create' => Auth::user()->can('create', User::class)
            ]
        ]);
    });

    Route::get('/users/create', function () {
        return Inertia::render('Users/Create');
    })->can('create', User::class);

    Route::post('users', function () {
        $attributes = Request::validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        User::create($attributes);
        return redirect('/users');
    });

    Route::get('/settings', function () {
        return Inertia::render('Settings', []);
    });

    Route::post('/logout', function () {
        dd('logging out!');
    });


    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});

require __DIR__ . '/auth.php';
