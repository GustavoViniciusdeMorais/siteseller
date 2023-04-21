<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#changeMenuStatus").click(function(e){
        e.preventDefault();
        var selectedOption = $(this).val();
        var menuId = selectedOption.match(/\d/)[0];
        var newStatus = selectedOption.match(/[a-z]*/i)[0];
        console.log(newStatus, menuId);
        $.ajax({
           type:'PUT',
           url: `menus/${menuId}/status`,
           data:{newStatus:newStatus,menuId:menuId},
           success:function(data){
              console.log(data);
           }
        });
	});
</script>