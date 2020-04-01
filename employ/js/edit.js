$(document).ready(function(){

    $("#ecname").prop('readonly', true);
    $("#ecname_save").hide();

    $("#ename").prop('readonly', true);
    $("#ename_save").hide();
  
    $("#eemail").prop('readonly', true);
    $("#eemail_save").hide();

    $("#esq").prop('disabled', true);
    $("#esq_save").hide();
  
    $("#esans").prop('readonly', true);
    $("#esans_save").hide();

    $("#eclogo_1").hide();
    $("#eclogo_save").hide();

    $("#epic_1").hide();
    $("#epic_save").hide();

    $("#ephn").prop('readonly', true);
    $("#ephn_save").hide()








  $("#ecname_change").click(function(){
  $("#ecname_change").hide();
  $("#ecname").prop('readonly', false); 
  $("#ecname_save").show();
  });

  $("#ename_change").click(function(){
  $("#ename_change").hide();
  $("#ename").prop('readonly', false); 
  $("#ename_save").show();
  });

  $("#eemail_change").click(function(){
  $("#eemail_change").hide();
  $("#eemail").prop('readonly', false); 
  $("#eemail_save").show();
  });

  $("#eclogo_change").click(function(){
  $("#eclogo_change").hide();
  $("#eclogo_1").show(); 
  $("#eclogo_save").show();
  });

  $("#epic_change").click(function(){
  $("#epic_change").hide();
  $("#epic_1").show(); 
  $("#epic_save").show();
  });

  $("#esq_change").click(function(){
  $("#esq_change").hide();
  $("#esq").prop('disabled', false); 
  $("#esq_save").show();
  });

  $("#esans_change").click(function(){
  $("#esans_change").hide();
  $("#esans").prop('readonly', false); 
  $("#esans_save").show();
  });

  $("#ephn_change").click(function(){
  $("#ephn_change").hide();
  $("#ephn").prop('readonly', false); 
  $("#ephn_save").show();
  });












       $('#ecname_save').click(function(){
        var ecname =  $('#ecname').val();

              $.ajax({
              url      : './phphid/ecname_hid.php',
              method   : 'post', 
              data     : {ecname : ecname},
              success  : function(response){
                console.log(ecname);          
                 $("#ecname_change").show(); 
                 $("#ecname").prop('readonly', true);
                 $("#ecname_save").hide();

                 
                 }
                 });
                 });





       $('#ename_save').click(function(){
        var ename =  $('#ename').val();

              $.ajax({
              url      : './phphid/ename_hid.php',
              method   : 'post', 
              data     : {ename : ename},
              success  : function(response){
                console.log(ename);          
                 $("#ename_change").show(); 
                 $("#ename").prop('readonly', true);
                 $("#ename_save").hide();

                 
                 }
                 });
                 });


       


       $('#eemail_save').click(function(){
        var eemail =  $('#eemail').val();

              $.ajax({
              url      : './phphid/eemail_hid.php',
              method   : 'post', 
              data     : {eemail : eemail},
              success  : function(response){
                console.log(eemail);          
                 $("#eemail_change").show(); 
                 $("#eemail").prop('readonly', true);
                 $("#eemail_save").hide();

                 
                 }
                 });
                 });


       


       $('#ephn_save').click(function(){
        var ephn =  $('#ephn').val();

              $.ajax({
              url      : './phphid/ephn_hid.php',
              method   : 'post', 
              data     : {ephn : ephn},
              success  : function(response){
                console.log(ephn);          
                 $("#ephn_change").show(); 
                 $("#ephn").prop('readonly', true);
                 $("#ephn_save").hide();

                 
                 }
                 });
                 });


       


       $('#esq_save').click(function(){
        var esq =  $('#esq').val();

              $.ajax({
              url      : './phphid/esq_hid.php',
              method   : 'post', 
              data     : {esq : esq},
              success  : function(response){
                console.log(esq);          
                 $("#esq_change").show(); 
                 $("#esq").prop('disabled', true);
                 $("#esq_save").hide();

                 
                 }
                 });
                 });


       


       $('#esans_save').click(function(){
        var esans =  $('#esans').val();

              $.ajax({
              url      : './phphid/esans_hid.php',
              method   : 'post', 
              data     : {esans : esans},
              success  : function(response){
                console.log(esans);          
                 $("#esans_change").show(); 
                 $("#esans").prop('readonly', true);
                 $("#esans_save").hide();

                 
                 }
                 });
                 });


       


       $('#eclogo_save').click(function(){
        var property = document.getElementById("eclogo_1").files[0];
        var eclogo = new FromData();
         eclogo.append("#eclogo_1",property);

              $.ajax({
              url      : './phphid/eclogo_hid.php',
              method   : 'post', 
              data     : eclogo,
              contentType:false,
              cache :false,
              processData: false,
              success  : function(response){
                console.log(eclogo);          
                 $("#eclogo_change").show(); 
                 $("#eclogo_1").hide();
                 $("#eclogo_save").hide();

                 
                 }
                 });
                 });


       


       $('#epic_save').click(function(){
        var epic = new ($('#epic')[0]);

              $.ajax({
              url      : './phphid/epic_hid.php',
              enctype: 'multipart/form-data',
              method   : 'post', 
              data     : {epic : epic},
              success  : function(response){
                console.log(epic);          
                 $("#epic_change").show(); 
                 $("#epic_1").hide();
                 $("#epic_save").hide();

                 
                 }
                 });
                 });


  



















});
