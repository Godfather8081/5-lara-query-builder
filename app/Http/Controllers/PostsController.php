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


        // or where clause thi baki




        dd($res);
    }
}
