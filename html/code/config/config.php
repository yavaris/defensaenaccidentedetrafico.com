<?php

    // StyleSheets
    $arrayStyleSheets           = array
                        (
                            "http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic|Open+Sans:400,300,600,700",
                            "style.css",
                            "css/colors.php.css",
                            "css/tipsy.css",
                            "css/bootstrap.css",
                            "css/font-awesome.css",
                            "css/prettyPhoto.css",
                            "css/rs/css/rs-settings.css",
                            "css/responsive.css"
                        );

    // External Javascripts
    $arrayExternalJavascripts   = array
                        (
                            "jquery.js",
                            "plugins.js",
                            "jquery.themepunch.plugins.js",
                            "jquery.themepunch.revolution.js"
                        );

    // Main Header Social Links
    $arraySocialLinks           = array
                        (
                            "facebook" => array
                                                (
                                                    "name"      => "Facebook",
                                                    "link"      => "#",
                                                    "target"    => 1
                                                ),
                            "twitter"  => array
                                                (
                                                    "name"      => "Twitter",
                                                    "link"      => "https://twitter.com/abogado_trafico",
                                                    "target"    => 1
                                                ),
                            "gplus"    => array
                                                (
                                                    "name"      => "Google+",
                                                    "link"      => "#",
                                                    "target"    => 1
                                                ),
                            "phone"    => array
                                                (
                                                    "name"      => "+34.666.666.666",
                                                    "link"      => "tel:+34.666.666.666",
                                                    "target"    => 0
                                                ),
                            "mail"     => array
                                                (
                                                    "name"      => "info@defensaaccidentestrafico.com",
                                                    "link"      => "mailto:info@defensaaccidentestrafico.com",
                                                    "target"    => 0
                                                )
                        );

    // Main Header Page Links
    $arrayPageLinks             = array
                                                (
                                                    "index"    => array
                                                                        (
                                                                            "name"      => "DAT",
                                                                            "link"      => "index.html",
                                                                            "info"      => "Defensa en Accidentes de Tráfico"
                                                                        ),
                                                    "blog"     => array
                                                                        (
                                                                            "name"      => "Sobre nosotros",
                                                                            "link"      => "blog.html",
                                                                            "info"      => "¡Conócenos!"
                                                                        ),
                                                    "contact"  => array
                                                                        (
                                                                            "name"      => "Contactar",
                                                                            "link"      => "contact.html",
                                                                            "info"      => "¡Infórmate!"
                                                                        )
                                                );

    // Home Products Text
    $arrayProductsTexts         = array
                                                (
                                                    "0"    => array
                                                                        (
                                                                            "class"     => "col_one_third",
                                                                            "icon"      => "icon-copy",
                                                                            "title"     => "85+ HTML Pages",
                                                                            "text"      => "Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit."
                                                                        ),
                                                    "1"     => array
                                                                        (
                                                                            "class"     => "col_one_third",
                                                                            "icon"      => "icon-fullscreen",
                                                                            "title"     => "Fully Responsive",
                                                                            "text"      => "Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit."
                                                                        ),
                                                    "2"  => array
                                                                        (
                                                                            "class"     => "col_one_third col_last",
                                                                            "icon"      => "icon-picture",
                                                                            "title"     => "12 Slider Plugins",
                                                                            "text"      => "Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit."
                                                                        )
                                                );

    // Home Images Slider
    $arrayImagesSlider          = array
                                                (
                                                    "0"         => array
                                                                        (
                                                                            "class"         => "caption large_text lft",
                                                                            "style"         => "background-color: #8AAD1F; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif; font-weight: 300; font-size: 28px; padding: 5px 8px;",
                                                                            "data-x"        => "330",
                                                                            "data-y"        => "38",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "1000",
                                                                            "data-easing"   => "easeOutExpo",
                                                                            "data-end"      => "",
                                                                            "data-endspeed" => "",
                                                                            "data-endeasing"=> "",
                                                                            "data"          => "Texto Principal"
                                                                        ),
                                                    "1"         => array
                                                                        (
                                                                            "class"         => "caption lft ltb",
                                                                            "style"         => "",
                                                                            "data-x"        => "50",
                                                                            "data-y"        => "120",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "1500",
                                                                            "data-easing"   => "easeOutExpo",
                                                                            "data-end"      => "4500",
                                                                            "data-endspeed" => "300",
                                                                            "data-endeasing"=> "easeInSine",
                                                                            "data"          => "<img src=\"images/slider/revolution/2/mac.png\" />"
                                                                        ),
                                                    "2"         => array
                                                                        (
                                                                            "class"         => "caption large_text sfr",
                                                                            "style"         => "background-color: #666; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif; font-weight: 300; font-size: 20px; line-height: 32px; padding: 3px 9px;",
                                                                            "data-x"        => "570",
                                                                            "data-y"        => "170",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "1800",
                                                                            "data-easing"   => "easeOutBack",
                                                                            "data-end"      => "4000",
                                                                            "data-endspeed" => "300",
                                                                            "data-endeasing"=> "easeInBack",
                                                                            "data"          => "Texto A"
                                                                        ),
                                                    "3"         => array
                                                                        (
                                                                            "class"         => "caption large_text sfr",
                                                                            "style"         => "background-color: #4F7D59; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif; font-weight: 300; font-size: 20px; line-height: 32px; padding: 3px 9px;",
                                                                            "data-x"        => "570",
                                                                            "data-y"        => "212",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "2000",
                                                                            "data-easing"   => "easeOutBack",
                                                                            "data-end"      => "4250",
                                                                            "data-endspeed" => "300",
                                                                            "data-endeasing"=> "easeInBack",
                                                                            "data"          => "Texto B"
                                                                        ),
                                                    "4"         => array
                                                                        (
                                                                            "class"         => "caption large_text sfr",
                                                                            "style"         => "background-color: #487984; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif; font-weight: 300; font-size: 20px; line-height: 32px; padding: 3px 9px;",
                                                                            "data-x"        => "570",
                                                                            "data-y"        => "254",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "2200",
                                                                            "data-easing"   => "easeOutBack",
                                                                            "data-end"      => "4500",
                                                                            "data-endspeed" => "300",
                                                                            "data-endeasing"=> "easeInBack",
                                                                            "data"          => "Texto C"
                                                                        ),
                                                    "5"         => array
                                                                        (
                                                                            "class"         => "caption lft ltb",
                                                                            "style"         => "",
                                                                            "data-x"        => "50",
                                                                            "data-y"        => "105",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "5500",
                                                                            "data-easing"   => "easeOutExpo",
                                                                            "data-end"      => "8500",
                                                                            "data-endspeed" => "300",
                                                                            "data-endeasing"=> "easeInSine",
                                                                            "data"          => "<img src=\"images/slider/revolution/2/ipad.png\" />"
                                                                        ),
                                                    "6"         => array
                                                                        (
                                                                            "class"         => "caption large_text sfr",
                                                                            "style"         => "background-color: #666; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif; font-weight: 300; font-size: 20px; line-height: 32px; padding: 3px 9px;",
                                                                            "data-x"        => "570",
                                                                            "data-y"        => "170",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "5800",
                                                                            "data-easing"   => "easeOutBack",
                                                                            "data-end"      => "8000",
                                                                            "data-endspeed" => "300",
                                                                            "data-endeasing"=> "easeInBack",
                                                                            "data"          => "Texto D"
                                                                        ),
                                                    "7"         => array
                                                                        (
                                                                            "class"         => "caption large_text sfr",
                                                                            "style"         => "background-color: #4F7D59; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif; font-weight: 300; font-size: 20px; line-height: 32px; padding: 3px 9px;",
                                                                            "data-x"        => "570",
                                                                            "data-y"        => "212",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "6000",
                                                                            "data-easing"   => "easeOutBack",
                                                                            "data-end"      => "8250",
                                                                            "data-endspeed" => "300",
                                                                            "data-endeasing"=> "easeInBack",
                                                                            "data"          => "Texto E"
                                                                        ),
                                                    "8"         => array
                                                                        (
                                                                            "class"         => "caption large_text sfr",
                                                                            "style"         => "background-color: #487984; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif; font-weight: 300; font-size: 20px; line-height: 32px; padding: 3px 9px;",
                                                                            "data-x"        => "570",
                                                                            "data-y"        => "254",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "6200",
                                                                            "data-easing"   => "easeOutBack",
                                                                            "data-end"      => "8500",
                                                                            "data-endspeed" => "300",
                                                                            "data-endeasing"=> "easeInBack",
                                                                            "data"          => "Texto F"
                                                                        ),
                                                    "9"         => array
                                                                        (
                                                                            "class"         => "caption lft ltb",
                                                                            "style"         => "",
                                                                            "data-x"        => "50",
                                                                            "data-y"        => "90",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "9000",
                                                                            "data-easing"   => "easeOutExpo",
                                                                            "data-end"      => "",
                                                                            "data-endspeed" => "",
                                                                            "data-endeasing"=> "",
                                                                            "data"          => "<img src=\"images/slider/revolution/2/iphone.png\" />"
                                                                        ),
                                                    "10"        => array
                                                                        (
                                                                            "class"         => "caption large_text sfr",
                                                                            "style"         => "background-color: #666; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif; font-weight: 300; font-size: 20px; line-height: 32px; padding: 3px 9px;",
                                                                            "data-x"        => "570",
                                                                            "data-y"        => "170",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "9300",
                                                                            "data-easing"   => "easeOutBack",
                                                                            "data-end"      => "",
                                                                            "data-endspeed" => "",
                                                                            "data-endeasing"=> "",
                                                                            "data"          => "Texto G"
                                                                        ),
                                                    "11"        => array
                                                                        (
                                                                            "class"         => "caption large_text sfr",
                                                                            "style"         => "background-color: #4F7D59; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif; font-weight: 300; font-size: 20px; line-height: 32px; padding: 3px 9px;",
                                                                            "data-x"        => "570",
                                                                            "data-y"        => "212",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "9500",
                                                                            "data-easing"   => "easeOutBack",
                                                                            "data-end"      => "",
                                                                            "data-endspeed" => "",
                                                                            "data-endeasing"=> "",
                                                                            "data"          => "Texto H"
                                                                        ),
                                                    "12"        => array
                                                                        (
                                                                            "class"         => "caption large_text sfr",
                                                                            "style"         => "background-color: #487984; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif; font-weight: 300; font-size: 20px; line-height: 32px; padding: 3px 9px;",
                                                                            "data-x"        => "570",
                                                                            "data-y"        => "254",
                                                                            "data-speed"    => "300",
                                                                            "data-start"    => "9700",
                                                                            "data-easing"   => "easeOutBack",
                                                                            "data-end"      => "",
                                                                            "data-endspeed" => "",
                                                                            "data-endeasing"=> "",
                                                                            "data"          => "Texto I"
                                                                        ),
                                                );