<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#posts").on("change",function(){
            var postId = $(this).val().match(/\d/)[0];
            var postUrl = $(this).val().match(/(?<=\d\-)[a-z\-]*/i)[0];
            var postName = $(this).children(':selected').text();

            var menuId = $("#menuId").val();
            console.log(postId, 'post url: '+postUrl, menuId);

            var html = '';
            html += `<li id="post-line-${postId}">`;
            html += `<a href="${'/posts/'+postUrl}">`;
            html += `${postName}`;
            html += '</a>';
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