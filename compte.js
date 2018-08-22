

$(function () {
    


        $("#navbarDropdown").click(function(){
            var bouton = document.getElementById('connexion');
            if (text.innerHTML === "Aujourd'hui vous êtes content!") {
             bouton.textContent = "Mais si je suis content!";
                $("#img").attr('src','image/sad2.png');
                text.textContent = "Aujourd'hui vous n'êtes pas content...";
            }
            else{
                text.textContent = "Aujourd'hui vous êtes content!";
                bouton.textContent = "Non, pas content !";
                $("#img").attr('src','image/content.png');

            }
       
        });

        $("#outil").on('change', function()  {
           if ($('#outil').val() === "traits"){ 
             can.style.cursor = "url(image/trait.cur), pointer";
        }
          if ($('#outil').val() === "rectangle"){ 
             can.style.cursor = "url(image/rect.cur), pointer";
        }
         if ($('#outil').val() === "rectangleP"){ 
             can.style.cursor = "url(image/rectfill.cur), pointer";
        }
        if ($('#outil').val() === "circle"){ 
              can.style.cursor = "url(image/ns.cur), pointer";
          }
          if ($('#outil').val() === "pinceaux"){ 
              can.style.cursor = "url(image/brush.cur), pointer";
          }
           if ($('#outil').val() === "gomme"){ 
             can.style.cursor = "url(image/Eraser.cur), pointer";
          }
            if ($('#outil').val() === "circle full"){ 
             can.style.cursor = "url(image/d.cur), pointer";
          }
    });
           

});



