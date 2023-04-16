<script>
    $("#posts").on("change",function(){
            var postId = $(this).val();
            var postName = $(this).children(':selected').text();
            console.log(postName);

            var html = '';
            html += '<div id="inputFormRow" class="input-group">';

            html += '<input type="text" name="postsIds['+postId+']" value="'+postName+'" class="form-control" />';

            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remover</button>';

            html += '</div>';
            html += '</div>';

            $('#pages').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
</script>