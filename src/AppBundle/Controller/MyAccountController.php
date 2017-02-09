<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Countries;
use AppBundle\Entity\Categories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Intl\Intl;


class MyAccountController extends Controller
{
    /**
     * @Route("/myaccount", name="myaccount")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request)
    {
        $errors = false;
        $user = $this->get('security.token_storage')->getToken()->getUser();

        if ($request->isMethod('POST')) {
            $data = $request->request->all();

            // Get post password
            $postPassword = $data['confirmPassword'];
            $postPassword = $this->get('security.password_encoder')
                ->encodePassword($user, $postPassword);

            // Get saved user password
            $savedPassword = $user->getPassword();

            // Compare passwords
            if($postPassword != $savedPassword) {
                $errors['incorrectPassword'] = "Sorry the password you provided did not match our records. Please try again.";
            }

            if(!$errors) {
                // 4) save the User!
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
            }
        }


    	$categories = $this->getDoctrine()->getRepository('AppBundle:Categories')->findAll();
        $countries = $this->getDoctrine()->getRepository('AppBundle:Countries')->findAll();
        $counties = $this->getDoctrine()->getRepository('AppBundle:Counties')->findAll();
        $userAddress = $this->getDoctrine()->getRepository('AppBundle:Addresses')->findOneBy(array('emailAddress' => $user->getEmailAddress()));
        $orders = $this->getDoctrine()->getRepository('AppBundle:Orders')->findBy(array('emailAddress' => $user->getEmailAddress()));
        foreach($orders as $order) {
            $orderItems = $this->getDoctrine()->getRepository('AppBundle:OrderItems')->findBy(array('orderId' => $order->getId()));
        }
        var_dump($orders);
        var_dump($orderItems);
        return $this->render('myaccount/main.html.twig', array(
            'categories' 	=> $categories,
            'countries'     => $countries,
            'counties'      => $counties,
            'userAddress'   => $userAddress,
            'user'          => $user,
            'errors'        => $errors
        ));
    }

}
