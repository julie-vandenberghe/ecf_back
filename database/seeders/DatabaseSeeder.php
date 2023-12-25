<?php


namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Matelas;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Création des marques de matelas
        Brand::factory()->create(['name' => 'Bultex']);
        Brand::factory()->create(['name' => 'Dorsoline']);
        Brand::factory()->create(['name' => 'Dreamway']);
        Brand::factory()->create(['name' => 'Epeda']);
        Brand::factory()->create(['name' => 'Memoryline']);

        // Création des dimensions de matelas
        Dimension::factory()->create(['name' => '90x190']);
        Dimension::factory()->create(['name' => '140x190']);
        Dimension::factory()->create(['name' => '160x200']);
        
        //La ligne ci-dessous permet de créer de fausses données avec fake
        //Matelas::factory(4)->create();

        // Création des matelas
        Matelas::factory()->create([
            'name' => 'Matelas Confort+',
            'brand_id' => 4,
            'size' => '90x190',
            'image' => 'https://cdn.laredoute.com/products/7/5/6/7564fcca940d6755f6c057a24d335891.jpg?width=1200&dpr=1',
            'price' => '759.00',
            'discount_price' => '529.00',
        ]);

        Matelas::factory()->create([
            'name' => 'Matelas Assurance',
            'brand_id' => 3,
            'size' => '90x190',
            'image' => 'https://cdn.laredoute.com/products/5/1/7/517d0a25c5439c7a7626a9d4d25e3e33.jpg?width=1200&dpr=1',
            'price' => '809.00',
            'discount_price' => '709.00',
        ]);

        Matelas::factory()->create([
            'name' => 'Matelas Essentiel',
            'brand_id' => 1,
            'size' => '140x190',
            'image' => 'https://cdn.laredoute.com/products/3/4/7/347fb06cc24d280c51b2050c04439136.jpg?width=1200&dpr=1',
            'price' => '759.00',
            'discount_price' => '529.00',
        ]);

        Matelas::factory()->create([
            'name' => 'Matelas Prestige',
            'brand_id' => 4,
            'size' => '160x200',
            'image' => 'https://media.literieprivee.com/904-large_default/matelas-memoire-de-forme-bultex-body-up-160x200.jpg',
            'price' => '1019.00',
            'discount_price' => '0',
        ]);

        Matelas::factory()->create([
            'name' => 'Matelas Confort Ultime',
            'brand_id' => 4,
            'size' => '140x190',
            'image' => 'https://cdn.laredoute.com/products/8/c/d/8cdef6938ae5f3122fdaa6c6bc5cc6dc.jpg?width=1200&dpr=1',
            'price' => '999.00',
            'discount_price' => '0',
        ]);

        Matelas::factory()->create([
            'name' => 'Matelas Tout Doux',
            'brand_id' => 1,
            'size' => '140x190',
            'image' => 'https://cdn.laredoute.com/products/7/e/0/7e09e5b8ecec28cdd0f7d85c23a064cb.jpg?width=1200&dpr=1',
            'price' => '999.00',
            'discount_price' => '0',
        ]);
    }
}
