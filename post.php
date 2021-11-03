<?php

declare(strict_types=1);

class Post{

    private  $title;
    private  $date;
    private  $content;
    private  $author_name;


    public function __construct($title,$date,$content,$author){
    $this->title = $title;
    $this->date =$date;
    $this->content=$content;
    $this->author=$author;

    }
    
    public function getTitle()
    {
        return $this->title;
    }

   
    public function getDate()
    {
        return $this->date;
    }

   

    public function getContent()
    {
        return $this->content;
    }

 

    public function getAuthor()
    {
        return $this->author_name;
    }

   
  
}






















?>