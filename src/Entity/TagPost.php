<?php

namespace App\Entity;

use App\Repository\TagPostRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TagPostRepository::class)]
class TagPost
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $tag_id = null;

    #[ORM\Column]
    private ?int $post_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTagId(): ?int
    {
        return $this->tag_id;
    }

    public function setTagId(int $tag_id): static
    {
        $this->tag_id = $tag_id;

        return $this;
    }

    public function getPostId(): ?int
    {
        return $this->post_id;
    }

    public function setPostId(int $post_id): static
    {
        $this->post_id = $post_id;

        return $this;
    }
}
