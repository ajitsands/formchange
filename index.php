<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
<body>

<h2>HTML Forms</h2>

<form action="" id="myForm">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="Ajit" current-value="Ajit"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe" current-value="Doe"><br><br>
  
  <input type="radio" id="html" name="fav_language" value="HTML" current-value="CSS">
  <label for="html">HTML</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS" current-value="CSS">
  <label for="css">CSS</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript" current-value="CSS">
  <label for="javascript">JavaScript</label>
   <input type="checkbox" id="vehicle1" name="vehicle" value="Bike" current-value="Bike">
  <label for="vehicle1"> I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle" value="Car" current-value="Bike">
  <label for="vehicle2"> I have a car</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle" value="Boat" current-value="Bike">
  <label for="vehicle3"> I have a boat</label>
  <label for="cars">Choose a car:</label>
    <select id="cars" name="cars" current-value="saab">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
</form> 

<input type="submit" value="Submit">

</body>
<script>
    $(document).ready(function() {
        // $('#myForm').find(':input').each(function(index, value) {
        //     //$(this).data('val', $(this).val());
        //     console.log("Form Chnaged -1 ");
            
            
        //   });
        // })
        
        // $('#myForm').on('paste', ':input', function(e) {
        //   //$(this).data('val', $(this).val());
        //   console.log("Form Chnaged -2 ");
        //   // The form has been changed. Your code here.
        // });
        
$('#myForm').on('keyup', ':input', function(e) {
            CheckControlValueStatus($(this));
});
$("#myForm").on("change", "textarea, select", function() {
            CheckControlValueStatus($(this));
});
$('#myForm input').on('change', function() {
  alert($('input[name=vehicle]:checked', '#myForm').val());
  CheckControlValueStatus($(this));
});


function CheckControlValueStatus(obj)
{
            var changedInput = obj;
            var currentValue = changedInput.attr("current-value");
            var changedValue = changedInput.val();
           console.log(currentValue+"----"+changedValue);
           if($.trim(currentValue)===$.trim(changedValue))
           {
               console.log("No Changes");
           }
           else
           {
               console.log("Value Changed");
           }
}
});
</script>
</html>
