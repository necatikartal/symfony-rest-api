<?php

namespace Test\RestApiBundle\Controller;

use Test\RestApiBundle\Entity\User;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response as Response;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends FOSRestController
{

    /**
    * Rest@GET()
    */
    public function allUsersAction() {
       return new Response("api_all_users => /api/users/all.{_format} ");
       //will add db operations using doctirne 
    }

    /**
    * Rest@GET("/users/{id}")
    **/
    public function getUsersAction($id) {
        return new Response("api_get_users => /api/users/{".$id."}.{_format} ");
        //will add db operations using doctirne 
        //return $this->container->get('doctrine.entity_manager')->getRepository('User')->find($id);
    }

    /**
    * Rest@POST()
    * @param Request $request the request object
    */
    public function newUsersAction($id) {
        //will add db operations using doctirne 
       return new Response("api_new_users => /api/users/{".$id."}/new.{_format} ");
    }

    /**
    * Rest@Put("/users/{id}")
    * @param Request $request the request object
    */
    public function editUsersAction($id) {
        //will add db operations using doctirne 
       return new Response("api_edit_users => /api/users/{".$id."}/edit.{_format} ");
    }

    /**
    * Rest@Delete("/users/{id}")
    */
    public function removeUsersAction($id) {
        //will add db operations using doctirne 
       return new Response("api_remove_users => /api/users/{".$id."}/remove.{_format} ");
    }
}
