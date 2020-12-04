<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\Course;
use App\Models\Description;
use App\Models\Goal;
use App\Models\Image;
use App\Models\Lesson;
use App\Models\Requirement;
use App\Models\Section;
use Illuminate\Database\Seeder;

class CourseSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = course::factory(40)->create();

        foreach($course as $curso){
            Image::factory(1)->create([
                'imageable_id' => $curso->id,
                'imageable_type' => Course::class
            ]);
            Requirement::factory(4)->create([
                'course_id' => $curso->id,
            ]);
            Goal::factory(4)->create([
                'course_id' => $curso->id,
            ]);
            Audience::factory(4)->create([
                'course_id' => $curso->id,
            ]);
            $sections = Section::factory(4)->create([
                'course_id' => $curso->id,
            ]);
            foreach($sections as $section) {
                $lessons = Lesson::factory(4)->create([
                    'section_id' => $section->id
                ]);
                foreach ($lessons as $lesson){
                    Description::factory(1)->create([
                        'lesson_id' => $lesson->id
                    ]);
                }
            }

        }
    }
}
