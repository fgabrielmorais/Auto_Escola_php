<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
</head>



<body>


    <section>
    <div class="divIMG">
    <img src="imagens/logoTransparente.png" />
    </div>      

        <div class="form-box">
            <div class="form-value">
                <form action="admin_page.php">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <input type="email" placeholder="Informe seu e-mail" required>
                    </div>

                    <div class="inputbox">
                        <input type="password"  placeholder="Informe sua senha" required>
                    </div>

                    <div class="forget">
                        <label><input type="checkbox"></label>
                        <a href="#">Lembre-se de mim</a>

                    </div>

                    <button>Entrar</button>
                </form>
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

}


body{
    background: black;
}


.divIMG{
    display: flex;
    justify-content: center;
}

.divIMG img{
    width: 30%;
}


section {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 80%;
    /* background: url('imagens/backgroundLegal.jpg')no-repeat;
    background-position: center;
    background-size: cover;
 */

}

.form-box {
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

h2 {
    font-size: 2em;
    color: white;
    text-align: center;
}

.inputbox {
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid white;

}

.inputbox label {
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color: white;
    font-size: 1em;
    pointer-events: none;
    transition: .5s;
}



input:focus~label,
input:valid~label {
    top: -5px;

}

::placeholder{
    color: white;
}


input:invalid ~ label{

    border-bottom: red;
}



.inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding: 0 35px 0 5px;
    color: white;
}

.forget {
    margin: -15px 0 15px;
    font-size: .9em;
    color: white;
    display: flex;
    justify-content: center;
}

.forget label input {
    margin-right: 3px;
}

.forget a {
    color: white;
    text-decoration: none;
}

.forget label a:hover {
    text-decoration: underline;
}

button {
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: linear-gradient(#ffdd00 0 0) var(--p, 0) / var(--p, 0) no-repeat;
    transition: .4s, background-position 0s;
    color: white;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;

}

button:hover{ 
    --p: 100%;
    color: black;
}




@media (max-width: 1640px){
   .form-box{
    width: 700px;
   }
}


@media (max-width: 1090px){

section{
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-left: 50px;
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