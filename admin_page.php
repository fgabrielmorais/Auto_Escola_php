<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remicicon.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>Página Inicial</title>
</head>

<body>



<nav>
        <a href="admin_page.php" class="logo"><img src="imagens/logoTransparente.png" width="120px"></a>

        <ul class="navbar">
           <li><a href="admin_page.php" class="active">Página principal</a></li>
           <li><a href="aluno.php" >Aluno</a></li>
           <li><a href="instrutor.php">Instrutores</a></li>
           <li><a href="cfc.php">CFC</a></li>
           <li><a href="aulas.php">Aulas</a></li>
           <li><a href="habilitacao.php">Habilitação do condutor</a></li>
        </ul>
</nav>

    

<div class="boasvindas">
    <div class="detel">
        <h1>Seja Bem-vindo(a)</h1>
        <p>Aqui você poderá ver todos os alunos, instrutores, habilitações e muito mais</p>
        <a href="admin_page.php">Vamos começar?</a>
    </div>
    
    <div class="images">
    <img src="imagens/divulgacao.png">
    </div> 
</div>




</body>


</html>



<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap');


* {
    margin: 0;
    padding: 0;
    font-family: 'Nunito';
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
    color: white;
}


body{
    min-height: 100vh;
    background: black;
}

nav{
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: transparent;
    padding: 28px 12%;
    transition: all .50s ease;
}


.logo{
    display: flex;
    align-items: center;
}

.logo img{

}

.navbar{
    display: flex;

}

.navbar a{
    color: white;
    font-size: 1.1rem;
    font-weight: 500;
    padding: 5px 0;
    margin: 0 30px;
    transition: all .50s ease;
}

.navbar a:hover{
    color: #ffdd00; 
}
.navbar a.active{
    color: #ffdd00 ;
}


.detel{
    margin-right: 250px;
    margin-top: 15%;
    display: flex;
    flex-direction: column;
    justify-content: start;

}

.detel h1{
    font-size: 50px;
    margin-bottom: 20px;
}

.detel p{
    color: white;
    line-height: 22px;
}



.boasvindas{
    width: 80%;
    justify-content: center;
    display: flex;
    flex-direction: space-between;
}




.images img{
    place-items: center;
    height: 500px;
    position: absolute;

    /* transition: bottom 1s, left 1s; */
}

/* .images:hover .shape{
    bottom: 90px;

}

.images:hover .divulgacao{
    left: 45%;
}
 */

.detel a{
    background: linear-gradient(#ffdd00 0 0) var(--p, 0) / var(--p, 0) no-repeat;
    transition: .4s, background-position 0s;
    padding: 10px 16px;
    font-weight: bold;
    display: inline-block;
    color: white;
    margin: 50px 0;
    border-radius: 20px;
}
.detel a:hover{ 
    --p: 100%;
    color: black;
}





@media (max-width: 1600px){
    
    .boasvindas{
    margin-top: 100px;
    }


    .boasvindas .images{
        margin-right: 200px;
        transition: .4s;
     
    }

}

@media (max-width: 1390px){

*{
    text-align: center;
}

.boasvindas{
    margin-top: 300px;
    width: 100%;
    margin-left: 0px;
    text-align: center;
}

.detel{
    margin-right: 0px;
}

.images{
    display: none;
}




img{
    display: flex;
    justify-content: center;
    place-items: center;
    align-items: center;
}


.navbar{
    position: absolute;
    top: 15%;
    width: 270px;
    height: 50vh;
    display: flex;
    flex-direction: column;
    transition: all .50s ease;
}

nav{
    display: flex;
    flex-direction: column;
    justify-content: center;
}



.navbar a {
    display: block;
    
    text-align: center;
    margin: 12px 0;
    padding: 0 25px;
    transition: all .50s ease;
}

.navbar a:hover{
    background: #ffdd00;
    color: black; 
    transform: translateY(5px);
}

.navbar a.active{
    color: yellow;
}

.navbar.open{
    right: 10%;
}
}


@media (max-width: 930px){
  

    nav{
        padding: 14px 2%;
        transition: .2s;
    
    }

    .navbar a {
        padding: 5px 0;
        margin: 0 20px;
    }


}



</style>    
