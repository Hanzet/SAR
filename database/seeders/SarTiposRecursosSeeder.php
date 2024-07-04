<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SarTiposRecursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposRecursos = [
            ["id" => 1, "codigo" => null, "tipo" => "Salones", "descripcion" => "Salones estudiantes", "maxTiempo" => null, "estado" => "1"],
            ["id" => 2, "codigo" => null, "tipo" => "Laboratorios", "descripcion" => "Laboratorios", "maxTiempo" => null, "estado" => "1"],
            ["id" => 3, "codigo" => null, "tipo" => "Auditorios", "descripcion" => "Auditorios", "maxTiempo" => null, "estado" => "1"],
            ["id" => 4, "codigo" => null, "tipo" => "Sillas", "descripcion" => "Sillas", "maxTiempo" => null, "estado" => "1"],
            ["id" => 5, "codigo" => null, "tipo" => "Mesas", "descripcion" => "Mesas", "maxTiempo" => null, "estado" => "1"],
            ["id" => 6, "codigo" => null, "tipo" => "Cafeteras", "descripcion" => "Cafeteras", "maxTiempo" => null, "estado" => "1"],
            ["id" => 7, "codigo" => null, "tipo" => "Cafeteras", "descripcion" => "Cafeteras", "maxTiempo" => null, "estado" => "1"],
            ["id" => 8, "codigo" => null, "tipo" => "Cafeteras", "descripcion" => "Cafeteras", "maxTiempo" => null, "estado" => "1"],
        ];
    }
}
