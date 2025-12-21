<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration</title>
        <style>
            body{
                background-color: #fff8ff;
                justify-content: center;
            align-items: center; 
            }
         form {
         background-color: #ffffff;
         padding: 20px;
        border-radius: 10px;
        width: 300px;
        margin: 0 auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
      #output {
    margin-top: 20px;
    text-align: center;
    font-size: 16px;
    padding: 20px;
    border-radius: 10px;
    width: 300px;
    
}
        </style>
        
    </head>

    <body>
        <center>

         <h2>Student Registration</h2>
        </center>
        <form onsubmit = "return handlesubmit()">
            <label>Full Name:</label><br>
            <input type = "text" id="name"/><br>
            <label>Email:</label><br>
            <input type = "text" id="email"/><br>
            <label>Passord:</label><br>
            <input type = "text" id="password"/><br>
            <label>Confirm Password:</label><br>
            <input type="text" id="confirm_pass"/><br><br>
            <button type ="submit">Register</button><br>
        </form>

      <div id ="error"></div>
      <div id ="output"></div>
       

        <script>
            function handlesubmit(){
                var name = document.getElementById("name").value.trim();
                 var email = document.getElementById("email").value.trim();
                  var password = document.getElementById("password").value.trim();
                   var confirm_pass = document.getElementById("confirm_pass").value.trim();
                
                   var errorDiv = document.getElementById("error");
                    var outputDiv = document.getElementById("output");

                outputDiv.innerHTML="";

           if (name === "" || email === "" || password === "" || confirm_pass === "") {
              alert("Please fill in all fields");
            return false;
            }
            if(!email.includes("@")){
                alert("Email must contain @");
                return false;
            }
            if(password != confirm_pass){
                alert("Password and confirm password did not match");
                return false;
            }

            outputDiv.innerHTML=`
            <strong>Registration Succesfull</strong><br><br>
            Name:${name}<br>
            Email:${email}<br>


            `;
            return false;

            }
        </script>



    </body>

</html>