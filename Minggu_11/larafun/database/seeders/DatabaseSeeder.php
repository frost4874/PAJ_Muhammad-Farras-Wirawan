<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data=[
        [2, 'Fitria Gilda Hastuti S.Pd', 40, NULL, NULL, NULL],
[3, 'Ana Mayasari S.Gz', 34, NULL, NULL, NULL],
[4, 'Cemeti Gunarto', 33, NULL, NULL, NULL],
[5, 'Gangsa Samosir', 41, NULL, NULL, NULL],
[6, 'Salwa Wastuti', 44, NULL, NULL, NULL],
[7, 'Cici Oliva Puspita', 37, NULL, NULL, NULL],
[8, 'Dartono Kusumo', 36, NULL, NULL, NULL],
[9, 'Hardi Asmadi Uwais S.Ked', 26, NULL, NULL, NULL],
[10, 'Gina Halimah', 39, NULL, NULL, NULL],
        ];
        foreach ($data as $item) {
            Guru::create([
                'id' => $item[0],
                'nama' => $item[1],
                'umur' => $item[2],
                // 'desa' => $item[3],
            ]);
        }
    }
}
