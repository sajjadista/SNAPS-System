<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNAPS Service Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      body {
        background-color:white;
        font-family: Arial, Helvetica, sans-serif;
      }
      h2 {
        color: green;
        font-weight: bold;
        margin: 50px;
      }

      div.feedback1 {
        background-color:green;
        height: 250px;
        width: 350px;
        padding-top: 20px;
        padding-right: 130px;
        padding-bottom: 50px;
        padding-left: 80px;
        margin: 150px 350px 250px 550px;
        /* text-align:center; */
      }

      p{
        /* text-align: justify; */
        color: green;
        text-indent: 550px;
      }

      a{
        /* text-align: justify; */
        color: green;
        text-indent: 550px;
      }

    </style>
</head>

<body>
  <div class="feedback">
    <h2> Upload service booking form </h2>
    <div class="feedback1">
      <form action="services-upload-success.php" method="post" enctype="multipart/form-data">
        <br>
          <b>Select file to upload:</b>
        </br>
        <br>
          <input type="file" name="fileToUpload" id="fileToUpload">
        </br>
        <br>
          <input type="submit" value="Upload" name="submit">
        </br>
      </form>
    </div>
      <p>
        <a href="services-booking-page.php">Click here to download a blank booking form</a>
      </p>

  </div>
</body>
