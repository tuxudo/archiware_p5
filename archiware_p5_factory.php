<?php

// Database seeder
// Please visit https://github.com/fzaninotto/Faker for more options

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Archiware_p5_model::class, function (Faker\Generator $faker) {

    return [
        'license_resources' => $faker->word(),
        'archive_plan' => $faker->word(),
        'backup_plan' => $faker->word(),
        'sync_plan' => $faker->word(),
        'backup2go' => $faker->word(),
        'client' => $faker->word(),
        'thin_client' => $faker->word(),
        'virtual_client' => $faker->word(),
        'device' => $faker->word(),
        'jukebox' => $faker->word(),
        'desktop_links' => $faker->word(),
        'host_id' => $faker->word(),
        'port' => $faker->word(),
        'platform' => $faker->word(),
        'p5_version' => $faker->word(),
        'uptime' => $faker->word(),
    ];
});