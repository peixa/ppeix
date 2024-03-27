<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>log in</title>
    <link rel="stylesheet" href="/assets/login/index.css" />
  </head>
  <body>
    <div class="page">
      <div
        class="login-view"
        style="--bg-img-2: url('/assets/login/images/login-bg-2.svg')"
      >
        <div class="img-bg">
          <img class="img" src="/assets/login/images/login-bg.svg" fit="contain" />
        </div>
        <div class="container">
          <div class="left">
            <img src="/assets/login/images/login-bg-4.png" alt="" />
          </div>

          <div class="right">
            <form action="" method="post">
            @csrf
            <div class="container">
              <div class="title">log in</div>
              <div class="input-container">
                <input placeholder="email" name="phone" />
              </div>
              <div class="input-container">
                <input type="password" name="password" placeholder="please enter password" />
              </div>
              <div class="bt-list">
                <button class="login-bt">log in</button>
              </div>
            </div>
          </div>
          </form>

        </div>
        <div class="bottom">
        </div>
      </div>
    </div>
  </body>
</html>
