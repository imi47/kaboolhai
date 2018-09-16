$( document ).ready(function() {

 

$("#previous").click(function(){

      $("#two").removeAttr("style").hide();
        $("#secnd_step").removeAttr("style").hide();
        $("#basicinfo").removeAttr("style").hide();

          $("#one").removeAttr("style").show();
          $("#regform").removeAttr("style").show();
        $("#first_step").show('slow');
     
     
        }); 

$("#second").click(function(){
      $("#two").removeAttr("style").hide();
      $('#secnd_step').hide();
      $("#three").removeAttr("style").show();
    $("#basicinfo").removeAttr("style").hide();


$("#advanceinfo").removeAttr("style").show();
$('#third_step').removeAttr("style").show();


});

$("#third_pre").click(function(){
      $("#three").removeAttr("style").hide();
      $("#third_step").removeAttr("style").hide();
      $("#advanceinfo").removeAttr("style").hide();
      
      $("#two").removeAttr("style").show();
        $("#secnd_step").removeAttr("style").show();
         $("#basicinfo").removeAttr("style").show();



});
  $("#hobi").click(function(){
    $("#hobbies").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#ups').show();
        $('#do').hide();
      }
      else
      {
        $('#ups').hide();
        $('#do').show();
      }
    });
});


  $("#hobi1").click(function(){
    $("#hobbies1").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#ups1').show();
        $('#do1').hide();
      }
      else
      {
        $('#ups1').hide();
        $('#do1').show();
      }
    });
});

$("#affrica").click(function(){
    $("#allaffrica").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upafr').show();
        $('#downafr').hide();
      }
      else
      {
        $('#upafr').hide();
        $('#downafr').show();
      }
    });
});

$("#antar").click(function(){
    $("#Antarcticacity").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upantar').show();
        $('#downantar').hide();
      }
      else
      {
        $('#upantar').hide();
        $('#downantar').show();
      }
    });

});

$("#aisa").click(function(){
    $("#aisacity").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upasia').show();
        $('#downasia').hide();
      }
      else
      {
        $('#upasia').hide();
        $('#downasia').show();
      }
    });
});

$("#europ").click(function(){
    $("#europcity").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upeurop').show();
        $('#downeurop').hide();
      }
      else
      {
        $('#upeurop').hide();
        $('#downeurop').show();
      }
    });
});

$("#namrica").click(function(){
    $("#namricacity").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upnotamr').show();
        $('#downnotamr').hide();
      }
      else
      {
        $('#upnotamr').hide();
        $('#downnotamr').show();
      }
    });
});

$("#austrailia").click(function(){
    $("#austrailiacity").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upaust').show();
        $('#downaurt').hide();
      }
      else
      {
        $('#upaust').hide();
        $('#downaurt').show();
      }
    });
});

$("#southafric").click(function(){
    $("#southafriccity").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upsouthamar').show();
        $('#downsouamr').hide();
      }
      else
      {
        $('#upsouthamar').hide();
        $('#downsouamr').show();
      }
    });
});

$("#residance").click(function(){
    $("#residancecity").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upressta').show();
        $('#downressta').hide();
      }
      else
      {
        $('#upressta').hide();
        $('#downressta').show();
      }
    });
});

$("#ethnicorg").click(function(){
    $("#ethnicorgpro").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upethnorg').show();
        $('#downethnorg').hide();
      }
      else
      {
        $('#upethnorg').hide();
        $('#downethnorg').show();
      }
    });
});

$("#releghist").click(function(){
    $("#releghistpro").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upreghis').show();
        $('#downrehis').hide();
      }
      else
      {
        $('#upreghis').hide();
        $('#downrehis').show();
      }
    });
});

$("#livelaws").click(function(){
    $("#livelawspro").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#uplivlaws').show();
        $('#downlivlaws').hide();
      }
      else
      {
        $('#uplivlaws').hide();
        $('#downlivlaws').show();
      }
    });
});

$("#sectlook").click(function(){
    $("#sectlookpro").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upsect').show();
        $('#downsect').hide();
      }
      else
      {
        $('#upsect').hide();
        $('#downsect').show();
      }
    });
});

$("#pray").click(function(){
    $("#praypro").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#uppray').show();
        $('#downpray').hide();
      }
      else
      {
        $('#uppray').hide();
        $('#downpray').show();
      }
    });
});

$("#hasch").click(function(){
    $("#haschpro").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#uphaschild').show();
        $('#downhaschild').hide();
      }
      else
      {
        $('#uphaschild').hide();
        $('#downhaschild').show();
      }
    });
});

$("#hvechil").click(function(){
    $("#hvechilpro").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#uphavchil').show();
        $('#downhavchil').hide();
      }
      else
      {
        $('#uphavchil').hide();
        $('#downhavchil').show();
      }
    });
});

$("#bodut").click(function(){
    $("#bodutpro").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upbdytyp').show();
        $('#downbdyty').hide();
      }
      else
      {
        $('#upbdytyp').hide();
        $('#downbdyty').show();
      }
    });
});

$("#obshij").click(function(){
    $("#obshijpro").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upobshij').show();
        $('#downobshij').hide();
      }
      else
      {
        $('#upobshij').hide();
        $('#downobshij').show();
      }
    });
});
  
});