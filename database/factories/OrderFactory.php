<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        $faker = app(Faker::class);

        $pick = $faker->boolean();
        $payment = ['carte', 'mandat', 'virement', 'cheque'][mt_rand(0, 3)];

        switch ($payment) {
            case 'carte':
                $state_id = [4, 5, 6, 8, 9, 10][mt_rand(0, 5)];
                break;
            case 'mandat':
                $state_id = [2, 6, 7, 8, 9, 10][mt_rand(0, 5)];
                if ($state_id > 6) {
                    $purchaseOrder = Str::random(6);
                }
                break;
            case 'virement':
                $state_id = [3, 6, 8, 9, 10][mt_rand(0, 4)];
                break;
            case 'cheque':
                $state_id = [1, 6, 8, 9, 10][mt_rand(0, 4)];
                break;
        }

        if ($payment === 'carte' && in_array($state_id, [8, 9, 10])) {
            $invoice_id = $faker->numberBetween(10000, 90000);
            $invoice_number = Str::random(6);
        } else {
            $invoice_id = null;
            $invoice_number = null;
        }

        return [
            'reference' => strtoupper(Str::random(8)),
            'shipping' => $pick ? 0 : mt_rand(500, 1500) / 100,
            'payment' => $payment,
            'state_id' => $state_id,
            'user_id' => mt_rand(1, 20),
            'purchase_order' => $purchaseOrder ?? null,
            'pick' => $pick,
            'total' => 0,
            'tax' => [0, .2][mt_rand(0, 1)],
            'invoice_id' => $invoice_id,
            'invoice_number' => $invoice_number,
            'created_at' => $faker->dateTimeBetween('-2 years'),
        ];
    }
}
