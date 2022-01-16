<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use PDF;

class MainController extends Controller
{
    //Return search view
    public function viewSearch()
    {
        return view('search');
    }

    //Get product's key and return Details in new page
    public function search(Request $request)
    {
        //Get just numbers of key (if user inter dkp-******)
        $int = (int) filter_var($request->key, FILTER_SANITIZE_NUMBER_INT);

        //Get details of product with getDataFromDigikala function
        $product = $this->getDataFromDigikala($int);

        //return result in new page
        return view('product' , compact('product'));
    }

    //this function get detail of product with weidner/goutte package
    public function getDataFromDigikala($key)
    {
        $title = "";
        $src = "";
        $price = "";
        $attr = "";

        //make a new instance of goutte
        $client = new Client();

        //Handle a new request with specific key
        $crawler = $client->request('GET', 'https://www.digikala.com/product/dkp-'.$key);

        //Get elements with specific classes
        $crawler->filter('.c-product__title ,.js-gallery-img , .js-price-value , .js-is-expandable > ul ')->each(function ($node) use(&$title , &$src , &$price ,&$attr) {
            if ($node->getNode(0)->nodeName == 'h1') {
                $title = (string)$node->text();
            }
            if ($node->getNode(0)->nodeName == 'img') {
                $src = (string)$node->getNode(0)->getAttribute('data-src');
            }
            if ($node->getNode(0)->nodeName == 'div') {
                $price = (string)$node->html();
            }
            if ($node->getNode(0)->nodeName == 'ul') {
                $attr = (string)$node->html();
            }
        });

        //Prepare attribute of product with eliminating extra elements
        $list = collect();
        foreach (explode('<li>',$attr) as $item){
            $item = str_replace(["<span>" ,"</span>" ,"</li>" ], "", $item);
            $list->push($item);
        }

        //Prepare data for return as an array list
        $product = collect(['title' => $title , 'src' => $src , 'price' => $price , 'attr' => $list]);
        return $product;
    }

    //Generating PDF for API request
    public function generatePDF($request)
    {
        //Get just numbers of key (if user inter dkp-******)
        $int = (int) filter_var($request, FILTER_SANITIZE_NUMBER_INT);

        //Get details of product with getDataFromDigikala function
        $product = $this->getDataFromDigikala($int);

        //Prepare PDF file with carlos-meneses/laravel-mpdf package
        $pdf = PDF::loadView('pdf' , $product);

        return $pdf->stream("$int.pdf");
    }

}
