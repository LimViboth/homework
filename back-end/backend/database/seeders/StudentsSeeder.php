<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsSeeder extends Seeder
{
    public function run()
    {
        $khmerNames = [
            'លី​ ដានីកា',
            'លឹម​ វិបុត្រ',
            'លី​ ដ៉ារី',
            'លីវ​ សុឌីណា',
            'វៀន សីនេង',
            'រិទ្ធ ងនទ្បេង',
            'មាន ដ៉ារី',
            'បុយ សុខា',
            'ឃិន​ ណារ៉ា',
            'ទ្បាយ សុបញ្ញា',
        ];

        $latinNames = [
            'Li Danika',
            'Lim Viboth',
            'Li Daria',
            'Liv Sudina',
            'Vien Sinen',
            'Rith Ongntebeng',
            'Mean Daria',
            'Bui Sokha',
            'Khin Nara',
            'Tbay Sophanya',
        ];

        // Clear table first (optional)
        Student::truncate();

        for ($i = 0; $i < count($khmerNames); $i++) {
            Student::create([
                'khmer_name' => $khmerNames[$i],
                'latin_name' => $latinNames[$i],
                'gender'     => ['male', 'female', 'other'][array_rand(['male', 'female', 'other'])],
                'dob'        => now()->subYears(rand(10, 50))->format('Y-m-d'),
                'address'    => 'Some address ' . ($i + 1),
                'tel'        => '012-' . rand(100, 999) . '-' . rand(1000, 9999),
            ]);
        }
    }
}
