<?php
//include_once 'server.php';
include 'doitheader.php';
?>
 <h4 class="teal-text" style="text-align:center">AddR</h4>

 <form class="col s12 l6 offset-l3" action="doitaddrr.php" method="post">
 	<div class="row">
        <div class="input-field col s12">
            <i class="mdi mdi-account prefix"></i>
            <input id="rname" type="text" name="rname" class="validate" required>
            <label for="rname">Title</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <i class="mdi mdi-lock prefix"></i>
            <input id="rhour" type="password" name="rhour" class="validate" required>
            <label for="rhour">Hours</label>
        </div>
    </div>
    <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn waves-effect waves-light" type="submit">Submit</button>
        <button class="btn waves-effect waves-light" type="reset">Reset</button>
    </div>
</form>