<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Summer_clothes_factory.php');
require_once('Winter_clothes_factory.php');
require_once('Summer_dresses.php');
require_once('Summer_shirts.php');
require_once('Summer_trousers.php');
require_once('Winter_shirts.php');
require_once('Winter_dresses.php');
require_once('Winter_trousers.php');
require_once('Clothes_model.php');
require_once('Mycollection_model.php');
require_once('Notify_model.php');


class Facade extends CI_Model {
    
    public function getGoods($id) {
        $classClothes = new Clothes_model();
        $data = $classClothes->get_data($id);
        return $data;
    }

    public function goodsCollec($id) {
        $classCollection = new Mycollection_model();
        $data =  $classCollection->getGoods($id);
        return $data;
    }

    public function getheader($uid) {
        $classCollection = new Mycollection_model();
        $classNotify = new Notify_model();
        
        $data['mycollect'] = $classCollection->getCollect($uid);
        $data['newgoods'] = $classNotify->getgoods($uid);
        return $data;
    }

    public function getSummer() {

        $classSummer = new Summer_clothes_factory();
        $data = $classSummer->createClothes();
        return $data;

    }
    public function getWinter() {

        $classWinter = new Winter_clothes_factory();
        $data = $classWinter->createClothes();
        return $data;
    }

    public function getDressesSummer() {

        $classDresses = new Summer_dresses();
        $data = $classDresses->getCharacter();
        return $data;
    }
    public function getTrousersSummer() {

        $classTrousers = new Summer_trousers();
        $data = $classTrousers->getCharacter();
        return $data;
    }
    public function getShirtSummer() {

        $classShirt = new Summer_shirts();
        $data = $classShirt->getCharacter();
        return $data;
    }

    public function getShirtWinter() {

        $classShirt = new Winter_shirts();
        $data = $classShirt->getCharacter();
        return $data;
    }

    public function getDressesWinter() {

        $classDresses = new Winter_dresses();
        $data = $classDresses->getCharacter();
        return $data;
    }

    public function getTrousersWinter() {

        $classTrousers = new Winter_trousers();
        $data = $classTrousers->getCharacter();
        return $data;
    }


        
    
    
}