<?php



?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

    <title>Proforma No.3.</title>
    
  

  </head>
  <body>
  <div class="heading">
    <h3>Proforma No.3. </h3>
  </div>
    <div class="container">
    <div>
      <form action="index.php">
      <table class="forum">
        <tr>
          <td>
          <P><b>Details Showing Computer Education related infarstructure, equipment etc. </b></P>
          </td>
        </tr>
        <ul style="line-height:180%"> 
          <tr>
            <td>
              <br>
             <li> Whether School has Computer Lab? :</li>
          
            </td>
            <td>
              <br>
            <input type="text" placeholder="Whether School has Computer Lab"name="computerlab"   required size="50">
            </td>
          </tr>
          <tr>
            <td>
            <br>
             <li> If yes total no of computer with mark, when purchased or supplied by whom? :</li>
          
            </td>
            <td>
            <br>
            <input type="text" placeholder=" total no of computer and purchased or supplied" name="computerandpurchased" required size="50">
            </td>
          </tr>
          <tr>
            <td>
              <br>
             <li> Availability of internet facility :</li>
          
            </td>
            <td>
              <br>
            <input type="text" placeholder="Availability of internet facility"name="internetfacility" required size="50">
            </td>
          </tr>
          <tr>
            <td>
            
            <li>  Connectivity </li> 
            </td>
                    <td>
                        <br>
                        <div class="radio-container">
                            <div class="radio-item">
                                <input type="radio" id="4mbps" name="Connectivity" value="4mbps">
                                <label for="4mbps">4mbps</label>
                            </div>
                        </div>
                        <div class="radio-container">
                            <div class="radio-item">
                                <input type="radio" id="10mbps" name="Connectivity" value="10mbps">
                                <label for="10mbps">10mbps</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="20mbps" name="Connectivity" value="20mbps">
                                <label for="20mbps">20mbps</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="30mbps" name="Connectivity" value="1300mbps">
                                <label for="30mbps">300mbps</label>
                            </div>
                        </div>
                    
                    
                    </td>
                </tr>
                <tr>
                  <td>
                    <br>
                  <li>  3 phase electricity meter is available at school or not?  </li>
                  </td>
                  <td>
                    <input type="text" placeholder="electricity meter is available at school" name="electricity is available at school"  required size="50">
                  </td>

                </tr>
                <tr>
            <td>
              <br>
             <li> Whether Usb batter backup is available :</li>
          
            </td>
            <td>
              <br>
            <input type="text" placeholder="Whether Usb batter backup is available "name="Usbbatterbackup" required size="50">
            </td>
          </tr>
          <td>
              <br>
             <li> if yes what capacity, make ect  :</li>
          
            </td>
            <td>
              <br>
            <input type="text" placeholder="if yes what capacity" name="ifyeswhatcapacity" required size="50">
            </td>
          </tr>
          <td>
              <br>
             <li> how many periods class wise are allotted for computer Teaching in school time table?  :</li>
          
            </td>
           
            <td>
              <br>
            <input type="text" placeholder=" how many periods class wise are allotted for computer Teaching" name="timetable" required size="60">
            </td>
            <td><br><input type="file" id="schooltimetable" name="fileInput" required></td>
            
          </tr>
          
          <tr><td><br>(copy of time table to be enclosed)</td></tr>
          <td>
              <br>
             <li> Detail of syllabus with name of computer course is being followed at primary ,secondary and jr.college  :</li>
          
            </td>
            
            <td>
              <br>
            <input type="text" placeholder="Detail of syllabus with name of computer course" name="Detailofsyllabuscomputer" required size="50">
            </td>
            
          </tr>
          <td>
              <br>
             <li> Whether separate computer qualified instructor haqs bee appointed?  :</li>
          
            </td>
            
            <td>
              <br>
            <input type="text" placeholder="Whether separate computer qualified" name="qualified instructor" required size="50">
            </td>
            
          </tr>
          <td>
              <br>
             <li> if yes his/her full computer course related qualification such as MS-SIT Exam pass,DCA/DTP/BCA or B.SC computer Science or equivalent to it :</li>
          
            </td>
            
            <td>
              <br>
            <input type="text" placeholder=" computer course related qualification " name="computer course " required size="50">
            </td>
            
          </tr>
          <tr>
            <td>
              <br>
              <li> if qualifid computer teacher is not available then what arraangement is proposed? </li>
            </td>
            <td>
              <br>
              <input type="text" placeholder="if qualifid computer teacher is not available then what arraangement is proposed?" name="qualifid computer teacher" required size="60">
            </td>
          </tr>
          <tr>
            <td>
              <br>
              <li>if yes size of the Hall :</li>
            </td>
            <td>
              <br>
              <input type="text" placeholder="if yes size of the Hall" onkeyup="resizeInput()" required size="50">
            </td>
          </tr>
          <tr>
            <td>
              <br>
              <li>On which floor whether the Hall is fully secured? </li>
            </td>
            <td>
              <br>
              <input type="text" placeholder="On which floor whether the Hall is fully secured?" name="Hall fully secured" required size="50">
            </td>
          </tr>
        </ul>
      </table>
<br><br>
<div id="dateandsign"  class="container-fluid" style="display: flex;">
    <div style="flex: 4;">
      <label for="pf1dated">Dated:</label>
        <input type="date" id="pf1dated" name="pf1dated">
   </div>
</div>   
<br><br>    
<!-- Two signs-->
<div style="display: flex;">
    <div style="flex: 1;">
      <p style="font-weight: bold;">Signature ..................</p>
    </div>
    <div style="flex: -4;">
     <p style="font-weight: bold;">Signature ..................</p>
    </div>
</div>



<br>
<br>

<div class="container-fluid" style="display: flex;">
  <div style="flex: 4;">
  <p style="font-weight: bold;">President</p>
  </div>
  <div style="flex: -2;">
    <p style="font-weight: bold;">(Principal/Head Master/Head Mistress)</p>
  </div>
</div> 



















      </form> 
    </div>
    </div>

















































    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>