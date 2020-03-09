<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Today's Announcement!</title>
    </head>
  <body>
       <body style='background-color:purple'>
    <style>
        echo "<body style='background-color:Gray'>";
        body
            font-color: white;
            position: relative;
            top 50%;
        }
        p {
            position: relative;
            bottom 40%;
        }
      </style>
      <center>
          <h1>Today's Announcement!</h1>
          <h2>Believe in Yourself!</h2>
          <h3>Have an awsome day and thanks for visiting!</h3>
      </center>
      <center>
    <?php
          
          $date=date_create("");
          date_add($date,date_interval_create_from_date_string("40 days"));
          echo date_format($date,"<p>m-d-y</p>");
          echo "Today's Date:";
          
      $dayofweek = date("w");

      switch ($dayofweek) {
        case 1:
          echo "<p>It is Monday!</p>";
          break;
        case 2:
          echo "<p>It is Tuesday!</p>";
          break;
        case 3:
          echo "<p>It is Wednesday!</p>";
          break;
        case 4:
          echo "<p>It is Thursday!</p>";
          break;
        case 5:
          echo "<p>It is Friday!</p>";
          break;
        case 6:
          echo "<p>It is Saturday!</p>";
          break;
        case 0:
          echo "<p>It is Sunday!</p>";
          break;
        default:
          echo "Error!";
          break;
      }
          
    ?>
      </center>
  </body>
</html>
