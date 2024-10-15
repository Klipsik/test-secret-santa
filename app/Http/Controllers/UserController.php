<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $results = User::with('orders.items')->get()->flatMap(function ($user) {
            return $user->orders->flatMap(function ($order) use ($user) {
                return $order->items->map(function ($item) use ($user, $order) {
                    return [
                        'user_id' => $user->id,
                        'user_name' => $user->name,
                        'order_id' => $order->id,
                        'item_id' => $item->id,
                        'item_name' => $item->name,
                        'created_at' => $order->created_at,
                    ];
                });
            });
        });

        return response()->json($results);
    }

    public function showDeleteForm()
    {
        $users = User::all();

        return view('user-delete', compact('users'));
    }

    public function destroy(Request $request)
    {
        $userId = $request->input('user_id');

        DB::transaction(fn () => User::destroy($userId));

        return redirect()->route('users.delete.user.form')->with('message', 'User deleted successfully.');
    }
}
