<?
$page_title = 'Else Statements';
$html_title = $page_title . ' | cwalk';
$instructions = 'Fill the blanks.';
$html_description = "$page_title: $instructions";
require_once('header.php');
?>
<div class="instructions">
    <p><?= $instructions ?></p>
</div>
<div class="console">$ cat main.c
#include &#60;stdio.h&#62;

int main(void)
{
    int n = 5;
    if (n &60; 1) {
        printf("A\n");
    }
    else {
        printf("B\n");
    }
    return (0);
}

$ gcc main.c
$ ./a.out
<input type="text" id="input_0" class="input-small"/>
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
