<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Msg;

class MsgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB::table('msgs')->delete();
        // Msg::create([
        //     'title' => 'title1',
        //     'body' => 'body1',
        // ]);

        for($i=0;$i<5;$i++){
            DB::table('msgs')->insert([
                ['title' => 'title'.$i,'body' => 'body'.$i],
            ]);
        }
    }
}
