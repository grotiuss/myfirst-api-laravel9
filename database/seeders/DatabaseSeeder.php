<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Science',
            'slug' => 'science'
        ]);

        Blog::create([
            'title' => 'First Note',
            'category_id' => 1,
            'slug' => 'first-note',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia libero repellat voluptatem possimus. Sint, atque modi tenetur, quis ratione fugit fuga, vero alias labore cupiditate obcaecati quibusdam id. Accusantium commodi explicabo, modi voluptas sint itaque vel quo sapiente suscipit quisquam saepe magni voluptates porro maiores, ducimus hic necessitatibus eius voluptatibus nobis. Sit, voluptatibus? Similique magnam doloribus ipsum neque eligendi facere molestias. Quasi aliquid voluptate praesentium expedita, rem rerum iste laborum dignissimos est odio molestiae ipsam dicta a ipsum? Fugiat distinctio accusamus ullam modi quas tempore quam dolorem neque iure! Quos, fugiat nisi! Fugit eius iste maxime, eum inventore veritatis ullam.'
        ]);

        Blog::create([
            'title' => 'Second Note',
            'category_id' => 2,
            'slug' => 'second-note',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia libero repellat voluptatem possimus. Sint, atque modi tenetur, quis ratione fugit fuga, vero alias labore cupiditate obcaecati quibusdam id. Accusantium commodi explicabo, modi voluptas sint itaque vel quo sapiente suscipit quisquam saepe magni voluptates porro maiores, ducimus hic necessitatibus eius voluptatibus nobis. Sit, voluptatibus? Similique magnam doloribus ipsum neque eligendi facere molestias. Quasi aliquid voluptate praesentium expedita, rem rerum iste laborum dignissimos est odio molestiae ipsam dicta a ipsum? Fugiat distinctio accusamus ullam modi quas tempore quam dolorem neque iure! Quos, fugiat nisi! Fugit eius iste maxime, eum inventore veritatis ullam.'
        ]);

        Blog::create([
            'title' => 'Third Note',
            'category_id' => 3,
            'slug' => 'third-note',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia libero repellat voluptatem possimus. Sint, atque modi tenetur, quis ratione fugit fuga, vero alias labore cupiditate obcaecati quibusdam id. Accusantium commodi explicabo, modi voluptas sint itaque vel quo sapiente suscipit quisquam saepe magni voluptates porro maiores, ducimus hic necessitatibus eius voluptatibus nobis. Sit, voluptatibus? Similique magnam doloribus ipsum neque eligendi facere molestias. Quasi aliquid voluptate praesentium expedita, rem rerum iste laborum dignissimos est odio molestiae ipsam dicta a ipsum? Fugiat distinctio accusamus ullam modi quas tempore quam dolorem neque iure! Quos, fugiat nisi! Fugit eius iste maxime, eum inventore veritatis ullam.'
        ]);

        Blog::create([
            'title' => 'Fourth Note',
            'category_id' => 2,
            'slug' => 'fourth-note',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia libero repellat voluptatem possimus. Sint, atque modi tenetur, quis ratione fugit fuga, vero alias labore cupiditate obcaecati quibusdam id. Accusantium commodi explicabo, modi voluptas sint itaque vel quo sapiente suscipit quisquam saepe magni voluptates porro maiores, ducimus hic necessitatibus eius voluptatibus nobis. Sit, voluptatibus? Similique magnam doloribus ipsum neque eligendi facere molestias. Quasi aliquid voluptate praesentium expedita, rem rerum iste laborum dignissimos est odio molestiae ipsam dicta a ipsum? Fugiat distinctio accusamus ullam modi quas tempore quam dolorem neque iure! Quos, fugiat nisi! Fugit eius iste maxime, eum inventore veritatis ullam.'
        ]);

        Blog::create([
            'title' => 'Fifth Note',
            'category_id' => 1,
            'slug' => 'fifth-note',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia libero repellat voluptatem possimus. Sint, atque modi tenetur, quis ratione fugit fuga, vero alias labore cupiditate obcaecati quibusdam id. Accusantium commodi explicabo, modi voluptas sint itaque vel quo sapiente suscipit quisquam saepe magni voluptates porro maiores, ducimus hic necessitatibus eius voluptatibus nobis. Sit, voluptatibus? Similique magnam doloribus ipsum neque eligendi facere molestias. Quasi aliquid voluptate praesentium expedita, rem rerum iste laborum dignissimos est odio molestiae ipsam dicta a ipsum? Fugiat distinctio accusamus ullam modi quas tempore quam dolorem neque iure! Quos, fugiat nisi! Fugit eius iste maxime, eum inventore veritatis ullam.'
        ]);

        Blog::create([
            'title' => 'Sixth Note',
            'category_id' => 1,
            'slug' => 'sixth-note',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia libero repellat voluptatem possimus. Sint, atque modi tenetur, quis ratione fugit fuga, vero alias labore cupiditate obcaecati quibusdam id. Accusantium commodi explicabo, modi voluptas sint itaque vel quo sapiente suscipit quisquam saepe magni voluptates porro maiores, ducimus hic necessitatibus eius voluptatibus nobis. Sit, voluptatibus? Similique magnam doloribus ipsum neque eligendi facere molestias. Quasi aliquid voluptate praesentium expedita, rem rerum iste laborum dignissimos est odio molestiae ipsam dicta a ipsum? Fugiat distinctio accusamus ullam modi quas tempore quam dolorem neque iure! Quos, fugiat nisi! Fugit eius iste maxime, eum inventore veritatis ullam.'
        ]);

    }
}
