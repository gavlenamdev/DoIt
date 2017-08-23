<?php
include 'doitheader.php';
include 'doitserver.php';
?>        
<div class="row">
    <form class="col s12">
        <div class="row">
            <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header">
                <?php
                    $query = "SELECT title FROM doit_task WHERE status=0";
                    $result = mysqli_query($dbc,$query);
                    $row = mysqli_num_rows($result);
                    echo "<span class='badge'>".$row."</span>";
                ?>
                <!--<span class="badge">4</span>-->
                <i class="mdi mdi-calendar-multiple prefix"></i>Progress</div>

                <div class="collapsible-body">
                <!... write dynamic starts here......!>
                <ul class="collection">
                <?php 
                    $query = "SELECT * FROM doit_task WHERE status=0";
                    $result = mysqli_query($dbc,$query);
                    while( $row=mysqli_fetch_array($result) ) {
                        $addedDate = $row['date'];
                        $deadline = $row['remain'];
                        $adate = strtotime($addedDate);
                        $ddate = strtotime($deadline);
                        $secs = $ddate-$adate;
                        $days = $secs/86400;
                        $indays = ceil($days);
                        echo "<li class='collection-item'>";
                       	echo "<span class='collection-header'>";
                        echo "<span>".$row['title']." :</span>";
                        echo "<span>".$row['description']." :</span>";
                        //echo "<span>".$row['date']." :</span>";
                        echo "<span>".$indays." :</span>";
                        echo "</span></li>";


                        //echo "<span>"." : ".$indays."</span></li>";
                        //<p><span class='content'>".$row['description']."</span></p>
                    }
                    /*
                    <ul class="collection">
                        <li class="collection-item">
                            <span>Title</span>
                            <p>descriptin</p>
                        </li>
                    </ul> */
                ?>
                </ul>
                <!--
                <p><input type="checkbox" id="test5" />
                <label for="test5">Red</label>
                </p>
                <p><input type="checkbox" id="test6" />
                <label for="test6">Yellow</label>
                </p>-->
                <!...... ends ............!>
                </div>
            </li>

            <li>
            <div class="collapsible-header">
            <?php
                    $query = "SELECT title FROM doit_task WHERE status=1";
                    $result = mysqli_query($dbc,$query);
                    $row = mysqli_num_rows($result);
                    echo "<span class='badge'>".$row."</span>";
            ?>
            <!--<span class="badge">1</span>-->
            <i class="mdi mdi-calendar-check prefix"></i>Done</div>
            <div class="collapsible-body">
            <?php 
                    $query = "SELECT title FROM doit_task WHERE status=1";
                    $result = mysqli_query($dbc,$query);
                    $num=0;
                    while( $row=mysqli_fetch_array($result) ) {
                        echo "<p><input type='checkbox' id='done.$num' checked='checked'/>";
                        echo "<label for='done.$num'>".$row['title']."</label></p>";
                        $num++;
                    }
            ?>
            <!--
            <p>
            <input type="checkbox" id="test7" checked="checked" />
            <label for="test7">Yellow</label>
            </p> -->
            </div>
            </li>
            </ul>
        </div>
    </form>
</div>
