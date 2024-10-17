<?php

namespace Database\Seeders;

use App\Models\Catogry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatogriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catogries')->delete();
        $catogry = ['مهام ذات اولوية عالية', 'مهام ذات اولوية متوسطة', 'مهام ذات اولوية منخفضة', 'مهام عديمة الاولوية'];

        foreach ($catogry as  $cat) {
            Catogry::create([
                'name' => $cat
            ]);
        }
    }
}
