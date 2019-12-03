<!DOCTYPE html>
<html>
<style>
    body{
            background-image: url('Movies.jpg');
        }
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.proceedbtn {
    float: left;
    width: 50%;
    border-radius: 10px;
}

/* Add padding to container elements */
.container {
    padding: 10px;
    width: 60%;
    background-color:white;
    position: absolute;
    top:30%;
    left:20%;
    border-radius: 10px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both
}

/* Change styles for cancel button and signup button on extra small screens */


}
    div1 {
    width: 150px;
    height: 150px;
    overflow: visible;
}
</style>
<body>

<img src="C:\Users\Code.Bedroom-PC\Documents\Movie Booking System\Media\Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 4%; right:35%">

<form action="C:\Users\Code.Bedroom-PC\Documents\Movie Booking System\SeatingChartPage.html">
  <div class="container">
      <center>
    <label><b>Select Theatre</b></label>
    <select>
  <option value="PVR Orion Mall">PVR Orion Mall</option>
  <option value="Inox Mantri Square">Inox Mantri Square</option>
    <option value = "Inox Garuda Mall">Inox Garuda Mall</option>
    <option value="PVR Forum Mall">PVR Forum Mall</option>
        <option value="Urvashi Theatre">Urvashi Theatre</option>
        <option value="The Cinema GT World Mall">The Cinema GT World Mall</option>
</select>

      <br>
      <br>
      <label><b>Date</b></label>
      <select>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
</select>
<select>
<option value="Aug">Aug</option>
</select>
<select>
<option value="2017">2017</option>
      </select>     
    <br>
      <br>
    <label><b>Show Timing</b></label>
      <select>
  <option value="10:30AM">10:30AM</option>
  <option value="12:30PM">12:30PM</option>
          <option value="01:30PM">01:30PM</option>
          <option value="02:30PM">02:30PM</option>
          <option value="04:00PM">04:00PM</option>
          <option value="07:00PM">07:00PM</option>
          <option value="09:30PM">09:30PM</option>
          <option value="10:00PM">10:00PM</option>
</select>
      <br>
      <br>
          <input type="checkbox" name="seating" value="a1">A1 
          <input type="checkbox" name="seating" value="a2">A2
          <input type="checkbox" name="seating" value="a3">A3
          <input type="checkbox" name="seating" value="a4">A4
          <input type="checkbox" name="seating" value="a5">A5
          &nbsp;
          <input type="checkbox" name="seating" value="a6">A6 
          <input type="checkbox" name="seating" value="a7">A7
          <input type="checkbox" name="seating" value="a8">A8
          <input type="checkbox" name="seating" value="a9">A9
          <input type="checkbox" name="seating" value="a10">A10
          <br>
          <input type="checkbox" name="seating" value="b1">B1
          <input type="checkbox" name="seating" value="b2">B2
          <input type="checkbox" name="seating" value="b3">B3
          <input type="checkbox" name="seating" value="b4">B4
          <input type="checkbox" name="seating" value="b5">B5
          &nbsp;
          <input type="checkbox" name="seating" value="b6">B6 
          <input type="checkbox" name="seating" value="b7">B7
          <input type="checkbox" name="seating" value="b8">B8
          <input type="checkbox" name="seating" value="b9">B9
          <input type="checkbox" name="seating" value="b10">B10
          <br>
          <input type="checkbox" name="seating" value="c1">C1
          <input type="checkbox" name="seating" value="c2">C2
          <input type="checkbox" name="seating" value="c3">C3
          <input type="checkbox" name="seating" value="c4">C4
          <input type="checkbox" name="seating" value="c5">C5
          <br>
          <input type="checkbox" name="seating" value="d1">D1
          <input type="checkbox" name="seating" value="d2">D2
          <input type="checkbox" name="seating" value="d3">D3
          <input type="checkbox" name="seating" value="d4">D4
          <input type="checkbox" name="seating" value="d5">D5
          <br>
          <input type="checkbox" name="seating" value="e1">E1
          <input type="checkbox" name="seating" value="e2">E2
          <input type="checkbox" name="seating" value="e3">E3
          <input type="checkbox" name="seating" value="e4">E4
          <input type="checkbox" name="seating" value="e5">E5
          <br>
</center>
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="proceedbtn">Proceed</button>
    </div>
  </div>
</form>
    
</body>
</html>
