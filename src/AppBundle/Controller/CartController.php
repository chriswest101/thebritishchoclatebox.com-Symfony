<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Products;
use AppBundle\Entity\ProductCategories;
use AppBundle\Entity\ProductNutrition;
use AppBundle\Entity\Categories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Intl\Intl;


class CartController extends Controller
{

    /**
     * @Route("/addcart", name="addcart")
     * @Method("POST")
     */
    public function addAction( Request $request ) { 

	    $sessionVal = $this->get( 'session' )->get( 'basket' );
	    $basket = $request->request->all();

	    if(isset($sessionVal[$basket['prodCode']])){
	        $sessionVal[$basket['prodCode']]['qty'] += $basket['qty'];
            $sessionVal[$basket['prodCode']]['price_total'] = $sessionVal[$basket['prodCode']]['price_unit'] * $basket['qty'];
	    } else {
            $product = $this->getDoctrine()->getRepository('AppBundle\Entity\Products')->findOneBy(array('prodCode' => $basket['prodCode']));
	        $sessionVal[$basket['prodCode']]= array(
	            'prodCode'         => $basket['prodCode'],
	            'qty'              => $basket['qty'],
                'price_unit'       => $product->getSalePrice() > 0.00 ? $product->getSalePrice() : $product->getPrice(),
                'price_total'      => ($product->getSalePrice() > 0.00 ? $product->getSalePrice() : $product->getPrice()) * $basket['qty'],
                'product'          => $product
	        );
	    }	    

        $cart = $this->get('app.ManageCart')->buildCart($sessionVal);
        $this->get( 'session' )->set( 'basket', $cart['sessionVal'] );
        $this->get( 'session' )->set( 'basketTotals', $cart['totals'] );

        return new JsonResponse( $cart['totals'] );
	}

    /**
     * @Route("/clearcart", name="clearcart")
     * @Method("GET")
     */
    public function clearCartAction( Request $request ) {
        $this->get( 'session' )->clear();  
        $categories = $this->getDoctrine()->getRepository('AppBundle\Entity\Categories')->findAll();

        return $this->render('shop/cart_show.html.twig', 
                    array(
                        'categories'     => $categories
                    )
                );
    }

    /**
     * @Route("/cart", name="viewcart")
     * @Method({"GET", "POST"})
     */
    public function showCartAction( Request $request ) {
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
}
