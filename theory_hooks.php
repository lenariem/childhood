<!-- Hooks -->
<!-- Events -->
<!-- call own hook-event from functions-->
<!-- <?php
    do_action('my_hook');
    ?> -->

    <!-- this should be in functions.php

    /*  own hook-event */
    /* function print_hello() {
        echo 'Hello World!';
    };
    add_action('my_hook', 'print_hello'); */-->
    
    <!-- own hook-event -->
    <!-- <?php
        function print_hello() {
            echo '0: Hello World!' . '<br>';
        };
        function print_hello_1() {
            echo '1: Hello World!' . '<br>';
        };
        function print_hello_2() {
            echo '2: Hello World!' . '<br>';
        };
        /* priority from 5 to 15: 5 is first; default 10 */
        add_action('my_hook', 'print_hello', 15);
        add_action('my_hook', 'print_hello_1', 10);
        add_action('my_hook', 'print_hello_2', 5);
        /* do_action always after add_action */
        do_action('my_hook');
    ?>-->
    
    <!-- with arguments -->
    <!-- <?php
        function print_hello_args($text, $name) {
            echo 'Hello World!' . ' ' . $text . ' ' . $name ;
        };
        
        
       /* 2 is number os arguments */
        add_action('my_hook_args', 'print_hello_args', 10, 2);
        
        /* call function with arguments */
        do_action('my_hook_args', 'Dear customer', 'John');
    ?>
     -->
    
     <!-- Filter - return something -->
    <!-- <?php
        function my_filter_function($str) {
            return 'Hello' . ' ' . $str . '<br>';
        }
        add_filter('my_filter', 'my_filter_function', 15);
        /* if only one argument, not necessary to mention it after , */
        echo apply_filters( 'my_filter', 'World');
    
        /* delete function from hook */
        remove_filter('my_filter', 'my_filter_function', 15);
        /* remove_action() is the same */
    
        echo apply_filters( 'my_filter', 'World');
    
    ?> -->
    
    <!-- add atricute active to choosen menu links -->
    <!-- <?php 
        add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
    
        function filter_nav_menu_link_attributes($atts, $item, $args) {
            if ($args->menu === 'Main') {
                $atts['class'] = 'header__nav-item';
    
                if($item->current) {
                    $atts['class'] = 'header__nav-item-active';
                }
    
                if($item->ID === 106 && (in_category('soft_toys') || in_category('edu_toys'))) {
                    $atts['class'] .= 'header_nav-item-active';
                }
            }
            return $atts;
        }
    ?> -->
    