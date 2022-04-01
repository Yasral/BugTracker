<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;

    // .. (other code)

    public function __construct(){
        // 
    }

    public function getId(){
        return $this->id;
    }

    public function setId(){
        $this->id = $id;
    }


    public function getName(){
        return $this->name;
    }

    public function setName(){
        $this->name = $name;
    }


}