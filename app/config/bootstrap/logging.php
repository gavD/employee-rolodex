<?php
use lithium\analysis\Logger;

Logger::config(
    array ('default' =>
        array(
            'production' => array(
                'adapter' => 'File',
                'priority' => array('emergency', 'alert', 'critical', 'error')
            ),
            'development' => array(
                'adapter' => 'File',
                'priority' => array('emergency', 'alert', 'critical', 'error', 'warning')
            ),
            'test' => array(
                'adapter' => 'File',
                'priority' => array('emergency')
            )
    )
));
?>