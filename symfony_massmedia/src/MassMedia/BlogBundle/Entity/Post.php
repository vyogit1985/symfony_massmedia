<?php
// src/MassMedia/BlogBundle/Entity/Post.php

namespace MassMedia\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="MassMedia\BlogBundle\Entity\Repository\PostRepository")
 * @ORM\Table(name="post")
 * @ORM\HasLifecycleCallbacks
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @ORM\Column(type="blob")
     * @Assert\File(
     *     maxSize = "2M",
     * )
     */
   
    protected $file;

    /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category_id;
    
    /**
     * @ORM\OneToMany(targetEntity="Comment")
     */

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
     * Set name
     *
     * @param string $name
     * @return Post
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
     * Set content
     *
     * @param string $content
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return Post
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set category_id
     *
     * @param \MassMedia\BlogBundle\Entity\Category $categoryId
     * @return Post
     */
    public function setCategoryId(\MassMedia\BlogBundle\Entity\Category $categoryId = null)
    {
        $this->category_id = $categoryId;

        return $this;
    }

    /**
     * Get category_id
     *
     * @return \MassMedia\BlogBundle\Entity\Category 
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }
    
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('name', new NotBlank(array(
            'message' => 'Введіть назву посту'
        )));
        $metadata->addPropertyConstraint('content', new NotBlank(array(
            'message' => 'Пост не має бути пустим'
        )));
    }


    /**
     * Add comments
     *
     * @param \MassMedia\BlogBundle\Entity\Comment $comments
     * @return Post
     */
    public function addComment(\MassMedia\BlogBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \MassMedia\BlogBundle\Entity\Comment $comments
     */
    public function removeComment(\MassMedia\BlogBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
    
    protected $comments;
    
    public function __construct()
    {
        $this->comments = new ArrayCollection();

        //$this->setCreated(new \DateTime());
        //$this->setUpdated(new \DateTime());
    }
    
    public function __toString()
    {
        return $this->getName();
    }
}
