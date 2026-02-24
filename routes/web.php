<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


// action with closure
// Route::get('/test', function () {
//     return view('welcome');
// });

Route::get('/test', [HomeController::class, 'index']);
Route::get('/', function () {

    // SELECT * FROM categories
    // $categories = DB::table('categories')->get();
    // dd(1 , $categories);
    // foreach ($categories as $category) {
    // echo $category['title'];
    // echo $category->title."<br>";
    // }
    // dd($categories->count() , sizeof($categories));

    // SELECT * FROM categories WHERE discount >= 50
    // $categories = DB::table('categories')->where('discount','>=' , 50)->get();
    // dd($categories);

    // SELECT COUNT(*) FROM categories WHERE discount >= 50
    // $categoriesC = DB::table('categories')->where('discount', '>=', 50)->count();
    // dd($categoriesC);

    // SELECT * FROM categories WHERE discount = 50
    // $categories = DB::table('categories')->where('discount','=' , 50)->get();
    // $categories = DB::table('categories')->where('discount', 50)->get();
    // dd($categories);

    // SELECT * FROM categories WHERE slug = 'abasdasdasd-quam-nisi-eum' LIMIT 1
    // $category = DB::table('categories')->where('slug' , 'abasdasdasd-quam-nisi-eum')->first();
    // $category = DB::table('categories')->where('slug' , 'abasdasdasd-quam-nisi-eum')->firstOrFail();
    // dd($category);

    // Find by PK
    // SELECT * FROM categories WHERE id = 2 LIMIT 1
    // $category = DB::table('categories')->where('id', 2)->first();
    // $category2 = DB::table('categories')->find(2);
    // dd($category, $category2);

    // SELECT * FROM categories ORDER BY discount DESC != (ASC)
    // $categories = DB::table('categories')->orderBy('discount','desc')->get()->each(function ($v) {
    //     echo $v->title."<br>";
    // });
    // dd($categories);

    // WHERE col1 = val1 AND col2 = val2
    // DB::table('categories')->where('col1','val1')->where('col2','val2')
    // DB::table('categories')->where([
    //     ['col1','val1'], // default operator : =
    //     ['col2','val2'], // default operator : =
    //     // ['col2','>=','val2'], // operator : >=
    // ]);

    // WHERE col1 >= val1 OR col2 = val2 OR col3 = val3
    // DB::table('categories')->where('col1','>=','val1')->orWhere('col2','val2')->orWhere('col3','val3')

    // WHERRE col1 = val1 AND (col2 = val2 OR col3 = val3)
    // $sql = DB::table('categories')
    // // ->select(["id","title"])
    // ->select("id","title")
    // ->where('col1','=','val1')
    // ->where(function($q) {
    //     $q->where('col2','va2')->orWhere('col3','val3');
    // })->toRawSql();
    // dd($sql);



    // DB::table('categories')->where('id', 2)->update([
    //     'discount' => 100,
    //     'discount_ends_at' => now()->addDays(10)
    // ]);

    // DB::table('categories')->where('id', 3)->delete();
});
