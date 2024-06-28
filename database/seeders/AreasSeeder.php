<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
            $areas = [
            ["id" => 1, "areas_id" => null,  "codigo" => "1000-REC ", "nombreArea" => "Rectoría", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 2, "areas_id" => 1,  "codigo" => "2000-VAC ", "nombreArea" => "Vicerrectoría Académica", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 3, "areas_id" => 1,  "codigo" => "3000-DAF ", "nombreArea" => "Dirección Administrativa Financiera", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 4, "areas_id" => 1,  "codigo" => "4000-VPV ", "nombreArea" => "Vicerrectoría de Proyecto de Vida", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 5, "areas_id" => 1,  "codigo" => "1010-SGE ", "nombreArea" => "Secretaría General", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 6, "areas_id" => 1,  "codigo" => "1020-DPC ", "nombreArea" => "Dirección de Planeación y Calidad", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 7, "areas_id" => 1,  "codigo" => "1030-IRI ", "nombreArea" => "Internacionalización y Relaciones Interinstitucionales", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 8, "areas_id" => 1,  "codigo" => "1040-COM ", "nombreArea" => "Comunicaciones", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 9, "areas_id" => 1,  "codigo" => "1050-CIN ", "nombreArea" => "Control Interno", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 10, "areas_id" => 2,  "codigo" => "2010-DPS ", "nombreArea" => "Dirección de Proyección Social", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 11, "areas_id" => 2,  "codigo" => "2020-DII ", "nombreArea" => "Dirección de Investigaciones E Innovación", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 12, "areas_id" => 2,  "codigo" => "2030-ARA ", "nombreArea" => "Admisiones y Registro Academico", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 13, "areas_id" => 2,  "codigo" => "2040-CPG ", "nombreArea" => "Centro de Prácticas Académicas y Graduados", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 14, "areas_id" => 2,  "codigo" => "2050-CIE ", "nombreArea" => "Centro de Innovación Educativa", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 15, "areas_id" => 2,  "codigo" => "2060-EMP ", "nombreArea" => "Emprendimiento", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 16, "areas_id" => 2,  "codigo" => "2100-FAD ", "nombreArea" => "Facultad de Arquitectura y Diseño", "logo" => "", "ubicacion" => "", "tipoArea" => "FAC", "estado" => "1"],
            ["id" => 17, "areas_id" => 2,  "codigo" => "2200-FCH ", "nombreArea" => "Facultad de Ciencias Humanas Sociales y de la Educacción", "logo" => "", "ubicacion" => "", "tipoArea" => "FAC", "estado" => "1"],
            ["id" => 18, "areas_id" => 2,  "codigo" => "2300-FCB ", "nombreArea" => "Facultad de Ciencias Básicas E Ingenierías", "logo" => "", "ubicacion" => "", "tipoArea" => "FAC", "estado" => "1"],
            ["id" => 19, "areas_id" => 2,  "codigo" => "2400-FCE ", "nombreArea" => "Facultad de Ciencias Económicas y Administrativas", "logo" => "", "ubicacion" => "", "tipoArea" => "FAC", "estado" => "1"],
            ["id" => 20, "areas_id" => 3,  "codigo" => "3100-GFC ", "nombreArea" => "Gestión Financiera y Contable", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 21, "areas_id" => 3,  "codigo" => "3200-GTH ", "nombreArea" => "Gestión del Talento Humano", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 22, "areas_id" => 3,  "codigo" => "3300-GAC ", "nombreArea" => "Gestión y Administración del Campus Universitario", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 23, "areas_id" => 3,  "codigo" => "3400-GME ", "nombreArea" => "Gestión de Mercadeo", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 24, "areas_id" => 4,  "codigo" => "4100-BSO ", "nombreArea" => "Bienestar Social", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 25, "areas_id" => 4,  "codigo" => "4200-DHU ", "nombreArea" => "Desarrollo Humano", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 26, "areas_id" => 4,  "codigo" => "4300-RDE ", "nombreArea" => "Recreación y Deportes", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 27, "areas_id" => 4,  "codigo" => "4400-PUN ", "nombreArea" => "Pastoral Universitaría", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 28, "areas_id" => 4,  "codigo" => "4500-CAC ", "nombreArea" => "Centro de Actividades Culturales", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 29, "areas_id" => 4,  "codigo" => "4600-AAC ", "nombreArea" => "Acompañamiento Académico", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 30, "areas_id" => 4,  "codigo" => "4700-CFA ", "nombreArea" => "Centro de Familia", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 31, "areas_id" => 6,  "codigo" => "1021-GTE ", "nombreArea" => "Gestión Tecnológica", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 32, "areas_id" => 6,  "codigo" => "1022-ACA ", "nombreArea" => "Aseguramiento de la Calidad Academica", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 33, "areas_id" => 10,  "codigo" => "2011-CID ", "nombreArea" => "Centro de Idiomas", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 34, "areas_id" => 11,  "codigo" => "2021-BCD ", "nombreArea" => "Biblioteca Cardenal Darío Castrillón-CRAI", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 35, "areas_id" => 16,  "codigo" => "2101-ARQ ", "nombreArea" => "Arquitectura", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 36, "areas_id" => 16,  "codigo" => "2102-DIN ", "nombreArea" => "Diseño Industrial", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 37, "areas_id" => 16,  "codigo" => "2103-TPV ", "nombreArea" => "Técnica Profesional en Video, Disc-Jockey y Sonido", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 38, "areas_id" => 16,  "codigo" => "2104-TPI ", "nombreArea" => "Tecnologia en Producción e Imagen", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 39, "areas_id" => 16,  "codigo" => "2105-DAU ", "nombreArea" => "Diseño Audiovisual", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 40, "areas_id" => 16,  "codigo" => "2151-EGP ", "nombreArea" => "Especialización en Gestión de Proyectos e Innovación", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 41, "areas_id" => 16,  "codigo" => "2152-EAB ", "nombreArea" => "Especialización en Arquitectura Bioclimática", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 42, "areas_id" => 16,  "codigo" => "2153-EGC ", "nombreArea" => "Especialización en Gestión de la Construcción Sostenible", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 43, "areas_id" => 16,  "codigo" => "2154-MAU ", "nombreArea" => "Maestría en Arquitectura y Urbanismo", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 44, "areas_id" => 17,  "codigo" => "2201-PSI ", "nombreArea" => "Psicología", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 45, "areas_id" => 17,  "codigo" => "2202-CSP ", "nombreArea" => "Comunicación Social - Periodismo", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 46, "areas_id" => 17,  "codigo" => "2203-LER ", "nombreArea" => "Licenciatura en Educación Religiosa", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 47, "areas_id" => 17,  "codigo" => "2204-DHU ", "nombreArea" => "Departamento de Humanidades", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 48, "areas_id" => 17,  "codigo" => "2205-CEM ", "nombreArea" => "Centro de Medios", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 49, "areas_id" => 17,  "codigo" => "2206-CAP ", "nombreArea" => "Centro de Atención Psicológica", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 50, "areas_id" => 17,  "codigo" => "2251-EPD ", "nombreArea" => "Especialización en Pedagogía y desarrollo Humano", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 51, "areas_id" => 17,  "codigo" => "2252-EEI ", "nombreArea" => "Especialización en Edumática Innovación Educativa Mediada Por Tic", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 52, "areas_id" => 17,  "codigo" => "2253-EGC ", "nombreArea" => "Especialización en Gerencia de la Comunicación Corporativa", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 53, "areas_id" => 17,  "codigo" => "2254-EPC ", "nombreArea" => "Especialización en Psicología Clínica Con Énfasis en Psicoterapia Con Niños y Adolescentes", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 54, "areas_id" => 17,  "codigo" => "2255-EPS ", "nombreArea" => "Especialización  en Psicología Social Comunitaria y Acción Psicosocial", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 55, "areas_id" => 17,  "codigo" => "2256-EGH ", "nombreArea" => "Especializacion en Gestion Humana en las Organizaciones", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 56, "areas_id" => 17,  "codigo" => "2257-MIE ", "nombreArea" => "Maestría en Innovación Educativa", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 57, "areas_id" => 17,  "codigo" => "2258-MGE ", "nombreArea" => "Maestría en Gestión Estratégica de la Comunicación", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 58, "areas_id" => 17,  "codigo" => "2259-MPD ", "nombreArea" => "Maestría en Pedagogía y desarrollo Humano", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 59, "areas_id" => 17,  "codigo" => "2260-DED ", "nombreArea" => "Doctorado en Educación en desarrollo Humano", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 60, "areas_id" => 18,  "codigo" => "2301-IST ", "nombreArea" => "Ingeniería de Sistemas y Telecomunicaciones", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 61, "areas_id" => 18,  "codigo" => "2302-IIN ", "nombreArea" => "Ingeniería Industrial", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 62, "areas_id" => 18,  "codigo" => "2303-TDS ", "nombreArea" => "Tecnología  en Desarrollo de Software", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 63, "areas_id" => 18,  "codigo" => "2304-DCB ", "nombreArea" => "Departamento de Ciencias Básicas", "logo" => "", "ubicacion" => "", "tipoArea" => "ADM", "estado" => "1"],
            ["id" => 64, "areas_id" => 19,  "codigo" => "2401-AEM ", "nombreArea" => "Administración de Empresas", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 65, "areas_id" => 19,  "codigo" => "2402-NIN ", "nombreArea" => "Negocios Internacionales", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 66, "areas_id" => 19,  "codigo" => "2403-TGM ", "nombreArea" => "Tecnología en Gestión de Mercadeo", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 67, "areas_id" => 19,  "codigo" => "2404-MER ", "nombreArea" => "Mercadeo", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 68, "areas_id" => 19,  "codigo" => "2451-EFI ", "nombreArea" => "Especialización en Finanzas", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 69, "areas_id" => 19,  "codigo" => "2454-EEP ", "nombreArea" => "Especialización en Economía Pública y Gestión Territorial", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 70, "areas_id" => 19,  "codigo" => "2455-MGD ", "nombreArea" => "Maestría en Gestión del Desarrollo Regional", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 71, "areas_id" => 19,  "codigo" => "2456-MFI ", "nombreArea" => "Maestría en Finanzas", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 72, "areas_id" => 19,  "codigo" => "2457-MME ", "nombreArea" => "Maestría en Mercadeo", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
            ["id" => 73, "areas_id" => 19,  "codigo" => "2458-MGP ", "nombreArea" => "Maestría en Gestión de Proyectos", "logo" => "", "ubicacion" => "", "tipoArea" => "PRO", "estado" => "1"],
        ];

        DB::table('areas')->insert($areas);
    }
}
