<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="" class="apiBTN">giglobutton</a>

    <script>
        function rendUsers(data){
            //todo: renderizzare come voglio i dati restituiti dal server

        }

        document.querySelector(".apiBTN").addEventListener("click", (e)=> {
            e.preventDefault;
            fetch ("users.php")
            .then(function(response){
                return response.json();
            })
            .then(function(data){
                console.log(data);
            })
            .catch(function(error){
                console.log(error);
            });
        });
    </script>
</body>
</html>