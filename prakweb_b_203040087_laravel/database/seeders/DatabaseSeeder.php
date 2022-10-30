<?php

namespace Database\Seeders;

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
        

        // User::create([
        //     'name' => 'Hamzah Hadi Permana',
        //     'email' => '203040087@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Farhan Alfauzi',
        //     'email' => '203040085@mail.unpas.ac.id',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quidem.Ipsum consectetur sapiente maxime necessitatibus eligendi perspiciatis amet tempore blanditiis at, sunt deserunt qui molestias repellendus ab nemo. Autem porro reiciendis ab tenetur! Facilis odit similique velit! Consequuntur voluptates sequi, laborum quas fugit corporis labore eos explicabo delectus eius eveniet ipsa veritatis possimus quaerat.Vel, veritatis odit suscipit, nobis laboriosam illo ab fugit temporibus dicta obcaecati minima ipsa deserunt? Eum, officia animi. Aspernatur et recusandae ex odio placeat officiis non hic aliquid impedit repudiandae iste expedita incidunt blanditiis soluta, eligendi facere veritatis necessitatibus, dolorem vel animi consequatur nisi iusto. Repellat?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua ',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quidem.Ipsum consectetur sapiente maxime necessitatibus eligendi perspiciatis amet tempore blanditiis at, sunt deserunt qui molestias repellendus ab nemo. Autem porro reiciendis ab tenetur! Facilis odit similique velit! Consequuntur voluptates sequi, laborum quas fugit corporis labore eos explicabo delectus eius eveniet ipsa veritatis possimus quaerat.Vel, veritatis odit suscipit, nobis laboriosam illo ab fugit temporibus dicta obcaecati minima ipsa deserunt? Eum, officia animi. Aspernatur et recusandae ex odio placeat officiis non hic aliquid impedit repudiandae iste expedita incidunt blanditiis soluta, eligendi facere veritatis necessitatibus, dolorem vel animi consequatur nisi iusto. Repellat?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga ',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quidem.Ipsum consectetur sapiente maxime necessitatibus eligendi perspiciatis amet tempore blanditiis at, sunt deserunt qui molestias repellendus ab nemo. Autem porro reiciendis ab tenetur! Facilis odit similique velit! Consequuntur voluptates sequi, laborum quas fugit corporis labore eos explicabo delectus eius eveniet ipsa veritatis possimus quaerat.Vel, veritatis odit suscipit, nobis laboriosam illo ab fugit temporibus dicta obcaecati minima ipsa deserunt? Eum, officia animi. Aspernatur et recusandae ex odio placeat officiis non hic aliquid impedit repudiandae iste expedita incidunt blanditiis soluta, eligendi facere veritatis necessitatibus, dolorem vel animi consequatur nisi iusto. Repellat?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat ',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quidem.Ipsum consectetur sapiente maxime necessitatibus eligendi perspiciatis amet tempore blanditiis at, sunt deserunt qui molestias repellendus ab nemo. Autem porro reiciendis ab tenetur! Facilis odit similique velit! Consequuntur voluptates sequi, laborum quas fugit corporis labore eos explicabo delectus eius eveniet ipsa veritatis possimus quaerat.Vel, veritatis odit suscipit, nobis laboriosam illo ab fugit temporibus dicta obcaecati minima ipsa deserunt? Eum, officia animi. Aspernatur et recusandae ex odio placeat officiis non hic aliquid impedit repudiandae iste expedita incidunt blanditiis soluta, eligendi facere veritatis necessitatibus, dolorem vel animi consequatur nisi iusto. Repellat?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
