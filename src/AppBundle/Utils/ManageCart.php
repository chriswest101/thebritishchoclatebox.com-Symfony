<?php

namespace AppBundle\Utils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class ManageCart
{

    /**
     * @param $sessionVal
     * @return array
     */
    public function buildCart($sessionVal)
    {
        $cartTotal = 0;
        $cartItemTotal = 0;
        foreach($sessionVal as $key => $item) {
            $cartTotal += $item['price_total'];
            $cartItemTotal += $item['qty'];
        }

        $totals = array(
                            'cartItemTotal'     => $cartItemTotal,
                            'cartPriceTotal'    => number_format($cartTotal, 2, ".", ""),
                        );

        return array(
                'sessionVal'        => $sessionVal,
                'totals'            => $totals
            );
    }

    /**
     * @param $data
     * @param $sessionVal
     * @return mixed
     */
    public function changeCart($data, $sessionVal)
    {
        if(isset($data['remove'])) {
            foreach($data['remove'] as $code => $item) {
                if(isset($sessionVal[$code])){
                    unset($sessionVal[$code]);
                }
            }
        }
        if(isset($data['update'])) {
            foreach($data['update'] as $code => $item) {
                if(isset($sessionVal[$code])){
                    $sessionVal[$code]['qty'] = $data['qty'][$code];
                    $sessionVal[$code]['price_total'] = $sessionVal[$code]['price_unit'] * $data['qty'][$code];
                }
            }
        }

        return $sessionVal;
    }
}