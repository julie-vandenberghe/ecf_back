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
            'image' => 'storage/uploads/EPEDA.png',
            'price' => '759.00',
            'discount_price' => '529.00',
        ]);

        Matelas::factory()->create([
            'name' => 'Matelas Assurance',
            'brand' => 'DREAMWAY',
            'size' => '90x190',
            'image' => 'storage/uploads/EPEDA.png',
            'price' => '809.00',
            'discount_price' => '709.00',
        ]);

        Matelas::factory()->create([
            'name' => 'Matelas Essentiel',
            'brand' => 'BULTEX',
            'size' => '140x190',
            'image' => 'storage/uploads/EPEDA.png',
            'price' => '759.00',
            'discount_price' => '529.00',
        ]);

        Matelas::factory()->create([
            'name' => 'Matelas Prestige',
            'brand' => 'EPEDA',
            'size' => '160x200',
            'image' => 'storage/uploads/EPEDA.png',
            'price' => '1019.00',
            'discount_price' => '0',
        ]);
    }
}
