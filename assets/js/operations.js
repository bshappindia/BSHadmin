$(document).ready(function() {
    const root_url = "http://139.59.61.90//main/";
    
    $().ready(function() {
      
        $(".verifyButton").click(function(){
            let oid = jQuery(this).attr('oid');
            operation(oid,jQuery(this).attr('t'),true);
            
        });

        $(".deleteButton").click(function(){
            let oid = jQuery(this).attr('oid');
            operation(oid,jQuery(this).attr('t'),false);
        });


    });

    function operation(oid,type,verified)
    {
        console.log(verified);
        $.ajax({
            url : "../mw.php",
            data: {
                oid: oid,
                type : type,
                verified : verified
            },
            dataType:"JSON",
            type: "POST",
            success:function(json){
                if (json.status == 1){
                    $("#"+oid+"_rootElement").remove();
                    alert(json.msg);
                }else{
                    alert(json.error);
                }
                // console.log(json)
            }
        })
    }



});


