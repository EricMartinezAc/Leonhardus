<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role_admin = Role::create(['name' => 'admin']);
        $role_editor = Role::create(['name' => 'editor']);

        $permission_create_role = Permission::create(['name' => 'create-role']);
        $permission_read_role = Permission::create(['name' => 'read-role']);
        $permission_edit_role = Permission::create(['name' => 'edit-role']);
        $permission_delete_role = Permission::create(['name' => 'delete-role']);

        $permission_create_lesson = Permission::create(['name' => 'create-lesson']);
        $permission_read_lesson = Permission::create(['name' => 'read-lesson']);
        $permission_edit_lesson = Permission::create(['name' => 'edit-lesson']);
        $permission_delete_lesson = Permission::create(['name' => 'delete-lesson']);

        $permission_create_category = Permission::create(['name' => 'create-category']);
        $permission_read_category = Permission::create(['name' => 'read-category']);
        $permission_edit_category = Permission::create(['name' => 'edit-category']);
        $permission_delete_category = Permission::create(['name' => 'delete-category']);

        //SU
        $permissions_admin = [
            $permission_create_role,
            $permission_read_role,
            $permission_edit_role,
            $permission_delete_role,
            $permission_create_lesson,
            $permission_read_lesson,
            $permission_edit_lesson,
            $permission_delete_lesson,
            $permission_create_category,
            $permission_read_category,
            $permission_edit_category,
            $permission_delete_category
        ];

        //editor
        $permissions_editor = [
            $permission_create_lesson,
            $permission_read_lesson,
            $permission_edit_lesson,
            $permission_delete_lesson,
            $permission_create_category,
            $permission_read_category,
            $permission_edit_category,
            $permission_delete_category
        ];


        //asignement permissions to roles
        $role_admin->syncPermissions($permissions_admin);
        $role_editor->syncPermissions($permissions_editor);
    }
}
