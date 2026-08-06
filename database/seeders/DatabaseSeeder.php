<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\Adress;
Use App\Models\Company;
Use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\CompanyType;
use App\Models\ProductImage;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $adminTest = User::create([
            'firstname' => 'Christian',
            'lastname' => 'Sanchez',
            'email' => 'admintest@example.com',
            'password' => bcrypt('Ciber1233'),
            'phone' => '1234567890',
            'photo_path' => null,
            'is_active' => true,
        ]);

        $this->call([
            RolesPermissionSeeder::class,
        ]);

        $adminTest->assignRole('admin');

        CompanyType::create([
            'name' => 'Joyeria y Accesorios',
            'description' => 'Encuentra las mejores joyas y accesorios para ti',
            'is_active' => true,
            'slug' => Str::slug('Joyeria y Accesorios'),
            'image_path' => 'images_categories/joyeria-y-accesorios.jpg',
        ]);

        CompanyType::create([
            'name' => 'Flores y Regalos',
            'description' => 'Flores para eventos y ocasiones especiales',
            'is_active' => true,
            'slug' => Str::slug('Flores y Regalos'),
            'image_path' => 'images_categories/flores-y-regalos.jpg',
        ]);

        CompanyType::create([
            'name' => 'Tecnologia',
            'description' => 'Productos tecnologicos para toda utilidad',
            'is_active' => true,
            'slug' => Str::slug('Tecnologia'),
            'image_path' => 'images_categories/tecnologia.jpg',
        ]);

        CompanyType::create([
            'name' => 'Ropa y Accesorios',
            'description' => 'Productos solo para adultos',
            'is_active' => true,
            'slug' => Str::slug('Ropa y Accesorios'),
            'image_path' => 'images_categories/ropa-y-accesorios.jpg',
        ]);

        $company = Company::create([
            'company_type_id' => 1,
            'name' => 'Joyeria Colibri',
            'email' => 'colibri@example.com',
            'phone' => '1234567890',
            'description' => 'Encuentra las mejores joyas y accesorios para ti',
            'logo_path' => 'companies/joyeria-colibri/images/perfil.png',
            'banner_path' => 'companies/joyeria-colibri/images/portada.png',
            'address' => 'Calle 123, Ciudad, Estado, País',
            'status' => 'active',
            'is_active' => true,
            'slug' => 'joyeria-colibri',
        ]);

        $address = Adress::create([
            'company_id' => $company->id,
            'street' => 'Calle 123',
            'city' => 'Ciudad',
            'state' => 'Estado',
            'country' => 'País',
            'postal_code' => '12345',
        ]);

        $category = Category::create([
            'name' => 'Joyeria',
            'description' => 'Encuentra las mejores joyas y accesorios para ti',
            'image_path' => null,
            'slug' => 'joyeria',
            'is_active' => true,
            'company_id' => $company->id,
        ]);

        $product = Product::create([
            'company_id' => $company->id,
            'category_id' => $category->id,
            'name' => 'Anillo de Oro',
            'description' => 'Anillo de oro de 18 quilates con diseño elegante',
            'price' => 150.00,
            'stock' => 10,
            'is_active' => true,
        ]);

        ProductImage::create([
            'product_id' => $product->id,
            'image_path' => 'companies/joyeria-colibri/images/products/product1.jpg',
            'is_primary' => true,
            'sort_order' => 1,
            'alt_text' => 'Anillo de Oro - Vista Frontal',
            'title' => 'Anillo de Oro - Vista Frontal',
        ]);

        

    }
}
