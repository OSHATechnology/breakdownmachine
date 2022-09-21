<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategoryMesin;
use App\Models\DetailMesin;
use App\Models\Mesin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $category = [
            [
                'category' => 'Komponen',
            ],
            [
                'category' => 'Sistem',
            ],
        ];
        $mesin = [
            [
                'id_category' => '1',
                'kode_mesin' => 'komp123',
                'nama' => 'Kepala Silinder',
                'fungsi' => '',
                'status' => 'Tidak Bergerak',
            ],
            [
                'id_category' => '2',
                'kode_mesin' => 'sist123',
                'nama' => 'Sistem Starter',
                'fungsi' => '',
                'status' => 'null',
            ],
        ];
        $detail = [
            [
                'id_mesin' => '1',
                'nama' => 'Kepala Silinder',
                'type' => 'XFJK',
                'latest_maintenance' => '2022-09-21',
                'next_maintenance' => '2026-09-21',
                'condition' => 'very good',
                'breakdown_possibility' => 99,
                'kode_mesin' => 'kompdet100',
            ],
            [
                'id_mesin' => '1',
                'nama' => 'Katup Hisap',
                'type' => 'XFJK1',
                'latest_maintenance' => '2022-09-20',
                'next_maintenance' => '2026-09-20',
                'condition' => 'good',
                'breakdown_possibility' => 89,
                'kode_mesin' => 'kompdet101',
            ],
            [
                'id_mesin' => '1',
                'nama' => 'Katup Buang',
                'type' => 'XFJK2',
                'latest_maintenance' => '2022-09-19',
                'next_maintenance' => '2026-09-19',
                'condition' => 'bad',
                'breakdown_possibility' => 79,
                'kode_mesin' => 'kompdet102',
            ],
            [
                'id_mesin' => '1',
                'nama' => 'Poros nok',
                'type' => 'XFJK3',
                'latest_maintenance' => '2022-09-18',
                'next_maintenance' => '2026-09-18',
                'condition' => 'very good',
                'breakdown_possibility' => 98,
                'kode_mesin' => 'kompdet103',
            ],
            [
                'id_mesin' => '1',
                'nama' => 'Rocker Arm',
                'type' => 'XFJK4',
                'latest_maintenance' => '2022-09-17',
                'next_maintenance' => '2026-09-17',
                'condition' => 'good',
                'breakdown_possibility' => 87,
                'kode_mesin' => 'kompdet104',
            ],
            [
                'id_mesin' => '1',
                'nama' => 'Cylinder Head Cover',
                'type' => 'XFJK5',
                'latest_maintenance' => '2022-09-16',
                'next_maintenance' => '2026-09-16',
                'condition' => 'bad',
                'breakdown_possibility' => 77,
                'kode_mesin' => 'kompdet105',
            ],
            [
                'id_mesin' => '1',
                'nama' => 'Busi',
                'type' => 'XFJK6',
                'latest_maintenance' => '2022-09-15',
                'next_maintenance' => '2026-09-15',
                'condition' => 'good',
                'breakdown_possibility' => 86,
                'kode_mesin' => 'kompdet106',
            ],
            [
                'id_mesin' => '1',
                'nama' => 'Intake Manifold',
                'type' => 'XFJK7',
                'latest_maintenance' => '2022-09-14',
                'next_maintenance' => '2026-09-14',
                'condition' => 'very good',
                'breakdown_possibility' => 96,
                'kode_mesin' => 'kompdet107',
            ],
            [
                'id_mesin' => '1',
                'nama' => 'Exhaust Manifold',
                'type' => 'XFJK8',
                'latest_maintenance' => '2022-09-13',
                'next_maintenance' => '2026-09-13',
                'condition' => 'good',
                'breakdown_possibility' => 85,
                'kode_mesin' => 'kompdet108',
            ],
            [
                'id_mesin' => '2',
                'nama' => 'Baterai',
                'type' => 'XFJK9',
                'latest_maintenance' => '2022-08-01',
                'next_maintenance' => '2024-08-01',
                'condition' => 'very good',
                'breakdown_possibility' => 97,
                'kode_mesin' => 'sistdet001',
            ],
            [
                'id_mesin' => '2',
                'nama' => 'Rellay',
                'type' => 'XFJK10',
                'latest_maintenance' => '2022-08-03',
                'next_maintenance' => '2024-08-03',
                'condition' => 'good',
                'breakdown_possibility' => 89,
                'kode_mesin' => 'sistdet002',
            ],
            [
                'id_mesin' => '3',
                'nama' => 'Motor Starter',
                'type' => 'XFJK11',
                'latest_maintenance' => '2022-08-05',
                'next_maintenance' => '2024-08-05',
                'condition' => 'bad',
                'breakdown_possibility' => 78,
                'kode_mesin' => 'sistdet003',
            ],
            [
                'id_mesin' => '2',
                'nama' => 'Kunci Kontak',
                'type' => 'XFJK12',
                'latest_maintenance' => '2022-08-07',
                'next_maintenance' => '2024-08-07',
                'condition' => 'very good',
                'breakdown_possibility' => 99,
                'kode_mesin' => 'sistdet004',
            ],
        ];

        CategoryMesin::insert($category);
        Mesin::insert($mesin);
        DetailMesin::insert($detail);
    }
}
