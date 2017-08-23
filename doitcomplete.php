<?php
include 'doitheader.php';
?>
<h4 class="teal-text" style="text-align:center">Complete</h4>

<form class="col s12 l10 offset-l2" action="doitcomp.php" method="post">
    <div class="row">
        <div class="input-field col s12 m10">
            <i class="mdi mdi-account prefix"></i>
            <input id="ttitle" type="text" name="ttitle" value="" length="20" class="validate" required>
            <label for="ttitle">Title</label>                              
        </div>
    </div>
    <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn waves-effect waves-light" type="submit">Submit</button>
        <button class="btn waves-effect waves-light" type="reset">Reset</button>
    </div>
</form>