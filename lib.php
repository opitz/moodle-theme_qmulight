<?php
// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

function theme_qmulight_page_init(moodle_page $page)
{
    global $CFG, $DB, $USER;

    if ($page->pagelayout == 'mydashboard' && class_exists('\block_landingpage\landingpage')) {
        $redir = \block_landingpage\landingpage::instance()->get_landing_page($USER);
        if ($redir) {
            redirect($redir);
        }
    }
}
