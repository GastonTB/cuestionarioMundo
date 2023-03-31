<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ciudades')->delete();
        
        \DB::table('ciudades')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Arica',
                'provincia_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Camarones',
                'provincia_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'General Lagos',
                'provincia_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Putre',
                'provincia_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Alto Hospicio',
                'provincia_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Iquique',
                'provincia_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Camiña',
                'provincia_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Colchane',
                'provincia_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Huara',
                'provincia_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'Pica',
                'provincia_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'Pozo Almonte',
                'provincia_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'Tocopilla',
                'provincia_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => 'María Elena',
                'provincia_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'Calama',
                'provincia_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'nombre' => 'Ollague',
                'provincia_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'nombre' => 'San Pedro de Atacama',
                'provincia_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'nombre' => 'Antofagasta',
                'provincia_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'nombre' => 'Mejillones',
                'provincia_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'nombre' => 'Sierra Gorda',
                'provincia_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'nombre' => 'Taltal',
                'provincia_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'nombre' => 'Chañaral',
                'provincia_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'nombre' => 'Diego de Almagro',
                'provincia_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'nombre' => 'Copiapó',
                'provincia_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'nombre' => 'Caldera',
                'provincia_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'nombre' => 'Tierra Amarilla',
                'provincia_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'nombre' => 'Vallenar',
                'provincia_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'nombre' => 'Alto del Carmen',
                'provincia_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'nombre' => 'Freirina',
                'provincia_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'nombre' => 'Huasco',
                'provincia_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'nombre' => 'La Serena',
                'provincia_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'nombre' => 'Coquimbo',
                'provincia_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'nombre' => 'Andacollo',
                'provincia_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'nombre' => 'La Higuera',
                'provincia_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'nombre' => 'Paihuano',
                'provincia_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'nombre' => 'Vicuña',
                'provincia_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'nombre' => 'Ovalle',
                'provincia_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'nombre' => 'Combarbalá',
                'provincia_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'nombre' => 'Monte Patria',
                'provincia_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'nombre' => 'Punitaqui',
                'provincia_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'nombre' => 'Río Hurtado',
                'provincia_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'nombre' => 'Illapel',
                'provincia_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'nombre' => 'Canela',
                'provincia_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'nombre' => 'Los Vilos',
                'provincia_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'nombre' => 'Salamanca',
                'provincia_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'nombre' => 'La Ligua',
                'provincia_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'nombre' => 'Cabildo',
                'provincia_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'nombre' => 'Zapallar',
                'provincia_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'nombre' => 'Papudo',
                'provincia_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'nombre' => 'Petorca',
                'provincia_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'nombre' => 'Los Andes',
                'provincia_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'nombre' => 'San Esteban',
                'provincia_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'nombre' => 'Calle Larga',
                'provincia_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'nombre' => 'Rinconada',
                'provincia_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'nombre' => 'San Felipe',
                'provincia_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'nombre' => 'Llaillay',
                'provincia_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'nombre' => 'Putaendo',
                'provincia_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'nombre' => 'Santa María',
                'provincia_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'nombre' => 'Catemu',
                'provincia_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'nombre' => 'Panquehue',
                'provincia_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'nombre' => 'Quillota',
                'provincia_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'nombre' => 'La Cruz',
                'provincia_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'nombre' => 'La Calera',
                'provincia_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'nombre' => 'Nogales',
                'provincia_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'nombre' => 'Hijuelas',
                'provincia_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'nombre' => 'Valparaíso',
                'provincia_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'nombre' => 'Viña del Mar',
                'provincia_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'nombre' => 'Concón',
                'provincia_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'nombre' => 'Quintero',
                'provincia_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'nombre' => 'Puchuncaví',
                'provincia_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'nombre' => 'Casablanca',
                'provincia_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'nombre' => 'Juan Fernández',
                'provincia_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'nombre' => 'San Antonio',
                'provincia_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'nombre' => 'Cartagena',
                'provincia_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'nombre' => 'El Tabo',
                'provincia_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'nombre' => 'El Quisco',
                'provincia_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'nombre' => 'Algarrobo',
                'provincia_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'nombre' => 'Santo Domingo',
                'provincia_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'nombre' => 'Isla de Pascua',
                'provincia_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'nombre' => 'Quilpué',
                'provincia_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'nombre' => 'Limache',
                'provincia_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'nombre' => 'Olmué',
                'provincia_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'nombre' => 'Villa Alemana',
                'provincia_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'nombre' => 'Colina',
                'provincia_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'nombre' => 'Lampa',
                'provincia_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'nombre' => 'Tiltil',
                'provincia_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'nombre' => 'Santiago',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'nombre' => 'Vitacura',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'nombre' => 'San Ramón',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'nombre' => 'San Miguel',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'nombre' => 'San Joaquín',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'nombre' => 'Renca',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'nombre' => 'Recoleta',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'nombre' => 'Quinta Normal',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'nombre' => 'Quilicura',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'nombre' => 'Pudahuel',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'nombre' => 'Providencia',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'nombre' => 'Peñalolén',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'nombre' => 'Pedro Aguirre Cerda',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'nombre' => 'Ñuñoa',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'nombre' => 'Maipú',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'nombre' => 'Macul',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'nombre' => 'Lo Prado',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'nombre' => 'Lo Espejo',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'nombre' => 'Lo Barnechea',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'nombre' => 'Las Condes',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'nombre' => 'La Reina',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'nombre' => 'La Pintana',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'nombre' => 'La Granja',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'nombre' => 'La Florida',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'nombre' => 'La Cisterna',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'nombre' => 'Independencia',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'nombre' => 'Huechuraba',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'nombre' => 'Estación Central',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'nombre' => 'El Bosque',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'nombre' => 'Conchalí',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'nombre' => 'Cerro Navia',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'nombre' => 'Cerrillos',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'nombre' => 'Puente Alto',
                'provincia_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'nombre' => 'San José de Maipo',
                'provincia_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'nombre' => 'Pirque',
                'provincia_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'nombre' => 'San Bernardo',
                'provincia_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'nombre' => 'Buin',
                'provincia_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'nombre' => 'Paine',
                'provincia_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'nombre' => 'Calera de Tango',
                'provincia_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'nombre' => 'Melipilla',
                'provincia_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'nombre' => 'Alhué',
                'provincia_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'nombre' => 'Curacaví',
                'provincia_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'nombre' => 'María Pinto',
                'provincia_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'nombre' => 'San Pedro',
                'provincia_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'nombre' => 'Isla de Maipo',
                'provincia_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'nombre' => 'El Monte',
                'provincia_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'nombre' => 'Padre Hurtado',
                'provincia_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'nombre' => 'Peñaflor',
                'provincia_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'nombre' => 'Talagante',
                'provincia_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'nombre' => 'Codegua',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'nombre' => 'Coínco',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'nombre' => 'Coltauco',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'nombre' => 'Doñihue',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'nombre' => 'Graneros',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'nombre' => 'Las Cabras',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'nombre' => 'Machalí',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'nombre' => 'Malloa',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'nombre' => 'Mostazal',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'nombre' => 'Olivar',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'nombre' => 'Peumo',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'nombre' => 'Pichidegua',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'nombre' => 'Quinta de Tilcoco',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'nombre' => 'Rancagua',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'nombre' => 'Rengo',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'nombre' => 'Requínoa',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'nombre' => 'San Vicente de Tagua Tagua',
                'provincia_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'nombre' => 'Chépica',
                'provincia_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'nombre' => 'Chimbarongo',
                'provincia_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'nombre' => 'Lolol',
                'provincia_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'nombre' => 'Nancagua',
                'provincia_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'nombre' => 'Palmilla',
                'provincia_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'nombre' => 'Peralillo',
                'provincia_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'nombre' => 'Placilla',
                'provincia_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'nombre' => 'Pumanque',
                'provincia_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'nombre' => 'San Fernando',
                'provincia_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'nombre' => 'Santa Cruz',
                'provincia_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'nombre' => 'La Estrella',
                'provincia_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'nombre' => 'Litueche',
                'provincia_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'nombre' => 'Marchigüe',
                'provincia_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'nombre' => 'Navidad',
                'provincia_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'nombre' => 'Paredones',
                'provincia_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'nombre' => 'Pichilemu',
                'provincia_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'nombre' => 'Curicó',
                'provincia_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'nombre' => 'Hualañé',
                'provincia_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'nombre' => 'Licantén',
                'provincia_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'nombre' => 'Molina',
                'provincia_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'nombre' => 'Rauco',
                'provincia_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'nombre' => 'Romeral',
                'provincia_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'nombre' => 'Sagrada Familia',
                'provincia_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'nombre' => 'Teno',
                'provincia_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'nombre' => 'Vichuquén',
                'provincia_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'nombre' => 'Talca',
                'provincia_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'nombre' => 'San Clemente',
                'provincia_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'nombre' => 'Pelarco',
                'provincia_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'nombre' => 'Pencahue',
                'provincia_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'nombre' => 'Maule',
                'provincia_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'nombre' => 'San Rafael',
                'provincia_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'nombre' => 'Curepto',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'nombre' => 'Constitución',
                'provincia_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'nombre' => 'Empedrado',
                'provincia_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'nombre' => 'Río Claro',
                'provincia_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'nombre' => 'Linares',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'nombre' => 'San Javier',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'nombre' => 'Parral',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'nombre' => 'Villa Alegre',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'nombre' => 'Longaví',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'nombre' => 'Colbún',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'nombre' => 'Retiro',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'nombre' => 'Yerbas Buenas',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'nombre' => 'Cauquenes',
                'provincia_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'nombre' => 'Chanco',
                'provincia_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'nombre' => 'Pelluhue',
                'provincia_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'nombre' => 'Bulnes',
                'provincia_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'nombre' => 'Chillán',
                'provincia_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'nombre' => 'Chillán Viejo',
                'provincia_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'nombre' => 'El Carmen',
                'provincia_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'nombre' => 'Pemuco',
                'provincia_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'nombre' => 'Pinto',
                'provincia_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'nombre' => 'Quillón',
                'provincia_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'nombre' => 'San Ignacio',
                'provincia_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'nombre' => 'Yungay',
                'provincia_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'nombre' => 'Cobquecura',
                'provincia_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'nombre' => 'Coelemu',
                'provincia_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'nombre' => 'Ninhue',
                'provincia_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'nombre' => 'Portezuelo',
                'provincia_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'nombre' => 'Quirihue',
                'provincia_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'nombre' => 'Ránquil',
                'provincia_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'nombre' => 'Treguaco',
                'provincia_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'nombre' => 'San Carlos',
                'provincia_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'nombre' => 'Coihueco',
                'provincia_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'nombre' => 'San Nicolás',
                'provincia_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'nombre' => 'Ñiquén',
                'provincia_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'nombre' => 'San Fabián',
                'provincia_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'nombre' => 'Alto Biobío',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'nombre' => 'Antuco',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'nombre' => 'Cabrero',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'nombre' => 'Laja',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'nombre' => 'Los Ángeles',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'nombre' => 'Mulchén',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'nombre' => 'Nacimiento',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'nombre' => 'Negrete',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'nombre' => 'Quilaco',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'nombre' => 'Quilleco',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'nombre' => 'San Rosendo',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'nombre' => 'Santa Bárbara',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'nombre' => 'Tucapel',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'nombre' => 'Yumbel',
                'provincia_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'nombre' => 'Concepción',
                'provincia_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'nombre' => 'Coronel',
                'provincia_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'nombre' => 'Chiguayante',
                'provincia_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'nombre' => 'Florida',
                'provincia_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'nombre' => 'Hualpén',
                'provincia_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'nombre' => 'Hualqui',
                'provincia_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'nombre' => 'Lota',
                'provincia_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'nombre' => 'Penco',
                'provincia_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'nombre' => 'San Pedro de La Paz',
                'provincia_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'nombre' => 'Santa Juana',
                'provincia_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'nombre' => 'Talcahuano',
                'provincia_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'nombre' => 'Tomé',
                'provincia_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'nombre' => 'Arauco',
                'provincia_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'nombre' => 'Cañete',
                'provincia_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'nombre' => 'Contulmo',
                'provincia_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'nombre' => 'Curanilahue',
                'provincia_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'nombre' => 'Lebu',
                'provincia_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'nombre' => 'Los Álamos',
                'provincia_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'nombre' => 'Tirúa',
                'provincia_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'nombre' => 'Angol',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'nombre' => 'Collipulli',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'nombre' => 'Curacautín',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'nombre' => 'Ercilla',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'nombre' => 'Lonquimay',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'nombre' => 'Los Sauces',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'nombre' => 'Lumaco',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'nombre' => 'Purén',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'nombre' => 'Renaico',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'nombre' => 'Traiguén',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'nombre' => 'Victoria',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'nombre' => 'Temuco',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'nombre' => 'Carahue',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'nombre' => 'Cholchol',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'nombre' => 'Cunco',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'nombre' => 'Curarrehue',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'nombre' => 'Freire',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'nombre' => 'Galvarino',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'nombre' => 'Gorbea',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'nombre' => 'Lautaro',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'nombre' => 'Loncoche',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'nombre' => 'Melipeuco',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'nombre' => 'Nueva Imperial',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'nombre' => 'Padre Las Casas',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'nombre' => 'Perquenco',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'nombre' => 'Pitrufquén',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'nombre' => 'Pucón',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'nombre' => 'Saavedra',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'nombre' => 'Teodoro Schmidt',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'nombre' => 'Toltén',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'nombre' => 'Vilcún',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'nombre' => 'Villarrica',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'nombre' => 'Valdivia',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'nombre' => 'Corral',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'nombre' => 'Lanco',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'nombre' => 'Los Lagos',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'nombre' => 'Máfil',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'nombre' => 'Mariquina',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'nombre' => 'Paillaco',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'nombre' => 'Panguipulli',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'nombre' => 'La Unión',
                'provincia_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'nombre' => 'Futrono',
                'provincia_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'nombre' => 'Lago Ranco',
                'provincia_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'nombre' => 'Río Bueno',
                'provincia_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'nombre' => 'Osorno',
                'provincia_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'nombre' => 'Puerto Octay',
                'provincia_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'nombre' => 'Purranque',
                'provincia_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'nombre' => 'Puyehue',
                'provincia_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'nombre' => 'Río Negro',
                'provincia_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'nombre' => 'San Juan de la Costa',
                'provincia_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'nombre' => 'San Pablo',
                'provincia_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'nombre' => 'Calbuco',
                'provincia_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'nombre' => 'Cochamó',
                'provincia_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'nombre' => 'Fresia',
                'provincia_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'nombre' => 'Frutillar',
                'provincia_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'nombre' => 'Llanquihue',
                'provincia_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'nombre' => 'Los Muermos',
                'provincia_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'nombre' => 'Maullín',
                'provincia_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'nombre' => 'Puerto Montt',
                'provincia_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'nombre' => 'Puerto Varas',
                'provincia_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'nombre' => 'Ancud',
                'provincia_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'nombre' => 'Castro',
                'provincia_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'nombre' => 'Chonchi',
                'provincia_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'nombre' => 'Curaco de Vélez',
                'provincia_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'nombre' => 'Dalcahue',
                'provincia_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'nombre' => 'Puqueldón',
                'provincia_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'nombre' => 'Queilén',
                'provincia_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'nombre' => 'Quellón',
                'provincia_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'nombre' => 'Quemchi',
                'provincia_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'nombre' => 'Quinchao',
                'provincia_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'nombre' => 'Chaitén',
                'provincia_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'nombre' => 'Futaleufú',
                'provincia_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'nombre' => 'Hualaihué',
                'provincia_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'nombre' => 'Palena',
                'provincia_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'nombre' => 'Lago Verde',
                'provincia_id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'nombre' => 'Coihaique',
                'provincia_id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'nombre' => 'Aysén',
                'provincia_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'nombre' => 'Cisnes',
                'provincia_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'nombre' => 'Guaitecas',
                'provincia_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'nombre' => 'Río Ibáñez',
                'provincia_id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'nombre' => 'Chile Chico',
                'provincia_id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'nombre' => 'Cochrane',
                'provincia_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'nombre' => 'O\'Higgins',
                'provincia_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'nombre' => 'Tortel',
                'provincia_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'nombre' => 'Natales',
                'provincia_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'nombre' => 'Torres del Paine',
                'provincia_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'nombre' => 'Laguna Blanca',
                'provincia_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'nombre' => 'Punta Arenas',
                'provincia_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'nombre' => 'Río Verde',
                'provincia_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'nombre' => 'San Gregorio',
                'provincia_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'nombre' => 'Porvenir',
                'provincia_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'nombre' => 'Primavera',
                'provincia_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'nombre' => 'Timaukel',
                'provincia_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'nombre' => 'Cabo de Hornos',
                'provincia_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'nombre' => 'Antártica',
                'provincia_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}