<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click', '#removePostItem', function (e) {
        e.preventDefault();

        var postId = $(this).attr("data-itemId");
        var menuId = $("#menuId").val();
        console.log(postId, menuId);

        $.ajax({
           type:'PUT',
           url: `/dashboard/menus/${menuId}/item/${postId}/remove`,
           data:{postId:postId,menuId:menuId},
           success:function(data){
              console.log("I'm watching!",data);
           }
        });

        $(`#post-line-${postId}`).remove();
	});
</script>