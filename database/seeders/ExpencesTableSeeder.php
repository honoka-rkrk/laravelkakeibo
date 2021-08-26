<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $money=[500,4500,2000];
        $memo=['夜ごはん','服をかった','薬代'];

        foreach(range(1,3) as $num){
            DB::table('expences')->insert([
                'category_id'=>$num,
                'money'=>$num * 100,
                'memo'=>"サンプルメモ {$num}",
                'write_date'=>Carbon::now()->subDay($num),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);
        }
    }
}
