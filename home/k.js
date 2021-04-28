
$(document).ready(function(){  
    alert("adad");
        $.datepicker.setDefaults({  
            dateFormat: 'yyyy-mm-dd'   
       });  
       $(function(){  
            $("#lname1").datepicker();  
       });  


                    $("#btn").on("click", function(e){

                    e.preventDefault();

                    var from_date = $('#lname1').val();  
                                if(from_date != '' )  
                                {  
                                    alert("ddd");
                                    $.ajax({  
                                        url:"../status/timas.php",  
                                        method:"POST",  
                                        data:{from_date:from_date},  
                                        success:function(data)  
                                        {  
                                            alert("a");
                                            $('#kkk').html(data);  
                                        }  
                                    });  
                                }  
                                else  
                                {  
                                    alert("Please Select Date");  
                                }  
                    });
});