<?php

class Product
{

    public function get_product($id)
    {
        $databse = new Database;
        $result = $databse->select("products", "*", "id=$id");
        if ($result['msg']['success']) {
            $return = $result['data'];
        }

        $userID = $product['userID'];
        $user = $databse->select('users', 'first_name,last_name', "id=$userID");
        $product['author'] = $user['first_name'] . ' ' . $user['last_name'];

        die(print_r($result['data']));
        return $return;
    }
}
