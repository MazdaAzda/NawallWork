<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas 2 | OOP PHP - G.211.21.0082</title>
   <style>
      body {
         padding: 0;
         margin: 0;
         box-sizing: border-box;
         background: #efefef;
         font-family: "JetBrains Mono", sans-serif;
      }

      .wrap {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         background: #cecece;
         width: 500px;
         height: auto;
         border-radius: 3px;
         padding: 0 12px;
         box-shadow: 3px 3px 4px #bbb, -3px -3px 4px #fff;
      }

      h3 {
         text-align: center;
         font-weight: 600;
      }

      p {
         background: #eee;
         padding: 2px 8px;
         font-weight: 500;
         font-size: 16px;
         text-align: justify;
      }
   </style>
</head>

<body>
   <?php

   interface Bintang
   {
      public function Makan();
      public function Berjalan();
      public function Bersuara();
      public function Sepeda();
   }
   class Monyet implements Bintang
   {
      public function Makan()
      {
         return "Monyet dapat berjalan<br/>";
      }

      public function Berjalan()
      {
         return "Monyet memakan pisang<br/>";
      }

      public function Bersuara()
      {
         return "Monyet dapat bersuara<br/>";
      }
      public function Sepeda()
      {
         return "Monyet juga dapat menaiki sebuah sepeda<br/>";
      }
   }

   ?>
   <div class="wrap">
      <h3>Tugas 2 Pem Framework | OOP PHP</h3>
      <p>
         <?php
         $Binatang = new Monyet;
         echo "<b>Kemampuan Monyet : </b><br/>";
         echo $Binatang->Makan();
         echo $Binatang->Berjalan();
         echo $Binatang->Bersuara();

         echo "<b>Kemampuan Lainnya Apabila Dilatih : </b><br/>";
         echo $Binatang->Sepeda();
         ?>
      </p>
   </div>
</body>

</html>