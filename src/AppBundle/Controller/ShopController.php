<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Products;
use AppBundle\Entity\ProductCategories;
use AppBundle\Entity\ProductNutrition;
use AppBundle\Entity\Categories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Intl\Intl;


class ShopController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
    	$products = $this->getDoctrine()->getRepository('AppBundle\Entity\Products')->findBy(array('featured' => 1));

    	$categories = $this->getDoctrine()->getRepository('AppBundle\Entity\Categories')->findAll();

        return $this->render('shop/index.html.twig', 
                    array(
                			'products' 		=> $products,
                			'categories' 	=> $categories,
                		)
                );
    }

    /**
     * @Route("/products/{category}", defaults={"category" = null}), name="products")
     * @Route("/products", name="products")
     * @Method("GET")
     */
    public function showProductsAction(Request $request, $category)
    {
    	if($category) {
			$category = $this->getDoctrine()->getRepository('AppBundle\Entity\Categories')->findOneBy(array('name' => $category));
			$categoryProducts = $this->getDoctrine()->getRepository('AppBundle\Entity\ProductCategories')->findBy(array('categoryId' => $category->getId()));

			$products = false;
			foreach($categoryProducts as $productId) {
				$products[] = $this->getDoctrine()->getRepository('AppBundle\Entity\Products')->findOneBy(array('id' => $productId->getProductId()));
			}
    	} else {
	    	$products = $this->getDoctrine()->getRepository('AppBundle\Entity\Products')->findBy(array('featured' => 1));
	    }

    	$categories = $this->getDoctrine()->getRepository('AppBundle\Entity\Categories')->findAll();

    	return $this->render('shop/products.html.twig', 
	    			array(
	    					'products' 		=> $products,
	    					'categories' 	=> $categories,
	    					'category'		=> $category ? $category->getName() : false
	    				)
    			);
    }

    /**
     * @Route("/product/{prodCode}", name="product")
     * @Method("GET")
     */
    public function showProductAction(Products $product)
    {

    	$productNutrition = $this->getDoctrine()->getRepository('AppBundle\Entity\ProductNutrition')->findOneBy(array('prodCode' => $product->getProdCode()));
        $categories = $this->getDoctrine()->getRepository('AppBundle\Entity\Categories')->findAll();

        $form = $this->createFormBuilder(null, array(
            'attr'  => array('class' => "addcart")
            ))
            ->setAction($this->generateUrl('addcart'))
            ->add('qty', IntegerType::class, array(
                'attr'  => array(
                    'class' => "form-control",
                    'min'   => 1
                ),
                'label' => "Qty",
                'data' => 1
            ))
            ->add('prodCode', HiddenType::class, array(
                'attr'  => array('class' => "form-control"),
                'data'  => $product->getProdCode()
            ))
            ->add('addToCart', SubmitType::class, array(
                'attr'  => array('class' => "btn btn-success btn-lg"),
            ))
            ->getForm()
        ;

    	return $this->render('shop/product_show.html.twig', array(
            'product' 			=> $product,
            'productNutrition'	=> $productNutrition,
            'categories' 		=> $categories,
            'form'              => $form->createView()
        ));
    }
}
