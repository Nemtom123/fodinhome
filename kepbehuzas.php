<?php
require_once("session.php");
require_once("error.php");
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
include_once("raktarheader.php");
include_once("raktarmenu.php");
?>
    <body>
<br><br><br>
<div class="container" style="width:700px;" align="center">
    <h3 class="text-center">A fájlok feltöltése</h3><br/>
    <h4 class="text-center">A megfelelő névvel kell ellátni a képet, csak akkor jelenik meg</h4><br/>
    <div class="file_drag_area">Húzd ide a képet</div>
    <div id="uploaded_file">Feltőltés</div>
</div>
<?php
$files =  glob('image/*.{jpg,png}', GLOB_BRACE);
if ($files !== false)
{
foreach($files as $f=>$val) {
if ($val == '..' || $val == '.')
    ?>
    <div style="float:left;  margin-left: 10px; width: 300px;">
    <img src="<?php echo 'image/'.$val?>" height="200" width="202">
    <img alt="<?php echo $val ?>"  height="200" width="202">
    </div>
    <?php
}
}
?>
<br>
<script>
    $(document).ready(function () {
        $('.file_drag_area').on('dragover', function () {
            $(this).addClass('file_drag_over');
            return false;
        });
        $('.file_drag_area').on('dragleave', function () {
            $(this).removeClass('file_drag_over');
            return false;
        });
        $('.file_drag_area').on('dragleave', function () {
            eventName: eventHandler;
        });
        $('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            var formData = new FormData();
            var files_list = e.originalEvent.dataTransfer.files;
            //console.log(files_list);
            for (var i = 0; i < files_list.length; i++) {
                formData.append('file[]', files_list[i]);
            }
            //console.log(formData);
            $.ajax({
                url: "upload.php",
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#uploaded_file').html(data);
                }
            })
        });
    });
</script>
<?php


$path = 'image';
$dh = opendir($path);
$files = array();
while (false !== ($file = readdir($dh))) {
    if ($file != "." && $file != "..") {
        $files[] = $file; //fájlok nevei a files tömbbe kerülnek
    }
}

include_once("raktarfooter.php");
?>