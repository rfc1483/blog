<?php

function get_post_by_id($id) {
    $link = open_database_connection();

    $id = mysql_real_escape_string($id);
    $query = 'SELECT date, title, body FROM post WHERE id = ' . $id;
    $result = mysql_query($query);
    $row = mysql_fetch_assoc($result);

    close_database_connection($link);

    return $row;
}

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
