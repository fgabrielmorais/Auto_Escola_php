<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remicicon.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>Aluno</title>
</head>

<body>


<nav>
        <a href="#" class="logo"><img src="imagens/logoTransparente.png" width="120px"></a>

        <ul class="navbar">
           <li><a href="admin_page.php">Página principal</a></li>
           <li><a href="aluno.php" >Aluno</a></li>
           <li><a href="instrutor.php">Instrutores</a></li>
           <li><a href="cfc.php">CFC</a></li>
           <li><a href="aulas.php" class="active">Aulas</a></li>
           <li><a href="habilitacao.php">Habilitação do condutor</a></li>
        </ul>
</nav>



<section>
<div class="box">

    <div class="img-box">
        <img src="imagens/logoTransparente.png" alt="">
    </div>


    <div class="form-box">
        <h1>Cadastrar um aluno</h1>
        <p>Cadastre o aluno da Auto Escola</p>
        <form action="#">
            
        <div class="input-group">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" placeholder="Informe seu nome completo" required>
        </div>       
        
        <div class="input-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" placeholder="Informe seu e-mail" required>
        </div> 

        <div class="input-group">
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" placeholder="Informe seu telefone" required>
        </div> 

        <div class="input-group">
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" placeholder="Informe seu cpf" required>
        </div> 

        <div class="input-group">
        <label for="data">Data de nascimento</label>
        <input type="date" id="data" placeholder="Informe sua data de nascimento" required>
        </div> 
        
        <div class="input-group">
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" placeholder="Informe seu endereço" required>
        </div> 
        

        <div class="button-group">
               <button>Cadastrar</button> 
        </div>
        </form>
    </div>

</div>   

</section>








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


section{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    min-height: 100vh;

}

.box{
    display: flex;
    width: 930px;
}




.img-box{
    /* background: linear-gradient(190deg, black, #ffdd00); */
    width: 50%;
    display: flex;
    align-items: center;
    border-right: transparent;
    padding: 20px;
    border-radius: 20px 0 0 20px;
}

.img-box img{
    width: 100%;
}


.form-box{
    background-color: transparent;
    backdrop-filter: blur(40px);
    padding: 30px 40px;
    width: 50%;
    border-radius: 0 20px 20px 0;
}

.form-box h2{
    font-size: 30px;
}

.form-box p{
    font-weight: bold;
    color: yellow;
}


.form-box form{
    margin: 20px 0;

}

form .input-group{
    margin-bottom: 15px;
    border-bottom: 2px solid #ffdd00;
}


form .input-group label{
    color: white;
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}



form .input-group input{
    width: 100%;
    height: 47px;
    background: transparent;
    padding: 15px;
    font-size: 15px;
    outline: none;
    border: none;
    transition: all 0.4s ease;
}


::placeholder{
    color: white;
    font-style: italic;
}


form .button-group button{
    width: 100%;
    height: 47px;
    background: linear-gradient(#ffdd00 0 0) var(--p, 0) / var(--p, 0) no-repeat;
    transition: .4s, background-position 0s;
    border-radius: 20px;
    outline: none;
    border: none;
    margin-top: 15px;
    color: white;
    cursor: pointer;
    font-size: 16px;
}

form .button-group button:hover{
 
    --p: 100%;
    color: black;
    font-weight: bold;
}






@media (max-width: 1090px){

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


.box{
    margin-top: 150px;

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
    .img-box{
        display: none;
    }

    .box{
        width: 700px;
    }

    .form-box{
        width: 100%;
        border-radius: 20px;     
    }


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
