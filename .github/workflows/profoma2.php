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
    <title>Proforma No.2.</title>
  </head>
  <body>
    <div class="heading">
        <h3>  Proforma No.2. </h3>
    </div>
    <div class="container">
    <div>
        <form action="index.php">
            <table class="forum">
                
            
                <tr>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>    
                        <p>
                            <b>Which Type of School it is?</b>
                        </p>             

    <input type="radio" id="primary" name="school" value="primary">
    <label for="primary">Primary School</label><br>
    <input type="radio" id="high" name="school" value="high">
    <label for="high">High School</label><br>
    <input type="radio" id="jr" name="school" value="jr">
    <label for="jr">Jr. College</label><br>

                 </td>
         </tr>
         <tr>
                    <td>
                        Which Medium Of Instruction of each school:
                       
                    </td>
                    <td>
                    <input type="text" placeholder="which language" name="mediumofinstruction" required size="50">
                
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                     <b> Name of the Primary School: </b>  
                    </td><td>
    <br>
    <textarea placeholder="Name of the Primary School" name="primaryschool" required size="50"></textarea>
</td>
                    <!-- <td>
                        <br>
                        <input type="text" placeholder="Name of the Primary School" name="primaryschool" required>
                    </td>
                </tr> -->
            
                <tr>
                    <td>
                        <br>
                        <div class="radio-container">
                            <div class="radio-item">
                                <input type="radio" id="aided" name="aided" value="aided">
                                <label for="aided">Aided</label>
                            </div>
                        </div>
                        <div class="radio-container">
                            <div class="radio-item">
                                <input type="radio" id="unaided" name="aided" value="unaided">
                                <label for="unaided">Unaided</label>
                            </div>
                        </div>
                    
                    
                    </td>
                </tr>
                <tr>
                    <td>
                    <br>
                     Class wise total strengt of students:   
                    </td>
                    <td>
                    <br>
                    <input type="file" id="students" name="fileInput" >

                    </td>
                </tr>
                <tr> 
                <br>
                 
                    <td>
                    <br>
                        Details of each member of teaching Staff
                    </td>
                    <td>
                    <br>
                        <input type="file" id="teaching" name="fileInput">
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                       <p> <b>i.e. Name,age,Qualification,Teaching Experience</b> </p>
                    </td>
                    <td>
                        <br>
                        <p><b>and computer qualification if any to be shown separetely</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <b>Name of the Secondary School:</b>

                    </td>
                    <td>
                        <br>
                        <input type="text" placeholder="Name of Secondary School" name="secondaryschool" required size="50">
                    </td>
                    <tr>
                    <td>
                        <br>
                        <div class="radio-container">
                            <div class="radio-item">
                                <input type="radio" id="secaided" name="aided" value="aided">
                                <label for="aided">Aided</label>
                            </div>
                        </div>
                        <div class="radio-container">
                            <div class="radio-item">
                                <input type="radio" id="secunaided" name="aided" value="unaided">
                                <label for="unaided">Unaided</label>
                            </div>
                        </div>
                    
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        Class wise total sraength of strength:
                    </td>
                    <td>
                        <br>
                        <input type="file" id="secstudents" name="file">
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        Details of each member of teaching Staff:
                    </td>
                    <td>
                        <br>
                        <input type="file" id="secteaching" name="file">
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                       <p> <b>i.e. Name,age,Qualification,Teaching Experience</b> </p>
                    </td>
                    <td>
                        <br>
                        <p><b>and computer qualification if any to be shown separetely</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <b>Name of the Jr.College:</b>

                    </td>
                    <td>
                        <br>
                        <input type="text" placeholder="Name of the Jr.College" name="jrcollrege" required size="50" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <div class="radio-container">
                            <div class="radio-item">
                                <input type="radio" id="jraided" name="aided" value="aided">
                                <label for="aided">Aided</label>
                            </div>
                        </div>
                        <div class="radio-container">
                            <div class="radio-item">
                                <input type="radio" id="jrunaided"  name="aided" value="unaided">
                                <label for="unaided">Unaided</label>
                            </div>
                        </div>
                                         
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        Faculty wise,Class wise total strength of students: 

                    </td>
                    <td>
                        <br>
                        <input type="text" placeholder="Total No. of Students" name="totalnoofstudents" required size="50" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        Details of each member of teaching Staff:
                    </td>
                    <td>
                        <br>
                        <input type="file" id="jrcollegeteaching" name="file">
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                       <p> <b>i.e. Name,age,Qualification,Teaching Experience</b> </p>
                    </td>
                    <td>
                        <br>
                        <p><b>and computer qualification if any to be shown separetely</b></p>
                    </td>
                </tr>
                



            </table>   

            <!-- date and sign  -->
                 <div id="dateandsign"  class="container-fluid" style="display: flex;">
                     <div style="flex: 4;">
                        <label for="pf2dated">Dated:</label>
                        <input type="date" id="pf2dated" name="pf1dated">
                     </div>
                     <div style="flex: 5">
                        <p style="font-weight: bold;">Principal Signature ..................</p>
                        
                     </div>
                     
                        <div style="flex: -2;">
                            <p style="font-weight: bold;">President Signature ..................</p>
                        </div>
                    </div>
            <!-- date and sign ends here -->
            <br>
                <!-- submit and reset -->
            <div class="srbutton">
                    <input type="submit" class="btn btn-primary" value="submit"  >
                    <input type="reset" class="btn btn-primary" value="reset"  >
            </div>



        </form>    
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