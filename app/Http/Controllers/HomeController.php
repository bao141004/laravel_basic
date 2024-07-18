<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        // DB::table('users')->insert([
        //     [
        //         'name' => "Vũ Văn A",
        //         'email' => "bao@gmail.com",
        //         'password' => bcrypt(12345678)
        //     ],
        //     [
        //         'name' => "Vũ Văn B",
        //         'email' => "bao2@gmail.com",
        //         'password' => bcrypt(12345678)
        //     ],
        //     [
        //         'name' => "Vũ Văn C",
        //         'email' => "bao3@gmail.com",
        //         'password' => bcrypt(12345678)
        //     ],
        // ]);die;

        // DB::table('users')->where('email' , 'bao3@gmail.com')->delete();
        // User::query()->where('email' , 'bao2@gmail.com')->delete();
        // User::query()->create( // cái này bổ sung thêm ngày thêm ngày sửa ngon hơn query 
        //     [
        //         'name'=>'a',
        //         'email'=>'a@gmal.com',
        //         'password'=> bcrypt(121331),
        //     ]);
        // User::insert([
        //     [
        //                 'name' => "Vũ Văn E",
        //                 'email' => "bsao@gmail.com",
        //                 'password' => bcrypt(12345678)
        //             ],
        //             [
        //                 'name' => "Vũ Văn F",
        //                 'email' => "baso2@gmail.com",
        //                 'password' => bcrypt(12345678)
        //             ],
        //             [
        //                 'name' => "Vũ Văn G",
        //                 'email' => "ba2o3@gmail.com",
        //                 'password' => bcrypt(12345678)
        //             ],
        //         ]);die;



        // $data1= DB::table('users')->where('id','>','2')->get();
        // $data1= DB::table('users')->where('id','1')->update(['name'=>'haihaih']);die;
        // DB::table('users')->where(
        //     ['id',7],
        //     ['name','<>','assa']
        // )->orWhere('name','<>','dada')
        // ->ddRawSql();
        
        DB::table('users')->join('comments', 'comments.user_id', '=', 'users.id')
        ->ddRawSql();



        // foreach($data1 as $item){
        //     echo "DATA 1" . $item->name;
        // }

        // User::query()->where('id','1')->update(['name'=>'hehehe']);die;

        // foreach($data2 as $item){
        //     echo "DATA 2" . $item->name;
        // }
        // die;

        // dd($data1,$data2);

        $user = User::query()->get();
        return view('welcome', [
            'users' => $user
        ]);
    }
}
