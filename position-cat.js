Esta página web coloca uma imagem de um bigode em cima de uma imagem de um gato quando o usuário clica nela, mas ela sempre fica 100 pixels abaixo e 100 pixels a partir da esquerda. Altere a função de callback 
para usar as propriedades do evento para posicionar o bigode de acordo com o local onde o usuário clica.

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Challenge: Cat-stache</title>
        <style>
            #mustache-pic {
                position: absolute;
            }
        </style>
    </head>
    <body>
    
        <img id="cat-pic" src="https://www.kasandbox.org/programming-images/animals/cat.png" width="300" alt="cat photo">
        
        <img id="mustache-pic" src="https://www.kasandbox.org/programming-images/misc/mustache.png" alt="mustache" width="100">
        
        <script>
            var catPic = document.getElementById("cat-pic");
            var onCatClick = function(e) {
                var stashePic = document.getElementById("mustache-pic");  
                 stashePic.style.top = e.clientY + "px";
                 stashePic.style.left = e.clientX + "px";
            };
            catPic.addEventListener("click", onCatClick);
            
        </script>
    </body>
</html>
