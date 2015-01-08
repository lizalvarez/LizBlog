<?php
require_once(__DIR__ . "/../model/config.php");
//access to file
?>
<h1> Create Blog Post</h1>
<form method="post" action="<?php echo $path . "controller/create-post-php"; ?> 
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title"/>
         </div>
    
        <div>
            <label for="post">Post: </label>
            <textarea name="post"></textarea>
            <!-- text area is a big text box -->
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
