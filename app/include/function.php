<?php 

    function get_categories() {
        global $link;

        $sql = "SELECT * FROM `categories`";

        $result = mysqli_query($link, $sql);

        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $categories;
    }


    function get_posts() {
        global $link;

        $sql = "SELECT * FROM `posts`";

        $result = mysqli_query($link, $sql);

        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $posts;
    }


    function get_post_by_id($post_id) {
        global $link;

        $sql = "SELECT * FROM posts WHERE id = ".$post_id;

        $result = mysqli_query($link, $sql);

        $post = mysqli_fetch_assoc($result);

        return $post;
    }


    function get_category_by_id($category_id) {
        global $link;

        // print_r($category_id);

        $sql = "SELECT * FROM `posts` WHERE category_id = "."$category_id";

        $result = mysqli_query($link, $sql);

        $category_id = mysqli_fetch_assoc($result);

        // Проверка записи
        if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
    

        return $category_id;
    }
