<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$role = Role::create([
       		'name' => 'Super admin',
       		'guard_name' => 'web'
       ]); 	

       	$role = Role::create([
       		'name' => 'admin',
       		'guard_name' => 'web'
       ]);
        	
        $role = Role::create([
       		'name' => 'guru',
       		'guard_name' => 'web'
       ]);
    }
}
