<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#posts").on("change",function(){
            var postId = $(this).val();
            var postName = $(this).children(':selected').text();

            var menuId = $("#menuId").val();
            console.log(postId, menuId);

            var html = '';
            html += `<li id="post-line-${postId}">`;
            html += `${postName}`;
            html += '<button id="removePostItem" type="button" class="btn btn-danger"'
            html +=`data-itemId="${postId}"`;
            html+= '>';
            html += 'Remover';
            html += '</button>';

            html += '</li>';

            $('.posts-list').append(html);

            $.ajax({
                type:'POST',
                url: `/dashboard/menus/${menuId}/item/${postId}`,
                data:{postId:postId,menuId:menuId},
                success:function(data){
                    console.log("I'm watching!",data);
                }
            });
    });

</script>