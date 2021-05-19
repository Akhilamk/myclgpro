<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('calc.css')}}">
</head>

<body>
    <br>
    <h3 style="text-align: center;"><u>Calculator</u> </h3><br>



    <table align="center" width=20% border="2">
        <tr>
            <td colspan="4 "><input type="text " id="display"> </td>
        </tr>
        <tr>
            <div class="white">
                <td><button value="add" onclick="addclick()">+</button></td>
                <td><button value="-">-</button></td>
                <td><button value="x">x</button></td>
                <td><button value="÷">÷</button></td>
            </div>
        </tr>
        <tr>
            <td><button value="7" onclick="">7</button></td>
            <td><button value="8">8</button></td>
            <td><button value="9">9</button></td>
            <td rowspan="4 "><button value="=" style="height: 220px;background-color: rgb(243, 85, 28);">=</button></td>
        </tr>
        <tr>
            <td><button value="4">4</button></td>
            <td><button value="5">5</button></td>
            <td><button value="6">6</button></td>

        </tr>
        <tr>
            <td><button value="1">1</button></td>
            <td><button value="2">2</button></td>
            <td><button value="3">3</button></td>

        </tr>
        <tr>
            <td><button value="0">0</button></td>
            <td><button value=".">.</button></td>
            <td><button value="C">C</button></td>

        </tr>


    </table>


</body>

</html>