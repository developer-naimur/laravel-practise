<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\Department;

class RelationshipsController extends Controller
{
    public function one_to_one_relationship(){
        $data = Book::with('author')->get()->toArray();
        dd($data);
    }

    public function one_to_many_relationship(){
        $data = Post::with('comments')->get()->toArray();
        dd($data);
    }

    public function many_to_many_relationship(){
        /*$customer = new Customer;
        $customer->name = "Hamim";
        $customer->save();

        $customer->departments()->attach([2]);*/

        $data = Customer::with('departments')->get()->toArray();
        dd($data);

        /*$data = Department::with('customers')->get()->toArray();
        dd($data);*/
    }
}
