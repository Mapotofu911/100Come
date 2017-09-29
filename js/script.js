function myFunction() {
    var x = document.getElementsByClassName("hidden");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.backgroundColor = "red";
    }
}

$(document).ready(function () {
    $('#Tutoriels').click(function(){
    	$("#myFrame").hide();
        $("#myFrame2").show();

        $.ajax({
            type: 'POST',
            url: './redirect/tutoriels.php',
            async : false,
            success: function() {
            }
        });
        document.getElementById("myFrame2").src = 'tinyfilemanager.php';
        preventDefault();
    });
});

$(document).ready(function () {
    $('#Guides').click(function(){
        $("#myFrame").hide();
        $("#myFrame2").show();

        $.ajax({
            type: 'POST',
            url: './redirect/guides.php',
            //data: { aPath : path2 },
            async : false,
            success: function() {
            }
        });
        document.getElementById("myFrame2").src = 'tinyfilemanager.php';
        preventDefault();
    });
});

$(document).ready(function () {
    $('#DocumentsTechniques').click(function(){
        $("#myFrame").hide();
        $("#myFrame2").show();

        $.ajax({
            type: 'POST',
            url: './redirect/docs_techniques.php',
            async : false,
            success: function() {
            }
        });
        document.getElementById("myFrame2").src = 'tinyfilemanager.php';
        preventDefault();
    });
});

$(document).ready(function () {
    $('#Outils').click(function(){
        $("#myFrame").hide();
        $("#myFrame2").show();

        $.ajax({
            type: 'POST',
            url: './redirect/outils.php',
            async : false,
            success: function() {
            }
        });
        document.getElementById("myFrame2").src = 'tinyfilemanager.php';
        preventDefault();
    });
});

$(document).ready(function () {
    $('#Informations').click(function(){
        $("#myFrame").hide();
        $("#myFrame2").show();

        $.ajax({
            type: 'POST',
            url: './redirect/informations.php',
            async : false,
            success: function() {
            }
        });
        document.getElementById("myFrame2").src = 'tinyfilemanager.php';
        preventDefault();
    });
});

$(document).ready(function () {
    $('#NotesDeVersion').click(function(){
        $("#myFrame").hide();
        $("#myFrame2").show();

        $.ajax({
            type: 'POST',
            url: './redirect/notes_de_versions.php',
            async : false,
            success: function() {
            }
        });
        document.getElementById("myFrame2").src = 'tinyfilemanager.php';
        preventDefault();
    });
});

$(document).ready(function()
{
     $("#toggleChat").click(function()
     {
        $("#monChat").toggle("fade");
        $("#monChat").draggable();
     });

    $("#closeChat").click(function()
     {
        $("#monChat").toggle("fade");
     }); 
});

$(document).ready(function () {
    $('#meteo').click(function(){
        $("#myFrame").hide();
        $("#myFrame2").show();

        $.ajax({
            type: 'POST',
            url: './redirect/meteo.php',
            async : false,
            success: function() {
            }
        });
        document.getElementById("myFrame2").src = 'tinyfilemanager.php';
        preventDefault();
    });
});

$(document).ready(function () {
    $('#BQA').click(function(){
        $("#myFrame").hide();
        $("#myFrame2").show();

        $.ajax({
            type: 'POST',
            url: './redirect/BQA.php',
            async : false,
            success: function() {
            }
        });
        document.getElementById("myFrame2").src = 'tinyfilemanager.php';
        preventDefault();
    });
});

$(document).ready(function () {
    $('#Confiance').click(function(){
        $("#myFrame").hide();
        $("#myFrame2").show();

        $.ajax({
            type: 'POST',
            url: './redirect/confianceSie.php',
            async : false,
            success: function() {
            }
        });
        document.getElementById("myFrame2").src = 'tinyfilemanager.php';
        preventDefault();
    });
});

$(document).ready(function () {
    $('#refresh').click(function() {
    location.reload();
    });
});

$(document).ready(function () {
    $('#refreshHref').click(function() {
    location.reload();
    });
});

$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});

$(document).ready(function () {
    $('#comop').click(function(){
        $("#myFrame").hide();
        $("#myFrame2").show();

        $.ajax({
            type: 'POST',
            url: './redirect/comop.php',
            async : false,
            success: function() {
            }
        });
        document.getElementById("myFrame2").src = 'tinyfilemanager.php';
        preventDefault();
    });
});

$(document).ready(function () {
    $('#organigramme').click(function(){
        $("#myFrame").hide();
        $("#myFrame2").show();

        document.getElementById("myFrame2").src = "./img/84563-organigramme-orange-.jpg";
        $("#myFrame2").contents().find("body").css({'align': 'center'});
        preventDefault();
    });
});