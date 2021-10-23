<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $super_admin = Role::create(['name' => 'super_admin']);
        $write = Role::create(['name' => 'write']);
        Permission::create(['name' => 'drivers.index'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'drivers.edit'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'drivers.show'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'drivers.create'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'drivers.delete'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'drivers.destroy'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'cars.index'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'cars.edit'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'cars.show'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'cars.create'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'cars.destroy'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'routes.index'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'routes.edit'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'routes.show'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'routes.create'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'routes.destroy'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'user.index'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'user.edit'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'user.show'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'user.create'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'user.destroy'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'exits.update'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'exits.create'])->assignRole($admin);
        Permission::create(['name' => 'exits.softDelete'])->assignRole($admin);
        Permission::create(['name' => 'exits.show'])->assignRole($admin);
        Permission::create(['name' => 'exits.delete'])->assignRole($admin);
        Permission::create(['name' => 'citys.update'])->syncRoles([$admin, $super_admin]);
        Permission::create(['name' => 'citys.create'])->assignRole($admin);
        Permission::create(['name' => 'citys.softDelete'])->assignRole($admin);
        Permission::create(['name' => 'citys.show'])->assignRole($admin);
        Permission::create(['name' => 'citys.delete'])->assignRole($admin);
        Permission::create(['name' => 'activities.show'])->assignRole($admin);
  
    }
}
