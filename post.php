<?php

declare(strict_types=1);

class Post{

    private  $title;
  
    private  $content;
    private  $author;


    public function __construct($title,$date,$content){
    $this->title = $title;
    $this->date =$date;
    $this->content=$content;
   

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

   
  
}


?>