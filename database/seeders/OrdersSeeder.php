<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;
use App\Models\Item;

class OrdersSeeder extends Seeder
{
    protected $userOrderCount;

    public function __construct($userOrderCount = 3)
    {
        $this->userOrderCount = $userOrderCount;
    }

    public function run(): void
    {

        $user1 = User::create(['name' => fake()->name()]);
        $user2 = User::create(['name' => fake()->name()]);

        Cart::create(['user_id' => $user1->id]);
        Cart::create(['user_id' => $user2->id]);

        $users = User::all();

        foreach ($users as $user) {
            for ($i = 1; $i <= $this->userOrderCount; $i++) {
                $order = Order::create(['user_id' => $user->id]);

                Item::create(['name' => "Item 1 for Order $i", 'order_id' => $order->id]);
                Item::create(['name' => "Item 2 for Order $i", 'order_id' => $order->id]);
            }
        }
    }
}
