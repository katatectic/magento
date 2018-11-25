<?php
namespace Mod1\Api\Block;
class Show extends \Magento\Framework\View\Element\Template
{
    function _prepareLayout(){

    }

    public function filmDescription()
    {
        $filmId = $this->getRequest()->getParam('id');
        if ($filmId < 0 or $filmId > 8) {
            return $films_json = false;
        }
        else {
            $json = file_get_contents('https://swapi.co/api/films/'.$filmId);
            return $films_json = json_decode($json, true);
        }       
    }    
}
