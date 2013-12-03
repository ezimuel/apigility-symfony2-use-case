<?php
namespace ApiBlog\V1\Rest\Post;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use Blog\ExampleBundle\Entity\Post;

class PostResource extends AbstractResourceListener
{
    protected $doctrine;

    public function __construct()
    {
        $symfonyApp = '/path/to/your/symfony2app';
        require_once $symfonyApp . '/app/AppKernel.php';

        $kernel = new \AppKernel('prod', true);
        $kernel->loadClassCache();
        $kernel->boot();

        $this->doctrine = $kernel->getContainer()->get('doctrine')->getManager();
    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        if (!isset($data->title) || !isset($data->content)) {
            return new ApiProblem(400, 'You need a title and a content at least');
        }
        
        $postEntity = new Post();
        $postEntity->setTitle($data->title);
        $postEntity->setContent($data->content);
        if (isset($data->publishDate)) {
            try {
                $publishDate = new \DateTime($data->publishDate);
            } catch (\Exception $e) {
                return new ApiProblem(422, 'The publish date is not a valid date');
            }    
            $postEntity->setPublishDate($publishDate);
        }
        $this->doctrine->persist($postEntity);
        $this->doctrine->flush();

        return $postEntity;
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        $postEntity = $this->doctrine->getRepository('BlogExampleBundle:Post')->find($id);
        if (!empty($postEntity)) {
            $this->doctrine->remove($postEntity);
            $this->doctrine->flush();
            return true;
        }         
        return false;
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        return $this->doctrine->getRepository('BlogExampleBundle:Post')->find($id);
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = array())
    {
        return $this->doctrine->getRepository('BlogExampleBundle:Post')->findAll($params);
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        $postEntity = $this->doctrine->getRepository('BlogExampleBundle:Post')->find($id);
        if (!empty($postEntity)) {
            if (!isset($data->title) && !isset($data->content) && !isset($data->publishDate)) {
                return new ApiProblem(400, 'You must specify a title, or a content or a publishDate at least');
            }
            if (isset($data->title)) {
                $postEntity->setTitle($data->title);
            }
            if (isset($data->content)) {
                $postEntity->setContent($data->content);
            }
            if (isset($data->publishDate)) {
                try {
                    $publishDate = new \DateTime($data->publishDate);
                } catch (\Exception $e) {
                    return new ApiProblem(422, 'The publish date is not a valid date');
                }
                $postEntity->setPublishDate($publishDate);
            }
            $this->doctrine->flush();
        }
        return $postEntity;
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        $postEntity = $this->doctrine->getRepository('BlogExampleBundle:Post')->find($id);
        if (!empty($postEntity)) {
            if (!isset($data->title) || !isset($data->content) || !isset($data->publishDate)) {
                return new ApiProblem(400, 'You must specify the full resource values');
            }
            $postEntity->setTitle($data->title);
            $postEntity->setContent($data->content);
            try {
                $publishDate = new \DateTime($data->publishDate);
            } catch (\Exception $e) {
                return new ApiProblem(422, 'The publish date is not a valid date');
            }
            $postEntity->setPublishDate($publishDate);
            $this->doctrine->flush();
        }
        return $postEntity;
    }
}
