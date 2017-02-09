<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Products;
use AppBundle\Entity\ProductCategories;
use AppBundle\Entity\ProductNutrition;
use AppBundle\Entity\Categories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Intl\Intl;


class CheckoutController extends Controller
{
    /**
     * @Route("/checkout/stage1", name="checkout_stage1")
     * @Method({"GET", "POST"})
     */
    public function showCheckoutStageOneAction( Request $request )
    {
        $sessionVal = $this->get( 'session' )->get( 'basket' );
        $categories = $this->getDoctrine()->getRepository('AppBundle\Entity\Categories')->findAll();

        if ($request->isMethod('POST')) {
            $data = $request->request->all();

            $sessionVal = $this->get('app.ManageCart')->changeCart($data, $sessionVal);

            $cart = $this->get('app.ManageCart')->buildCart($sessionVal);
            $this->get( 'session' )->set( 'basket', $cart['sessionVal'] );
            $this->get( 'session' )->set( 'basketTotals', $cart['totals'] );

            $this->addFlash(
                'success',
                'Your changes were saved!'
            );
            
        }

        return $this->render('shop/cart_show.html.twig', 
                    array(
                        'cart'           => $sessionVal,
                        'categories'     => $categories
                    )
                );
    }

    /**
     * @Route("/checkout/stage2", name="checkout_stage2")
     */
    public function showCheckoutStageTwoAction()
    {

        return $this->render('shop/cart_show.html.twig',
                array(

                )
            );
    }
}
