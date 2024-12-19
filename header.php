<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav class="bg-white ">
        <div class="container mx-auto flex justify-between items-center py-2 ">
            <div class="flex-shrink-0">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>" class="altura-logo">
                </a>
            </div>
            <div class="hidden md:flex space-x-4">
                <div class="relative group">
                    <button class="focus:outline-none">Quienes Somos</button>
                    <div class="absolute left-0 hidden mt-2 w-48 bg-white text-black rounded-md shadow-lg group-hover:block">
                        <a href="#" class="block px-4 py-2">Historia</a>
                        <a href="#" class="block px-4 py-2">Misión y Visión</a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="focus:outline-none">Carreras</button>
                    <div class="absolute left-0 hidden mt-2 w-48 bg-white text-black rounded-md shadow-lg group-hover:block">
                        <a href="#" class="block px-4 py-2">Pregrado</a>
                        <a href="#" class="block px-4 py-2">Postgrado</a>
                    </div>
                </div>
                <div class="relative group">
                    <button class=" focus:outline-none">Educación Continua</button>
                    <div class="absolute left-0 hidden mt-2 w-48 bg-white text-black rounded-md shadow-lg group-hover:block">
                        <a href="#" class="block px-4 py-2">Cursos</a>
                        <a href="#" class="block px-4 py-2">Diplomados</a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="focus:outline-none">Admisión</button>
                    <div class="absolute left-0 hidden mt-2 w-48 bg-white text-black rounded-md shadow-lg group-hover:block">
                        <a href="#" class="block px-4 py-2">Requisitos</a>
                        <a href="#" class="block px-4 py-2">Proceso</a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="focus:outline-none">Comunidad</button>
                    <div class="absolute left-0 hidden mt-2 w-48 bg-white text-black rounded-md shadow-lg group-hover:block">
                        <a href="#" class="block px-4 py-2">Eventos</a>
                        <a href="#" class="block px-4 py-2">Noticias</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header class="bg-blue-500 text-white p-4">
        <h1 class="text-3xl"><?php bloginfo('name'); ?></h1>
        <p class="text-lg"><?php bloginfo('description'); ?></p>
    </header>
