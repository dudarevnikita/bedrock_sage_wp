<?php 
/**
 * Template Name: Single Template
 */


$context['value'] = "hi";

Timber::render('single.twig', $context);

get_template_part('templates/content', 'page');
