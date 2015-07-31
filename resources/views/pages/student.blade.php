@extends('master')


@section('content')

@section('divright')
 <div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Student Name</div>
	
	  	

	  <!-- Table -->

	  <table class="table" >
	  	<tr>
	  		<th>ID </th>
	  		<th>First Name</th>
	  	</tr>


		    	<?php
					foreach ($studentview as $std){
					echo "<tr>";
						echo "<td>" ;
							echo $std->id ;
						echo "</td>";

						echo "<td>" ;
							echo $std->firstname ;
						echo "</td>";
					echo "</tr>";
						

					}

				?>

		  
		   
		 

	  </table>
	</div>


@stop