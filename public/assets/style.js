$(document).on('change',"#country",function() {
    $(this).find("option:selected").each(function() {
        var optionValue = $(this).attr("value");
        var newurl = jQuery('meta[name="base-url"]').attr('content');
        var _token = jQuery('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: newurl+'/general/'+'states-in-country',
            method: 'post',
            type:'post',
            data:{
                'country_id':optionValue,
            },
            headers: {
                'X-CSRF-Token': _token 
           },
            beforeSend:function(){
                $('#state').html('<option selected hidden>Fetching..State....</option>');
            },
            success: function(p) {
              
                    $("#state").html(p);
            }
        });
    });
}).change();

$(document).on('change',"#state",function() {
    $(this).find("option:selected").each(function() {
        var optionValue = $(this).attr("value");
        var newurl = jQuery('meta[name="base-url"]').attr('content');
        var _token = jQuery('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: newurl+'/general/'+'cities-in-state',
            method: 'post',
            type:'post',
            data:{
                'state_id':optionValue
            },
            headers: {
                'X-CSRF-Token': _token 
           },
            beforeSend:function(){
                $('#city').html('<option selected hidden>Fetching.......</option>');
            },
            success: function(p) {
              
                    $("#city").html(p);
               
            }
        });
    });
}).change();
