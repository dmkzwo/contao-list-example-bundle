<?php

// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['listexample'] = 'Dmkzwo\ContaoListExampleBundle\Module\ListExampleModule';

// Add back end modules
array_insert($GLOBALS['BE_MOD']['content'], 2, array
(
    'dzlistexample' => array
    (
        'tables' => array('tl_dz_listexample')
    )
));