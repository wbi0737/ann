<?php

namespace Wbi\ForumBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Wbi\ForumBundle\Entity\Posts;
use Wbi\ForumBundle\Form\PostsType;
use Wbi\ForumBundle\Entity\Underdomain;
use Symfony\Component\HttpFoundation\Response;

/**
 * Posts controller.
 *
 * @Route("/posts")
 */
class PostsController extends Controller
{
    /**
     * Lists all Posts entities.
     *
     * @Route("/", name="posts")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WbiForumBundle:Posts')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Posts entity.
     *
     * @Route("/{id}/show", name="posts_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WbiForumBundle:Posts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Posts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Posts entity.
     *
     * @Route("/new", name="posts_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Posts();
        $form   = $this->createForm(new PostsType(), $entity);

        return array(
            'entity' => $entity,
           
            'form'   => $form->createView()
                ,
        );
    }

    /**
     * Creates a new Posts entity.
     *
     * @Route("/create", name="posts_create")
     * @Method("POST")
     * @Template("WbiForumBundle:Posts:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Posts();
        $user = $this->get('security.context')->getToken()->getUser();
        $entity->setUser($user);
        $form = $this->createForm(new PostsType(), $entity);
        $form->bind($request);
            
    
            $em = $this->getDoctrine()->getManager();
            
          
 
       
            $em->persist($entity);
            $em->flush();
        
                 
            
            
            return $this->redirect($this->generateUrl('underdomain_show', array('id' => $entity->getUnderdomain()->getId())));
        

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Posts entity.
     *
     * @Route("/{id}/edit", name="posts_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WbiForumBundle:Posts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Posts entity.');
        }

        $editForm = $this->createForm(new PostsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Posts entity.
     *
     * @Route("/{id}/update", name="posts_update")
     * @Method("POST")
     * @Template("WbiForumBundle:Posts:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WbiForumBundle:Posts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Posts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PostsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('posts_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Posts entity.
     *
     * @Route("/{id}/delete", name="posts_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('WbiForumBundle:Posts')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Posts entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('posts'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    /**
     * get_underdomain a sous formulaire entity.
     *
     * @Route("/get-underdomain", name="get_underdomain")
     * 
     * 
     */
    public function getUnderDomainAction(Request $request)
    {
       $em = $this->getDoctrine()->getManager();
       $domainId = $request->get("domain_id");
       $domain = $em->getRepository("WbiForumBundle:Domain")->find($domainId);
       $underDomains = $domain->getUnderDomains();
       $id_array = array();
       foreach ($underDomains as $under){
           $id_array[$under->getId()] = $under->getLabel();
       }
       
       $response = new Response(json_encode($id_array));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    
    /**
     * get_type a sous formulaire entity.
     *
     * @Route("/get-type", name="get_type")
     * 
     * 
     */
    public function getTypeAction(Request $request)
    {
       $em = $this->getDoctrine()->getManager();
       $UnderdomainId = $request->get("underdomain_id");
       $Underdomain = $em->getRepository("WbiForumBundle:UnderDomain")->find($UnderdomainId);
       $types = $Underdomain->getTypes();
       $id_array = array();
       foreach ($types as $type){
           $id_array[$type->getId()] = $type->getLabeltype();
       }
       
       $response = new Response(json_encode($id_array));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    
    
    
}