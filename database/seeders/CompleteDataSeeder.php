<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseVideo;
use App\Models\CourseStudent;
use App\Models\SubscribeTransaction;
use App\Models\User;
use App\Models\Teacher;

class CompleteDataSeeder extends Seeder
{
    public function run()
    {
        // Kategori
        $categories = [
            ['name' => 'Web Development', 'slug' => 'web-development'],
            ['name' => 'Mobile Development', 'slug' => 'mobile-development'],
            ['name' => 'Data Science', 'slug' => 'data-science'],
            ['name' => 'Machine Learning', 'slug' => 'machine-learning'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Courses
        $teacherId = Teacher::first()->id; // Assumes you have at least one teacher

        $courses = [
            [
                'name' => 'Introduction to HTML and CSS',
                'slug' => 'introduction-to-html-and-css',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Learn the basics of web development with HTML and CSS',
                'category_id' => 1,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/qz0aGYrrlhU',
            ],
            [
                'name' => 'Responsive Web Design',
                'slug' => 'responsive-web-design',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Create responsive web pages that look great on all devices',
                'category_id' => 1,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/0N7Xc84O-1M',
            ],
            [
                'name' => 'CSS Grid and Flexbox',
                'slug' => 'css-grid-and-flexbox',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Learn advanced CSS layout techniques with Grid and Flexbox',
                'category_id' => 1,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/1Rs2ND1ryYc',
            ],
            [
                'name' => 'JavaScript Fundamentals',
                'slug' => 'javascript-fundamentals',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Master the core concepts of JavaScript programming',
                'category_id' => 1,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/W6NZfCO5SIk',
            ],
            [
                'name' => 'Python for Data Science',
                'slug' => 'python-for-data-science',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Learn Python programming for data analysis and visualization',
                'category_id' => 3,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/LHBE6Q9XlzI',
            ],
            [
                'name' => 'Statistics for Data Science',
                'slug' => 'statistics-for-data-science',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Understand statistics concepts for data analysis',
                'category_id' => 3,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/3XfXUeD0M6E',
            ],
            [
                'name' => 'Machine Learning with Python',
                'slug' => 'machine-learning-with-python',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Implement machine learning algorithms using Python',
                'category_id' => 3,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/GwIo3gOz4M4',
            ],
            [
                'name' => 'Data Visualization with Matplotlib',
                'slug' => 'data-visualization-with-matplotlib',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Create visualizations using Matplotlib in Python',
                'category_id' => 3,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/X6O8Y8GQ8Y0',
            ],
            [
                'name' => 'Mobile App Development with React Native',
                'slug' => 'mobile-app-development-with-react-native',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Build cross-platform mobile apps using React Native',
                'category_id' => 2,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/0-S5a0eXPoc',
            ],
            [
                'name' => 'Flutter for Beginners',
                'slug' => 'flutter-for-beginners',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Learn how to build beautiful apps with Flutter',
                'category_id' => 2,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/5WjPfYLo9G0',
            ],
            [
                'name' => 'Kotlin for Android Development',
                'slug' => 'kotlin-for-android-development',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Master Android development with Kotlin programming language',
                'category_id' => 2,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/Fj3x0qfFq44',
            ],
            [
                'name' => 'iOS Development with Swift',
                'slug' => 'ios-development-with-swift',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Create iOS apps using Swift programming language',
                'category_id' => 2,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/9f6X2Wf0AAw',
            ],
            [
                'name' => 'Introduction to Machine Learning',
                'slug' => 'introduction-to-machine-learning',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Get started with machine learning concepts and algorithms',
                'category_id' => 4,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/0Lt9w-uB1N8',
            ],
            [
                'name' => 'Deep Learning with TensorFlow',
                'slug' => 'deep-learning-with-tensorflow',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Learn to build deep learning models using TensorFlow',
                'category_id' => 4,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/9w8tJjL5H3c',
            ],
            [
                'name' => 'Natural Language Processing',
                'slug' => 'natural-language-processing',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Understand the basics of natural language processing',
                'category_id' => 4,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/Nw0-7r5Re3E',
            ],
            [
                'name' => 'Reinforcement Learning',
                'slug' => 'reinforcement-learning',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veritatis eaque in maxime repudiandae incidunt non ex vero, veniam, obcaecati accusamus, sint doloribus officiis! Ea ullam est distinctio sapiente reprehenderit dolor animi facere ipsum debitis eos saepe itaque mollitia aperiam nesciunt magni inventore, fugit, eveniet velit nostrum harum ratione. Laboriosam? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, itaque!',
                'about' => 'Dive into reinforcement learning algorithms',
                'category_id' => 4,
                'teacher_id' => $teacherId,
                'path_trailer' => 'https://www.youtube.com/embed/2c2j54w4dMI',
            ],
        ];

        foreach ($courses as $courseData) {
            $course = Course::create($courseData);

            // Course Videos
            for ($i = 1; $i <= 5; $i++) {
                CourseVideo::create([
                    'name' => "Lesson $i: " . $course->name,
                    'path_video' => "https://www.youtube.com/embed/qz0aGYrrlhU", // Placeholder video
                    'course_id' => $course->id,
                ]);
            }
        }
    }
}
