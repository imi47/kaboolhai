$( document ).ready(function() {

 

$("#previous").click(function(){

      $("#two").removeAttr("style").hide();
        $("#secnd_step").removeAttr("style").hide();
        $("#basicinfo").removeAttr("style").hide();

        //   $("#one").removeAttr("style").show();
        //   $("#regform").removeAttr("style").show();
        // $("#first_step").show('slow');
     
     
        }); 

$("#second").click(function(){
      $("#two").removeAttr("style").hide();
      $('#first_step').hide();
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
        $("#first_step").removeAttr("style").show();
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
  $("#hobim").click(function(){
    $("#hobbiesm").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upsm').show();
        $('#dom').hide();
      }
      else
      {
        $('#upsm').hide();
        $('#dom').show();
      }
    });
});

  $("#skin").click(function(){
    $("#skin_color").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#up_skin').show();
        $('#down_skin').hide();
      }
      else
      {
        $('#up_skin').hide();
        $('#down_skin').show();
      }
    });
});

   $("#other_language").click(function(){
    $("#other_languages").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#up_other').show();
        $('#do_other').hide();
      }
      else
      {
        $('#up_other').hide();
        $('#do_other').show();
      }
    });
});


   $("#other_languagem").click(function(){
    $("#other_languagesm").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#up_otherm').show();
        $('#do_otherm').hide();
      }
      else
      {
        $('#up_otherm').hide();
        $('#do_otherm').show();
      }
    });
});


   $("#loking_other_language").click(function(){
    $("#loking_other_languages").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#loking_up_other').show();
        $('#loking_do_other').hide();
      }
      else
      {
        $('#loking_up_other').hide();
        $('#loking_do_other').show();
      }
    });
});


   $("#loking_other_languagem").click(function(){
    $("#loking_other_languagesm").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#loking_up_otherm').show();
        $('#loking_do_otherm').hide();
      }
      else
      {
        $('#loking_up_otherm').hide();
        $('#loking_do_otherm').show();
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


$("#affricam").click(function(){
    $("#allaffricam").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upafrm').show();
        $('#downafrm').hide();
      }
      else
      {
        $('#upafrm').hide();
        $('#downafrm').show();
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

$("#antarm").click(function(){
    $("#Antarcticacitym").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upantarm').show();
        $('#downantarm').hide();
      }
      else
      {
        $('#upantarm').hide();
        $('#downantarm').show();
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

$("#aisam").click(function(){
    $("#aisacitym").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upasiam').show();
        $('#downasiam').hide();
      }
      else
      {
        $('#upasiam').hide();
        $('#downasiam').show();
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

$("#europm").click(function(){
    $("#europcitym").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upeuropm').show();
        $('#downeuropm').hide();
      }
      else
      {
        $('#upeuropm').hide();
        $('#downeuropm').show();
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


$("#namricam").click(function(){
    $("#namricacitym").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upnotamrm').show();
        $('#downnotamrm').hide();
      }
      else
      {
        $('#upnotamrm').hide();
        $('#downnotamrm').show();
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


$("#southafricm").click(function(){
    $("#southafriccitym").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upsouthamarm').show();
        $('#downsouamrm').hide();
      }
      else
      {
        $('#upsouthamarm').hide();
        $('#downsouamrm').show();
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


$("#releghistm").click(function(){
    $("#releghistprom").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upreghism').show();
        $('#downrehism').hide();
      }
      else
      {
        $('#upreghism').hide();
        $('#downrehism').show();
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

$("#livelawsm").click(function(){
    $("#livelawsprom").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#uplivlawsm').show();
        $('#downlivlawsm').hide();
      }
      else
      {
        $('#uplivlawsm').hide();
        $('#downlivlawsm').show();
      }
    });
});

$("#sectlookm").click(function(){
    $("#sectlookprom").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upsectm').show();
        $('#downsectm').hide();
      }
      else
      {
        $('#upsectm').hide();
        $('#downsectm').show();
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
$("#praym").click(function(){
    $("#prayprom").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#uppraym').show();
        $('#downpraym').hide();
      }
      else
      {
        $('#uppraym').hide();
        $('#downpraym').show();
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
$("#haschm").click(function(){
    $("#haschprom").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#uphaschildm').show();
        $('#downhaschildm').hide();
      }
      else
      {
        $('#uphaschildm').hide();
        $('#downhaschildm').show();
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


$("#bodutm").click(function(){
    $("#bodutprom").toggle(function(){
      if($(this).is(':visible'))
      {
        $('#upbdytypm').show();
        $('#downbdytym').hide();
      }
      else
      {
        $('#upbdytypm').hide();
        $('#downbdytym').show();
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