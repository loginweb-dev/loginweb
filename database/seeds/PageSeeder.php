<?php

use Illuminate\Database\Seeder;
use App\Page;
use App\Block;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = Page::create([
            'name'      => 'Landingpage Software',
            'slug'      => 'landingpage-software',
            'description' => 'Pagina de Destino para Empresa de Software',
            'direction' => 'pages.lps',
            'user_id' => 1,
            'details'   => json_encode([
                'title' => [
                    'type' => 'text',
                    'name' => 'title',
                    'label' => 'Titulo',
                    'value' => 'Empresa de desarrollo de software & hardware',
                    'width' => 6
                ],
                'image1' => [
                    'type' => 'image',
                    'name' => 'image1',
                    'label' => 'Imagen (600x670)',
                    'value' => 'myimage.png',
                    'width' => 6
                ],
                'button_text1' => [
                    'type' => 'text',
                    'name' => 'button_text1',
                    'label' => 'Texto Boton #1',
                    'value' => 'Consular',
                    'width' => 6
                ],
                'button_link1' => [
                    'type' => 'text',
                    'name' => 'button_link1',
                    'label' => 'Link Text #1',
                    'value' => '#',
                    'width' => 6
                ],
                'button_text2' => [
                    'type' => 'text',
                    'name' => 'button_text2',
                    'label' => 'Texto Boton #2',
                    'value' => 'Ver Productos',
                    'width' => 6
                ],
                'button_link2' => [
                    'type' => 'text',
                    'name' => 'button_link2',
                    'label' => 'Link Text #2',
                    'value' => '#productos',
                    'width' => 6
                ],

                'description_data' => [
                    'type' => 'rich_text_box',
                    'name' => 'description_data',
                    'label' => 'Descripcion',
                    'value' => 'creamos software a medida del cliente, incluyendo aplicaciones de negocios, integraci&oacute;n de sistemas existentes, programaci&oacute;n web, dispositivos m&oacute;viles y bases de datos utilizando herramientas de desarrollo actuales en el mercado.',
                    'width' => 12
                ]
            ])
        ]);

        $count=1;
        Block::create([
            'name'        => 'lps_block1',
            'title'       => 'Blocke #1 (features #1)',
            'type'        => 'dinamyc-data',
            'description' => 'Seccion Features',
            'page_id'     => $page->id,
            'position'    => $count++,
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Loginweb',
                    'width'  => 6
                ],
                'title_default' => [
                    'type'  => 'text',
                    'name'  => 'title_default',
                    'label' => 'Titulo Normal',
                    'value' => 'Soluciones',
                    'width'  => 6
                ],
                'description' => [
                    'type'  => 'rich_text_box',
                    'name'  => 'description',
                    'label' => 'Descripcion',
                    'value' => '<p>Los servicios ofrecidos por&nbsp;<strong>Loginweb</strong>&nbsp;comprenden diversos ambitos de la inform&aacute;tica. Analizamos de manera exhaustiva los requerimientos de su empresa, buscando la soluci&oacute;n que mejor se adapte a sus necesidades.</p>',
                    'width'  => 12
                ],
                'space' => [
                    'type'  => 'space',
                    'name'  => 'space',
                ],
                'icons1' => [
                    'type'  => 'select_dropdown',
                    'name'  => 'icons1',
                    'label' => 'Icon #1',
                    'value' => 'fas fa-cogs blue-text',
                    'width'  => 3
                ],
                'title1' => [
                    'type'  => 'text',
                    'name'  => 'title1',
                    'label' => 'Title #1',
                    'value' => 'Customization',
                    'width'  => 3
                ],
                'description1' => [
                    'type'  => 'rich_text_box',
                    'name'  => 'description1',
                    'label' => 'Descripcion #1',
                    'value' => 'Lorem Ipsum is simply dummy text o the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    'width' => 6
                ],
                'icons2' => [
                    'type'  => 'select_dropdown',
                    'name'  => 'icons2',
                    'label' => 'Icon #2',
                    'value' => 'fas fa-book blue-text',
                    'width' => 3
                ],
                'title2' => [
                    'type'  => 'text',
                    'name'  => 'title2',
                    'label' => 'Title #2',
                    'value' => 'Easy tutorials',
                    'width' => 3
                ],
                'descripcion2' => [
                    'type'  => 'rich_text_box',
                    'name'  => 'descripcion2',
                    'label' => 'Descripcion #2',
                    'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting le Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    'width' => 6
                ],
                'icons3' => [
                    'type'  => 'select_dropdown',
                    'name'  => 'icons3',
                    'label' => 'Icon #3',
                    'value' => 'fas fa-users blue-text',
                    'width' => 3
                ],
                'title3' => [
                    'type'  => 'text',
                    'name'  => 'title3',
                    'label' => 'Title #3',
                    'value' => 'Easy tutorials',
                    'width' => 3
                ],
                'descripcion3' => [
                    'type'  => 'rich_text_box',
                    'name'  => 'descripcion3',
                    'label' => 'Descripcion #3',
                    'value' => 'Lorem Ipsum is simply dummy text of the printing typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    'width' => 6
                ]
            ])
        ]);

        Block::create([
            'name'        => 'lps_block2',
            'title'       => 'Blocke #2 (downlonad)',
            'type'        => 'dinamyc-data',
            'description' => 'Seccion para Descargas',
            'page_id' => $page->id,
            'position'    => $count++,
            'details'     => json_encode([
                'image_donwload' => [
                    'type'   => 'image',
                    'name'   => 'image_donwload',
                    'label'  => 'Image Donwload (900x572)',
                    'value'  => 'defualt.png',
                    'width'  => 4
                ],
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Aplicaciones móvil',
                    'width'  => 4
                ],
                'title_default' => [
                    'type'  => 'text',
                    'name'  => 'title_default',
                    'label' => 'Titulo Normal',
                    'value' => 'Dinámicas',
                    'width'  => 4
                ],
                'description' => [
                    'type'  => 'rich_text_box',
                    'name'  => 'description',
                    'label' => 'Descripcion',
                    'value' => '<p>Construimos Apliaciones&nbsp;movil dinámicas con panel de control, donde puedes modificar acciones de t&uacute;&nbsp;app movil en tiempo real, sin necesidad de buscar un profesional para dicha modificacion. Ademas si ya tienes sitio web la convertimos en app movil lista para descargar en la tiendas :</p>',
                    'width'  => 12
                ],
                'button1' => [
                    'type'  => 'text',
                    'name'  => 'button1',
                    'label' => 'Texto del Boton Android',
                    'value' => 'PLAY STORE',
                    'width'  => 6
                ],
                'button2' => [
                    'type'  => 'text',
                    'name'  => 'button2',
                    'label' => 'Texto del Boton Apple',
                    'value' => 'APP STORE',
                    'width'  => 6
                ]
            ])
        ]);

        Block::create([
            'name'        => 'lps_block3',
            'title'       => 'Blocke #3 (features #2)',
            'type'        => 'dinamyc-data',
            'description' => 'Seccion Features #2',
            'page_id' => $page->id,
            'position'    => $count++,
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Lorem ipsum',
                    'width'  => 4
                ],
                'title_default' => [
                    'type'  => 'text',
                    'name'  => 'title_default',
                    'label' => 'Titulo Normal',
                    'value' => 'dolor sit amet',
                    'width'  => 4
                ],
                'image_principal' => [
                    'type'   => 'image',
                    'name'   => 'image_principal',
                    'label'  => 'Image Princiapal,',
                    'value'  => 'default.png',
                    'width'  => 4
                ],
                'space' => [
                    'type'  => 'space',
                    'name'  => 'space',
                ],
                'icons1' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons1',
                    'label'  => 'Icons #1',
                    'value'  => 'fas fa-tablet-alt blue-text',
                    'width'  => 3
                ],
                'title1' => [
                    'type'   => 'text',
                    'name'   => 'title1',
                    'label'  => 'Titulo #1',
                    'value'  => 'Fully responsive',
                    'width'  => 3
                ],
                'description1' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'description1',
                    'label'  => 'Descripcion #1',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores',
                    'width'  => 6
                ],
                'icons2' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons2',
                    'label'  => 'Icons #2',
                    'value'  => 'fas fa-level-up-alt blue-text',
                    'width'  => 3
                ],
                'title2' => [
                    'type'   => 'text',
                    'name'   => 'title2',
                    'label'  => 'Titulo #2',
                    'value'  => 'Frequent updates',
                    'width'  => 3
                ],
                'description2' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'description2',
                    'label'  => 'Descripcion #2',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetu adipisicing elit. Reprehenderit maiores',
                    'width'  => 6
                ],
                'icons3' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons3',
                    'label'  => 'Icons #3',
                    'value'  => 'fas fa-phone blue-text',
                    'width'  => 3
                ],
                'title3' => [
                    'type'   => 'text',
                    'name'   => 'title3',
                    'label'  => 'Titulo #3',
                    'value'  => 'Technical support',
                    'width'  => 3
                ],
                'description3' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'description3',
                    'label'  => 'Descripcion #3',
                    'value'  => 'Lorem ipsum dolr sit amet, consectetu adipisicing elit. Reprehderit maiores',
                    'width'  => 6
                ],
                'icons4' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons4',
                    'label'  => 'Icons #4',
                    'value'  => 'far fa-object-group blue-text',
                    'width'  => 3
                ],
                'title4' => [
                    'type'   => 'text',
                    'name'   => 'title4',
                    'label'  => 'Titulo #4',
                    'value'  => 'Editable layout',
                    'width'  => 3
                ],
                'description4' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'description4',
                    'label'  => 'Descripcion #4',
                    'value'  => 'Lorem ipsum dolr sit amet, conectetu adipisicing elit. Reprehderit maiores',
                    'width'  => 6
                ],
                'icons5' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons5',
                    'label'  => 'Icons #5',
                    'value'  => 'fas fa-rocket blue-text',
                    'width'  => 3
                ],
                'title5' => [
                    'type'   => 'text',
                    'name'   => 'title5',
                    'label'  => 'Titulo #5',
                    'value'  => 'Fast and powerful',
                    'width'  => 3
                ],
                'description5' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'description5',
                    'label'  => 'Descripcion #5',
                    'value'  => 'Lorem ipsum dolr sit amet, conectetu adipisicing elit. Reprehderit maioress.',
                    'width'  => 6
                ],
                'icons6' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons6',
                    'label'  => 'Icons #6',
                    'value'  => 'fas fa-cloud-upload-alt blue-text',
                    'width'  => 3
                ],
                'title6' => [
                    'type'   => 'text',
                    'name'   => 'title6',
                    'label'  => 'Titulo #6',
                    'value'  => 'Fast and powerful',
                    'width'  => 3
                ],
                'description6' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'description6',
                    'label'  => 'Descripcion #6',
                    'value'  => 'Lorem isum dolr sit amet, conectetu adipisicing elit. Reprehderit maioress.',
                    'width'  => 6
                ],
            ])
        ]);

        Block::create([
            'name'        => 'lps_block4',
            'title'       => 'Blocke #4 (Precios)',
            'type'        => 'dinamyc-data',
            'description' => 'Seccion para Precios',
            'page_id' => $page->id,
            'position'    => $count++,
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Lorem ipsum',
                    'width'  => 2
                ],
                'title_default' => [
                    'type'  => 'text',
                    'name'  => 'title_default',
                    'label' => 'Titulo Normal',
                    'value' => 'dolor sit amet',
                    'width'  => 2
                ],
                'description' => [
                    'type'  => 'rich_text_box',
                    'name'  => 'description',
                    'label' => 'Descripcion',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam',
                    'width'  => 8
                ],
                'space' => [
                    'type' => 'space',
                    'name' => 'space'
                ],
                'icons1' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons1',
                    'label'  => 'Icons #1',
                    'value'  => 'fas fa-home blue-text',
                    'width'  => 3
                ],
                'title1' => [
                    'type'   => 'text',
                    'name'   => 'title1',
                    'label'  => 'Titulo #1',
                    'value'  => 'Basic plan',
                    'width'  => 3
                ],
                'price1' => [
                    'type'   => 'text',
                    'name'   => 'price1',
                    'label'  => 'Precio #1',
                    'value'  => '59 $',
                    'width'  => 3
                ],
                'button1' => [
                    'type'   => 'text',
                    'name'   => 'button1',
                    'label'  => 'Accion del Boton #1',
                    'value'  => '#',
                    'width'  => 3
                ],
                'description1' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'description1',
                    'label'  => 'Descripcion #1',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa pariatur id nobis accusamus deleniti cumque hic laborum.',
                    'width'  => 12
                ],
                'icons2' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons2',
                    'label'  => 'Icons #2',
                    'value'  => 'fas fa-users white-text',
                    'width'  => 3
                ],
                'title2' => [
                    'type'   => 'text',
                    'name'   => 'title2',
                    'label'  => 'Titulo #2',
                    'value'  => 'Premium plan',
                    'width'  => 3
                ],
                'price2' => [
                    'type'   => 'text',
                    'name'   => 'price2',
                    'label'  => 'Precio #2',
                    'value'  => '79 $',
                    'width'  => 3
                ],
                'button2' => [
                    'type'   => 'text',
                    'name'   => 'button2',
                    'label'  => 'Accion del Boton #2',
                    'value'  => '#',
                    'width'  => 3
                ],
                'description2' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'description2',
                    'label'  => 'Descripcion #2',
                    'value'  => 'Lorem ipsum dol sit amet, consectetur adipisicing elit. Culpa pariatur id nobis accusamus deleniti cumque hic laborum.',
                    'width'  => 12
                ],
                'icons3' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons3',
                    'label'  => 'Icons #3',
                    'value'  => 'fas fa-chart-bar blue-text',
                    'width'  => 3
                ],
                'title3' => [
                    'type'   => 'text',
                    'name'   => 'title3',
                    'label'  => 'Titulo #3',
                    'value'  => 'Advanced plan',
                    'width'  => 3
                ],
                'price3' => [
                    'type'   => 'text',
                    'name'   => 'price3',
                    'label'  => 'Precio #3',
                    'value'  => '99 $',
                    'width'  => 3
                ],
                'button3' => [
                    'type'   => 'text',
                    'name'   => 'button2',
                    'label'  => 'Accion del Boton #3',
                    'value'  => '#',
                    'width'  => 3
                ],
                'description3' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'description3',
                    'label'  => 'Descripcion #3',
                    'value'  => 'Loem ipsum dol sit amet, consectetur adipisicing elit. Culpa pariatur id nobis accusamus deleniti cumque hic laborum.',
                    'width'  => 12
                ]
            ])
        ]);

        Block::create([
            'name'        => 'lps_block5',
            'title'       => 'Blocke #5 (Clientes)',
            'type'        => 'dinamyc-data',
            'description' => 'Seccion Clientes',
            'page_id' => $page->id,
            'position'    => $count++,
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Nuestros Clientes',
                    'width'  => 6
                ],
                'title_default' => [
                    'type'  => 'text',
                    'name'  => 'title_default',
                    'label' => 'Titulo Normal',
                    'value' => 'Acerca de',
                    'width'  => 6
                ],
                'space' => [
                    'type' => 'space',
                    'name' => 'space'
                ],
                'image1' => [
                    'type'  => 'image',
                    'name'  => 'image1',
                    'label' => 'Imagen #1 (250x250)',
                    'value' => 'image1.png',
                    'width'  => 4
                ],
                'title1' => [
                    'type'  => 'text',
                    'name'  => 'title1',
                    'label' => 'Titulo #1',
                    'value' => 'REDIMACONS',
                    'width'  => 4
                ],
                'tag1' => [
                    'type'  => 'text',
                    'name'  => 'tag1',
                    'label' => 'Tag #1',
                    'value' => 'Web Designer',
                    'width'  => 4
                ],
                'description1' => [
                    'type'  => 'rich_text_box',
                    'name'  => 'description1',
                    'label' => 'Descripcion #1',
                    'value' => 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis laboriosam.',
                    'width'  => 12
                ],
                'space1' => [
                    'type'  => 'space',
                    'name'  => 'space1',
                ],
                'image2' => [
                    'type'  => 'image',
                    'name'  => 'image2',
                    'label' => 'Imagen #2 (250x250)',
                    'value' => 'image2.png',
                    'width'  => 4
                ],
                'title2' => [
                    'type'  => 'text',
                    'name'  => 'title2',
                    'label' => 'Titulo #2',
                    'value' => 'PIZZAS TATU',
                    'width'  => 4
                ],
                'tag2' => [
                    'type'  => 'text',
                    'name'  => 'tag2',
                    'label' => 'Tag #2',
                    'value' => 'Front-end developer',
                    'width'  => 4
                ],
                'description2' => [
                    'type'  => 'rich_text_box',
                    'name'  => 'description2',
                    'label' => 'Descripcion #2',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae.',
                    'width'  => 12
                ],
                'space2' => [
                    'type'  => 'space',
                    'name'  => 'space2',
                ],
                'image3' => [
                    'type'  => 'image',
                    'name'  => 'image3',
                    'label' => 'Imagen #3 (250x250)',
                    'value' => 'image3.png',
                    'width'  => 4
                ],
                'title3' => [
                    'type'  => 'text',
                    'name'  => 'title3',
                    'label' => 'Titulo #3',
                    'value' => 'EL JINETE',
                    'width'  => 4
                ],
                'tag3' => [
                    'type'  => 'text',
                    'name'  => 'tag3',
                    'label' => 'Tag #3',
                    'value' => 'Phtographer',
                    'width'  => 4
                ],
                'description3' => [
                    'type'  => 'rich_text_box',
                    'name'  => 'description3',
                    'label' => 'Descripcion #3',
                    'value' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.',
                    'width'  => 12
                ],
                'space3' => [
                    'type'  => 'space',
                    'name'  => 'space3',
                ],
                'image4' => [
                    'type'  => 'image',
                    'name'  => 'image4',
                    'label' => 'Imagen #4 (250x250)',
                    'value' => 'image4.png',
                    'width'  => 4
                ],
                'title4' => [
                    'type'  => 'text',
                    'name'  => 'title4',
                    'label' => 'Titulo #4',
                    'value' => 'CET BENI',
                    'width'  => 4
                ],
                'tag4' => [
                    'type'  => 'text',
                    'name'  => 'tag4',
                    'label' => 'Tag #4',
                    'value' => 'Web Developer',
                    'width'  => 4
                ],
                'description4' => [
                    'type'  => 'rich_text_box',
                    'name'  => 'description4',
                    'label' => 'Descripcion #4',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae.',
                    'width'  => 12
                ],
                'space4' => [
                    'type'  => 'space',
                    'name'  => 'space4',
                ],
                'image5' => [
                    'type'  => 'image',
                    'name'  => 'image5',
                    'label' => 'Imagen #5 (250x250)',
                    'value' => 'image5.png',
                    'width'  => 4
                ],
                'title5' => [
                    'type'  => 'text',
                    'name'  => 'title5',
                    'label' => 'Titulo #5 (250x250)',
                    'value' => 'JAIRO SPORT',
                    'width'  => 4
                ],
                'tag5' => [
                    'type'  => 'text',
                    'name'  => 'tag5',
                    'label' => 'Tag #5',
                    'value' => 'Marketer',
                    'width'  => 4
                ],
                'description5' => [
                    'type'  => 'rich_text_box',
                    'name'  => 'description5',
                    'label' => 'Descripcion #5',
                    'value' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.',
                    'width'  => 12
                ],
                'space5' => [
                    'type'  => 'space',
                    'name'  => 'space5',
                ],
                'image6' => [
                    'type'  => 'image',
                    'name'  => 'image6',
                    'label' => 'Imagen #6 (250x250)',
                    'value' => 'image6.png',
                    'width'  => 4
                ],
                'title6' => [
                    'type'  => 'text',
                    'name'  => 'title6',
                    'label' => 'Titulo #6',
                    'value' => 'LIVE MEDIC',
                    'width'  => 4
                ],
                'tag6' => [
                    'type'  => 'text',
                    'name'  => 'tag6',
                    'label' => 'Tag #6',
                    'value' => 'Front-end developer',
                    'width'  => 4
                ],
                'description6' => [
                    'type'  => 'rich_text_box',
                    'name'  => 'description6',
                    'label' => 'Descripcion #6',
                    'value' => 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis laboriosam.',
                    'width'  => 12
                ],
            ])
        ]);

        Block::create([
            'name'        => 'lps_block6',
            'title'       => 'Blocke #6 (teams)',
            'type'        => 'dinamyc-data',
            'description' => 'Seccion Teams',
            'page_id' => $page->id,
            'position'    => $count++,
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Team',
                    'width'  => 6
                ],
                'title_default' => [
                    'type'  => 'text',
                    'name'  => 'title_default',
                    'label' => 'Titulo Normal',
                    'value' => 'Team LoginWeb',
                    'width'  => 6
                ],
                'space' => [
                    'type' => 'space',
                    'name' => 'space'
                ],
                'description' => [
                    'type'  => 'text_area',
                    'name'  => 'description',
                    'label' => 'Descripcion',
                    'value' => 'Nuestro Equipo ',
                    'width'  => 12
                ],
                'space1' => [
                    'type' => 'space1',
                    'name' => 'space'
                ],
                'image1' => [
                    'type'  => 'image',
                    'name'  => 'image1',
                    'label' => 'Imagen #1',
                    'value' => 'image1.png',
                    'width'  => 4
                ],
                'title1' => [
                    'type'  => 'text',
                    'name'  => 'title1',
                    'label' => 'Titulo #1',
                    'value' => 'Percy Alvarez',
                    'width'  => 4
                ],
                'small1' => [
                    'type'  => 'text',
                    'name'  => 'small1',
                    'label' => 'small',
                    'value' => 'Co-funder & CEO',
                    'width'  => 4
                ],
                'space2' => [
                    'type' => 'space',
                    'name' => 'space2'
                ],
                'image2' => [
                    'type'  => 'image',
                    'name'  => 'image2',
                    'label' => 'Imagen #2',
                    'value' => 'image2.png',
                    'width'  => 4
                ],
                'title2' => [
                    'type'  => 'text',
                    'name'  => 'title2',
                    'label' => 'Titulo #2',
                    'value' => 'Augusto Carvalho',
                    'width'  => 4
                ],
                'small2' => [
                    'type'  => 'text',
                    'name'  => 'small2',
                    'label' => 'small #2',
                    'value' => 'Developer Backend',
                    'width'  => 4
                ],
                'space3' => [
                    'type' => 'space',
                    'name' => 'space3'
                ],
                'image3' => [
                    'type'  => 'image',
                    'name'  => 'image3',
                    'label' => 'Imagen #3',
                    'value' => 'image3.png',
                    'width'  => 4
                ],
                'title3' => [
                    'type'  => 'text',
                    'name'  => 'title3',
                    'label' => 'Titulo #3',
                    'value' => 'Agustin Mejia',
                    'width'  => 4
                ],
                'small3' => [
                    'type'  => 'text',
                    'name'  => 'small3',
                    'label' => 'small #3',
                    'value' => 'Developer Full Stack',
                    'width'  => 4
                ],
                'space4' => [
                    'type' => 'space',
                    'name' => 'space4'
                ],
                'image4' => [
                    'type'  => 'image',
                    'name'  => 'image4',
                    'label' => 'Imagen #4',
                    'value' => 'image4.png',
                    'width'  => 4
                ],
                'title4' => [
                    'type'  => 'text',
                    'name'  => 'title4',
                    'label' => 'Titulo #4',
                    'value' => 'Raul R. Montero',
                    'width'  => 4
                ],
                'small4' => [
                    'type'  => 'text',
                    'name'  => 'small4',
                    'label' => 'Titulo #4',
                    'value' => 'Designer Devops',
                    'width'  => 4
                ]
            ])
        ]);

        Block::create([
            'name'        => 'lps_block7',
            'title'       => 'Blocke #7 (portafolio)',
            'type'        => 'dinamyc-data',
            'description' => 'Seccion Portafolio',
            'page_id' => $page->id,
            'position'    => $count++,
            'details'     => json_encode([

            ])
        ]);
    }
}
