/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function(){
    $(".showDialog").on("click", function(e){
           e.preventDefault();
           var id = $(this).attr('id');
           url = $(location).attr('href');
           url = url.split('/');
           controller = url[url.length-1];
           id = id.substring(4,id.length);
           $.get(controller+"/view/"+id, function(response){
                $("#dialog").html(response);
                $("#dialog").dialog();
           });
     });
    
    $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
     $(".datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
     if(CKEDITOR) CKEDITOR.replace('editor1');
     if(CKEDITOR) CKEDITOR.replace('editor2');
     if(CKEDITOR) CKEDITOR.replace('editor3');
     if(CKEDITOR) CKEDITOR.replace('editor4');
     if(CKEDITOR) CKEDITOR.replace('editor5');
     
});

