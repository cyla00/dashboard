
<?php

class Form{

  public function input($type, $name, $label, $value){
    switch ($type) {
      case 'file':
        $input = "<input class=\"form-control\" type=\"$type\" name=\"$name\" value=\"$value\" id=\"$name\">".$value."</input>";
        break;
      case 'date':
        $input = "<input class=\"form-control\" type=\"$type\" name=\"$name\" value=\"$value\" id=\"$name\" required>";
        break;
      default:
        $input = "<input type=\"$type\" id=\"$name\" class=\"form-control\" value=\"$value\" name=\"$name\" required>";
        break;
    }
    return  "<div class=\"form-group col-10\">
            <label for=\"$name\">".$label."</label>"
            .$input.
            "</div>";
  }

  public function hidden($name, $value){
    return "<input type=\"hidden\" value=\"$value\" class=\"form-control\" name=\"$name\" required>";
}

  public function select($name, $label, $options, $value){
    $options_html = '';
    foreach ($options as $key => $val) {
      $options_html .= "<option value=\"$val\">$value</option>";
  }
    return  "<div class=\"form-group col-10\">
            <label for=\"$name\">$label</label>
            <select class=\"form-control\"name=\"$name\" value=\"$value\" id=\"$name\">$options_html</select>
            </div>";
  }

  public function textarea ($name, $label, $value){
    return
    "<label for=\"$name\">".$label."</label>
    <textarea id=\"$name\" class=\"form-control\" rows=\"6\" cols=\"50\" name=\"$name\" required>".$value."</textarea>";
  }

  public function file ($type, $name, $label, $value){
    return  $this->input('file', $name, $label, $value) ;
  }

  public function date ($type, $name, $label, $value){
    return  $this->input('date', $name, $label, $value) ;
  }

  public function submit ($type, $label){
    return "<button type=\"$type\" class=\"btn btn-outline-danger\" name=\"$type\">".$label."</button>";
  }


}
