<?php

$capabilities = array(

    'block/quickcourselist:use' => array(

        'captype' => 'view',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    )

);

?>