<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitalbath Thank You Form</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
            /* outline:1px solid ;*/
          }
          body {
            background: #ffffff;
            background: linear-gradient(to bottom, #ffffff 0%, #e1e8ed 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
            height: 100%;
            margin: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;
          }



          .wrapper-1 {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
          }
          .wrapper-2 {
            padding: 30px;
            text-align: center;
          }
          h1 {
            font-family: "Kaushan Script", cursive;
            font-size: 4em;
            letter-spacing: 3px;
            color: #5892ff;
            margin: 0;
            margin-bottom: 20px;
          }
          .wrapper-2 p {
            margin: 0;
            font-size: 2.3em;
            color:#aaa;
            font-family: "Source Sans Pro", sans-serif;
            letter-spacing: 1px;
          }
          .go-home {
            color: #fff;
            background: #5892ff;
            border: none;
            padding: 10px 50px;
            margin: 30px 0;
            border-radius: 30px;
            text-transform: capitalize;
            box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
          }
          .footer-like {
            margin-top: auto;
            background: #d7e6fe;
            padding: 6px;
            text-align: center;
          }
          .footer-like p {
            margin: 0;
            padding: 4px;
            color: #5892ff;
            font-family: "Source Sans Pro", sans-serif;
            letter-spacing: 1px;
          }
          .footer-like p a {
            text-decoration: none;
            color: #5892ff;
            font-weight: 600;
          }

          @media (min-width: 360px) {
            h1 {
              font-size: 4.5em;
            }
            .go-home {
              margin-bottom: 20px;
            }
          }

          @media (min-width: 600px) {
            .content {
              max-width: 1000px;
              margin: 0 auto;
            }
            .wrapper-1 {
              height: initial;
              max-width: 620px;
              margin: 0 auto;
              margin-top: 50px;
              box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
            }
          }

    </style>
</head>
<body>
    <div class="container">
         <div class="row">

            <div class="col-md-12">
                <div  class="content text-center">
                    <div style="margin-top: 100px;" class="wrapper-1">
                        <div class="wrapper-2">
                            <p style="color: #5892ff"> Mr/Ms: {{ $project->client->full_name ?? '' }}</p><br>

                            <p>you  already filled out the form.  </p><br>

                            <h1>Thank you !</h1><br>

                            <a href="{{ route('document',['project_id'=> $project->id , 'client_name' => $project->client->full_name]) }}" class="go-home">
                               Go To Show And Print your PDF Document.
                            </a>
                        </div>
                        <div class="footer-like">
                            <p>© 2024 Capitalbaths
                            </p>
                        </div>
                   </div>
             </div>
            </div>

         </div>
          <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
    </div>
</body>
</html>
