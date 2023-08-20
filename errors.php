<?php
// errors.php

if (!function_exists('errors')) {
    function errors($errors = []) {
        if (!is_null($errors) && count($errors) > 0) {
            echo '<div class="error">';
            echo '<ul>';
            foreach ($errors as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '</ul>';
            echo '</div>';
        }
    }
}
?>
