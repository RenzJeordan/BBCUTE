<!DOCTYPE html>

<html>
<head> 
	<link rel="stylesheet" type="text/css" href="assets/index.css"> 
	 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
</head>


<body>
	<div id="titleHolder">
		<span> BBCUTE Expense Tracker</span>		
	</div>	

	<div id = "buttonHolder">

		<a class="waves-effect waves-light btn modal-trigger" style="background-color:#d4ac6e" href="#modal1"><i class="material-icons right">add</i>Add Item</a>
		<a class="waves-effect waves-light btn" style="background-color:#d4ac6e"><i class="material-icons right">view_list</i>View Summary</a>
		<a class="waves-effect waves-light btn" style="background-color:#d4ac6e"><i class="material-icons right">show_chart</i>Targets and Goals</a>
		
		<div class="profile">
			<span> Profile:</span>
			<select name="users" id="users" class="waves-effect waves-light btn" style="background-color:#d4ac6e">
				<option value="Pauweey">Pauweey</option>
				<option value="Renz">Renz</option>
				<option value="BBCUTE">BBCUTES</option>
			</select>
		</div>
	
	</div>

	<div class="mainBody">
		<div class="mbLeft">
			<div class="mbTitle">
				<span>Expenses</span>
			</div>
		</div>
		
		<div class="mbRight">

			<div class="mbTitle">
				<div class="profile">
					<span> By:</span>
					<select name="users" id="users" class="byTime">
						<option value="Month">Month</option>
						<option value="Year">Year</option>
					</select>
				</div>
			</div>

			<div class="chartContainer">
				<canvas id="myChart"></canvas>
			</div>

		</div>
	</div>

	
	
	<!-- Add Item Modal -->
	<div id = "modal1" class  = "modal">
		<div class="modal-content">
		<h4>Expense Item</h4>
			<div class="row">
				<forms class="col s10">
					<div class="row">
						<div class="input-field col s7"> 
							<input type="text" class="validate">
							<label> Item Name </label> 	
						</div>	

						<div class="input-field col s3">
							<input type="text" class="validate">
							<label> Price </label>
						</div>
					</div>
				</forms>
			</div>

		<h6> Total </h6>
			<div class="row"> 1,500.00 </div> 	
		</div>


		<div class="modal-footer">
			<a href="#!" class="modal-close waves-effect waves-green btn-flat">Submit</a>
		</div>
	</div>

   <!--<form method="post" action="database/queries.php">
		<input type="text" name="firstName" placeholder="First Name"> </input>
		<input type="text" name="lastName" placeholder="Last Name"> </input>
      	<button type="submit" name="toInsert"> click mo to </button>
   </form>-->

   <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   <script src = "script/index.js"></script>	
   

</body>
</html>