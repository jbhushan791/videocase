<script>
$(document).ready(function()
    {
 
        $('#tag_list').typeahead(
            {
                source: function(query, result)
                {
                    $.ajax({
                        url:"getTags.php",
                        method:"POST",
                        data:{query:query},
                        dataType:"json",
                        success:function(data)
                        {
                        result($.map(data, function(item){
                            return item;
                        }));
                        }
                    })
                }
            }
        )
    }
);
</script>