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
		<div class="profile">
			<select name="users" id="users" class="waves-effect waves-light btn" style="background-color:#d4ac6e">
				<option value="" disabled selected>Choose ur fighter</option>
				<option value="Pauweey">Pauweey</option>
				<option value="Renz">Renz</option>
				<option value="BBCUTE">BBCUTES</option>
			</select>
		</div>

		<a class="waves-effect waves-light btn modal-trigger" style="background-color:#d4ac6e" href="#modalAddItem"><i class="material-icons right">add</i>Add Item</a>
		<a class="waves-effect waves-light btn" style="background-color:#d4ac6e"><i class="material-icons right">view_list</i>View Summary</a>
		<a class="waves-effect waves-light btn" style="background-color:#d4ac6e"><i class="material-icons right">show_chart</i>Targets and Goals</a>

	</div>
	<div class="mainBody">
		<div class="mbLeft">
			<div class="mbTitle">
				<span>Expenses</span>
			</div>
			<table class="myExpense">
				<tr>
					<th>Item Name</th>
					<th>Money From</th>
					<th>Price</th>
					<th>Remarks</th>
				</tr>
				<tr>
					<td>Invesment</td>
					<td class="wBorder">Wallet</td>
					<td class="wBorder">$10</td>
					<td class="wBorder">Para sa future!</td>
				</tr>
				<tr>
					<td>Food</td>
					<td class="wBorder">Wallet</td>
					<td class="wBorder">$69</td>
					<td class="wBorder">Jabi lang</td>
				</tr>
				<tr style="border-bottom: none;">
					<td></td>
					<td><b>TOTAL:</b></td>
					<td style="color: rgb(3,103,4)"><b>$79</b></td>
					<td></td>
				</tr>
			</table>
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
	<div id="modalAddItem" class="modal">
		<div class="modal-content">
		<h4>Expense Item</h4>
		<div class="row">
			<form class="col s12">
			<div class="row">
				<div class="input-field col s5">
				<i class="material-icons prefix">local_mall</i>
				<input id="icon_prefix" type="text" class="validate">
				<label for="icon_prefix">Item</label>
				</div>
				<div class="input-field col s4">
				<i class="material-icons prefix">attach_money</i>
				<input id="icon_telephone" type="tel" class="validate">
				<label for="icon_telephone">Price</label>
				</div>
				<div class="input-field col s3">
				<select>
					<option value="1">Wallet</option>
					<option value="2">Savings</option>
				</select>
				<label>Category</label>
				</div>
				<div class="input-field col s12">
				<i class="material-icons prefix">edit</i>
				<input id="icon_telephone" type="tel" class="validate">
				<label for="icon_telephone">Remarks</label>
				</div>
			</div>
			</form>
			<a href="#!" class="modal-close waves-effect waves-green btn-floating btn-large right" style="background-color:#d4ac6e"><i class="material-icons">done</i>Submit</a>
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
