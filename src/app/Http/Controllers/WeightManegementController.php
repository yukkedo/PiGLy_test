<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WeightLog;
use App\Models\WeightTarget;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class WeightManegementController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $target = WeightTarget::where('user_id', $user->id)->latest()->first();
        $weight = WeightLog::where('user_id', $user->id)->latest()->first();
        $diff = $weight->weight - $target->target_weight;
        
        $logs = WeightLog::paginate(8);

        return view('admin',[
            'logs' => $logs,
            'target' => $target,
            'weight' => $weight,
            'diff' => $diff
        ]);
    }

    public function showWeight()
    {
        return view('target_weight');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        WeightTarget::create([
            'user_id' => $user->id,
            'target_weight' => $request->target_weight
        ]);

        return redirect('/weight_logs');
    }

    public function postStep1(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);

        return redirect('/register/step2');
    }

    public function showStep2()
    {
        return view('auth.first_weight');
    }

    public function postStep2(Request $request)
    {
        $user = Auth::user();

        WeightLog::create([
            'user_id' => $user->id,
            'weight' => $request->weight,
            'date' => now(),
        ]);
        WeightTarget::create([
            'user_id' => $user->id,
            'target_weight' => $request->target_weight,
        ]);

        return redirect('/weight_logs');
    }
}
