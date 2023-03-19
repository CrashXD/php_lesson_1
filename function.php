<?php
    function showMenu($menu = []) {
        // global $headerMenu;
        // print_r($headerMenu);
        if (isset($menu) && is_array($menu)) {
            echo '<ul class="red">';
            foreach ($menu as $item) {
                echo "<li><a href='" . $item['link'] . "'>" . $item['title'] . "</a></li>";
            }
            echo '</ul>';
        }
        // $result = "Generated";
        // echo $result;
        // return [$result, 12, 'asdffads'];
        // return $result;
    }