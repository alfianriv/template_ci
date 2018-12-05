<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Css {

  public function source($request){
    $source = array(
      'noty' => 'https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css',
      'datatables' => base_url().'assets4/lib/datatables/css/jquery.dataTables.css',
      'select2' => base_url().'assets4/lib/select2/css/select2.min.css',
      'orgchart' => 'https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.3/css/jquery.orgchart.min.css',
    );

    return $source[$request];
  }

  public function generate($request){
    $link = "";
    if(is_array($request)){
      foreach ($request as $key => $value) {
        $link .= '<link rel="stylesheet" href="'.$this->source($value).'">';
      }
    }
    return $link;
  }

}
