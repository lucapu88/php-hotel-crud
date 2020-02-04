<?php
//homepage

include 'functions.php';
$sql = "SELECT id, room_number, floor FROM stanze";
$result = esegui_query($sql);
// apertura tag html, head e body + inclusione navbar
include 'layout/head.php';
?>
    <div class="index">
        <div class="container">
            <div class="row">
                  <img class="img-responsive" src="https://www.jagdhof.com/grafik/resize/1920x880_upload-website-pageimage--benvenuti-al-dolcevita-hotel-jagdhof--2_339_3840x1760.jpg" alt="">
            </div>
        </div>
    </div>
<?php
// footer + chiusura body e html
include 'layout/footer.php'
 ?>
