<?php

class AdminsCollectionSeeder extends Seeder {

    public function run()
    {
        Admin::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'name' => 'Demo',
            'surname' => 'Demo'
        ]);
    }

}
