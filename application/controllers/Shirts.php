<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Shirts extends CI_Controller {
    private $cloth;
    
    public function __construct(string $cloth) {
        $this->cloth = $cloth;
    }
}