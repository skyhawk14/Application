<?php

class Product
{

    public $productArray = array(
        "wristWear03" => array(
            'id' => '4',
            'name' => 'Water Bottle',
            'code' => 'waterBottle04',
            'image' => 'product-images/bottle.jpg',
            'price' => '100.00'
        ),
        "chair" => array(
            'id' => '5',
            'name' => 'Gaming Chair',
            'code' => 'chair',
            'image' => 'product-images/chair.jpg',
            'price' => '3000.00'
        ),
        "earphone" => array(
            'id' => '6',
            'name' => 'Bluetooth Earphone',
            'code' => 'earphone',
            'image' => 'product-images/earphone.jpg',
            'price' => '300.00'
        ),
        "ipad" => array(
            'id' => '7',
            'name' => 'Ipad',
            'code' => 'ipad',
            'image' => 'product-images/ipad.jpg',
            'price' => '29999.00'
        ),
        "keyboard" => array(
            'id' => '8',
            'name' => 'Wireless Keyboard',
            'code' => 'keyboard',
            'image' => 'product-images/keyboard.jpg',
            'price' => '1100.00'
        ),
        "laptop" => array(
            'id' => '9',
            'name' => 'Laptop',
            'code' => 'laptop',
            'image' => 'product-images/laptop.jpg',
            'price' => '80000.00'
        ),
        "mobile" => array(
            'id' => '10',
            'name' => 'Mobile',
            'code' => 'mobile',
            'image' => 'product-images/mobile.jpg',
            'price' => '300.00'
        ),
        "monitor" => array(
            'id' => '11',
            'name' => 'Monitor',
            'code' => 'monitor',
            'image' => 'product-images/monitor.jpg',
            'price' => '300.00'
        ),
        "3DcAM01" => array(
            'id' => '1',
            'name' => '3D Camera',
            'code' => '3DcAM01',
            'image' => 'product-images/camera.jpg',
            'price' => '1500.00'
        ),
        "USB02" => array(
            'id' => '2',
            'name' => 'External Hard Drive',
            'code' => 'USB02',
            'image' => 'product-images/external-hard-drive.jpg',
            'price' => '800.00'
        ),
        "wristWear03" => array(
            'id' => '3',
            'name' => 'Wrist Watch',
            'code' => 'wristWear03',
            'image' => 'product-images/watch.jpg',
            'price' => '300.00'
        ),
        "mouse" => array(
            'id' => '11',
            'name' => 'Mouse',
            'code' => 'mouse',
            'image' => 'product-images/mouse.jpg',
            'price' => '500.00'
        ),
        "mousepad" => array(
            'id' => '12',
            'name' => 'Mouse Pad',
            'code' => 'mousepad',
            'image' => 'product-images/mousePad.jpg',
            'price' => '100.00'
        ),
        "pen" => array(
            'id' => '13',
            'name' => 'Pen',
            'code' => 'pen',
            'image' => 'product-images/pen.jpg',
            'price' => '50.00'
        ),
        "pendrive" => array(
            'id' => '14',
            'name' => 'Pendrive',
            'code' => 'pendrive',
            'image' => 'product-images/penDrive.jpg',
            'price' => '500.00'
        ),
        "speaker" => array(
            'id' => '15',
            'name' => 'Speaker',
            'code' => 'speaker',
            'image' => 'product-images/speaker.jpg',
            'price' => '6500.00'
        ),
        "studyTable" => array(
            'id' => '16',
            'name' => 'Study Table',
            'code' => 'studyTable',
            'image' => 'product-images/studyTable.jpg',
            'price' => '4000.00'
        ),
        "tableLamp" => array(
            'id' => '17',
            'name' => 'Table Lamp',
            'code' => 'tableLamp',
            'image' => 'product-images/tableLamp.jpg',
            'price' => '400.00'
        ),
        "tv" => array(
            'id' => '18',
            'name' => 'TV',
            'code' => 'tv',
            'image' => 'product-images/tv.jpg',
            'price' => '32000.00'
        ),
        "usbHub" => array(
            'id' => '19',
            'name' => 'USB Hub',
            'code' => 'usbHub',
            'image' => 'product-images/usbHub.jpg',
            'price' => '3000.00'
        ),
        "extensionBoard" => array(
            'id' => '20',
            'name' => 'Extension Board              ',
            'code' => 'extensionBoard',
            'image' => 'product-images/extensionBoard.jpg',
            'price' => '15000.00'
        ),

        
    );

    public function getAllProduct()
    {
        return $this->productArray;
    }
}
