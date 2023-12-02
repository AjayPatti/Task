



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body style="background:url(67.jpg)center;background-size:cover; ">
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-5"style="background-color:white";>
            <!-- Default form login -->
<form class="text-center  p-5" action="{{route('login')}}" method="post" id="form">
@csrf
<p class="h4 mb-4">Login</p>

<!-- Email -->
<input type="email"  name="email" class="form-control mb-4" placeholder="E-mail">
<span id="email_error" class=" text-danger" style="margin-left: -253px;"></span>
<!-- Password -->
<input type="password" name="password" class="form-control mb-4" placeholder="Password">
<span id="password_error" class="text-danger" style="margin-left: -228px;"></span>
<div class="d-flex justify-content-around">
    <div>
        <!-- Remember me -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
        </div>
    </div>
    <div>
        <!-- Forgot password -->
        <a href="">Forgot password?</a>
    </div>
</div>

<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit" name="save">Login</button>

<!-- Register -->
<p>Not a member?
    <a href="{{route('register')}}">Register</a>
</p>

<!-- Social login -->
<p>or sign in with:</p>

<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

</form>
<!-- Default form login -->
        </div>
    </div>
</div>

<script>
// $(document).ready(function(){
// $("#form").on('submit',function(e){
//     e.preventDefault();
//     $.ajax({
//         url: "{{route('login')}}", 
//         data: $("#form").serialize(), 
//         type: "post", 
//         dataType: 'json',
//         success: function (e) {
//             console.log(JSON.stringify(e));


//         },
//         error:function(e){

//             // var response = e.responseJSON.errors;
//             // $.each(response, function(key, val) {
//             //     console.log(val);
//             //     $("#" + key + "_error").text(val[0]);
//             // })



//         }
//     }); 
//     return false;
// });
// });

</script>
</body>

</html>


   
