<!DOCTYPE html>
<HTML>

<BODY>
<form method="post" action="rideShare-driverPassengerSelection.php">


	VehicleModel: <select name="vehicleModel" required>
		<option hidden disabled selected value> -- select an option -- </option>
		<option value="Car">Car</option>
		<option value="Truck">Truck </option>
		<option value="Van">Van</option>
	</select><br>


	License plate number: <input type="Text" name="licensePlateNum" required> <br>
    Passenger Capacity: <input type="Text" name="passengerCapacity" required> <br>
    Luggage Capacity: <input type="Text" name="luggageCapacity" required> <br>
    
    
    Vehicle Cleanliness: <select name="vehicleCleanliness" required>
		<option hidden disabled selected value> -- select an option -- </option>
		<option value="Clean">Clean</option>
		<option value="Medium">Medium </option>
		<option value="Unclean">Unclean</option>
	</select><br>
    
    
    <form>
    <p>NonSmoking</p>
	<input type="radio" name="nonSmoking" value="TRUE">smoke<br>
	<input type="radio" name="nonSmoking" value="FAUSE">nonsmoke		</form>
    <br>


	<input type="Submit" name="submit" value="Submit" required>

</form>
</BODY>

</HTML>