<html>
    <head>
    <link rel="stylesheet" href="style.css" />
    <title>Calculate
</title>
    </head>


<body>

<div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's Calculate!</h3>
          <p class="text">
            ● Install our python package using the following command
          </p>
          
          <p>
            pip install codearth
          </p>

          <div class="text">
            <div >
              <p> ● Import our module and wrap your code in the tracker function</p>
            </div>
            <div class="text">
              
              <p>
                ● Enter the output in the following
              </p>
            </div>
            
          </div>

          
        </div>

        <div class="contact-form" id="form>
          <span class="circle one"></span>
          <span class="circle two"></span>
          <br>
          <br>
          <br>
          <br>
          
          

          
          <h3 >The Carbon Emission of your code is</h3>
          
          <h3><?php echo  $_GET["time"]*(10+($_GET["gpuwatt"]+4)+$_GET["cpuperc"]*2.5)/3600000*475; ?> gCO2.eq   </h3>
          <br>
          <h3 >That is equivalent to</h3>
          <h3> A car driving for <?php echo  $_GET["time"]*(10+($_GET["gpuwatt"]+4)+$_GET["cpuperc"]*2.5)/3600*475/404; ?> X 10<sup>-3</sup> Miles  </h3>
          
        </div>
      </div>
    </div>

</body>
</html>