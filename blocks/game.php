<?php
class Game
{
    public string $src;
    public string $name;
    public string $minidesc;
    public float $price;
    public float $discount;
    public float $stars;
    public string $genre;

    public function __construct(string $src = "", string $name = "", string $minidesc = "", float $price = 0, 
                                float $discount = 0, float $stars = 0, string $genre = "") 
    {
        $this->src = $src;
        $this->name = $name;
        $this->minidesc = $minidesc;
        $this->price = $price;
        $this->discount = $discount;
        $this->stars = $stars;
        $this->genre = $genre;
    }

    public function create()
    {
        return
        "<td id='listItem'>".
            "<h4>". htmlspecialchars($this->name) ."</h4>".
            "<a href='../blocks/dummy.php?name=". urlencode($this->name) .
                   "&price=". urlencode($this->price) .
                   "&discount=". urlencode($this->discount) .
                   "&stars=". urlencode($this->stars) .
                   "&genre=". urlencode($this->genre) .
                   "&minidesc=". urlencode($this->minidesc) .
                   "&src=". urlencode($this->src) ."'>".
                "<img src='". htmlspecialchars($this->src) ."' alt='". htmlspecialchars(str_replace(" ", "", $this->name)) .".jpg' width='256px' height='128px'>".
            "</a>".
            "<br>".
            "<h5>Precio: ". number_format($this->price, 2) ."€ <br>".
            "Precio Reducido: ". number_format($this->price - $this->discount, 2) ."€<br>".
            transformToStars($this->stars) ."</h5>".
        "</td>";
    }
    
}