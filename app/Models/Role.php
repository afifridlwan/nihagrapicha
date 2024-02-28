<?php

namespace App\Models;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
     public static function createRoles() {

        // create role admin
        $adminRole = Role::UpdateOrCreate(
            ([
                'name' => 'admin'
            ])
            );

        
        // create permission for role admin
        $accessDashboardPermission = Permission::UpdateOrCreate(
            (
                [
                    'name' => 'access-dashboard'
                ]
            )
        );

        // Berikan permission dashboard ke role admin
        $adminRole->givePermissionTo($accessDashboardPermission);

        $user = User::find(1);
        $user->assignRole('admin');
     }
}
