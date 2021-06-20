<?php

use Illuminate\Database\Seeder;

class baiviet extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_newfeed')->insert(
            [
                'tieude' => ' bai viet ',
                'baiviet' => 'dmamamadasdsadsd',
                'thoigian' => '17/2/2012',
                'img' => '',
            ]
        );
    }
    
}
