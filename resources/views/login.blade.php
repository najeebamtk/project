<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Bootstrap CSS --> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg-8 blog-margin stretch-card" id="sign" >
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center;">Login</h2>
                          <form id="loginForm">
                          <label for="uname"><b>Username</b></label>
                          <input type="text" id="username" name="username" placeholder="Username"><br><br>

                          <label for="psw"><b>Password</b></label>
                          <input type="password" id="password" name="password" placeholder="Password"><br><br>

                          <button type="submit">Login</button>
                        
                          <div id="loginerror">
                      </div>
                  </form>
            </div>
          </div>
      </div>
    </div>
  </div>
<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        fetch('https://dummyjson.com/auth/login', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                username:document.getElementById('username').value ,
                password: document.getElementById('password').value
            })
        })
        .then(response => response.json())
        .then(data => {
            // Handle login response
            if (data.id){
                window.localStorage.setItem('logindata',JSON.stringify(data));
                window.location='products';
            }
            else{
                document.getElementById('loginerror').innerHTML=data.message;            

            }
            // You may want to redirect the user to another page upon successful login
        })
        .catch(error => {
            document.getElementById('loginerror').innerHTML=error.message;            
        });
    });
</script>
</body>
</html>


