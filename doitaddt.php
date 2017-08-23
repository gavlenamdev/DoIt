<?php
//include_once 'server.php';
include 'doitheader.php';
?>
<h4 class="teal-text" style="text-align:center">Add Task</h4>

<form class="col s12 l10 offset-l2" action="doitaddtt.php" method="post">
    <div class="row">
        <div class="input-field col s12 m10">
            <i class="mdi mdi-account prefix"></i>
            <input id="ttitle" type="text" name="ttitle" value="" length="20" class="validate" required>
            <label for="ttitle">Title</label>                              
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m10">
            <select name="cat">
                <option value="python" >Python</option>
                <option value="java" >Java</option>
                <option value="c++" >C++</option>
                <option value="web" >Web</option>
                <option value="question" >Question</option>
                <option value="algorithm" >Algorithm</option>
                <option value="datastructure" >Data Structure</option>
                <option value="softskills">Soft Skills</option>
                <option value="movies">Movies</option>
                <option value="meaning">Meaning</option>
                <option value="competitive">Competitive</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m10">
            <i class="mdi mdi-tooltip-text prefix"></i>
            <textarea id="tdes" name="tdes" class="materialize-textarea"></textarea>
            <label for="tdes">Description</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m10">
            <i class="mdi mdi-calendar prefix"></i>
            <input id="tdate" type="text" name="tdate" value="" length="20" class="validate" required>
            <label for="tdate">Remaining(yyyy-mm-dd)</label>                              
        </div>
    </div>            
    <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn waves-effect waves-light" type="submit">Submit</button>
        <button class="btn waves-effect waves-light" type="reset">Reset</button>
    </div>
</form>