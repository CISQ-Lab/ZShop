<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'super-admin',
            'admin',
            'employee',
            'employee-admin',
            'client',
            'user',
        ];

        $permissions = [
            // Panel / administración
            'access dashboard',

            // Usuarios y roles
            'view users',
            'create users',
            'update users',
            'delete users',
            'manage roles',
            'manage permissions',

            // Empresas / tiendas
            'view companies',
            'create companies',
            'update companies',
            'delete companies',
            'manage company settings',

            // Categorías
            'view categories',
            'create categories',
            'update categories',
            'delete categories',

            // Productos
            'view products',
            'create products',
            'update products',
            'delete products',
            'publish products',

            // Órdenes
            'view orders',
            'update orders',
            'cancel orders',

            // Pagos
            'view payments',
            'manage payments',

            // Carrito / compras
            'manage cart',
            'checkout',

            // Direcciones
            'view addresses',
            'create addresses',
            'update addresses',
            'delete addresses',
        ];

        // Crear roles
        foreach ($roles as $role) {
            \Spatie\Permission\Models\Role::firstOrCreate(['name' => $role]);
        }

        // Crear permisos
        foreach ($permissions as $permission) {
            \Spatie\Permission\Models\Permission::firstOrCreate(['name' => $permission]);
        }
    
    }
}
