<!doctype html>
<style>
    <?php
        include 'style/video.css'; 
    ?>
</style>
<html>
<head>
    <title>filter</title>
</head>
<body>
<form method="post" action="test1.php">
    <?php
        include_once 'db/Tags.class.php';
        $tags = new Tags();
        $categories = $tags->getAllCategories();
        foreach ($categories as $value) { 
    ?>
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#sub"><?php echo $value; ?></a>
                </div>
                <div id="sub" class="collapse">
                    <?php
                        include_once 'db/Tags.class.php';
                        $tags = new Tags();
                        $subTags = $tags->getTags($value);
                        foreach ($subTags as $subTag) {
                        ?>
                            <li>
                                <input type=checkbox 
                                        id= <?php echo $subTag->get_name() ?> 
                                        name=<?php echo $subTag->get_name() ?>  
                                        value=<?php echo $subTag->get_name() ?>
                                >
                                <label for=<?php echo $subTag->get_name() ?> > <?php echo $subTag->get_name() ?></label>
                            </li>                            
                    <?php } ?>
                   
                </div>
            </div>
    <?php } ?>
    
    <input type="submit">
</form>
</body>
</html>