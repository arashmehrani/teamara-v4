<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // پاک‌سازی کش مجوزها
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            [
                'name' => '0|1|[System]|منو تنظیمات پایه', 'guard_name' => 'web',
            ], [
                'name' => '0|2|[System]|تنظیمات پایه شرکت ها', 'guard_name' => 'web',
            ], [
                'name' => '0|3|[System]|تنظیمات پایه همه کاربران', 'guard_name' => 'web',
            ], [
                'name' => '0|4|[System]|تنظیمات پایه زیر سیستم', 'guard_name' => 'web',
            ], [
                'name' => '0|5|[System]|تنظیمات پایه همه لاگ ها', 'guard_name' => 'web',
            ], [
                'name' => '0|6|[System]|تنظیمات پایه بک آپ', 'guard_name' => 'web',
            ], [
                'name' => '0|7|[System]|تنظیمات پایه ایمپورت', 'guard_name' => 'web',
            ], [
                'name' => '0|8|[System]|تنظیمات پایه اکسپورت', 'guard_name' => 'web',
            ], [
                'name' => '0|9|[System]|تعریف قانون پایه سیستم', 'guard_name' => 'web',
            ], [
                'name' => '0|10|[System]|تنظیمات پایه حالت تعمیر', 'guard_name' => 'web',
            ], [
                'name' => '0|11|[System]|تنظیمات پایه کش کانفیگ', 'guard_name' => 'web',
            ], [
                'name' => '0|12|[System]|تنظیمات پایه کش ویو', 'guard_name' => 'web',
            ], [
                'name' => '0|13|[System]|تنظیمات پایه دیباگ', 'guard_name' => 'web',
            ], [
                'name' => '0|14|[System]|منو پایه دسترسی ها', 'guard_name' => 'web',
            ], [
                'name' => '0|15|[System]|مدیریت مجوز های پایه', 'guard_name' => 'web',
            ], [
                'name' => '0|16|[System]|مدیریت نقش های پایه', 'guard_name' => 'web',
            ], [
                'name' => '0|17|[System]|مدیریت دسترسی همه کاربران', 'guard_name' => 'web',
            ], [
                'name' => '0|18|[System]|مدیریت نقش همه کاربران', 'guard_name' => 'web',
            ],
        ];
        Permission::insert($permissions);

        // نقش مدیرکل (Super Admin) بدون نیاز به تخصیص مجوز
        $admin = Role::create(['name' => 'Super Admin']);
        $user = User::find(1);
        $user->assignRole('Super Admin');
    }
}
