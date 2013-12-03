<?php

namespace Blog\ExampleBundle\Service;

class Post
{
    private $doctrine;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function persist($entity)
    {
        $this->doctrine->getManager()->persist($entity);
        $this->doctrine->getManager()->flush();
    }

    public function getAll()
    {
        return $this->doctrine->getRepository('BlogExampleBundle:Post')->findAll();
    }

    public function get($id)
    {
        return $this->doctrine->getRepository('BlogExampleBundle:Post')->find($id);
    }
}
