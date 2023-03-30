<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Email;
use App\Models\Part;
use App\Models\Type;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
                 'name' => 'igor',
                 'email' => 'igor@laravel.com',
                 'password'=> Hash::make('12345678')
             ]);
        
        Type::create([
                 'name' => 'Calça',
             ]);
        Type::create([
                 'name' => 'Blusa',
             ]);
        Type::create([
                 'name' => 'Bermuda',
             ]);
        Type::create([
                 'name' => 'Conjunto',
             ]);
        Part::create([
                 'name' => 'Blusa meia manga',
                 'price' => '45.90',
                 'description' => 'Blusa feminina meia manga para ocasiões de outono. Com um estilo inovador',
                 'type_id' => '2',
                 'path' => '/img/products/img-1.jpg',
             ]);
        Part::create([
                 'name' => 'Calça Leg One WAN',
                 'price' => '56.80',
                 'description' => 'Calça leg feminina modelo ONE WAN novo estilo para o verão de 20223!',
                 'type_id' => '1',
                 'path' => '/img/products/img-2.jpg',
             ]);
        Part::create([
                 'name' => 'Blusa Mitriconlin',
                 'price' => '89.90',
                 'description' => 'Blusa Mitriconlin a ultima geração da marca fancesa Juid the Fivx.',
                 'type_id' => '2',
                 'path' => '/img/products/img-3.jpg',
             ]);
        Part::create([
                 'name' => 'Conjunto Lenix',
                 'price' => '897.86',
                 'description' => 'Esse conjunto mostra um pouco da mulher moderna e da mulher dos anos 70.',
                 'type_id' => '4',
                 'path' => '/img/products/img-4.jpg',
             ]);
        Part::create([
                 'name' => 'Calça Jeans clout',
                 'price' => '123.90',
                 'description' => 'Calça clout vem com detalhes em seu acabamento ótima para o seu dia a dia. ',
                 'type_id' => '1',
                 'path' => '/img/products/img-5.jpg',
             ]);
        Part::create([
                 'name' => 'Calça JumpJump',
                 'price' => '450.57',
                 'description' => 'Calça JumpJump foi desenvolvida pelo Alemão Jdfrist antes de sua morte. Deixando seu legado do visual da nova era.',
                 'type_id' => '2',
                 'path' => '/img/products/img-6.jpg',
             ]);
        Part::create([
                 'name' => 'Bermuda Joevile',
                 'price' => '234.78',
                 'description' => 'Bermuda para situações de verão para mulheres magras com altura de 1,89m para deixar aquela marca com aquele visual.',
                 'type_id' => '3',
                 'path' => '/img/products/img-7.jpg',
             ]);
        Part::create([
                 'name' => 'Camisa Yellow Fly',
                 'price' => '99.40',
                 'description' => 'Camisa para uso cotidiano em qualquer situação.',
                 'type_id' => '2',
                 'path' => '/img/products/img-8.jpg',
             ]);
        Part::create([
                 'name' => 'Camiseta Jock Strock',
                 'price' => '2037.90',
                 'description' => 'Camiseta unica da marca Supreme para impressionar em qualquer lugar.',
                 'type_id' => '2',
                 'path' => '/img/products/img-9.jpg',
             ]);
        Part::create([
                 'name' => 'Conjunto Moleton Nice',
                 'price' => '899.90',
                 'description' => 'Moleton nice usado pelo jogador Lebrom em seu último jogo.',
                 'type_id' => '4',
                 'path' => '/img/products/img-10.jpg',
             ]);
        Part::create([
                 'name' => 'Advu leti Cabri',
                 'price' => '10789.87',
                 'description' => 'Blusa do modelista Italiano que faz os modelos da victoria Secrets. Ele realizou esse modelo solo deixando apenas 3 peças para venda.',
                 'type_id' => '2',
                 'path' => '/img/products/img-11.jpg',
             ]);
        Part::create([
                 'name' => 'Calça Jiust Left',
                 'price' => '4589.89',
                 'description' => 'Calça unica feita apenas 5 unidades em todo mundo levando a assinatura do grande jogador Neymar Jr.',
                 'type_id' => '1',
                 'path' => '/img/products/img-12.jpg',
             ]);
        Part::create([
                 'name' => 'Bermuda Chustosk',
                 'price' => '789.23',
                 'description' => 'Bermuda Russa usada pela miss Universo 2018 na competição em 2019.',
                 'type_id' => '3',
                 'path' => '/img/products/img-13.jpg',
             ]);
        Part::create([
                 'name' => 'Bermuda Luids trevor',
                 'price' => '400.38',
                 'description' => 'Bermuda no modelo de caixa alta para elevação dos gluteos. Com o ressalto das pernas.',
                 'type_id' => '3',
                 'path' => '/img/products/img-14.jpg',
             ]);
        Part::create([
                 'name' => 'Camisa Bliond Contritos',
                 'price' => '390.90',
                 'description' => 'Foi refeita do modelo romano na epoca de Cesar 2. Para ser moda no ano de 2022 com a utilização como padrão da marca Gucci.',
                 'type_id' => '2',
                 'path' => '/img/products/img-15.jpg',
             ]);
        Email::create([
            'email'=>'mauricio@laravel.com',
        ]);
        Email::create([
            'email'=>'igor@laravel.com',
        ]);
        Email::create([
            'email'=>'jose@gmail.com',
        ]);
        Email::create([
            'email'=>'maria.trindade@gmail.com',
        ]);
        
    }
}
