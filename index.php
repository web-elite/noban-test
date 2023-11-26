<?php

class NobanTestApp
{
    function __construct()
    {
        $this->load_dependencies();
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->safeLoad();

        $_REQUEST['_SERVER'] = $_SERVER;
        $_REQUEST['_POST'] = ($_POST);
        $_REQUEST['_GET'] = ($_GET);
        $_REQUEST['_FILES'] = ($_FILES);
        $this->view($_REQUEST);
    }

    private function load_dependencies()
    {
        require_once 'vendor/autoload.php';
        require_once 'includes/classes/Database.php';
        include_once 'includes/helper.php';
    }

    function view($request)
    {
        if (!empty($request['_GET']['product'])) {
            include_once 'includes/classes/Products.php';
            $product_id = $request['_GET']['product'];
            $products = new Product;
            $product = $products->get_product($product_id);
            return includeWithVariables('template/product-single.php', array('product' => $product));
        }
        include 'template/home.php';
    }
    
}
new NobanTestApp();