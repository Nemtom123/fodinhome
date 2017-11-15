<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.10.30.
 * Time: 10:43
 */
//upload.php
//echo 'done';
$output = '';
if(isset($_FILES['file']['name'][0]))
{
    //echo 'OK';
    foreach($_FILES['file']['name'] as $keys => $values)
    {
        if(move_uploaded_file($_FILES['file']['tmp_name'][$keys], 'image/' . $values))
        {
            $output .= '<div class=col-md-3"><img src="upload/'.$values.'" class="img-responsive" /></div>';
        }
    }
}
echo $output;
?><script>
    // From ReadMe.md

    // the input element, the list (ul) and the drop zone element.
    var input, list, drop;
    // Form.MultipleFileInput instance
    var inputFiles = new Form.MultipleFileInput(input, list, drop, {
        onDragenter: drop.addClass.pass('hover', drop),
        onDragleave: drop.removeClass.pass('hover', drop),
        onDrop: drop.removeClass.pass('hover', drop)
    });

    // Request instance;
    var request = new Request.File({
        url: 'files.php'
        // onSuccess
        // onProgress
    });

    myForm.addEvent('submit', function(event){
        event.preventDefault();
        inputFiles.getFiles().each(function(file){
            request.append('url[]' , file);
        });
        request.send();
    });
</script>
