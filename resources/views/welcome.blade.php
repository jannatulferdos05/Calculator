<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="styles.css" rel="stylesheet">

        <style>
            body{
             padding: 10;
             margin: 10;
             background: linear-gradient(to right,#00AAFF,#00FF6C);

            }
            .f{
                background-color: #3a4452;
                padding: 15px;
            }
            .container{
             width: 100%;
             height: 100vh;
             display: flex;
             align-items: center;
             justify-content: center;
            }

            .calculator{
                background: #3a4452;
                padding: 40px;
                border-radius: 10px;
            }

            .calculator form button{
                border: 0;
                outline: 0;
                width: 55px;
                height:55px;
                border-radius:5px;
                box-shadow: -8px -8px 10px;
                background: transparent;
                font-size: 20px;
                color:#fff;
                cursor: pointer;
                margin:10px;

            }

            .calculator form input{
                border: 0;
                outline: 0;
                width: 55px;
                height:55px;
                border-radius:5px;
                box-shadow: -8px -8px 10px;
                background: transparent;
                font-size: 20px;
                color:#fff;
                cursor: pointer;
                margin:10px;

            }

           form .display{
                display: flex;


                margin: 20px 0;
            }

            form .display input{
                text-align: right;
                flex: 1;

                font-size: 45px;
                box-shadow: none;
            }

            #history{
                width: 380px;
                height: 600px;
                overflow-y: scroll;
                background: crimson;
                box-sizing: border-box;
                padding: 10px 20px;
                border-radius: 10px;
            }

            #history::-webkit-scrollbar{
                width:0;
            }
            #history h3{
                color: white;
                padding: 10px 0px;
                font-size: 1.4em;
            }
            #history p{
                font-size: 1.3em;
                font-weight:80;
                color: white;
            }
        </style>

    </head>
   <body>
        <div class="container">
            <div class="calculator">
            <form class="f">
            <div class="display">
                <input type="text" name="display">
            </div>
            <div class="row">
                <input type="button" value="AC" onclick="display.value='' ">
                <input type="button" value="DE" onclick="display.value=display.value.toString().slice(0,-1)">
                <input type="button" value="%" onclick="display.value +='%' ">
                <input type="button" value="=" onclick="display.value=calculation(display.value)">
          </div>

            <div class="row">
                <input type="button" value="7" onclick="display.value +='7' ">
                <input type="button" value="8" onclick="display.value +='8' ">
                <input type="button" value="9" onclick="display.value +='9' ">
                <input type="button" value="/" onclick="display.value +='/' ">
            </div>

            <div class="row">
                <input type="button" value="4" onclick="display.value +='4' ">
                <input type="button" value="5" onclick="display.value +='5' ">
                <input type="button" value="6" onclick="display.value +='6' ">
                <input type="button" value="x" onclick="display.value +='*' ">
            </div>

            <div class="row">
                <input type="button" value="1" onclick="display.value +='1' ">
                <input type="button" value="2" onclick="display.value +='2' ">
                <input type="button" value="3" onclick="display.value +='3' ">
                <input type="button" value="+" onclick="display.value +='+' ">
            </div>

            <div class="row">
                <input type="button" value="00" onclick="display.value +='00' ">
                <input type="button" value="0" onclick="display.value +='0' ">
                <input type="button" value="." onclick="display.value +='.' ">
                <input type="button" value="-" onclick="display.value +='-' ">
            </div>


        </form>
        </div>

        <div id="history">

            <h3>History</h3>
            <button value="CLR" onclick="display.value +='' "></button>
        </div>

        <script>
            let history=document.getElementById('history');
            function calculation(v){
                para=document.createElement('p');
                data= v + " = " + eval(v);
                para.innerText=data;
                history.appendChild(para);
                return eval(v);
            }
        </script>

        </div>

    </body>
</html>
