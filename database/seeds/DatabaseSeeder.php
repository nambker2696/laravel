<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
class UsersTableInsert extends Seeder
{
    
    public function run()
    {
        DB::table('users')->insert([
            array('name' => 'toan','password'=>Hash::make(12345),'email' => 'toan@gmail.com')
        ]); 
            
    }
}
class CategoryTableInsert extends Seeder
{
    
    public function run()
    {
        DB::table('categories')->insert([
            array('name'=>'Art, Architecture'),
            array('name'=>'Photography'),
            array('name'=>'Bibles & Bibles Studies'),
            array('name'=>'Biographies'),
            array('name'=>'Businees & Money'),
            array('name'=>'Children\'s Book'),
            array('name'=>'Computing & Internet'),
            array('name'=>'Cookbooks, Food & Wine'),
            array('name'=>'Craft & Hobbies'),
            array('name'=>'Dies & Hearth'),
            array('name'=>'Education & Teaching'),
            array('name'=>'Fiction & Literature'),
            array('name'=>'Graphic Novels'),
            array('name'=>'History'),
            array('name'=>'Home & Garden'),
            array('name'=>'Humor'),
            array('name'=>'Libros en espacol'),
            array('name'=>'Medicine'),
            array('name'=>'Mystery & Crime'),
            array('name'=>'Nonfiction'),
            array('name'=>'Politics & Current Events'),
            array('name'=>'Psychology')
            ]);
    }   
}
class ProductTableInsert extends Seeder
{   
    public function run()
    {
        DB::table('products')->insert([
            array('name'=>'Harry Potter and the Chamber of Secrets','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 1, 'image_link' =>'bi_pr_01.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
            array('name'=>'The Chronicles of Narnia','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 1, 'image_link' =>'bi_pr_02.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
            array('name'=>'The Mayor\'s Tongue by Nathaniel Rich','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 1, 'image_link' =>'bi_pr_03.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
            array('name'=>'The Divine Comedy by Dante','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 2, 'image_link' =>'bi_pr_03.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
            array('name'=>'Seven Novels by Jules Verne','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 2, 'image_link' =>'bi_pr_04.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
            array('name'=>'Seven Novels','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 2, 'image_link' =>'bi_pr_05.jpg', 'description' => 'And you know what? Books always have some notes of mysticism. Just remember that special atmosphere of solitude in the library or in the old book-store, it seemed that imponderable scent of rational identity is in the air... The unique smell of old and new pages, soft cover and so on. Yeah, they are worth our admiring. On-line book stores can offer you a great assortment of books.', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
            array('name'=>'Sin City','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 3, 'image_link' =>'bi_pr_06.jpg', 'description' => 'The unique smell of old and new pages, soft cover and so on. Yeah, they are worth our admiring. But those times are long gone and we live in 21 century and the most revolutionary thing that had happened is that books have lost their natural view. Books became more available. On-line book stores can offer you a great assortment of books. Can you imagine a world of knowledge without limits?', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
            array('name'=>'The Circle Series','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 3, 'image_link' =>'bi_pr_07.jpg', 'description' => 'But those times are long gone and we live in 21 century and the most revolutionary thing that had happened is that books have lost their natural view. Books became more available. On-line book stores can offer you a great assortment of books. Can you imagine a world of knowledge without limits? You can get everything you want and all you have to do is just visit our store.', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),      
            array('name'=>'Rising Stars Compendium','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 3, 'image_link' =>'bi_pr_08.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'featured'),
            array('name'=>'Outliers by Malcolm Gladwell','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 4, 'image_link' =>'bi_pr_09.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'featured'),
            array('name'=>'Harry Potter and the Sorcerer\'s Stone','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 4, 'image_link' =>'bi_pr_10.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'featured'),
            array('name'=>'Harry Potter and the Prizoner of Azkaban','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 4, 'image_link' =>'bi_pr_11.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'featured'),
            array('name'=>'Harry Potter And The Deathly Hallows','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 5, 'image_link' =>'bi_pr_12.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'featured'),
            array('name'=>'20,000 Leagues Under the Sea','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 5, 'image_link' =>'bi_pr_13.jpg', 'description' => 'Books became more available. On-line book stores can offer you a great assortment of books. Can you imagine a world of knowledge without limits? You can get everything you want and all you have to do is just visit our store. We have tremendous variety of products, here you can find the world famous bestsellers and the books of unknown authors. Yeah, they are worth our admiring.', 'price'=> 100000, 'quantity'=>50, 'status'=>'true')
            ]);
        
    }   
}

class ImageTableInsert extends Seeder
{   
    public function run()
    {
        DB::table('images')->insert([           
            array('link' => 'http:/image/04-1-large.jpg','product_id'=>1),
            array('link' => '04-2-large.jpg','product_id'=>1),
            array('link' => '04-3-large.jpg','product_id'=>1),
            array('link' => '04-1-medium.jpg','product_id'=>1),
            array('link' => '04-2-medium.jpg','product_id'=>1),
            array('link' => '04-3-medium.jpg','product_id'=>1),

            array('link' => '05-1-large.jpg','product_id'=>2),
            array('link' => '05-2-large.jpg','product_id'=>2),
            array('link' => '05-3-large.jpg','product_id'=>2),
            array('link' => '05-1-medium.jpg','product_id'=>2),
            array('link' => '05-2-medium.jpg','product_id'=>2),
            array('link' => '05-3-medium.jpg','product_id'=>2),

            array('link' => '06-1-large.jpg','product_id'=>3),
            array('link' => '06-2-large.jpg','product_id'=>3),
            array('link' => '06-3-large.jpg','product_id'=>3),
            array('link' => '06-1-medium.jpg','product_id'=>3),
            array('link' => '06-2-medium.jpg','product_id'=>3),
            array('link' => '06-3-medium.jpg','product_id'=>3),

            array('link' => '07-1-large.jpg','product_id'=>4),
            array('link' => '07-2-large.jpg','product_id'=>4),
            array('link' => '07-3-large.jpg','product_id'=>4),
            array('link' => '07-1-medium.jpg','product_id'=>4),
            array('link' => '07-2-medium.jpg','product_id'=>4),
            array('link' => '07-3-medium.jpg','product_id'=>4),

            array('link' => '08-1-large.jpg','product_id'=>5),
            array('link' => '08-2-large.jpg','product_id'=>5),
            array('link' => '08-3-large.jpg','product_id'=>5),
            array('link' => '08-1-medium.jpg','product_id'=>5),
            array('link' => '08-2-medium.jpg','product_id'=>5),
            array('link' => '08-3-medium.jpg','product_id'=>5),
            array('link' => '09-1-large.jpg','product_id'=>6),
            array('link' => '09-2-large.jpg','product_id'=>6),
            array('link' => '09-3-large.jpg','product_id'=>6),
            array('link' => '09-1-medium.jpg','product_id'=>6),
            array('link' => '09-2-medium.jpg','product_id'=>6),
            array('link' => '09-3-medium.jpg','product_id'=>6),

            array('link' => '10-1-large.jpg','product_id'=>7),
            array('link' => '10-2-large.jpg','product_id'=>7),
            array('link' => '10-3-large.jpg','product_id'=>7),
            array('link' => '10-1-medium.jpg','product_id'=>7),
            array('link' => '10-2-medium.jpg','product_id'=>7),
            array('link' => '10-3-medium.jpg','product_id'=>7),

            array('link' => '11-1-large.jpg','product_id'=>8),
            array('link' => '11-2-large.jpg','product_id'=>8),
            array('link' => '11-3-large.jpg','product_id'=>8),
            array('link' => '11-1-medium.jpg','product_id'=>8),
            array('link' => '11-2-medium.jpg','product_id'=>8),
            array('link' => '11-3-medium.jpg','product_id'=>8),

            array('link' => '12-1-large.jpg','product_id'=>9),
            array('link' => '12-2-large.jpg','product_id'=>9),
            array('link' => '12-3-large.jpg','product_id'=>9),
            array('link' => '12-1-medium.jpg','product_id'=>9),
            array('link' => '12-2-medium.jpg','product_id'=>9),
            array('link' => '12-3-medium.jpg','product_id'=>9),

            array('link' => '13-1-large.jpg','product_id'=>10),
            array('link' => '13-2-large.jpg','product_id'=>10),
            array('link' => '13-3-large.jpg','product_id'=>10),
            array('link' => '13-1-medium.jpg','product_id'=>10),
            array('link' => '13-2-medium.jpg','product_id'=>10),
            array('link' => '13-3-medium.jpg','product_id'=>10),

            array('link' => '14-1-large.jpg','product_id'=>11),
            array('link' => '14-2-large.jpg','product_id'=>11),
            array('link' => '14-3-large.jpg','product_id'=>11),
            array('link' => '14-1-medium.jpg','product_id'=>11),
            array('link' => '14-2-medium.jpg','product_id'=>11),
            array('link' => '14-3-medium.jpg','product_id'=>11),

            array('link' => '15-1-large.jpg','product_id'=>12),
            array('link' => '15-2-large.jpg','product_id'=>12),
            array('link' => '15-3-large.jpg','product_id'=>12),
            array('link' => '15-1-medium.jpg','product_id'=>12),
            array('link' => '15-2-medium.jpg','product_id'=>12),
            array('link' => '15-3-medium.jpg','product_id'=>12),
            ]);
    }
}