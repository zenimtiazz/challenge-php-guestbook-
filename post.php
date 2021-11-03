<?php

declare(strict_types=1);

class Post{

    private  $title;
   private  $content;
    private  $author;
    private $date;


    public function __construct($title,$content,$author,$date){
    $this->title = $title;
    $this->content=$content;
    $this->author=$author;
    $this->date=$date;
   

    }
    
    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    public function getDate()
    {
        return $this->date;
    }
   
  
}


?>