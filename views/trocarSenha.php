<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>

    <style>
    body {
        width: 100%;
        height: 100%;
        background-color: #F5F5F5;
        background-image: url("../views/Design.png");
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
        
    }

    h2{
        margin-top: 200px; 
        width: 400px;
        color: black;   
        font-family: Arial; 
        text-align: left;
        font-size: 40px;

    }
    p{
         
        width: 400px; 
        color: black;  
        font-family: Arial;
        font-size: 23px;
        margin-top: 400px;
        margin-top: auto;
        margin-bottom: 25rem;

    }
     
    h1{
        font-family: Arial;
        text-align: left;
        

    }

    form {
        width: 300px;
        margin: 200px auto;
        text-align: center;
    }

    input {
        display: block;
        margin: 10px auto;
        width: 350px;
        height: 45px;
    }

    input[type="submit"] {
            background-color: #FAFAFA; /* Cor de fundo do botão */
            color: #0A94C1; /* Cor do texto do botão */
            padding: 10px 20px; /* Espaçamento interno do botão */
            border-radius: 5px; 
            cursor: pointer; /* Muda o cursor ao passar o mouse sobre o botão */
            width: 200px;
           
           
        }

    

        
        .sidebar {
            position: fixed;
            top: 0;
            right: 0;
            height: 100%;
            width: 500px; /* Largura da barra lateral */
            background-color: #00AAE0; /* Cor de fundo da barra lateral */
            color: #fff; /* Cor do texto */
            border-radius: 2%;
        }

        a {
            color: rgba(255, 255, 255, 1); /* Define a cor como branca  */
            text-align: end;
        } 

</style> 

</head>

<body>
    <div class="container text-center">
   
        <!-- Colunas divisão 50% -->
         <div class="row">
             <div class="col-6">
                 <h2>Consulta de Número</h2>
                 <p>Consulte qualquer número de telefone celular de maneira rápida e conveniente.</p>

             </div>
             <div class="col-6">
             

             </div>
         </div>
     </div>
      
    <div class="sidebar ">
        <ul>
         <form  method="post" action="../controllers/TrocarSenhaController.php">
          <h3>Trocar Senha</h3>

          <input type="email" name="email" placeholder="email" id="email">
          

        
        
          <button type="submit" class="btn btn-outline-secondary" name="submit">Concluir</button></a>

          <!-- <div class id="btn">
            <a href="../views/registro.php">
            <button type="button" class="btn btn-outline-secondary">CADASTRE-SE</button></a>
           </div> -->
          </form>
        </ul>
    </div> 
</body>
</html>