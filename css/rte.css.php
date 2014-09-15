<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Styles for management of Routines, Triggers and Events
 * for the pma8165 theme
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMA8165
 */

// unplanned execution path
if (! defined('PMA_MINIMUM_COMMON') && ! defined('TESTSUITE')) {
    exit();
}
?>

.rte_table {
    table-layout: fixed;
}

.rte_table td {
    vertical-align: middle;
    padding: .5em;
    text-align: left !important;
}

.rte_table tr td:nth-child(1) {
    font-weight: normal;
}

.rte_table input,
.rte_table select,
.rte_table textarea {
    width: auto;
    margin: 0;
    box-sizing: border-box;
    -ms-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}

.rte_table .routine_params_table {
    width: 100%;
}
