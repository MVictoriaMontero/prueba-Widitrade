<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListProductsController extends AbstractController
{
    /**
     * @Route("/list/products", name="app_list_products")
     */
    public function index(): Response
    {
        $datasJSON = json_decode(file_get_contents(__DIR__.'/../data/data.json'),true);
        //print_r($datasJSON.Items);
        $itemsData = $datasJSON['SearchResult']['Items'];
        //print_r('HEEEYY %%%%: '.count($itemsData));
        //print_r($datasJSON['SearchResult']['Items']);
        return $this->render('list_products/index.html.twig', [
            'controller_name' => 'ListProductsController',
            'datas_json' => $itemsData,
        ]);
    }
}
