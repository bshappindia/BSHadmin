$(document).ready(function() {


    $(".showMore").click(function(){
        $("#myModal").show();
        showModel($(this).attr("oid"),$(this).attr("verified"));
    });

    $("#closeModal").click(function(){
        $("#myModal").hide();
        $("#modalData").html("");
    });



    function showModel(id,verified)
    {
        url = "";
        if(verified == "false")
        {
            url = "../mw1.php?s=unVerifiedMatrimony&id=" + id;
        }else{
            url = "../mw1.php?s=VerifiedMatrimony&id=" + id
        }

        $.ajax({
            url : url,
            dataType:"JSON",
            type: "GET",
            beforeSend:function(){
                $('#loader').show();
                $("#modalData").html("");
            },
            success:function(data){
                if(data == null)
                {
                    alert("No data found");
                }else{
                    str = `<div>
                    <h2>Bio-data</h2>
                    <hr>
                    <h4><b>Date of birth : </b>${data.dob}</h4>
                    <h4><b>Caste :</b> ${data.caste}</h4>
                    <h4><b>Education :</b> ${data.education}</h4>
                    <h4><b>Food :</b> ${data.food}</h4>
                    <h4><b>Gender :</b> ${data.gender}</h4>
                    <h4><b>HandyCaped : </b>${data.handyCaped}</h4>
                    <h4><b>Height :</b> ${data.height}</h4>
                    <h4><b>Job :</b> ${data.job}</h4>
                    <h4><b>Salary :</b>  ${data.dob} </h4>
                    <h4><b>Marital Status :</b>  ${data.maritalStatus}</h4>
                    <h4><b>Phone :</b>  ${data.mobileNumber}</h4>
                    <h4><b>Whatsapp number :</b> ${data.whatsApp}</h4>
                    <h4><b>State :</b>${data.state} <b>City :</b> ${data.city} <b>District : </b>${data.district}</h4>
                    <h4><b>Languages :</b> ${data.language}</h4>
                  </div>
                </div>`;

                $("#modalHeaderName").html(data.name);

                $("#modalData").html(str);

                }
                console.log(data);
                
            },
            complete:function(){
                $('#loader').hide();
            }
        })
    }
});