<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Temperature Convertor</title>

<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <style media="screen">
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Varela Round', sans-serif;
        background-color: #1e212d;
      }

    h1{
      text-align: center;
      line-height: 20vh;
      color: #ec4646;
    }

    .parent{
      width: 100vw;
      height: 80vh;
      display: flex;
      justify-content: space-around;
    }

    .left{

    }

    .left img{
      max-width: 400px;
      height: auto;
    }

    .right{
      margin-top: 3%;
      width: 400px;
      height: 300px;
      background-color: #dddddd;
      border-radius: 15px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .input1{
      width:250px;
      height:40px;
      padding: 5px;
      outline: none;
      border: 1px solid grey;
      border-radius: 5px;

    }

    .selection{
      width: 100%;
      margin: 20px 0;
    }

    .btn{
      padding: 10px 16px;
      border-radius: 5px;
      outline: none;
      border:none;
      background-color: #ec4646;
      font-size: 0.9rem;
      color: white;
    }
    form,input,p,label,.selection,body{
      background-color: #dddddd;
    }

    .result{
      padding-top: 20px;
    }
    </style>
  </head>
  <body>

<h1>Temperature Convertor</h1>
    <div class="parent">

      <div class="left">
        <img src="https://play-lh.googleusercontent.com/VoVUpL-DGQDALVgpxwQaSvneaPTrS6lNSloSpibL3JhHAWy0p0mSzTokOQ1A57E8two=rw" alt="">
        <!-- <img src="https://play-lh.googleusercontent.com/VoVUpL-DGQDALVgpxwQaSvneaPTrS6lNSloSpibL3JhHAWy0p0mSzTokOQ1A57E8two=rw" alt=""> -->
      </div>

      <div class="right">
        <form class=""  method="post">
          <input type="text" name="number" value="" placeholder="Enter your number" class="input1">

          <div class="selection">
            <input type="radio" name="units" value="cel" checked >
            <label for="">Celc</label>

            <input type="radio" name="units" value="far" >
            <label for="">Fahr</label>
          </div>

          <input class="btn" type="submit" name="submit" value="Convert" onclick="myfunction()">

        </form>
        <div>
          <p  class="result">
            <?php
            if(isset($_POST['submit']))
            {
              $num=$_POST['number'];
              $temp=$_POST['units'];
              if($temp==="cel")
              {
                $res=$num*(9/5)+32;
                echo "The Temperature in Farhenheit is ".$res;
              }
              else
              {
                $res=($num-32)*5/9;
                echo "The Temperature in Celsius is ".$res;

              }
            }

             ?>
          </p>

        </div>
      </div>

    </div>

  </body>
</html>
