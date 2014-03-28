<html lang='en'>
    <head>
        <title>Jquery Drag and Drop Puzzle</title>
        <script src="jquery-1.7.2.js" type="text/javascript"></script>
        <script src="ui/jquery.ui.core.js" type="text/javascript"></script>
        <script src="ui/jquery.ui.widget.js" type="text/javascript"></script>
        <script src="ui/jquery.ui.mouse.js" type="text/javascript"></script>
        <script src="ui/jquery.ui.sortable.js" type="text/javascript"></script>

        <link rel="stylesheet" href="demos.css">
        <style>
            #sortable { list-style-type: none; margin: 10px auto; padding: 0; }
            #sortable li { float: left;}       
            .msg_text{text-align: center; padding: 20px; font-size: 30px; text-shadow: 1px 1px 1px rgb(21, 23, 28);} 
        </style>
        
    </head>

    <body>
	<div class="msg_text">Drag and Drop Images and Solve the Puzzle</div>
        <?php
            $image_names = "edfo,exfl,bnni,yboj,nomw,uacl,rler,jjwk,gshf,nduo,pead,jjsq";
            $images = explode(',', $image_names);
            shuffle($images);
            $image_file = 'puzzl2.jpg';

    $src = imagecreatefromjpeg($image_file);
    list($width, $height, $type, $attr) = getimagesize($image_file);

            if($width<500)
       {
            $new_width = $width;
            $new_height= $height;

       }
            else
               {
            $new_width = $width/2;
            $new_height= $height/2;
            }
	    $split_size= "100";
           
            echo "<ul id='sortable' style='width:" . $new_width . "px;height:" . $new_height . "px;'>";
            
            foreach ($images as $key => $image_name) {
 echo "<li class='ui-state-default' id='recordArr_$image_name' style='border:none;width:" . $split_size . "px;height:" . $split_size . "px;'>
 <img src='images/$image_name.jpg' style='border:none;width:" . $split_size . "px;height:" . $split_size . "px;' /></li>";
            }
            
            echo "</ul>";
        ?>
        <script src="js/code.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $("#sortable").sortable({
                    opacity: 0.6,
                    cursor: 'move',
                    update: function() {
                       
                        var winningString="<?=sha1(sha1($image_names))?>";
                        var currentString = '';
                        
                        $('#sortable li').each(function(){
                            var imageId = $(this).attr("id");
                            currentString += imageId.replace("recordArr_", "")+",";
                        });
                        
                        currentString = currentString.substr(0,(currentString.length) -1);
                        
                        if(SHA1(SHA1(currentString)) == winningString){
                            alert("You  Won");
                        }
                        
                    }
                });


            });
            

        </script>



    </body>
</html>

