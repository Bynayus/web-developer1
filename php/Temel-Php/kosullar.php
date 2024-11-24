<?php
//koşullu ifadeler
//-if else if -else -swith case

//$products = [
//        array('product_id' => 1),
//        array('product_id' => 2),
//        array('product_id' => 3),
//        array('product_id' => 4),
//        array('product_id' => 5),
//]; 

//$products = [
//        ['product_id' =>1, 'name' => 'Bilgisayar', 'color_code' =>'SH', 'color_name' =>'Siyah'],
//        ['product_id' =>2, 'name' => 'Klavye', 'color_code' =>'SH', 'color_name' =>'Beyaz'],
//        ['product_id' =>3, 'name' => 'Mause', 'color_code' =>'SH', 'color_name' =>'Kırmızı'],
//];

//if (is_array($products)){
//        print_r($products);
//}
//else{
//        print 'Bu bir dzi değildir';
//}

//if (isset($products)){
//        print_r($products);
//}
//else{
//        print 'Bu bir değisken tanımlı değildir';
//}

//if (isset($products[3])){
//        print_r($products);
//}
//else if (empty($products)){
//        print 'Bu bir değisken tanımlı değildir';
//}
//else{
//        print 'herhangi bir koşul çalışmadı';
//}

//if($products[0]['product_id']>2){
//        print $products[0]['name'];
//}

//swith case yapısı

//$products = [
//        ['product_id' =>1, 'name' => 'Bilgisayar', 'color_code' =>'SH', 'color_name' =>'Siyah'],
//        ['product_id' =>2, 'name' => 'Klavye', 'color_code' =>'SH', 'color_name' =>'Beyaz'],
//        ['product_id' =>3, 'name' => 'Mause', 'color_code' =>'SH', 'color_name' =>'Kırmızı'],
//];

//$product_name='Bilgisayar';
//switch ($product_name){
//        case 'Klavye':
//                print'Klavyeyim';
//                break;
//
//      case 'Bilgisayar':
//                print 'Evet Bu Bilgisayar';
//                break;
//        default:
//             print $product_name . ' ; Default ';
// ///               break;
//}