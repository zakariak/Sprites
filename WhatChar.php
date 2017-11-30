<?php

/**
 *
 */

class lolCharacter
{

  protected $characterName = null;

  public function getHTML() {
    return '<span class=' . $this->characterName . '"</span>';
  }

}


class warwick extends lolCharacter {
  public function __construct() {
    $this->characterName = 'warwick';
  }
}


class veigar extends lolCharacter {

  public function __construct() {
    $this->characterName = 'veigar';
  }
}

class zyra extends lolCharacter {

  public function __construct() {
    $this->characterName = 'Zyra';
  }
}

// create object
$warwick = new warwick();
echo $warwick->getHTML()
// $zyra = new zyra();
// echo $zyra->getHTML();
// $zyra = new zyra();


 ?>
