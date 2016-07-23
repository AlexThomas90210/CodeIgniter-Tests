<?php
class News_model extends CI_Model {
    var $title;
    var $content;
    var $date;

    function __construct() {
        parent::__construct();
    }

    function get_new_news(){
        return "Something Cool";
    }
}

?>
