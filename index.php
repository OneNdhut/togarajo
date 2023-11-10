<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="cobacss.css">
</head>

<style>
    h1{
        font-family: 'Courier New', Courier, monospace;
        text-align: center;
        font-weight: bold;
        font-size: 50px;
    }
    
    .fon{
        font-family: 'Courier New', Courier, monospace;
        font-size: 30px;
    }
    
    body {
        margin:0;
        padding:0;
        font-family: sans-serif;
        background: linear-gradient(#141e30, #243b55);
    }
          
    form {
        max-width: 700px;
        margin: 2em auto;
        padding: 2em;
        background-color: #0e567a;
        border-radius: 4px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
          
    label {
        margin-bottom: 0.5em;
        font-weight: bold;
    }
          
    
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="tel"],
    input[type="date"],
    select,
    
    textarea {
        width: 90%;
        padding: 1em;
        margin-bottom: 2.5em;
        margin-left: auto;
        margin-right: auto;
        border: 5px solid #243b55;
        border-radius: 1px;
    }
          
    
    input[type="radio"] {
        margin-right: 0.5em;
    }
          
    input[type="submit"],
    input[type="reset"] {
        padding: 1em 2em;
        background-color: #12bfbf;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 1em;
    }
          
    input[type="submit"]:hover,
    input[type="reset"]:hover {
        background-color: #243b55 ;
    }
    
    
    .btn{  
        border-radius: 10px;
        height: 80px;
        width: 200px;
        font-size: 20px;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 600;
        text-transform: uppercase;
        transition: all 200ms linear;
        padding: 0 30px;
        background-color: #ffeba7;
        color: #102770;
        box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);
      }
      .btn:hover{  
        background-color: #102770;
        color: #17d8bb;
        box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
      }
    
      .input-btn{
        display: flex;
        justify-content: center;
      }

      .abc{
        display: flex;
        justify-content: center;
      }
</style>


<body>
    <form action="submit.php" id="registrationForm" method="POST">
        <h1>FORM REGISTRATION</h1>
        <br>
        <br>
    
        <label class="fon" for="name">Nama :</label><br><br>
        <div class="abc"><input type="text" id="name" name="nama" required></div><br><br>
    
        <label class="fon" for="email">Email :</label><br><br>
        <div class="abc"><input type="email" name="email" id="email" required></div><br><br>
    
        <label class="fon" for="pass">Password :</label><br><br>
        <div class="abc"><input type="password" id="pass" name="password" required></div><br><br>
    
        <label class="fon" for="confirm">Confirm Password :</label><br><br>
        <div class="abc"><input  type="password" id="confirm" name="confirm" minlength="8" required></div><br><br>
    
        <br>
        <br>
    
        <label class="fon" for="nomortelepon">Nomor Telepon :</label>
        <br>
        <br>
        <div class="abc"><input type="tel" name="number" value="" id="nomortelepon" title="Number Only" pattern="[0-9]{10,14}"></div>
    
        <br>
        <br>
    
        <label class="fon">Gender :</label>
        <br>
        <br>
        <input type="radio" id="male" name="gender" value="Male">
        <label class="fon" for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label class="fon" for="female">Female</label>
    
        <br>
        <br>
        <br>
        <br>
    
        <label class="fon" for="birthdate">Birth Date :</label>
        <br>
        <br>
        <div class="abc"><input type="date" id="birthdate" name="birthday"><br></div>
        
        <br>
        <br>
    
        <label class="fon" for="bahasa">Language:</label><br>
        <br>
        <div class="abc">
            <select class="fon" id="bahasa" name="bahasa" required>
                <option class="fon" value="">Pilih Bahasa</option>
                <option class="fon" value="Indonesia">Indonesia</option>
                <option class="fon" value="Malaysia">Malaysia</option>
                <option class="fon" value="Inggris">Inggris</option>
                <option class="fon" value="Arab">Arab</option>
                <option class="fon" value="Italia">Italia</option>
            </select>
        </div>
        
    
        <label class="fon" for="about">About : </label>
        <br>
        <br>
        <div class="abc"><textarea name="about" id="about" cols="50" rows="5"></textarea></div>
    
        <br>
        <br>
    
        <div class="input-btn">
            <input type="submit" value="Daftar" class="btn">
            <input type="reset" value="Reset" class="btn">
        </div>
    </form>
    
    <script>
        var password = document.getElementById("pass");
        var password2 = document.getElementById("confirm");
        var nama = document.getElementById("name");
    
        function validateName() {
            if (nama.value === "") {
                nama.setCustomValidity("Nama Tidak Boleh Kosong");
            } else if (nama.value.length < 4) {
                nama.setCustomValidity("Nama Tidak Boleh Kurang dari 4 Karakter");
            } else {
                nama.setCustomValidity("");
            }
        }
        nama.addEventListener("input", validateName);
    
        function validatePassword() {
            if(password2.value !== password.value) {
                password2.setCustomValidity("Kata Sandi Tidak Cocok");
            } else {
                password2.setCustomValidity("");
            }
        }
        password.addEventListener("input", validatePassword);
        password2.addEventListener("input", validatePassword);
    </script>
    </body>
</html>