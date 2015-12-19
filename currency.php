<?php

/**
 * Get current currency
 * Class currencyWorld
 */
class currencyWorld {
  protected $dollar;
  protected $euro;
  protected $rur;

  public function __construct($dollar_curs, $euro_kurs, $rur_kurs) {
    if (!empty($dollar_curs))  {
      $this->dollar = $dollar_curs;
    }
    if (!empty($euro_kurs))  {
      $this->euro = $euro_kurs;
    }
    if (!empty($rur_kurs))  {
      $this->rur = $rur_kurs;
    }
  }

  public function get_current_course($currency_name, $quantity) {
    return $this->{$currency_name} * $quantity;
  }
}


$all_courses = new currencyWorld(22, 25, 8);

$dollar = $all_courses->get_current_course('dollar', 50);
print $dollar . '<br/>';
$euro = $all_courses->get_current_course('euro', 50);
print $euro . '<br/>';
$rur = $all_courses->get_current_course('rur', 50)  . '<br/>';
print $rur . '<br/>';

?>