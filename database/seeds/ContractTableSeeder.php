<?php

use Illuminate\Database\Seeder;

class ContractTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Model\Contract::class, 18)->create()->each(function ($p) {
            $p->save();
        });
    }
}
