<?php


//

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Oferta
 * 
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="ProductRepository")
 */
class Product implements UserInterface
{    
    
    public function getCfgGrowth(){     
        return array(
           1 =>'szybkorosnąca',
           2 => 'wolnorosnąca'
        );
    }
    
    public function getCfgEvergreen(){     
        return array(
           1 =>'tak',
           2 => 'nie'
        );
    }
    
    public function getCfgHardy(){     
        return array(
           1 =>'tak',
           2 => 'nie',
           4 => 'wymaga okrywania'
        );
    }
    
    public function getCfgColorLeaf(){     
        return array(
           1 =>'green',
           2 => 'gray',
           4 => 'yellow',
           8 => 'red',
           16 => 'multi',
        );
    }
    
    public function getCfgColorFlower(){     
        return array(
           1 =>'red',
           2 => 'orange',
           4 => 'yellow',
           8 => 'green',
           16 => 'blue',
           32 => 'violet',
           64 => 'pink',
           128 => 'white',
           256 => 'multi',
        );
    }
    

    
    
    public function getCfgTermFruiting(){     
        return array(
           1 =>'january',
           2 => 'february',
           4 => 'march',
           8 => 'april',
           16 => 'may',
           32 => 'june',
           64 => 'july',
           128 => 'august',
           256 => 'septemper',
           512 => 'october',
           1024 => 'november',
           2048 => 'december'
        );
    }
    
    public function getCfgTermFlowering(){     
        return array(
           1 =>'january',
           2 => 'february',
           4 => 'march',
           8 => 'april',
           16 => 'may',
           32 => 'june',
           64 => 'july',
           128 => 'august',
           256 => 'septemper',
           512 => 'october',
           1024 => 'november',
           2048 => 'december'
        );
    }
    
    public function getCfgColorFruits(){     
        return array(
           1 =>'red',
           2 => 'orange',
           4 => 'yellow',
           8 => 'green',
           16 => 'blue',
           32 => 'violet',
           64 => 'pink',
           128 => 'white',
           256 => 'multi',
        );
    }
    
    
    public function getCfgPlace(){     
        return array(
           1 =>'empty',
           2 => 'half',
           4 => 'full'
        );
    }
    
    
    public function getCfgHumidity(){     
        return array(
           1 =>'humidity_1',
           2 => 'humidity_2',
           4 => 'humidity_3'
        );
    }
    
    
    public function getCfgSoilReaction(){     
        return array(
           1 =>'kwaśny',
           2 => 'obojętny',
           4 => 'zasadowy',
           8 => 'roślina tolerancyjna',
        );
    }
    
    public function getCfgCutting(){     
        return array(
           1 =>'cutting_1',
           2 => 'cutting_2'
        );
    }    

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")     
     */
    private $id;
    
    

    /**
     * @var string
     * @Assert\NotBlank()     
     * @ORM\Column(name="name", type="string", length=500, nullable=false)
     */
    private $name;    
    
    
    /**
     * Wysokość od
     * 
     * @var float
     * @Assert\NotBlank()     
     * @ORM\Column(name="height_from", type="decimal", precision=4, scale=2,  nullable=false)
     */
    private $heightFrom;    
    
    /**
     * Wysokość do
     * @var float
     * @Assert\NotBlank()     
     * @ORM\Column(name="height_to", type="decimal", precision=4, scale=2 , nullable=false)
     */
    private $heightTo;   
    
    
    /**
     * Siła wzrostu
     * 
     * @var integer
     * @Assert\NotBlank()     
     * @ORM\Column(name="growth", type="integer",  nullable=false)
     */
    private $growth;  
    
    
    /**
     * Zimozielone
     * @var integer
     * @Assert\NotBlank()     
     * @ORM\Column(name="evergreen", type="integer", nullable=false)
     */
    private $evergreen;  
    
    /**
     * Mrozoodporne
     * @var integer
     * @Assert\NotBlank()     
     * @ORM\Column(name="hardy", type="integer", nullable=false)
     */
    private $hardy;
    
    
    /**
     * Kolor liści
     * @var integer
     * @Assert\NotBlank()     
     * @ORM\Column(name="color_leaf",  type="integer", nullable=false)
     */
    private $colorLeaf;
    
    /**
     * Kolor kwiatów
     * @var integer
     * @Assert\NotBlank()     
     * @ORM\Column(name="color_flower",  type="integer", nullable=false)
     */
    private $colorFlower;
    
    
    /**
     * Kolor owoców
     * @var integer
     * @Assert\NotBlank()     
     * @ORM\Column(name="color_fruit",  type="integer", nullable=false)
     */
    private $colorFruits;
    
    
    /**
     * Termin owocowania
     * @var integer
     * @Assert\NotBlank()     
     * @ORM\Column(name="term_fruiting",  type="integer", nullable=false)
     */
    private $termFruiting;
    
    /**
     * Termin kwitnienia
     * @var integer
     * @Assert\NotBlank()     
     * @ORM\Column(name="term_flowering",  type="integer", nullable=true)
     */
    private $termFlowering;
    
    
    /**
     * Stanowisko nasłonecznienia
     * @var integer
     * @Assert\NotBlank()     
     * @ORM\Column(name="place",  type="integer", nullable=false)
     */
    private $place;
    
    /**
     * Wilgotność
     * @var integer
     * @Assert\NotBlank()     
     * @ORM\Column(name="humidity",  type="integer", nullable=false)
     */
    private $humidity;
    
    
    /**
     * Odczyn gleby
     * @var integer
     * @Assert\NotBlank()     
     * @ORM\Column(name="soil_reaction",  type="integer", nullable=false)
     */
    private $soilReaction;
    
    /**
     * Cięcie
     * @var integer
     * @Assert\NotBlank()     
     * @ORM\Column(name="cutting",  type="integer", nullable=false)
     */
    private $cutting;
 

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Client
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Client
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    public function getSalt()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }
    
    
    public function setUsername($username){
        $this->username = $username;
        return $this;
    }
    
    public function getUsername()
    {
        return $this->username;
    }




    public function getRoles()
    {
        return array('ROLE_USER_BASE');
    }
    
    public function eraseCredentials()
    {
        ;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set heightFrom
     *
     * @param string $heightFrom
     * @return Product
     */
    public function setHeightFrom($heightFrom)
    {
        $this->heightFrom = $heightFrom;

        return $this;
    }

    /**
     * Get heightFrom
     *
     * @return string 
     */
    public function getHeightFrom()
    {
        return $this->heightFrom;
    }

    /**
     * Set heightTo
     *
     * @param string $heightTo
     * @return Product
     */
    public function setHeightTo($heightTo)
    {
        $this->heightTo = $heightTo;

        return $this;
    }

    /**
     * Get heightTo
     *
     * @return string 
     */
    public function getHeightTo()
    {
        return $this->heightTo;
    }

    /**
     * Set growth
     *
     * @param integer $growth
     * @return Product
     */
    public function setGrowth(array $growth)
    {
        
        if(empty($growth)){
            $growth = 0;
            
        }else{
            $growth = array_sum($growth);
        }
        
        $this->growth = $growth;

        return $this;
    }
    
    
    

    /**
     * Get growth
     *
     * @return integer 
     */
    public function getGrowth()
    {
        return $this->growth;
    }

    /**
     * Set evergreen
     *
     * @param integer $evergreen
     * @return Product
     */
    public function setEvergreen($evergreen)
    {
        if(empty($evergreen)){
            $evergreen = 0;            
        }else{
            $evergreen = array_sum($evergreen);
        }
        $this->evergreen = $evergreen;

        return $this;
    }

    /**
     * Get evergreen
     *
     * @return integer 
     */
    public function getEvergreen()
    {
        return $this->evergreen;
    }

    /**
     * Set hardy
     *
     * @param integer $hardy
     * @return Product
     */
    public function setHardy($hardy)
    {
        if(empty($hardy)){
            $hardy = 0;            
        }else{
            $hardy = array_sum($hardy);
        }
        
        
        $this->hardy = $hardy;

        return $this;
    }

    /**
     * Get hardy
     *
     * @return integer 
     */
    public function getHardy()
    {
        return $this->hardy;
    }

    /**
     * Set colorLeaf
     *
     * @param integer $colorLeaf
     * @return Product
     */
    public function setColorLeaf($colorLeaf)
    {         
        if(empty($colorLeaf)){
            $colorLeaf = 0;            
        }else{
            $colorLeaf = array_sum($colorLeaf);
        }
        
        $this->colorLeaf = $colorLeaf;

        return $this;
    }

    /**
     * Get colorLeaf
     *
     * @return integer 
     */
    public function getColorLeaf()
    {
        return $this->colorLeaf;
    }

    /**
     * Set colorFlower
     *
     * @param integer $colorFlower
     * @return Product
     */
    public function setColorFlower($colorFlower)
    {
           if(empty($colorFlower)){
            $colorFlower = 0;            
        }else{
            $colorFlower = array_sum($colorFlower);
        }
        
        $this->colorFlower = $colorFlower;

        return $this;
    }

    /**
     * Get colorFlower
     *
     * @return integer 
     */
    public function getColorFlower()
    {
        return $this->colorFlower;
    }

    /**
     * Set colorFruits
     *
     * @param integer $colorFruits
     * @return Product
     */
    public function setColorFruits($colorFruits)
    {
        if(empty($colorFruits)){
            $colorFruits = 0;            
        }else{
            $colorFruits = array_sum($colorFruits);
        }
        
        $this->colorFruits = $colorFruits;

        return $this;
    }

    /**
     * Get colorFruits
     *
     * @return integer 
     */
    public function getColorFruits()
    {
        return $this->colorFruits;
    }

    /**
     * Set termFruiting
     *
     * @param integer $termFruiting
     * @return Product
     */
    public function setTermFruiting($termFruiting)
    {
        
        if(empty($termFruiting)){
            $termFruiting = 0;
        }else{
            $termFruiting = array_sum($termFruiting);
        }
        
        $this->termFruiting = $termFruiting;

        return $this;
    }

    /**
     * Get termFruiting
     *
     * @return integer 
     */
    public function getTermFruiting()
    {
        return $this->termFruiting;
    }

    /**
     * Set place
     *
     * @param integer $place
     * @return Product
     */
    public function setPlace($place)
    {
        if(empty($place)){
            $place = 0;
        }else{
            $place = array_sum($place);
        }
        
        
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return integer 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set humidity
     *
     * @param integer $humidity
     * @return Product
     */
    public function setHumidity($humidity)
    {
        if(empty($humidity)){
            $humidity = 0;
        }else{
            $humidity = array_sum($humidity);
        }
        
        $this->humidity = $humidity;

        return $this;
    }

    /**
     * Get humidity
     *
     * @return integer 
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set soilReaction
     *
     * @param integer $soilReaction
     * @return Product
     */
    public function setSoilReaction($soilReaction)
    {
        if(empty($soilReaction)){
            $soilReaction = 0;
        }else{
            $soilReaction = array_sum($soilReaction);
        }
        
        $this->soilReaction = $soilReaction;

        return $this;
    }

    /**
     * Get soilReaction
     *
     * @return integer 
     */
    public function getSoilReaction()
    {
        return $this->soilReaction;
    }

    /**
     * Set cutting
     *
     * @param integer $cutting
     * @return Product
     */
    public function setCutting($cutting)
    {
         if(empty($cutting)){
            $cutting = 0;
        }else{
            $cutting = array_sum($cutting);
        }
        
        $this->cutting = $cutting;

        return $this;
    }

    /**
     * Get cutting
     *
     * @return integer 
     */
    public function getCutting()
    {
        return $this->cutting;
    }

    /**
     * Set termFlowering
     *
     * @param integer $termFlowering
     * @return Product
     */
    public function setTermFlowering($termFlowering)
    {
        if(empty($termFlowering)){
            $termFlowering = 0;
        }else{
            $termFlowering = array_sum($termFlowering);
        }
        
        $this->termFlowering = $termFlowering;

        return $this;
    }

    /**
     * Get termFlowering
     *
     * @return integer 
     */
    public function getTermFlowering()
    {
        return $this->termFlowering;
    }
}
