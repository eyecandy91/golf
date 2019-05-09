<?php

if ($_SERVER['SERVER_ADDR'] == '127.0.0.1') {
    $fields = get_fields();?>
    <pre>
        <?php print_r($fields); ?>
    </pre>
<?php
}
?>