<?php

class StudentsCollectionSeeder extends Seeder {

    public function run()
    {
        Student::create([
            'code' => '200611132052',
            'password' => Hash::make('123456'),
            'name' => 'Şakir',
            'surname' => 'Şensoy'
        ]);

        Student::create([
            'code' => '201212345678',
            'password' => Hash::make('123456'),
            'name' => 'Demo',
            'surname' => 'Demo'
        ]);
    }

}
