
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="rideShare-style.css">
</head>
<body>

<header>
<div class="banner-container">
    <div class="banner-inner">
        <a href="https://www.ualberta.ca/" class="site-title">University of Alberta</a>
        <div class="banner-logo">
            <span class="site-logo"></span>
            
        </div>
    </div>
</div>
</header>

<br>

I am a: 
<input type="button" name="personType" value="Driver" onclick="showDriverTripForm()" />

<input type="button" name="personType" value="Passenger" onclick="showPassengerTripForm()" />



<div id="driverTripData" style="display:none;"><br/>
	<form method="post">
		Which vehicle are you taking?: <input type="Text" name="personName" required> <br>
        Group Size: <input type="Text" name="groupSize" required> <br>
	</form>
        Departure Date: <input type="Date" name="departureDate" required> <br>
	</form>
        Departure Time: <input type="Time" name="departureTime" required> <br>
    </form>
        Luggage: <input type="Text" name="luggage" required> <br>
	</form>
    
        Compensation
	<input type="radio" name="compensation" value="TRUE">Yes
	<input type="radio" name="compensation" value="FAUSE">No		</form>
    <br>
        Departure Time Flexible
	<input type="radio" name="departureTimeFlexible" value="TRUE">Yes
	<input type="radio" name="departureTimeFlexible" value="FAUSE">No		</form>
    <br>

        Involves Alcohol 
	<input type="radio" name="involvesAlcohol" value="TRUE">Yes
	<input type="radio" name="involvesAlcohol" value="FAUSE">No		</form>
    <br>
</div>

<div id="passengerTripData" style="display:none;"><br/>
</div>

<div id="tripForm" style="display:none;"><br/>
	<form method="post" action="placeholder.php">
		<input type="submit" name="submit" value="Submit"/>
	</form>
</div>


<script >
	function showDriverTripForm(){
		document.getElementById("driverTripData").style.display = 'block';
		hidePassengerTripForm();
		showTripForm();
	}
</script>

<script >
	function hideDriverTripForm(){
		document.getElementById("driverTripData").style.display = 'none';
	}
</script>

<script >
	function showPassengerTripForm(){
		document.getElementById("passengerTripData").style.display = 'block';
		hideDriverTripForm();
		showTripForm();
	}
</script>

<script >
	function hidePassengerTripForm(){
		document.getElementById("passengerTripData").style.display = 'none';
	}
</script>

<script >
	function showTripForm(){
		document.getElementById("tripForm").style.display = 'block';
	}
</script>

</body>
</html>