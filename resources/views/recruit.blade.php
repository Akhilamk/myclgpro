
   
@extends('headfoot') @section('content')
    <h4 style="background-color: rgb(175, 228, 225); text-align: center;"><b>๐ฒ๐๐๐๐๐ ๐๐๐๐๐๐๐๐๐๐๐</b> </h4>
    <div class="row">
        <div class="col-lg-8 col-sm-12 col-xs-12 col-md-12" style=" height: 500px;">
            <div class="container-content"> <img src="{{url('images/recrt.png')}}" width="400px" alt="">
                <h3 style="background-color: yellow;">
                    <marquee behavior="" direction=""> โ๐๐๐ก๐ฆ๐ค ๐๐ฃ๐๐ง๐ ๐๐ ๐ฃ(๐นโ๐ธ & ๐น๐โ ๐๐๐๐ ๐ฝ๐ฃ๐๐ค๐๐๐ฃ) </marquee>
                </h3>
                <h4 class="rct" style="background-color: blanchedalmond;">Our focus is placing quality students in corporate</h4>
            </div>

        </div>
        <div class="col-lg-4 col-sm-12 col-xs-12 col-md-12" style="background-color: rgb(237, 221, 241); height: 500px;">
            <form method="get" align="center">
                <table class="recrt" cellspacing="10px" cellpadding="10px" align="center" width="200px"><br><br>
                    <tr>
                        <td><u style="font-size: larger;"> ๐๐ฌ๐ค๐ฆ๐ซ<br><br><img src="{{url('images/loginrct.png')}}"  width="40px"></u></td>

                    </tr>
                    <tr>
                        <td><input class="inputcrt" type="text" placeholder="UserName"></td>
                    </tr>
                    <tr>
                        <td><input class="inputcrt" type="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td><b><button class="btn btn-success">LOGIN</b></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            New Student?
                            <a href="">Register Now</a>
                        </td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
    @endsection
    
    