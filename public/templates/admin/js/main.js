$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function deleteData(id, url){
    if(confirm('Are you sure?')){
        $.ajax({
            type : 'DELETE',
            datatype: 'JSON' ,
            data:{id},
            url : url,
            success : function (result){
               if (result.error === false){
                    alert(result.message);
                    location.reload();
               }else{
                   alert('Delete data failed :(, please try again later!');
               }
            }

        })
    }
}


