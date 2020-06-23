<?php

rex_extension::register('STRUCTURE_CONTENT_BEFORE_SLICES', static function (rex_extension_point $ep) {
    // Ausgabe der Übergabewerte im Logfile
    $var = rex_escape(var_export($ep, true));
    demo_addon_logger::log('<pre>' . $var . '</pre>', $ep->getName());
});
