<!DOCTYPE html>
<html <?php language_attributes();?> dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <!--Start header index - This header used only for event page . Other pages use header-inside.php file to load header section -->