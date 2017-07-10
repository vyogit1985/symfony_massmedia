<?php
// src/MassMedia/BlogBundle/Entity/Comment.php

namespace MassMedia\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * @ORM\Entity(repositoryClass="MassMedia\BlogBundle\Entity\Repository\CommentRepository")
 * @ORM\Table(name="comment")
 * @ORM\HasLifecycleCallbacks
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $author;

    /**
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    protected $post_id;
    
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
     * Set author
     *
     * @param string $author
     * @return Comment
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Comment
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
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Comment
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set post_id
     *
     * @param \MassMedia\BlogBundle\Entity\Post $postId
     * @return Comment
     */
    public function setPostId(\MassMedia\BlogBundle\Entity\Post $postId = null)
    {
        $this->post_id = $postId;

        return $this;
    }

    /**
     * Get post_id
     *
     * @return \MassMedia\BlogBundle\Entity\Post 
     */
    public function getPostId()
    {
        return $this->post_id;
    }
    
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('author', 
                new Regex(array(
                    'pattern' => '/^[A-ZА-Я][a-zа-я]+\s+[A-ZА-Я][a-zа-я]+$/u', 
                    'htmlPattern' => '^[A-ZА-Я][a-zа-я]+\s+[A-ZА-Я][a-zа-я]+$',
                    'match' => 'false',
                    'message' => 'Має бути два слова кожне починається з великої літери'
                        )));
        $metadata->addPropertyConstraint('content', new NotBlank(array('message' => 'Потрібно ввести коментар')));
    }
 }
