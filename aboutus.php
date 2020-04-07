<Doctype html>
  <html>
  <head>
    <meta charset="utf-8">
    <title> About Us </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <meta name="Viewport" content=width="device - width, initial-scale=1.0">
    <style>
      *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        box-sizing: border-box;
      }

      .team-section{
        overflow: hidden;
        text-align: center;
        background: white;
        padding: 60px;
      }

      .team-section h1{
        text-transform: uppercase;
        margin-bottom: 60px;
        color: Black;
        font-size: 40px;
      }

      .border{
        display: block;
        margin: auto;
        width: 160px;
        height: 3px;
        background: #3498db;
        margin-bottom: 40px;
      }

      .ps{
        margin-bottom: 40px;
      }

      .ps a{
        display: inline-block;
        margin: -20 30px;
        width:200px;
        height:200px;
        overflow: hidden;
        border-radius: 50%;
      }



      .section{
        width: 600px;
        margin: auto;
        font-size: 30px;
        color: black;
        text-align: justify;
        height: 0;
        overflow: hidden;
      }

      .section:target{
        height: auto;
      }
      .name{
        display: block;
        margin-bottom: 30px;
        text-align: center;
        text-transform: uppercase;
        font-size: 22px;
      }
      .new1
      {
      font-size:20px;
      font-family:helvetica;
      color: black;
      font-size: 30px;
      background: white;
      }
      .new1 h1{
        text-transform: uppercase;
        margin-bottom: 60px;
        color: black;
        font-size: 40px;
      }

      .new1:target{
        height: auto;
      }

      body{
        background: #f1f1f1;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .contact-info{
        margin-left: 500px;
        margin-bottom:100px;
        display: flex;
        width: 100%;
        max-width: 1200px;
        align-items: center;
        justify-content: center;
        padding: 0 20px;
      }

      .card{
        background: #1c2833;
        padding-bottom:  0 20px;
        margin: 0 10px;
        width: calc(40% - 20px);
        height: 100px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        cursor: pointer;

      }
      .card-icon{
        font-size: 28px;
        background: #ff6348;
        width: 60px;
        height: 60px;
        text-align: center;
        line-height: 60px ;
        border-radius: 1000px;
        transition: 0.3s linear;

      }


      .card:hover .card-icon{
        background: none;
        color: #ff6848;
        transform: scale(1.6);

      }
      .card:hover p{
        max-height: 50px;
        opacity:1;
      }

      @media screen and (max-width: 800px){
        .contact-info{
          flex-direction: column;
        }
        .card{
          width: 100%;
          max-width: 300px;
          margin: 10px 0;
        }
      }

      .contact-section{
        margin-top: 50px;
        margin-bottom: 50px;
        background: lightgreen;
        text-align: center;
        padding: 80px 0;

      }
      .inner-width{
        max-width: 600px;
        margin: auto;
        padding: 0 20px;
      }

      .contact-section h1{
        font-size: 30px;
        color: black;
        margin-bottom: 40px;
        text-transform: uppercase;
        letter-spacing: 4px;
        font-weight: 400;

      }
      .name1,.Email,.Message{
        background: none;
        border: none;
        outline: none;
        border-bottom: 1px solid;
        color: black;
        padding: 30px 10px;
        font-size: 20px;
        margin-bottom: 40px;
      }
      .name1{
        float: left;
        width: 270px;

      }
      .Email{
        float: right;
        width: 270px;

      }
      .Message{
        min-width: 100%;
        max-width: 100%;
      }
      .contact-section button{
        background: none;
        color: black;
        border: 1px solid black;
        padding: 12px 60px;
        border-radius: 8px;
        text-transform: uppercase;
        font-size: 14px;
        transition: 0.4s linear;
        cursor: pointer;

      }
      .contact-section button:hover{
        background: black;
        color: #fff;

      }

</style>
</head>
<body>
  <div class="team-section">
    <h1> About Us </h1>
    <span class="border"></span>
    <div class="ps">
      <a href="#p1"><img src="images/sb4.jpg"   alt=""></a>
      <a href="#p2"><img src="p11.jpg" alt=""></a>
      <a href="#p3"><img src="p2.jpg" alt=""></a>
      </div>

      <div class="section"  id="p1">
        <span class="Name"> Srikrishna </span>
        <span class="border"></span>

        <p>
          Hi my name is Srikrishna and I'm from Lpu.Currently i am studying B.tech 3rd year in lovely professional university.
          I am doing a short role in our team is to build a styling website to our page.The main things are performed by Mr.Prabakar and Mr.Sourabh.

           </p>
           </div>


           <div class="section"  id="p2">
             <span class="Name"> Prabhakar </span>
             <span class="border"></span>

             <p>
               Versatile is a online problem solving platform for softwares.
                We can solve anytype of software issue and We can build projects for the colleges and universities.
                We have a wide range of varaities in solving issues.We have a team for solving issues.
                The first thing If u want a project then we are for you to a solve a problem. Just ypu need to do is you should tell what type of
                project u need and the specifications must be recommended.We have our team to build your project.
                Versatile is a online problem solving platform for softwares.
                 We can solve anytype of software issue and We can build projects for the colleges and universities.
                 We have a wide range of varaities in solving issues.We have a team for solving issues.
                 The first thing If u want a project then we are for you to a solve a problem. Just ypu need to do is you should tell what type of
                 project u need and the specifications must be recommended.We have our team to build your project.

                </p>
                </div>

                <div class="section"  id="p3">
                  <span class="Name"> Sourabh </span>
                  <span class="border"></span>

                  <p>
                    Versatile is a online problem solving platform for softwares.
                     We can solve anytype of software issue and We can build projects for the colleges and universities.
                     We have a wide range of varaities in solving issues.We have a team for solving issues.
                     The first thing If u want a project then we are for you to a solve a problem. Just ypu need to do is you should tell what type of
                     project u need and the specifications must be recommended.We have our team to build your project.
                     We have a team for solving issues.
                     The first thing If u want a project then we are for you to a solve a problem. Just ypu need to do is you should tell what type of
                     project u need and the specifications must be recommended.We have our team to build your project.

                     </p>
                     </div>
                   </div>

                     <div class="new1">
                       <h1><center> Brief </center></h1>
                         <span class="border"></span>
                       <p>
                         <center>
                           <b>
                         Versatile is one of the best technical community.It provides best training for the students who are in their initial stage.
                         Versatile conducts the training in offline mode. And the aim of this is to provide training in village areas where the others
                         Workshop is not reachable and student of that section due to one or other reason is deprived of education we along with our
                         highly dedicated team will try our best to spread the education around the world and make you technical journey more comfotable
                         and cosy.We can solve anytype of software issue and We can build projects for the colleges and universities.
                         We have a wide range of varaities in solving issues.We have a team for solving issues.
                         The first thing If u want a project then we are for you to a solve a problem. Just ypu need to do is you should tell what type of
                         project u need and the specifications must be recommended.We have our team to build your project.
                         <b>
                       </center>

                       </p>
                     </div>

                    <div class="contact-section">
                      <div class="inner-width">
                        <h1> Get in Touch with Us </h1>
                        <input type="text" class="name1" placeholder="Your name">
                        <input type="Email" class="Email" placeholder="Your Email">
                        <textarea rows="1" placeholder="Message" class="Message"></textarea>
                        <button> Get in Touch </button>
                      </div>
                    </div>


                    <div class="contact-info">
                      <div class="card">
                        <i class="card-icon fas fa-envelope"></i>
                        <p> versatile.onlineplatform@gmail.com </p>
                      </div>

                     <div class="card">
                       <i class="card-icon far fas fa-phone"></i>
                       <p>+91 1234642389 </p>
                     </div>

                     <div class="card">
                       <i class="card-icon far fas fa-map-marker-alt"></i>
                       <p> Punjab,India </p>
                     </div>
                   </div>

                     </body>
                     </html>
