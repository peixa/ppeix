<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sign up</title>
    <link rel="stylesheet" href="/assets/login/index.css" />
  </head>
  <body>
    <div class="page">

      <div class="login-view" style="--bg-img-2: url('/assets/login/images/login-bg-2.svg')" >
        <div class="img-bg">
          <img class="img" src="/assets/login/images/login-bg.svg" fit="contain" />
        </div>
       
          <div class="container">
      
            <div class="left">
              <img src="/assets/login/images/login-bg-4.png" alt="" />
            </div>
            
            <div class="right">
              <div class="container">
              <form action="" method="post">
              @csrf
                <div class="title">sign up</div>
                <div class="input-container">
                  <input type="text" placeholder="email" name="phone" />
                </div>
                <div class="input-container">
                  <input type="text" placeholder="name" name="name" />
                </div>
                <div class="input-container">
                  <input type="text" placeholder="sex" name="sex" />
                </div>
                <div class="input-container">
                  <input type="password" placeholder="please enter password" name="password" />
                </div>
                <div class="bt-list">
                  <button class="login-bt">sign up</button>
                </div>
              </div>
              </form>
            </div>
            </div>
           
        
    

        <div class="bottom">
        </div>
      </div>
    </div>
  </body>
</html>
