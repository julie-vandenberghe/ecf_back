<?php


namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Matelas;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Matelas::factory(4)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Matelas::factory()->create([
            'name' => 'Matelas Confort+',
            'brand' => 'EPEDA',
            'size' => '90x190',
            'image' => 'https://cdn.laredoute.com/products/7/5/6/7564fcca940d6755f6c057a24d335891.jpg?width=1200&dpr=1',
            'price' => '759.00',
            'discount_price' => '529.00',
        ]);

        Matelas::factory()->create([
            'name' => 'Matelas Assurance',
            'brand' => 'DREAMWAY',
            'size' => '90x190',
            'image' => 'https://cdn.laredoute.com/products/5/1/7/517d0a25c5439c7a7626a9d4d25e3e33.jpg?width=1200&dpr=1',
            'price' => '809.00',
            'discount_price' => '709.00',
        ]);

        Matelas::factory()->create([
            'name' => 'Matelas Essentiel',
            'brand' => 'BULTEX',
            'size' => '140x190',
            'image' => 'https://cdn.laredoute.com/products/3/4/7/347fb06cc24d280c51b2050c04439136.jpg?width=1200&dpr=1',
            'price' => '759.00',
            'discount_price' => '529.00',
        ]);

        Matelas::factory()->create([
            'name' => 'Matelas Prestige',
            'brand' => 'EPEDA',
            'size' => '160x200',
            'image' => 'https://media.literieprivee.com/904-large_default/matelas-memoire-de-forme-bultex-body-up-160x200.jpg',
            'price' => '1019.00',
            'discount_price' => '0',
        ]);
    }
}
