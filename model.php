<?php

// model.php

function open_database_connection() {
    $link = mysql_connect('localhost', 'root');
    mysql_select_db('blog_db', $link);

    return $link;
}

function close_database_connection($link) {
    mysql_close($link);
}

function get_all_posts() {
    $link = open_database_connection();

    $result = mysql_query('SELECT id, title FROM post', $link);
    $posts = array();
    while ($row = mysql_fetch_assoc($result)) {
        $posts[] = $row;
    }
    close_database_connection($link);

    return $posts;
}
