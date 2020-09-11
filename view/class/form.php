
<?php

class Form{

  public function input($type, $name, $label){
    switch ($type) {
      case 'file':
        $input = "<input class=\"form-control\" type=\"$type\" name=\"$name\" value=\"\" id=\"$name\">";
        break;
      case 'date':
        $input = "<input class=\"form-control\" type=\"$type\" name=\"$name\" value=\"AAAA-MM-DD\" id=\"$name\" required>";
        break;
      default:
        $input = "<input type=\"$type\" id=\"$name\" class=\"form-control\" name=\"$name\" required>";
        break;
    }
    return  "<div class=\"form-group col-10\">
            <label for=\"$name\">".$label."</label>"
            .$input.
            "</div>" ;
  }

  public function select($name, $label, $options){
    $options_html ="";
    foreach ($options as $key => $value) {
      $options_html .= "<option value=\"$value\">$value</option>";
  }
    return  "<div class=\"form-group col-10\">
            <label for=\"$name\">$label</label>
            <select class=\"form-control\"name=\"$name\" id=\"$name\">$options_html</select>
            </div>" ;
  }

  public function textarea ($name, $label){
    return
    "<label for=\"$name\">".$label."</label>
    <textarea id=\"$name\" class=\"form-control\" rows=\"6\" cols=\"50\" name=\"$name\" required></textarea>";
  }

  public function file ($type, $name, $label){
    return  $this->input('file', $name, $label) ;
  }

  public function date ($type, $name, $label){
    return  $this->input('date', $name, $label) ;
  }

  public function submit ($type, $label){
    return "<button type=\"$type\" class=\"btn btn-outline-danger\" name=\"$type\">".$label."</button>";
  }


}
