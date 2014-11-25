$(function () {
    $("#accordion").accordion({
        collapsible: true
    });
    
    $(document).on('change', "#filiere_filter", function(ev){
        ev.preventDefault();
        var id = $(this).val();
        $.get('formations/formations_list/'+id, function(response) {
            $("#university_training_filter").html(response);
        });
    });
    
    $(document).on('change', "#category_filter", function(ev){
        ev.preventDefault();
        var id = $(this).val();
        $.get('trainTopics/list_topics/'+id, function(response) {
            $("#topic_block").html(response);
        });
    });
    
    $(document).on('change', "#topic_filter", function(ev){
        ev.preventDefault();
        var id = $(this).val();
        alert("la valeur de l'id "+id);
        $.get('trainings/list_trainings/'+id, function(response) {
            $("#training_block").html(response);
        });
    });
    
    $( "#tabInfoDetails" ).tabs();
});

/*
 preloader();
 var find_course = '"Rechercher un cours"';
 var homepage_spotbanner3 = '<h3>Formation et certification tout-en-un</h3><h4>Avec l’offre spéciale certification</h4>'
 var imag = '';
 $(document).ready(function () {
 var homepage_spotbanner_yn = "Y";
 if (homepage_spotbanner_yn == 'N' || homepage_spotbanner_yn == 'n')
 $('#spot_main_container').css('display', 'none');
 if (homepage_spotbanner_yn == 'Y' || homepage_spotbanner_yn == 'y')
 $('#spot_main_container').css('display', 'block');
 if (orgid == 34 ||
 orgid == 28 ||
 orgid == 26 ||
 orgid == 38 ||
 orgid == 32 ||
 orgid == 30 ||
 orgid == 39 ||
 orgid == 37 ||
 orgid == 40 ||
 orgid == 52 ||
 orgid == 29 ||
 orgid == 27 ||
 orgid == 53 ||
 orgid == 9 ||
 orgid == 10 ||
 orgid == 35 ||
 orgid == 44 ||
 orgid == 54 ||
 orgid == 14 ||
 orgid == 47 ||
 orgid == 20 ||
 orgid == 56 ||
 orgid == 57 ||
 orgid == 42 ||
 orgid == 13 ||
 orgid == 16 ||
 orgid == 49 ||
 orgid == 59 ||
 orgid == 58 ||
 orgid == 68 ||
 orgid == 48 ||
 orgid == 400 ||
 orgid == 44001 ||
 orgid == 44002 ||
 orgid == 44003 ||
 orgid == 44004 ||
 orgid == 12311 ||
 orgid == 12312 ||
 orgid == 12313 ||
 orgid == 12314 ||
 orgid == 41 ||
 orgid == 11 ||
 orgid == 47005 ||
 orgid == 47007 ||
 orgid == 47001 ||
 orgid == 47006 ||
 orgid == 47004 ||
 orgid == 47003 ||
 orgid == 47002 ||
 orgid == 47008 ||
 orgid == 898792183 ||
 orgid == 47010 ||
 orgid == 47011 ||
 orgid == 36001 ||
 orgid == 36 ||
 orgid == 8 ||
 orgid == 12 ||
 orgid == 64 ||
 orgid == 51 ||
 orgid == 897738626 ||
 orgid == 61 ||
 orgid == 47013 ||
 orgid == 44005 ||
 orgid == 44006 ||
 orgid == 47014 ||
 orgid == 47015 ||
 orgid == 47016 ||
 orgid == 47017)
 {
 
 imag += ' < div class = "spot-box" style = "background:url(img/spot-img3.jpg) no-repeat" > ' + homepage_spotbanner3 + '< /div>';
 
 $('#image_url3').append(imag);
 }
 else
 {
 imag += '< div class = "spot-box" style = "background:url(img/spot-img3.jpg) no-repeat" > ' + homepage_spotbanner3 + '< /div>';
 
 $('#image_url3').append(imag);
 }
 
 
 });
 */

