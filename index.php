<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
      <style>
          html{
              scroll-behavior: smooth;
          }
          body{
              background: url('img/bg.jpg');
              color: white;
              background-repeat: no-repeat;
              background-size: cover;
          }

          h1{
    overflow: hidden;
    white-space: nowrap;
    animation: typing 5s steps(24), blink 1s ease-in-out 7s infinite;
    width: 16ch;
    margin: auto;
    border-right: 2px solid rgb(158, 247, 37);
          }
          
          h3{
    overflow: hidden;
    white-space: nowrap;
    animation: typing 5s steps(24), blink 1s ease-in-out 7s infinite;
    width: 10ch;
    margin: auto;
    border-right: 2px solid rgb(158, 247, 37);
}
 @keyframes typing {
            75% {
                width: 0ch;
                color: #fcf876;
            }

            100% {
                width: 20ch;
            }
        }

        @keyframes blink {
            0% {
                border-right: 2px solid rgba(255, 255, 255, 0);
            }

            100% {
                border-right: 2px solid rgb(158, 247, 37);
            }
        }
          .contact-section {
            text-align:center;
            background-color: transparent;
            text-rendering:optimizeLegibility;
            font-size:16px;
        }

        .contact-heading {
            color:#000;
            margin-top:50px;
            margin-bottom:50px;
            margin-left: 43%;
        }

        .contact-form {
            text-align:left;
            width:50%;
            margin:0 auto;
            color:#555;
        }

        input[type=text],
        input[type=email],
        textarea {
            width:100%;
            padding:8px;
            border-radius:3px;
            border:1px solid #ccc;
            background-color:#fff;
        }

        input[type=submit] {
            border:0;
        }

        input[type=checkbox] {
            margin: 10px 5px 10px 0;
        }

        textarea {
            height:100px;
        }

        *:focus {
            outline:none;
        }
          input[type=submit] 
         {
            text-decoration:none;
            padding:10px 30px;
            border-radius:200px;
            display:inline-block;
            background-color:#ed07b7;
	        color:#fff; 
        }
          input[type=submit]:hover {
            background-color:#BD0592;
        }
          
          
          @media only screen and (max-width: 1200px){
              .contact-heading{
                  margin-left: 39%;
              }
          }
      </style>
  </head>

  <body>
      
      <?php include 'navbar.php'; 
      include 'slider.php'; ?>
      
     <div class="container-fluid">
         
           <div class="row intro py-1" style="background-color: transparent;">
                
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3 style="color: #ed07b7;">Welcome to</h3>
                  <h1 style="color: #ed07b7;">THE BANK OF TSF</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img class="im" src="img/bank.png" class="img-fluid pt-2">
      </div>
         </div>
         
          <br>
          <br>
          <br>
          <h4 class="action" ><span style="font-family: 'Roboto Slab', serif; color:#56d65b;">CHOOSE AN ACTION</span></h4>
            <div class="column activity text-center">
                  <br>
                  <div class="col-md act">
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>

                <br>
                
                  <div class="col-md act">
                    <a href="transfermoney.php"><button>View Customers</button></a>
                  </div>
                  
            </div>
           
      </div>
      <br>
      
      <section class="contact-section js--contact" id="contact">
	<div class="row">
		<h4 class="contact-heading" style="color:#56d65b; font-family: 'Roboto Slab', serif;">REACH OUT</h4>
	</div>
	<div class="row">
		<form method="post" action="#" class="contact-form">
			<div class="row">
				<div class="col span_1_of_3 contact-label" style="text-align:left; padding-top: 5px;">
					<label for="name" style="color:white;">Name</label>
				</div>
				<div class="col span_2_of_3">
					<input type="text" name="name" id="name" placeholder="Your Name" required>
				</div>
			</div>
            <br>
			<div class="row">
				<div class="col span_1_of_3 contact-label" style="text-align:left; padding-top: 5px;">
					<label for="email" style="color:white;">Email</label>
				</div>
				<div class="col span_2_of_3">
					<input type="email" name="email" id="email" placeholder="Your email" required>
				</div>
			</div>
            <br>
			<div class="row">
				<div class="col span_1_of_3 contact-label" style="text-align:left; padding-top: 5px;">
					<label for="newsletter" style="color:white;">Newsletter?</label>
				</div>
				<div class="col span_2_of_3">
                    <input type="checkbox" name="newsletter" id="newsletter">&nbsp;<span style="color:white;">Yes, Please</span>
				</div>
			</div>
            <br>
			<div class="row">
				<div class="col span_1_of_3 contact-label" style="text-align:left; padding-top: 5px;">
					<label for="message" style="color:white;">Drop us a line</label>
				</div>
				<div class="col span_2_of_3">
					<textarea name="message" id="message" placeholder="Your message"></textarea>
				</div>
			</div>
            <br>
			<div class="row">
				<div class="col span_1_of_3">
					&nbsp;
				</div>
				<div class="col span_2_of_3">
					<input type="submit" value="Send">
				</div>
			</div>

		</form>
	</div>
</section>

      <footer class="text-center mt-5">
        <p style="background-color: black; color: grey; padding-bottom:8px; padding-top:3px;">Copyright &copy; TSF Internship Project by <b>TANMAYEE CHOUDHURY</b> <br> </p>
      </footer>
     
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>