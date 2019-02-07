<?php
namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Category;


/**
 * @ORM\Entity
 * @ORM\Table(name="BlogPost")
 */
class BlogPost
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * @var bool
     *
     * @ORM\Column(name="draft", type="boolean")
     */
    private $draft = false;

    /**
     *
     *@ORM\ManyToOne(targetEntity="Category", inversedBy="blogPosts")
     */
    private $category;


    public function getTitle(): ?string
    {
        return $this->title;
    }
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    public function getCategory(): ?Collection
    {
      return $this->category;
    }

    public function setCategory(Category $category)
    {
      $this->category = $category;
      return $this;
    }


}
