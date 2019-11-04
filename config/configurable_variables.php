<?php
/*
 * This file is part of Xblog.
 * This file defines variables to config your blog.
 * Rendered in admin/settings.blade.php
 * Support type:
 *   1. text
 *   2. textarea
 *   3. radio
 *   4. number
 *   5. others
 */
return [
    'groups' => [
        [
            'group_name' => 'De uso común',
            'children' => [
                [
                    'name' => 'google_analytics',
                    'type' => 'radio',
                    'default' => 'false',
                    'values' => [
                        'true' => 'Habilitar Google Analytics',
                        'false' => 'Deshabilitar Google Analytics',
                    ],
                ],
                [
                    'name' => 'enable_mail_notification',
                    'type' => 'radio',
                    'default' => 'false',
                    'values' => [
                        'true' => 'Habilitar notificaciones por correo electrónico',
                        'false' => 'Deshabilitar notificaciones por correo electrónico',
                    ],
                ],
                [
                    'name' => 'comment_type',
                    'type' => 'radio',
                    'default' => 'raw',
                    'values' => [
                        'none' => 'Cerrar comentario (no se muestra)',
                        'raw' => 'Trae tus propios comentarios',
                        'disqus' => 'Disqus',
                    ],
                ],
                [
                    'name' => 'allow_comment',
                    'type' => 'radio',
                    'default' => 'true',
                    'values' => [
                        'true' => 'Permitir comentarios',
                        'false' => 'Prohibir comentarios (todavía se muestran comentarios)',
                    ],
                ],
                [
                    'name' => 'enable_hot_posts',
                    'type' => 'radio',
                    'default' => 'false',
                    'values' => [
                        'true' => 'Habilitar artículos populares',
                        'false' => 'Deshabilitar artículos populares',
                    ],
                ],
                [
                    'name' => 'open_pay',
                    'type' => 'radio',
                    'default' => 'false',
                    'values' => [
                        'true' => 'Aprecio abierto',
                        'false' => 'Aprecio Cerrado',
                    ],
                ],
                [
                    'name' => 'pay_description',
                    'label' => 'Descripcion de pago',
                    'default' => 'Escribe la descripcion de pago aqui '
                ],
            ]
        ],

        [
            'group_name' => 'Información personal',
            'children' => [
                [
                    'name' => 'author',
                    'label' => 'Autor',
                ],
                [
                    'name' => 'description',
                    'label' => 'Descripcion',
                ],
                [
                    'name' => 'avatar',
                    'label' => 'Avatar',
                ],
                [
                    'name' => 'other_information',
                    'type' => 'textarea',
                    "placeholder" => "Soporte para texto y html",
                    'label' => 'Otra informacion',
                ],
                [
                    'name' => 'social_facebook',
                    'label' => 'Facebook link',
                ],
                [
                    'name' => 'social_twitter',
                    'label' => 'Twitter link',
                ],
                [
                    'name' => 'social_github',
                    'label' => 'GitHub link',
                ],
                [
                    'name' => 'social_weibo',
                    'label' => 'Weibo link',
                ],
                [
                    'name' => 'social_instagram',
                    'label' => 'Instagram link',
                ],
                [
                    'name' => 'social_googleplus',
                    'label' => 'Google+ link',
                ],
                [
                    'name' => 'social_tumblr',
                    'label' => 'Tumblr link',
                ],
                [
                    'name' => 'social_stackoverflow',
                    'label' => 'StackOverflow link',
                ],
                [
                    'name' => 'social_dribbble',
                    'label' => 'Dribbble link',
                ],
                [
                    'name' => 'social_linkedin',
                    'label' => 'LinkedIn link',
                ],
                [
                    'name' => 'social_gitlab',
                    'label' => 'GitLab link',
                ],
                [
                    'name' => 'social_pinterest',
                    'label' => 'Pinterest link',
                ],
                [
                    'name' => 'social_youtube',
                    'label' => 'YouTube link',
                ],
            ]
        ],
        [
            'group_name' => 'Sitio web',
            'children' => [
                [
                    'name' => 'google_trace_id',
                    'label' => 'ID de seguimiento',
                    'placeholder' => 'ID de seguimiento de Google'
                ],
                [
                    'name' => 'disqus_shortname',
                    'label' => 'Disqus ID',
                ],
                [
                    'name' => 'github_username',
                    'label' => 'Nombre de usuario Github',
                ],
                [
                    'name' => 'blog_brand',
                    'label' => 'Logo',
                    "placeholder" => "Soporte para texto y html",
                    "type" => "textarea"
                ],
                [
                    'name' => 'site_title',
                    'label' => 'Titulo',
                ],
                [
                    'name' => 'site_keywords',
                    'label' => 'Palabras claves',
                    "placeholder" => "Palabras claves del sitio web"
                ],
                [
                    'name' => 'site_description',
                    'label' => 'Descripción del sitio web',
                ],
                [
                    'name' => 'site_header_title',
                    'label' => 'Título del sitio web',
                ],
                [
                    'name' => 'page_size',
                    'label' => 'Número de páginas por página.',
                    'default' => 7,
                    "type" => "number"
                ],
                [
                    'name' => 'hot_posts_count',
                    'label' => 'Recuento de artículos populares',
                    'default' => 5,
                    "type" => "number"
                ],
                [
                    'name' => 'case_number',
                    'label' => 'Número de registro'
                ],
            ]
        ],
        [
            'group_name' => 'Imagen',
            'children' => [

                [
                    'name' => 'profile_image',
                    'label' => 'Foto de perfil',
                ],
                [
                    'name' => 'header_bg_image',
                    'label' => 'Imagen de fondo del encabezado',
                ],
                [
                    'name' => 'header_image_provider',
                    'type' => 'radio',
                    'default' => 'none',
                    'label' => 'Imagen de fondo del encabezado dinámico',
                    'values' => [
                        'none' => 'Cerrar',
                        'bing' => 'Bing Daily Wallpaper',
                        'picsum' => 'Picsum',
                    ],
                ],
                [
                    'name' => 'header_image_update_rate',
                    'type' => 'radio',
                    'default' => 'every_day',
                    'label' => 'Frecuencia de actualización de la imagen de fondo del encabezado dinámico',
                    'values' => [
                        'every_minute' => 'Cada minuto',
                        'every_hour' => 'Cada hora',
                        'every_day' => 'Cada día',
                        'every_week' => 'Cada semana',
                    ],
                ],
                [
                    'name' => 'admin_sidebar_bg_image',
                    'label' => 'Imagen de fondo del Dashboard',
                ],
                [
                    'name' => 'home_bg_images',
                    'label' => 'Imagen de fondo de inicio',
                    "type" => "textarea",
                    "placeholder" => "Puede ser múltiple, una línea por línea"
                ],
                [
                    'name' => 'zhifubao_pay_image_url',
                    'label' => 'Código QR de pago Alipay',
                ],
                [
                    'name' => 'wechat_pay_image_url',
                    'label' => 'Código QR de pago WeChat',
                ],
            ]
        ],
    ],
];