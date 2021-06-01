<?php

return [
    'datetime' => function ($timestamp) {
        return '<?php echo date("l, F j, Y", ' . $timestamp . '); ?>';
    }
];
