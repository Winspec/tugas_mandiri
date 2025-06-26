<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\dataKu;
use DateTime;

use function Laravel\Prompts\table;

class dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // $nama = ['ulum', 'doni', 'ria', 'dani', 'rizal'];
    // $semester = ['1', '2', '5', '8', '4'];
    // $prodi = ['informatika', 'electro', ' sipil', 'pgsd', 'akutansi'];
    // $tlpn = ['0982', '54743', '3456', '5789', '4563'];

    // for($i = 0 ; $i<count($nama) ; $i++){
    //     $mhs = new dataKu;
    //     $mhs->nama = $nama[$i];
    //     $mhs->semester = $semester[$i];
    //     $mhs->prodi = $prodi[$i];
    //     $mhs->TLPN = $tlpn[$i];
    //     $mhs->created_at = new DateTime();
    //     $mhs->updated_at = new DateTime();
    //     $mhs->save();
    // }
       DB::table('ulum')->insert([
            //key==>value
            'nama'=>'rani',
            'semester'=>'91',
            'prodi'=>'hukum',
            'TLPN'=>'01928347561892017478920127394017461294720192748506983784827577463554234678909978760',
            'created_at'=>new DateTime(),
            'updated_at'=> new DateTime(),
        ]);
    }
}
