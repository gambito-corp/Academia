<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\Category;
use App\Models\CategoryBlogs;
use App\Models\Course;
use App\Models\Description;
use App\Models\Goal;
use App\Models\Image;
use App\Models\Lesson;
use App\Models\Level;
use App\Models\Permission;
use App\Models\Platform;
use App\Models\Price;
use App\Models\Requirement;
use App\Models\Role;
use App\Models\Section;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->deleteDirectories([
            'cursos',
            'post',
        ]);
        $this->makeDirectories([
            'cursos',
            'post',
        ]);
        $this->truncate([
            Permission::$tabla,
            Role::$tabla,
            User::$tabla,
            Level::$tabla,
            Category::$tabla,
            Price::$tabla,
            Platform::$tabla,
            CategoryBlogs::$tabla,
            Tag::$tabla,
            Course::$tabla,
            Image::$tabla,
            Requirement::$tabla,
            Goal::$tabla,
            Audience::$tabla,
            Section::$tabla,
            Lesson::$tabla,
            Description::$tabla,
            'course_user',
            'lesson_user',
            'model_has_permissions',
            'model_has_roles',
            'post_tag',
            'role_has_permissions',
        ]);
        $this->call(PermisosSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeders::class);
        $this->call(LevelSeeders::class);
        $this->call(CategorySeeders::class);
        $this->call(PriceSeeders::class);
        $this->call(PlatformSeeder::class);
        $this->call(CategoryBlogSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(CourseSeeders::class);
        $this->call(PostSeeder::class);
    }

    public function makeDirectories(array $directories)
    {
        foreach ($directories as $directory){
            Storage::makeDirectory('public/'.$directory);
        }

    }
    public function deleteDirectories(array $directories)
    {
        foreach ($directories as $directory){
            Storage::deleteDirectory('public/'.$directory);
        }
    }
    public function truncate(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
