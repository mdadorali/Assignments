<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-7 Assignment </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box
    }

    body {
        background-color: #fff
    }
    hr.mb-3 {
    height: 2px;
    background: #21bf73;
    margin: auto;
}
h2.mt-2.text-center {
    color: #8e44ad;
}
    

    .container {

        border-radius: 10px;
        padding: 20px;
        font-family: 'Montserrat', sans-serif;

    }

    .container>p {
        font-size: 32px
    }


    .options {
        position: relative;
        padding-left: 40px
    }


    #options label {
        display: block;
        margin-bottom: 15px;
        font-size: 14px;
        cursor: pointer;
    }

    .options input {
        opacity: 0
    }

    .checkmark {
        position: absolute;
        top: -1px;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: black;
        border: 1px solid black;
        border-radius: 50%;
        background: white;
        

    }

    .options input:checked~.checkmark:after {
        display: block
    }

    .options .checkmark:after {
        content: "";
        width: 18px;
        height: 18px;
        display: block;
        background: white;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        transform: translate(-50%, -50%) scale(0);
        transition: 300ms ease-in-out 0s
    }

    .options input[type="radio"]:checked~.checkmark {
        background: #8e44ad;
        transition: 300ms ease-in-out 0s
    }

    .options input[type="radio"]:checked~.checkmark:after {
        transform: translate(-50%, -50%) scale(1)
    }

    .btn-primary {
        background-color: #8e44ad;
        color: #ddd;
        border: 1px solid #8e44ad ;
    }

    .btn-primary:hover {
        background-color: #8e44ad;
        border: 1px solid #8e44ad ;
    }

    .btn-success {
        padding: 5px 25px;
        background-color: #8e44ad;
    }
    .btn-success:hover{
        color:#fff ;
        background-color: #8e44ad;
    }


    @media(max-width:576px) {
        .question {
            width: 100%;
            word-spacing: 2px
        }
    }

    /* Question 2nd css */
 .my_team {
    background-color: #f1f1f1;
 }
.ourTeam-hedding p{
    color: #979797;
}
.ourTeam-hedding strong{
    color: black;
}
.ourTeam-hedding{
    margin-bottom: 20px;
}
.ourTeam-hedding h1{

    font-weight: bold;
    color: Black;
}
.ourTeam-box{
    border-radius: 2px;
    border-top: 5px solid green;
    margin: 0px;
    background-color: White;
    margin-bottom: 30px;
}
.section1{
    padding: 30px 0px 30px 0px;
}
.section1 img{
    border-radius: 50%;
    height: 130px;
    width: 130px;
    object-fit:cover;
}
.section2 p{
    font-weight: bold;
    color: green;
    letter-spacing: 1px;

}
.add h6{
    color: Black;
}
.section3{
    background-color: black;
}
.section3 i{
    color: #ffffff !important;
    padding: 15px;
    font-size: 15px;
}
.section-info{
    border-top: 6px solid #90DFAA;
}
.section-info p{
    color: #90DFAA;
}
.section-info .section3{
    background-color: #90DFAA;
}
.section-danger{
    border-top: 6px solid Black;
}
.section-danger p{
    color: #FD8469;
}
.section-danger .section3{
    background-color: #FD8469;
}
.social {
    color: #fff;
}
</style>

<body>

    <?php 
        // Quesiton 1st //
$questions = [
        // Q=1
             ["quesiton_title" => " What is the default background color for the canvas element in HTML 5.0?", 
             "quesitons" => ['Gray', 'Transparent', 'White', 'Black'] ],


        // Q=2
             ["quesiton_title" => "Which of the following is NOT a valid attribute for the element in HTML 5.0? ",
              "quesitons" => ['media', 'http-equiv', 'rel', 'hreflang'] ],


        // Q=3
             ["quesiton_title" => "Which of the following HTML5 elements is used to embed Java applets into your HTML 5.0 web page?", 
             "quesitons" => ['progress', 'source', 'object', 'applet'] ],




        // Q=4
             ["quesiton_title" => "Which form event is fired on the click of a button using a button tag with its type attributevalue equal to submit? ", 
             "quesitons" => ['onreset', 'onunload', 'onsubmit', 'onload'] ],



        // Q=5
             ["quesiton_title" => "Which of the following video file formats are currently supported by the video element of HTML 5.0? ",
              "quesitons" => ['3GPP', 'Ogg', 'MPEG 4 ', 'CCTV'] ],



        // Q=6
             ["quesiton_title" => "Which of the following is an INVALID value for the type attribute of command tag?",
              "quesitons" => ['text', ' command ', 'radio', 'checkbox'] ],



        // Q=7
             ["quesiton_title" => "Which of the following is NOT a supported attribute of the <ol> element in HTML 5.0",
              "quesitons" => ['compact', 'start', 'reversed ', 'type '] ],



        // Q=8
             ["quesiton_title" => "Which of the following is a valid attribute for the <colgroup> element in an HTML 5.0 document?", 
             "quesitons" => ['width', 'align', 'span', 'char'] ],




        // Q=9
             ["quesiton_title" => "Which <body> tag event is fired when the user leaves the document? ", 
             "quesitons" => ['onerror', 'onredo', 'onundo', 'onunload'] ],


        // Q=10
             ["quesiton_title" => "Which of the following are INVALID keyword values for http-equiv attribute when used with the element in HTML 5.0?content-type ", 
              "quesitons" => ['refresh author ', 'set-cookie ', 'keywords ', 'expires']  ],

      
];
//shuffle this $questions
$shuffle_mcq = shuffle($questions);


?>


    <h2 class="mt-2 text-center">Fast Quiz Make</h2>
    <hr class="mb-3">
    <div class="container  my-1">

        <!-- start row -->
        <div class="row">

            <?php 


   foreach ($questions as $key => $question) {
       

?>

            <div class="col-12 mb-3 neumorphism  text-dark">
                <form action="form_data.php" method="get">
                    <div class="question  pt-2 pb-2">
                        <!-- question -->
                        <div name="question" id="question" class="py-2 h5">
                            <b>Q.<?php echo ++$key. ") " . $question['quesiton_title'] ?></b></div>
                        <div class=" pl-md-3 pt-sm-0 pt-3" id="options">
                            <!-- option 1 -->
                            <label class="options"><?php echo $question['quesitons'][0] ?> <input type="radio"
                                    name="ans">
                                <span class="checkmark"></span> </label>
                            <!-- option 2 -->
                            <label class="options"><?php echo $question['quesitons'][1] ?> <input type="radio"
                                    name="ans">
                                <span class="checkmark"></span> </label>
                            <!-- option 3 -->
                            <label class="options"><?php echo $question['quesitons'][2]  ?> <input type="radio"
                                    name="ans">
                                <span class="checkmark"></span> </label>
                            <!-- option 4 -->
                            <label class="options"><?php echo $question['quesitons'][3] ?> <input type="radio"
                                    name="ans"> <span class="checkmark"></span>
                            </label>

                        </div>
                    </div>
                </form>


            </div>


            <?php     }?>

        </div>
        <!-- row end -->
       

    </div>


<!------------------------------- 2nd assignment  ---------------------------->

<?php

$team_members = [

           [ "member_photo" => "img/photo.png","member_name" => "Md Ador Ali","member_address" => "Pancgagarh" ,"member_social_link" => ["facebook" => "https://www.facebook.com/","twitter" => "https://www.linkedin.com/","linkedin" => "https://www.linkedin.com/in/rashel-rana-069982208/",   ] ],

           [ "member_photo" => "img/photo.png","member_name" => "Mr. Jony","member_address" => "Boda", "member_social_link" => ["facebook" => "https://www.facebook.com/","twitter" => "https://www.facebook.com/rashel.rana.75033149/","linkedin" => "https://www.linkedin.com/",   ] ],

           [ "member_photo" => "img/photo.png","member_name" => "md Rased","member_address" => "Tetulia", "member_social_link" => ["facebook" => "https://www.facebook.com/","twitter" => "https://www.linkedin.com/in/rashel-rana-069982208/","linkedin" => "https://www.linkedin.com/",   ] ],
]


?>
<!-- array end -->
<h2 class="mt-2 text-center">Assignment-2</h2>
    <hr class="mb-3">
 <div class="container-fuild my_team">
 <div class="container ">
  <div class="row">
    <div class="col-md-12 pt-5 pb-2 ourTeam-hedding text-center">
      <h1>Our Team</h1>
    </div>
  </div>
  <div class="row">
  <?php 
  foreach ($team_members as $key => $team_member) {
  ?>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="row section-success ourTeam-box text-center">
        <div class="col-md-12 section1">
          <img src="<?php echo $team_member['member_photo']  ?>">
        </div>
        <div class="col-md-12 section2 pb-3">
          <p> Name: <?php echo $team_member['member_name']  ?></p>
          <h6 class="add"> Address:  <?php echo $team_member['member_address']  ?></h6>
        </div>
        <div class="col-md-12 section3">
          <a class="social" href="<?php echo $team_member['member_social_link']['facebook'] ?>" target="_blank"><i class="fa fa-facebook"  aria-hidden="true">></i> </a>
          <a class="social" href="<?php echo $team_member['member_social_link']['twitter'] ?>" target="_blank" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a class="social" href="<?php echo $team_member['member_social_link']['linkedin'] ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

<?php }?>
</div>
</div>
</div>
</body>
</html>