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
                'kode_mesin' => 'komp001',
                'nama' => 'Blok Silinder',
                'fungsi' => '',
                'status' => 'Tidak Bergerak',
            ],
            [
                'id_category' => '1',
                'kode_mesin' => 'komp002',
                'nama' => 'Kepala Silinder',
                'fungsi' => '',
                'status' => 'Tidak Bergerak',
            ],
            [
                'id_category' => '2',
                'kode_mesin' => 'sist001',
                'nama' => 'Starter',
                'fungsi' => '',
                'status' => 'null',
            ],
            [
                'id_category' => '2',
                'kode_mesin' => 'sist002',
                'nama' => 'Bahan Bakar',
                'fungsi' => '',
                'status' => 'null',
            ],
        ];
        $detail = [
            [
                'id_mesin' => '1',
                'nama' => '1T',
                'type' => 'Mesin001',
                'latest_maintenance' => '2022-08-21',
                'next_maintenance' => '2026-08-21',
                'condition' => 'very good',
                'breakdown_possibility' => '99',
                'kode_mesin' => 'mesdet001',
            ],
            [
                'id_mesin' => '1',
                'nama' => '1O',
                'type' => 'Mesin002',
                'latest_maintenance' => '2022-09-21',
                'next_maintenance' => '2026-09-21',
                'condition' => 'very good',
                'breakdown_possibility' => '98',
                'kode_mesin' => 'mesdet002',
            ],
            [
                'id_mesin' => '1',
                'nama' => '1A',
                'type' => 'Mesin003',
                'latest_maintenance' => '2022-07-21',
                'next_maintenance' => '2026-07-21',
                'condition' => 'good',
                'breakdown_possibility' => '89',
                'kode_mesin' => 'mesdet003',
            ],
            [
                'id_mesin' => '1',
                'nama' => '1Y',
                'type' => 'Mesin004',
                'latest_maintenance' => '2022-04-21',
                'next_maintenance' => '2026-04-21',
                'condition' => 'very good',
                'breakdown_possibility' => '97',
                'kode_mesin' => 'mesdet004',
            ],
            [
                'id_mesin' => '1',
                'nama' => '1M',
                'type' => 'Mesin005',
                'latest_maintenance' => '2022-01-21',
                'next_maintenance' => '2026-01-21',
                'condition' => 'very good',
                'breakdown_possibility' => '96',
                'kode_mesin' => 'mesdet005',
            ],
            [
                'id_mesin' => '1',
                'nama' => '1N',
                'type' => 'Mesin006',
                'latest_maintenance' => '2022-03-21',
                'next_maintenance' => '2026-03-21',
                'condition' => 'good',
                'breakdown_possibility' => '88',
                'kode_mesin' => 'mesdet006',
            ],
            [
                'id_mesin' => '1',
                'nama' => '1I',
                'type' => 'Mesin007',
                'latest_maintenance' => '2022-05-21',
                'next_maintenance' => '2026-05-21',
                'condition' => 'very good',
                'breakdown_possibility' => '99',
                'kode_mesin' => 'mesdet007',
            ],
            [
                'id_mesin' => '1',
                'nama' => '1Z',
                'type' => 'Mesin008',
                'latest_maintenance' => '2022-08-14',
                'next_maintenance' => '2026-08-14',
                'condition' => 'good',
                'breakdown_possibility' => '90',
                'kode_mesin' => 'mesdet008',
            ],
            [
                'id_mesin' => '1',
                'nama' => '1D',
                'type' => 'Mesin009',
                'latest_maintenance' => '2022-05-11',
                'next_maintenance' => '2026-05-11',
                'condition' => 'good',
                'breakdown_possibility' => '88',
                'kode_mesin' => 'mesdet009',
            ],
            [
                'id_mesin' => '1',
                'nama' => '1H',
                'type' => 'Mesin010',
                'latest_maintenance' => '2022-04-12',
                'next_maintenance' => '2026-04-12',
                'condition' => 'good',
                'breakdown_possibility' => '86',
                'kode_mesin' => 'mesdet010',
            ],
            [
                'id_mesin' => '2',
                'nama' => '2M',
                'type' => 'Mesin011',
                'latest_maintenance' => '2022-09-01',
                'next_maintenance' => '2026-09-01',
                'condition' => 'very good',
                'breakdown_possibility' => '99',
                'kode_mesin' => 'mesdet011',
            ],
            [
                'id_mesin' => '3',
                'nama' => '3T',
                'type' => 'Sistem001',
                'latest_maintenance' => '2021-08-21',
                'next_maintenance' => '2026-08-21',
                'condition' => 'very good',
                'breakdown_possibility' => '99',
                'kode_mesin' => 'sisdet001',
            ],
            [
                'id_mesin' => '3',
                'nama' => '3O',
                'type' => 'Sistem002',
                'latest_maintenance' => '2021-09-21',
                'next_maintenance' => '2026-09-21',
                'condition' => 'very good',
                'breakdown_possibility' => '98',
                'kode_mesin' => 'sisdet002',
            ],
            [
                'id_mesin' => '3',
                'nama' => '3A',
                'type' => 'Sistem003',
                'latest_maintenance' => '2021-07-21',
                'next_maintenance' => '2026-07-21',
                'condition' => 'good',
                'breakdown_possibility' => '89',
                'kode_mesin' => 'sisdet003',
            ],
            [
                'id_mesin' => '3',
                'nama' => '3Y',
                'type' => 'Sistem004',
                'latest_maintenance' => '2021-04-21',
                'next_maintenance' => '2026-04-21',
                'condition' => 'very good',
                'breakdown_possibility' => '97',
                'kode_mesin' => 'sisdet004',
            ],
            [
                'id_mesin' => '3',
                'nama' => '3M',
                'type' => 'Sistem005',
                'latest_maintenance' => '2021-01-21',
                'next_maintenance' => '2026-01-21',
                'condition' => 'very good',
                'breakdown_possibility' => '96',
                'kode_mesin' => 'sisdet005',
            ],
            [
                'id_mesin' => '3',
                'nama' => '3N',
                'type' => 'Sistem006',
                'latest_maintenance' => '2021-03-21',
                'next_maintenance' => '2026-03-21',
                'condition' => 'good',
                'breakdown_possibility' => '88',
                'kode_mesin' => 'sisdet006',
            ],
            [
                'id_mesin' => '3',
                'nama' => '3I',
                'type' => 'Sistem007',
                'latest_maintenance' => '2021-05-21',
                'next_maintenance' => '2026-05-21',
                'condition' => 'very good',
                'breakdown_possibility' => '99',
                'kode_mesin' => 'sisdet007',
            ],
            [
                'id_mesin' => '3',
                'nama' => '3Z',
                'type' => 'Sistem008',
                'latest_maintenance' => '2021-08-14',
                'next_maintenance' => '2026-08-14',
                'condition' => 'good',
                'breakdown_possibility' => '90',
                'kode_mesin' => 'sisdet008',
            ],
            [
                'id_mesin' => '3',
                'nama' => '3D',
                'type' => 'Sistem009',
                'latest_maintenance' => '2021-05-11',
                'next_maintenance' => '2026-05-11',
                'condition' => 'good',
                'breakdown_possibility' => '88',
                'kode_mesin' => 'sisdet009',
            ],
            [
                'id_mesin' => '3',
                'nama' => '3H',
                'type' => 'Sistem010',
                'latest_maintenance' => '2021-04-12',
                'next_maintenance' => '2026-04-12',
                'condition' => 'good',
                'breakdown_possibility' => '86',
                'kode_mesin' => 'sisdet010',
            ],
            [
                'id_mesin' => '4',
                'nama' => '4N',
                'type' => 'Sistem011',
                'latest_maintenance' => '2021-09-01',
                'next_maintenance' => '2026-09-01',
                'condition' => 'very good',
                'breakdown_possibility' => '99',
                'kode_mesin' => 'sisdet011',
            ],
        ];

        CategoryMesin::insert($category);
        Mesin::insert($mesin);
        DetailMesin::insert($detail);
    }
}
