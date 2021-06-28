<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //

    public function one()
    {

        // this examples are basic and contain most use full methods only
        // for more info visit https://laravel.com/docs/8.x/queries





        // $res = DB::table('post')->get();

        // notice difference between this 2 queries in where if we just want = operator we can 
        // skip = parameter and use direct value
        // and even we have one value for first query we will get it in saprate json object
        // we have to use first to tell laravel that we want just one data then in directly give 
        // it instade of extra json nesting
        // $res = DB::table('post')->where('title', 'first post')->get();
        // $res = DB::table('post')->where('title', '=', 'first post')->get()->first();

        // retrieving single value 
        // in 2 line it is also possible that where return multiple data at that time value
        // function will get first records data only
        // $res = DB::table('post')->get()->first()->title;
        // $res =  DB::table('post')->where('id', 1)->value('title');

        // find is spacle method use to find record base on id of record it return null in not found
        // $res = DB::table('post')->find(2);

        // $res = DB::table('post')->pluck('title');
        // this will return key value pair where both params need to present in table
        // $res = DB::table('post')->pluck('title', 'content');

        // $res = DB::table('post')->orderBy('id', 'desc')->get();
        // multiple orderby
        // $res = DB::table('post')->orderBy('id', 'desc')->orderBy('likes', 'asc')->get();

        // aggregate
        // $res = DB::table('post')->count();
        // $res = DB::table('post')->max('likes');
        // $res = DB::table('post')->min('likes');
        // $res = DB::table('post')->sum('likes');
        // $res = DB::table('post')->avg('likes');

        // check if record exist exist
        // $res = DB::table('post')->where('id', 5)->exists();
        // $res = DB::table('post')->where('title', 'the title')->doesntExist();

        // $res = DB::table('post')->select('id as post_id', 'title')->get();


        // we will pectic joins after elequent so we can define relations in model

        // $one = DB::table('post')->select('title');

        // $res = DB::table('post')->select('content')->union($one)->get();


        // basic where clauses
        // $res = DB::table('post')
        //     ->where('likes', '>', 5)
        //     ->where('title', 'first')
        //     ->get();

        // $res = DB::table('post')
        //     ->where('likes', "<>", 5)
        //     ->get();

        // $res = DB::table('post')
        //     ->where([
        //         ['likes', '>', 5],
        //         ['title', '=', 'first']
        //     ])
        //     ->get();


        // $res = DB::table('post')->whereBetween('likes', [5, 11])->get();

        // $res = DB::table('post')->whereIn('likes', [5, 9])->get();

        // where colum method use to work with 2 colum of row 
        // hear it will check where likes  = id of same rows value
        // $res = DB::table('post')->whereColumn('likes', 'id')->get();
        // $res = DB::table('post')->whereColumn('likes', '>', 'id')->get();

        // logical grouping 
        // visit to https://laravel.com/docs/8.x/queries#logical-grouping for more info 
        // in logical grouping
        // also see Advanced Where Clauses
        // $res = DB::table('post')
        //     ->where('title', 'first')
        //     ->orWhere(function ($q) {
        //         $q->where('likes', '>', 6)
        //             ->orWhere('id', 4);
        //     })->get();


        // also see latest and oldest methods



        // when is use when you want to execute difrent queries base on condations
        // first param is boolean 
        // seccond in callback when first is true and third is default call back (when 1 param is false)
        // $tmp = 'id';

        // $res = DB::table('post')
        //     ->when($tmp == 'id', function ($q) {
        //         $q->orderBy('id', 'desc');
        //     })->get();

        // $res = DB::table('post')
        //     ->when($tmp == 'id', function ($q) {
        //         $q->orderBy('id', 'desc');
        //     }, function ($q) {
        //         $q->orderBy('likes', 'asc');
        //     })->get();


        // insert
        // $res = DB::table('post')->insert([
        //     'title' => 'fifth',
        //     'content' => 'ghkj hsdkja ',
        //     'likes' => '6'
        // ]);

        // check insert method for multiple records same time and 
        // insertOrIgnore, insertGetId, upsert methods


        // $res = DB::table('post')->where('id', 2)->update([
        //     'title' => 'second updated',
        //     'content' => 'sdlhjafuik dfshdsu'
        // ]);
        // check updateOrInsert , Updating JSON Columns , Increment & Decrement as well

        $res = DB::table('post')->where('id', 6)->delete();














        dd($res);
    }
}
