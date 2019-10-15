<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        $petugasRole = new Role();
        $petugasRole->name = "petugas";
        $petugasRole->display_name = "Petugas";
        $petugasRole->save();


        $petugas = new User();
        $petugas->name = "Petugas";
        $petugas->email = "petugas@gmail.com";
        $petugas->password = bcrypt('rahasiaa');
        $petugas->save();
        $petugas->attachRole($petugasRole);

        $admin = new User();
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('rahasiaa');
        $admin->save();
        $admin->attachRole($adminRole);

        $member = new User();
        $member->name = "Sample Member";
        $member->email = "member@gmail.com";
        $member->password = bcrypt('rahasiaa');
        $member->save();
        $member->attachRole($memberRole);
    }
}