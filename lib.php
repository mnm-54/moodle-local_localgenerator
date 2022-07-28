<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * plugin callbacks file, moodle hooks
 *
 * @package    local_localgenerator
 * @copyright  2022 munem
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Callback allowing to add js to $PAGE->requires
 */
function local_localgenerator_before_http_headers()
{
    return null;
}

/**
 * Callback allowing to add contetnt inside the region-main, in the very end
 *
 * @return string
 */
function local_localgenerator_before_footer()
{
    return '';
}

// @codingStandardsIgnoreStart
/* More callbacks that can be implemented

function local_localgenerator_render_navbar_output() {
    // Added to the top navbar after messaging icon before the user picture/menu.
    return '';
}

function local_localgenerator_add_htmlattributes() {
    // <html {{{ output.htmlattributes }}}>
    return [];
}

function local_localgenerator_standard_after_main_region_html() {
    // Added in the very end of the page, must be floating element or otherwise it messes up layout
    return '';
}

function local_localgenerator_standard_footer_html() {
    // Added after the "Reset user tour on this page" link in the popup footer
    return '';
}

function local_localgenerator_before_standard_top_of_body_html() {
    // added before the <nav> element (top navbar)
    return '';
}

function local_localgenerator_before_standard_html_head() {
    // Can add meta tags here
    return '';
}

function local_localgenerator_after_config() {
    return null;
}

function local_localgenerator_after_require_login() {

}

function local_localgenerator_extend_navigation_user($usernode, $user, $usercontext, $course, $coursecontext) {

}

function local_localgenerator_extend_navigation_course($coursenode, $course, $coursecontext) {

}

function local_localgenerator_extend_navigation_user_settings($usersetting, $user, $usercontext, $course, $coursecontext) {

}

function local_localgenerator_extend_navigation_category_settings($categorynode, $catcontext) {

}

function local_localgenerator_extend_navigation_frontpage($frontpage, $course, $coursecontext) {

}

function local_localgenerator_user_preferences() {

}

function local_localgenerator_get_course_category_contents($coursecat) {
    // To display what this category contains (on category deletion)
    return '';
}
*/
// @codingStandardsIgnoreEnd