<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Landingpage Software',
                'image' => NULL,
                'slug' => 'landingpage-software',
                'description' => 'Pagina de Destino para Empresa de Software',
                'direction' => 'pages.lps',
            'details' => '{"title":{"type":"text","name":"title","label":"Titulo","value":"Empresa de desarrollo de software & hardware","width":6},"image1":{"type":"image","name":"image1","label":"Imagen (600x670)","value":"myimage.png","width":6},"button_text1":{"type":"text","name":"button_text1","label":"Texto Boton #1","value":"Consultar","width":6},"button_link1":{"type":"text","name":"button_link1","label":"Link Text #1","value":"#","width":6},"button_text2":{"type":"text","name":"button_text2","label":"Texto Boton #2","value":"Productos","width":6},"button_link2":{"type":"text","name":"button_link2","label":"Link Text #2","value":"#productos","width":6},"description_data":{"type":"rich_text_box","name":"description_data","label":"Descripcion","value":"<p>creamos software a medida del cliente, incluyendo aplicaciones de negocios, integraci&oacute;n de sistemas existentes, programaci&oacute;n web, dispositivos m&oacute;viles y bases de datos utilizando herramientas de desarrollo actuales en el mercado.<\\/p>","width":12}}',
                'user_id' => 1,
                'created_at' => '2020-10-12 00:03:41',
                'updated_at' => '2020-10-12 00:10:40',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}