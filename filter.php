<!doctype html>
<html>
<head>
    <title>filter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <link rel="stylesheet" href="dist/style.min.css" />
    <script src="dist/jstree.min.js"></script>  
</head>
<body>
    <div id="tree-container"></div>
<script type="text/javascript">
$(document).ready(function(){
    //fill data to tree  with AJAX call
    $('#tree-container').jstree({
    'plugins': ["wholerow", "checkbox"],
        'core' : {
            'data' : {
                "url" : "tree_data.php",
                "plugins" : [ "wholerow", "checkbox" ],
                "dataType" : "json" // needed only if you do not supply JSON headers
            }
        }
    })
});
</script>
</body>

</html>