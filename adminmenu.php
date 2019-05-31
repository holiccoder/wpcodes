<?php


/* @ add admin menu and sub menu
 * @param page_title, menu_title, capability, menu_slug, callback function, icon url or dashicon
 * @package themename
 * @param parent_slug, page_title, menu_title, capability, menu_slug, callback function
 */

function themename_add_admin_menu()
{
    add_menu_page("sunny theme options", "menu title", "manage_options", "themename-theme-options", "themename_option_callback", "dashicons-chart-area", "70");
    add_submenu_page("themename-theme-options", "general setting", "general setting", "manage_options", "themename-general-options", "themename_general_submenu_callback");
}

add_action("admin_menu", "themename_add_admin_menu");

function themename_option_callback(){
    //here is page title on the top of the page
}

function themename_general_submenu_callback(){
    //here is submenu of the page
}