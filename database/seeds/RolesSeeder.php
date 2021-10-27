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
        $author = Role::create(['name' => 'author']);
        $admin  = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);

        Permission::create(['name' => 'dashboard.index'])->assignRole([$author, $admin, $editor]);
         //cars
        Permission::create(['name' => 'cars.index'])->syncRoles([$admin, $editor, $author]);
        Permission::create(['name' => 'cars.create'])->syncRoles([$admin, $editor]);
        Permission::create(['name' => 'cars.edit'])->syncRoles([$admin, $editor]);
        Permission::create(['name' => 'cars.deleteSoft'])->assignRole([$admin, $editor]);
        Permission::create(['name' => 'cars.destroy'])->assignRole($admin);
        Permission::create(['name' => 'cars.restore'])->assignRole($admin);
        Permission::create(['name' => 'cars.changeStatus'])->assignRole($admin);
        // drivers
        Permission::create(['name' => 'drivers.index'])->syncRoles([$admin, $editor, $author]);
        Permission::create(['name' => 'drivers.create'])->syncRoles([$admin, $editor]);
        Permission::create(['name' => 'drivers.edit'])->syncRoles([$admin, $editor]);
        Permission::create(['name' => 'drivers.deleteSoft'])->syncRoles([$admin, $editor]);
        Permission::create(['name' => 'drivers.destroy'])->assignRole($admin);
        Permission::create(['name' => 'drivers.onlyTrashed'])->syncRoles([$admin]);
        Permission::create(['name' => 'drivers.restore'])->syncRoles([$admin]);

        // address
        Permission::create(['name' => 'address.index'])->syncRoles([$author, $editor, $admin]);
        Permission::create(['name' => 'address.create'])->syncRoles([$admin, $editor]);
        Permission::create(['name' => 'address.edit'])->syncRoles([ $admin, $editor]);
        Permission::create(['name' => 'address.deleteSoft'])->syncRoles([ $admin, $editor]);;
        Permission::create(['name' => 'address.destroy'])->assignRole($admin);
        Permission::create(['name' => 'address.restore'])->assignRole($admin);
        Permission::create(['name' => 'address.changeStatus'])->assignRole($admin);
        Permission::create(['name' => 'address.onlyTrashed'])->syncRoles([$admin]);

        // employees
        Permission::create(['name' => 'employees.index'])->syncRoles([$editor, $admin]);
        Permission::create(['name' => 'employees.create'])->syncRoles([$admin]);
        Permission::create(['name' => 'employees.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'employees.softDelete'])->syncRoles([$admin]);
        Permission::create(['name' => 'employees.destroy'])->assignRole($admin);
        Permission::create(['name' => 'employees.onlyTrashed'])->assignRole($admin);
        Permission::create(['name' => 'employees.restore'])->assignRole($admin);
 
        // exits
        Permission::create(['name' => 'exits.index'])->syncRoles([ $admin, $editor, $author]);
        Permission::create(['name' => 'exits.create'])->syncRoles([ $admin, $editor, $author]);
        Permission::create(['name' => 'exits.softDelete'])->syncRoles([ $admin, $editor]);
        // routes
        Permission::create(['name' => 'routes.index'])->syncRoles([$editor, $admin, $author]);
        Permission::create(['name' => 'routes.create'])->syncRoles([$admin, $editor]);
        Permission::create(['name' => 'routes.edit'])->syncRoles([$editor, $admin]);
        Permission::create(['name' => 'routes.show'])->syncRoles([$editor, $admin]);
        Permission::create(['name' => 'routes.softDelete'])->syncRoles([$admin, $editor]);
        Permission::create(['name' => 'routes.destroy'])->assignRole($admin);
        //users
        Permission::create(['name' => 'user.index'])->syncRoles([$admin, $editor]);
        Permission::create(['name' => 'user.edit'])->assignRole($admin);
        Permission::create(['name' => 'user.show'])->assignRole($admin);
        Permission::create(['name' => 'user.create'])->assignRole($admin);
        Permission::create(['name' => 'user.softDelete'])->assignRole($admin);
        Permission::create(['name' => 'user.destroy'])->assignRole($admin);
        Permission::create(['name' => 'user.toogleStatus'])->assignRole($admin);
        Permission::create(['name' => 'user.bitacora'])->assignRole($admin);
        //activities
        Permission::create(['name' => 'activities.index'])->assignRole($admin);
        // top

        Permission::create(['name' => 'top.toggleStatus'])->assignRole($admin);
        Permission::create(['name' => 'top.create'])->assignRole($admin);
        Permission::create(['name' => 'top.destroy'])->assignRole($admin);
  
    }
}
