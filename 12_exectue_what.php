<?
   $page_title = "A Basic Program";
   $html_title = "Cwalk | Home";
   $html_description = "C is fun! :)";
   require_once('header.php');
?>
<div class="console">
  $ cat main.c
      #include &#60;stdio.h&#62;

      int main (void) {
        int n;
        n=98;
        printf(n);
        return(0);
      }
  $ gcc main.c
  $ ./a.out
    <input type="text" id="input_0" class="input-medium"/> 
  $
</div>
<div id="message"></div>
<div>
    <p>
        <a id="check" class="btn btn-lg btn-info" href="#" role="button" onclick="check();">Check Answer</a>
        <a id="continue" class="btn btn-lg btn-success" href="#" role="button" style="display:none;">Next Question</a>  
    </p>
</div>
<? require_once('footer.php'); ?>
