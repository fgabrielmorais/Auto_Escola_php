<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Página Inicial</title>
</head>

<body>





<!-- <div class="divOpcao">

<ul>
<li>Alunos</li>
<li>Alunos</li>
<li>Alunos</li>
<li>Alunos</li>
<li>Alunos</li>
</ul>
</div>
</nav>


 -->


<nav>

<div class="divIMG">
    <img src="imagens/logo.png" />
</div>


<div class="divOpcao">
    <a href="#">Alunos</a>
    <a href="#">Instrutores</a>
    <a href="#">CFC</a>  
    <a href="#">Aulas</a>
    <a href="#">Habilitação</a>
</div>


</nav>


</body>


</html>



<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap');


* {
    margin: 0;
    padding: 0;
    font-family: 'Nunito';

}


body{
    background: black;
}

nav{
    display: flex;
    flex-direction: row;
    width: 100%;
    background: transparent;
    /* border-bottom: 1px solid white; */
}


.divIMG img{
    width: 100px;
    margin-right: 20px;
}

.divOpcao{
    display: flex;
    flex-direction: row;
    justify-content: center;
}

.divOpcao a{
    text-decoration: none;
    margin-right: 90px;
    margin-top: 50px;
     color: white;
}

.divOpcao a:hover{
    color: yellow;
    transition: .5s;
}








/* ul{
    display: flex;
     width: 100%;
    flex-direction: row;
}

li{
    position: relative;
    width: 100%;
} */




</style>    
