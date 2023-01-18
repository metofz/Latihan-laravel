<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Reza Fazriansyah',
        //     'email' => 'rezafazriansyah18@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Aprillia Alifa',
        //     'email' => 'aprillia21@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium eius nihil aperiam.',
        //     'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium eius nihil aperiam. Vel atque, fugit voluptas doloribus consectetur quod? Ullam laboriosam aut dignissimos laudantium esse, quidem veritatis tempore, odio, beatae ducimus consequuntur cupiditate. A officia voluptas tempore. Itaque amet inventore voluptatum, magni enim iusto voluptatibus minus sequi? Eius, et blanditiis. Est explicabo atque blanditiis error quisquam, itaque eos quam. Libero, et. Architecto delectus rerum praesentium. Libero ea ut a explicabo dolores architecto nam, dicta magni iste perferendis dignissimos commodi minus nemo voluptates quos soluta reprehenderit provident id cum, quisquam vel obcaecati. Sed et repellat, at facilis ducimus tenetur sunt ex quam, dolorum corporis perferendis! Labore mollitia unde et voluptas!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium eius nihil aperiam.',
        //     'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium eius nihil aperiam. Vel atque, fugit voluptas doloribus consectetur quod? Ullam laboriosam aut dignissimos laudantium esse, quidem veritatis tempore, odio, beatae ducimus consequuntur cupiditate. A officia voluptas tempore. Itaque amet inventore voluptatum, magni enim iusto voluptatibus minus sequi? Eius, et blanditiis. Est explicabo atque blanditiis error quisquam, itaque eos quam. Libero, et. Architecto delectus rerum praesentium. Libero ea ut a explicabo dolores architecto nam, dicta magni iste perferendis dignissimos commodi minus nemo voluptates quos soluta reprehenderit provident id cum, quisquam vel obcaecati. Sed et repellat, at facilis ducimus tenetur sunt ex quam, dolorum corporis perferendis! Labore mollitia unde et voluptas!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium eius nihil aperiam.',
        //     'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium eius nihil aperiam. Vel atque, fugit voluptas doloribus consectetur quod? Ullam laboriosam aut dignissimos laudantium esse, quidem veritatis tempore, odio, beatae ducimus consequuntur cupiditate. A officia voluptas tempore. Itaque amet inventore voluptatum, magni enim iusto voluptatibus minus sequi? Eius, et blanditiis. Est explicabo atque blanditiis error quisquam, itaque eos quam. Libero, et. Architecto delectus rerum praesentium. Libero ea ut a explicabo dolores architecto nam, dicta magni iste perferendis dignissimos commodi minus nemo voluptates quos soluta reprehenderit provident id cum, quisquam vel obcaecati. Sed et repellat, at facilis ducimus tenetur sunt ex quam, dolorum corporis perferendis! Labore mollitia unde et voluptas!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium eius nihil aperiam.',
        //     'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium eius nihil aperiam. Vel atque, fugit voluptas doloribus consectetur quod? Ullam laboriosam aut dignissimos laudantium esse, quidem veritatis tempore, odio, beatae ducimus consequuntur cupiditate. A officia voluptas tempore. Itaque amet inventore voluptatum, magni enim iusto voluptatibus minus sequi? Eius, et blanditiis. Est explicabo atque blanditiis error quisquam, itaque eos quam. Libero, et. Architecto delectus rerum praesentium. Libero ea ut a explicabo dolores architecto nam, dicta magni iste perferendis dignissimos commodi minus nemo voluptates quos soluta reprehenderit provident id cum, quisquam vel obcaecati. Sed et repellat, at facilis ducimus tenetur sunt ex quam, dolorum corporis perferendis! Labore mollitia unde et voluptas!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
