<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Styles for the resizable menus
 *
 * used by js/jquery/jquery.menuResizer-1.0.js
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMA8165
 */

// unplanned execution path
if (! defined('PMA_MINIMUM_COMMON') && ! defined('TESTSUITE')) {
    exit();
}
?>
ul.resizable-menu a,
ul.resizable-menu span {
    display: block;
    margin: 0;
    padding: 0;
    white-space: nowrap;    
}

ul.resizable-menu .submenu {
    display: none;
    position: relative;
}

ul.resizable-menu .shown {
    display: inline-block;
}

ul.resizable-menu ul {
    margin: 0;
    padding: 1px 0;
    position: absolute;
    list-style-type: none;
    display: none;
    border: 1px solid rgba(0,0,0,0.1);
    z-index: 2;
    <?php echo $right; ?>: 0;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

ul.resizable-menu li:hover {
    <?php echo $_SESSION['PMA_Theme']->getCssGradient($GLOBALS['cfg']['ControlColor'], 'ff533d'); ?>
}

ul.resizable-menu li:hover ul,
ul.resizable-menu .submenuhover ul {
    display: block;
    background: rgba(20,20,20,0.9);
}

ul.resizable-menu ul li {
    width: 100%;
    margin: 3px 0 3px 3px !important;
}
