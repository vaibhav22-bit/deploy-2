<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a record </title>
    
</head>

<style>
    h2.a{
        text-align: center;
    }
.box 
{
   background-color: aliceblue; 
   height: 1200px;
   width: 700px;
    margin:auto;
    padding: 20px;
    opacity: 0.7;
        
}
.i2 #i2 {
    width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        
        
    }
    .i2 #i3 {
    width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        
        
    }
    .i2 #i4 {
    width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        
        
    }
    .i2 #i5 {
    width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        
        
    }
.upload_icon
{
    position:relative;
    width: 60px;
    height: 60px;
    transform: translateX(-50%);
    cursor: pointer;
    padding: 20px;

}

</style>



<body>

    <form action="index.php" method="post">
    <h2 class="a">Enter the details</h2>
    <div class="box">
       
    <input type="file" id="image_input" accept="image/*">
        <div id = "display_image"></div>
        <script src="script.js"></script>
            
    <br>
    <h2>Demographic information</h2>
        <div class="i2">
            <input type="name" id="i2" placeholder="first name" name="fname" value=""> 
            <input type="name" id="i2" placeholder="last name" name="lname" value=""> 
            <input type="number" id="i2" placeholder="age" name="age" value="">
            <input type="tel" id="i2" placeholder="phone number" name="phone_number" value="">
        </div>
        <div>
            <h3>GENDER</h3>
<input type="radio" id="male" name="gender" value="MALE">
 <label for="male">MALE</label><br>
<input type="radio" id="female" name="gender" value="FEMALE">
<label for="female">FEMALE</label><br>
</div>
    <br>

    <div class="i2">
        
        <input type="name" id="i3" placeholder="Address" name="address" value=""> 

        <input type="email" id="i4" placeholder="Email" name="email" value="">
    </div>

<div class="i2">
<h2>last admitted</h2>
<input type="date" id="i5" placeholder="last admitted date" name="adate" value="">
<h2>last discharged</h2>    
<input type="date" id="i5" placeholder="last discharge  date" name="ddate" value="">
</div>
<div class="i2">
    <h2><label for="reason">Reason for last admitted</label></h2>
    <textarea id = "reason" rows ="5" cols="50" name ="reason"></textarea>
</div>
<br>

<div class="i2">
    <input type="text" id="i5" placeholder="Blood Pressure(mmHg)" name="bp" value="">
    <input type="number" id="i5" placeholder="Sugar level(mg/dL )" name="sugar" value="">
</div>
<div>
      <h2><label for="reason">Medical History</label></h2>
      <textarea id = "reason" rows ="10" cols="50" name="history"></textarea>
</div>
<button type="submit" value="submit">Submit</button>
</div>
    </form>
</body>
</html>