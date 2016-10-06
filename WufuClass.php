<?php


include('WufuLib/WufooApiWrapper.php');


class Wufu {

  private $api_key;
  private $subdomain;
  private $domain;

  function __construct($api_key, $subdomain, $domain) {
    $this->api_key = $api_key;
    $this->subdomain = $subdomain;
    $this->domain = $domain;
  }

  function getForms($identifier = null) {
		$wrapper = new WufooApiWrapper($this->api_key, $this->subdomain, $this->domain);
		return $wrapper->getForms($identifier);
	}

}





?>
