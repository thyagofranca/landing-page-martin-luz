<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatilbe" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php if ( is_single()) {
        	single_post_title('', true); 
    		} else {
        		bloginfo('name'); echo " - "; bloginfo('description');
    		} ?>" />
        <meta name="author" content="Thyago França">

        <?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>