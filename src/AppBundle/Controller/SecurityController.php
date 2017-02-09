<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\Entity\ProductCategories;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**

 * Controller used to manage the application security.
 * See http://symfony.com/doc/current/cookbook/security/form_login_setup.html.
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */

class SecurityController extends Controller

{

    /**
     * @Route("/login", name="security_login")
     */

    public function loginAction()
    {
        $categories = $this->getDoctrine()->getRepository('AppBundle\Entity\Categories')->findAll();
        $helper = $this->get('security.authentication_utils');

        return $this->render(
                'security/login_form.html.twig', array(
                // last username entered by the user (if any)
                'last_username' => $helper->getLastUsername(),
                // last authentication error (if any)
                'error'         => $helper->getLastAuthenticationError(),
                'categories'    => $categories,
            )
        );

    }


    /**

     * This is the route the user can use to logout.
     * But, this will never be executed. Symfony will intercept this first
     * and handle the logout automatically. See logout in app/config/security.yml
     *
     * @Route("/logout", name="security_logout")
     */

    public function logoutAction()
    {
        throw new \Exception('This should never be reached!');
    }

    /**
     * @Route("/register", name="user_registration")
     * @Method({"GET", "POST"})
     */
    public function registerAction(Request $request)
    {
        $categories = $this->getDoctrine()->getRepository('AppBundle\Entity\Categories')->findAll();

        // 1) build the form
        $user = new Users();
        $form = $this->createForm('AppBundle\Form\UserType', $user);
        $errors = false;
        $success_register = false;

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($request->isMethod('POST')) {
            $data = $request->request->all();            

            $user->setPlainPassword($data['password']);
            $user->setEmailAddress($data['email']);
            $user->setName($data['name']);
            $user->setLastLogin(date("Y-m-d H:i:s"));
            $user->setCreationDate(date("Y-m-d H:i:s"));
            $existingUser = $this->getDoctrine()->getRepository('AppBundle\Entity\Users')->findBy(array('emailAddress' => $user->getEmailAddress()));

            if($existingUser) {
                $errors['emailExists'] = "This email address has already been registered.";
            }
            if($data['email'] == "") {
                $errors['emailEmpty'] = "You have not provided a valid email address";
            }
            if($data['name'] == "") {
                $errors['nameEmpty'] = "You have not provided a full name";
            }
            if($data['password'] == "") {
                $errors['passwordEmpty'] = "You have not provided a password";
            }

            if(!$errors) {
                // 3) Encode the password (you could also do this via Doctrine listener)
                $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($password);

                // 4) save the User!
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                // ... do any other work - like sending them an email, etc
                // maybe set a "flash" success message for the user

                $success_register = true;
            }
        }

        return $this->render(
            'security/register.html.twig', array(
                    'form'                  => $form->createView(),
                    'categories'            => $categories,
                    'errors'                => $errors ? $errors : false,
                    'success_register'      => $success_register
                )
        );
    }

}