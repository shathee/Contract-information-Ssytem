<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     static $password;

//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => $password ?: $password = bcrypt('secret'),
//         'remember_token' => str_random(10),
//     ];
// });
$factory->define(App\Model\Contract::class, function (Faker\Generator $faker) {
 
    return [
        'contract_type' => $faker->randomElement($array = array ('works','goods','services','physical_services')),
        // 'peoffice_id' => $faker->numberBetween($min = 76, $max = 80),
        'peoffice_id' => 77,
        'circle_id' => 22,
        'zone_id' => 9,
        'name_of_works' => $faker->text($maxNbChars = 200),
        'contract_no' => $faker->word,
        'egp_id' => $faker->numberBetween($min = 1000, $max = 9000),
        'contractors_legal_title' => $faker->sentence,
        'contractors_contact_details' => $faker->address,
        'noa_date' => $faker->date($format = 'Y-m-d', $max = 'now', $min='2017-06-09'),
        'user_id' => 12,
        'commencement_id' => $faker->randomElement($array = array ('na',NULL)),

        //'user_id' => $faker->randomElement($array = array ('12','33','10')),
        'original_contract_price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 1000000, $max = NULL)
    ];
});