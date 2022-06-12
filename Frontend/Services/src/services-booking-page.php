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

      div.container{
        /* text-indent: 50px; */
        /* height: 750px;
        width: 950px;
        padding-top: 20px;
        padding-right: 130px;
        padding-bottom: 50px;
        padding-left: 80px; */
        /* margin: 150px 350px 250px 550px; */
      }

      p{
        text-align: center;
        /* color: green; */
        /* text-indent: 50px; */
      }

      a{
        /* text-align: justify; */
        color: green;
        text-indent: 550px;
      }

      input[type=submit] {
        background-color: #04AA6D;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 800px;
        cursor: pointer;
      }

      input[type=text] {
        background-color: #04AA6D;
        border: none;
        color: white;
        padding: 5px 15px;
        text-decoration: none;
        margin: 4px 0px;
        cursor: pointer;
      }

      input[type=datetime-local] {
        background-color: #04AA6D;
        border: none;
        color: white;
        padding: 5px 15px;
        text-decoration: none;
        margin: 4px 0px;
        cursor: pointer;
      }


    </style>
</head>

<body>
  <div class="feedback">
    <h2> Fill in the form so we can allocate a slot for your booking </h2>
    <div class="container">
  <p>
    <form action="services-upload-booking.php">
        <label for="bookingtime">1. Date and time of booking?</label>
        <input style="margin-left:500px" type="datetime-local" id="bookingtime" name="bookingtime">
      <br></br>
        <label for="machinery">2. What machinery do you need?</label>
      <br></br>
          <input style="margin-left:700px" type="radio" id="tractor" name="machinery" value="TRACTOR">
        <label for="tractor">Tractor</label><br>
          <input style="margin-left:700px" type="radio" id="lorry" name="machinery" value="LORRY">
        <label for="lorry">Lorry</label><br>
          <input style="margin-left:700px" type="radio" id="fertilizer truck" name="machinery" value="FERTILIZER TRUCK">
        <label for="fertilizer truck">Ferlitizer Truck</label>
      <br></br>
        <label for="quantity">3. Quantity of the machinery needed?</label>
          <input style="margin-left:435px" type="text" id="quantity" name="quantity"><br><br>
        <label for="machinery">4. Do you need a driver?</label>
      <br></br>
        <input style="margin-left:700px" type="radio" id="yes" name="driver" value="YES">
        <label for="html">Yes</label><br>
          <input style="margin-left:700px" type="radio" id="no" name="driver" value="NO">
        <label for="css">No</label><br>
      <br>
        <label for="purpose">5. Intended purpose for machine?</label>
          <input style="margin-left:462px" type="text" id="purpose" name="purpose"><br>
      <br>
        <label for="coveragesize">6. Preferred coverage size?</label>
      <br></br>
          <input style="margin-left:700px" type="radio" id="50,000" name="coveragesize" value="50,000">
         <label for="50,000">RM 50,000</label><br>
          <input style="margin-left:700px" type="radio" id="100,000" name="coveragesize" value="100,000">
        <label for="100,000">RM 100,000</label><br>
          <input style="margin-left:700px" type="radio" id="200,000" name="coveragesize" value="200,000">
        <label for="200,000">RM 200,000</label><br>
          <input style="margin-left:700px" type="radio" id="500,000" name="coveragesize" value="500,000">
        <label for="500,000">RM 500,000</label><br>
          <input style="margin-left:700px" type="radio" id="1,000,000" name="coveragesize" value="1,000,000">
        <label for="1,000,000">RM 1,000,000</label><br>
          <input style="margin-left:700px" type="radio" name="coveragesize" value=""> Other (RM) <input style="margin-left:705px" type="text" name="coveragesize" />
      <br></br>
        <label for="commitment">7. What is your estimated monthly commitment? (RM)</label>
          <input style="margin-left:319px" type="text" id="commitment" name="commitment"><br>
      <br>
        <label for="commitment">8. What amount are you willing to pay monthly in total for your insurance? (RM)</label>
          <input style="margin-left:140px" type="text" id="commitment" name="commitment"><br>
      <br>
        <input type="submit" value="Download">
    </form>
  </p>
  </div>
</div>
</body>
