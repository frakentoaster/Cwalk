<?
   $page_title = "A Basic Program";
   $html_title = "Cwalk | Home";
   $html_description = "C is fun! :)";
   require_once('header.php');
?>
<div class="ide">
  #<input type="text" id="input_0" class="input-large"/> &#60;stdio.h&#62;
  
  int main(void){
      char c<input type="text" id="input_1" class="input-small"/>
      c = 'H'<input type="text" id="input_2" class="input-small"/>
      printf("<input type="text" id="input_3" class="input-medium"/>\n",c)<input type="text" id="input_4" class="input-small"/>
      return(0)<input type="text" id="input_5" class="input-small"/>
  }
</div>
<div id="message"></div>
<div>
    <p>
        <a id="check" class="btn btn-lg btn-info" href="#" role="button" onclick="check();">Check Answer</a>
        <a id="continue" class="btn btn-lg btn-success" href="#" role="button" style="display:none;">Next Question</a>  
    </p>
</div>
<? require_once('footer.php'); ?>
