<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão</title>
</head>
<body>
    <h1> Revisão de JavaScript </h1>
    <script>
     const Nome = "Fernando"
     var numero = 11

     let idade = 35

     let meninas = [
        "Deliela", 
        "Kyara", 
        "Mickaela", 
        "Zavira", 
        "Leviathan"
     ]

    for(let i = 0; i <meninas.length; i++)
    {
        document.write(meninas[i]+"<br/>")
    }

    let Lucio = {
        "Nome"   : "Lucio",
        "Idade"  : "22",
        "Peso"   : "75kg",
        "Altura" : "1.81"
    }

    let Rodrivan = {
        "Nome"   : "Rodrivan",
        "Idade"  : "32",
        "Peso"   : "79kg",
        "Altura" : "1.80"
    }

    let Oli = {
        "Nome"   : "Oli",
        "Idade"  : "???",
        "Peso"   : "68kg",
        "Altura" : "1.87"
    }

    let meninos = [Lucio, Rodrivan, Oli]
    for(let i = 0; i <meninos.length; i++)
    {
        document.write(meninos[i].Nome+"<br/>")
    }
    </script>
</body>
</html>