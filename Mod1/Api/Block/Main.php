<?php
namespace Mod1\Api\Block;
class Main extends \Magento\Framework\View\Element\Template
{
    function _prepareLayout(){

    }

    public function setFilms()
    {
        $json = file_get_contents('https://swapi.co/api/films');
		$films_json = json_decode($json, true);
		$films_full = $films_json['results'];
		$films = [];
		foreach ($films_full as $film) {		
			$films[] = $film['title'];			
		}		
        return $films;
    }
}
