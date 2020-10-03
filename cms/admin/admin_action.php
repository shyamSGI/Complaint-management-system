<?php
session_start();
error_reporting(0);
include('includes/config.php');

include('includes/sidebarmenu.php');
//$con=mysqli_connect("localhost","root","","cms") or die(mysqli_error($con));

	?>
	
	
	
<!DOCTYPE HTML>
<html>
<head>
<title>CMS | Admin manage Issues</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>



 
    
 
</head> 
<body>
</body></html>
<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
				
<div class="agile-grids">	



		 <?php if(isset($_GET['add_cat'])): ?>
			
			<?php
				//echo "Manage categories";
			?>
		
			
			
			
		 <?php ?>
		<?php elseif(isset($_GET['manage_cat'])): ?>
			<?php
				//echo "Add categories";
			?>
		<?php elseif(isset($_GET['add_subcat'])): ?>
				
				
				
				 	<div class="grid-form">
 
<!---->
  <div class="grid-form1">
  	       <h3>Add Complaints Subcategories</h3>
  	        	 
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
						
							<form class="form-horizontal" name="package" method="GET" enctype="multipart/form-data">
								<div class="form-group">
									
									<label for="focusedinput" class="col-sm-2 control-label">Select Category</label>
								<div class="col-sm-8">
									   <select name="menu1" onChange="MM_jumpMenu('parent',this,0)">
                  <option value="" selected="selected" class="form-control">***Select One***</option>
                  <option value="Service Complaints">Service Complaints</option>
                  <option value="Food Complaints">Food Complaints</option>
				  <option value="Unsuitable Dining Environment">Unsuitable Dining Environment</option>
				  
                  </select>
				 </div> 	
									
											
								</div>
<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Enter the subcategory</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="subcat" id="subcat" placeholder="subcategory" required>
									</div>	
								</div>

								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="submit" class="btn-primary btn">Add Complaint Subcategory</button>

				
			</div>
		</div>
						
		</div>
					
					</form>


      <div class="panel-footer">
		
	 </div>
    
  </div>
 	</div>
				
			<?php			
			
			
			
				//echo "Add Subcategories";
			?>
		<?php elseif(isset($_GET['manage_subcat'])): ?>
			
			<?php
					

				//echo "Manage Subcategoriesccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc";
			
			
							$sql1= "SELECT * FROM subcategory";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_all($arr1);
							
								 // echo WWWWWWWWWW;
								  $no=0;
                                  $no=count($arrr);
								  //echo $no;
								  
                                  if($no==0) { echo "<h3>No Customer Orders Found</h1>";  }  
								  
								  else{ ?>
                                  <h1>Complaints Subcategories</h1>
                                  <table>
                                   <thead>
                                  <tr>
                                    <th>No:</th>
									<th>Subcategory</th>
                                    <th>Category</th>
                                    

                                  </tr>
                                </thead>
                                <tbody> 
                                <?php
                                $i=0;
                                while($i<$no)
                                { 
                                  echo "<tr>
                                        <td>{$arrr[$i][0]}</td>
                                        <td>{$arrr[$i][1]}</td>
                                        <td>{$arrr[$i][2]}</td>
                                    
										<td>
										<a href=\"admin_action.php?del_subcat=true&subcat_id={$arrr[$i][0]}\" class=\"btn btn-warning btn-sm\">Delete</a>
                                        </td>
                                        </tr>";
                                  $i++;
                                }
								
					
								  }
								
                                ?>  
                                </tbody>
                                </table>
			
			<?php elseif(isset($_GET['del_subcat'])): ?>
			<?php
						
						$del_sub=$_GET['subcat_id'];
						$sql1= "DELETE FROM subcategory WHERE id='$del_sub'";
						$arr1=mysqli_query($con,$sql1);
						
						
						
						header("location:admin_action.php?manage_subcat=true");	
			
				//echo "View all Complaints";
			?>
			<?php  elseif(isset($_GET['menu1'])&&isset($_GET['subcat'])):	?>
			<?php
				$cat =$_GET['menu1'];
				$subcat=$_GET['subcat'];
			
			$sql1= "INSERT INTO subcategory (`subcategory`, `category`) VALUES ('$subcat','$cat')";
						$arr1=mysqli_query($con,$sql1);
			if($arr1){echo "Subcategories added successfully";}
			else{
			echo "Error";
			}
			
			
			?>
			
			
			
		<?php elseif(isset($_GET['view_all'])): ?>
			<?php
				//echo "View all Complaints";
			?>	
		<?php elseif(isset($_GET['view_pending'])): ?>
			<?php
			$sql1= "SELECT * FROM complaints WHERE status='PENDING'";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_all($arr1);
							
								 // echo WWWWWWWWWW;
								  $no=0;
                                  $no=count($arrr);
								  //echo $no;
								  
                                  if($no==0) { echo "<h3>No Pending Complaints</h1>";  }  
								  
								  else{ ?>
                                  <h1>Pending Complaints </h1>
                                  <table>
                                   <thead>
                                  <tr>
                                    <th>No:</th>
									<th>date</th>
									<th>User Name</th>
                                    <th>Category</th>
                                    <th>Sub category</th>
									<th>Complaint</th>
									<th>Status</th>
									<th>Take Action</th>
                                  </tr>
                                </thead>
                                <tbody> 
                                <?php
                                $i=0;
                                while($i<$no)
                                { 
                                  echo "<tr>
                                        <td>{$arrr[$i][0]}</td>
                                        <td>{$arrr[$i][1]}</td>
                                        <td>{$arrr[$i][2]}</td>
										<td>{$arrr[$i][3]}</td>
										<td>{$arrr[$i][4]}</td>
										<td>{$arrr[$i][5]}</td>
										<td>{$arrr[$i][6]}</td>
										
                                    

										<td>
										<a href=\"admin_action.php?complaint_action={$arrr[$i][0]}\" class=\"btn btn-primary btn-sm\">Take Action</a>
                                        </td>
                                        </tr>";
                                  $i++;
                                }
								
					
								  }
								
                                ?>  
                                </tbody>
                                </table>
			
			
			
	
		<?php elseif(isset($_GET['view_inprogress'])): ?>
			<?php
			
			$sql1= "SELECT * FROM complaints WHERE status='INPROGRESS'";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_all($arr1);
							
								 // echo WWWWWWWWWW;
								  $no=0;
                                  $no=count($arrr);
								  //echo $no;
								  
                                  if($no==0) { echo "<h3>No Inprogress Complaints</h1>";  }  
								  
								  else{ ?>
                                  <h1>Inprogress Complaints </h1>
                                  <table>
                                   <thead>
                                  <tr>
                                    <th>No:</th>
									<th>date</th>
									<th>User Name</th>
                                    <th>Category</th>
                                    <th>Sub category</th>
									<th>Complaint</th>
									<th>Status</th>
									<th>Remark</th>
                                  </tr>
                                </thead>
                                <tbody> 
                                <?php
                                $i=0;
                                while($i<$no)
                                { 
                                  echo "<tr>
                                        <td>{$arrr[$i][0]}</td>
                                        <td>{$arrr[$i][1]}</td>
                                        <td>{$arrr[$i][2]}</td>
										<td>{$arrr[$i][3]}</td>
										<td>{$arrr[$i][4]}</td>
										<td>{$arrr[$i][5]}</td>
										<td>{$arrr[$i][6]}</td>
										<td>{$arrr[$i][7]}</td>

										<td>
										<a href=\"admin_action.php?complaint_action={$arrr[$i][0]}\" class=\"btn btn-primary btn-sm\">Take Action</a>
                                        </td>
                                        </tr>";
                                  $i++;
                                }
								
					
								  }
								
                                ?>  
                                </tbody>
                                </table>
			
			
			
		<?php elseif(isset($_GET['view_complete'])): ?>
			<?php
			$sql1= "SELECT * FROM complaints WHERE status='COMPLETE'";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_all($arr1);
							
								 // echo WWWWWWWWWW;
								  $no=0;
                                  $no=count($arrr);
								  //echo $no;
								  
                                  if($no==0) { echo "<h3>No Completed Complaints</h1>";  }  
								  
								  else{ ?>
                                  <h1>Completed Complaints </h1>
                                  <table>
                                   <thead>
                                  <tr>
                                    <th>No:</th>
									<th>date</th>
									<th>User Name</th>
                                    <th>Category</th>
                                    <th>Sub category</th>
									<th>Complaint</th>
									<th>Status</th>
									<th>Remark</th>
                                  </tr>
                                </thead>
                                <tbody> 
                                <?php
                                $i=0;
                                while($i<$no)
                                { 
                                  echo "<tr>
                                        <td>{$arrr[$i][0]}</td>
                                        <td>{$arrr[$i][1]}</td>
                                        <td>{$arrr[$i][2]}</td>
										<td>{$arrr[$i][3]}</td>
										<td>{$arrr[$i][4]}</td>
										<td>{$arrr[$i][5]}</td>
										<td>{$arrr[$i][6]}</td>
										<td>{$arrr[$i][7]}</td>
                                    

										<td>
										<!--<a href=\"admin_action.php?complaint_action={$arrr[$i][0]}\" class=\"btn btn-primary btn-sm\">Take Action</a>
                                        --></td>
                                        </tr>";
                                  $i++;
                                }
								
					
								  }
								
                                ?>  
                                </tbody>
                                </table>
			
			

			<?php elseif(isset($_GET['complaint_action'])): ?>
			
			<?php     $cid=$_GET['complaint_action'];     ?>
			
			<div class="grid-form">
 
<!---->
  <div class="grid-form1">
			
			<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">	
				<form class="form-horizontal" name="package" method="GET" enctype="multipart/form-data">
								<div class="form-group">
									
									<label for="focusedinput" class="col-sm-2 control-label">Complaint ID</label>
								<div class="col-sm-8">
									   <select name="complaint_id" onChange="MM_jumpMenu('parent',this,0)">
                  <option value="<?php  echo $cid;?>" selected="selected" class="form-control"><?php  echo $cid;?></option>
                  </select>
				 </div> 	
									
											
								</div>
								
								
								<div class="form-group">
									
									<label for="focusedinput" class="col-sm-2 control-label">Select Category</label>
								<div class="col-sm-8">
									   <select name="action_menu1" onChange="MM_jumpMenu('parent',this,0)">
                  <option value="" selected="selected" class="form-control">***Select One***</option>
                  <option value="INPROGRESS">In Progress</option>
                  <option value="COMPLETE">Complete</option>
                  </select>
				 </div> 	
									
											
								</div>
<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Remark</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="remark" id="remark" placeholder="remark" required>
									</div>	
								</div>

								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="submit" class="btn-primary btn">Take Action</button>

				
			</div>
		</div>
						
		</div>
					
					</form></div></div></div>
						
		</div>
				<?php
				
				
				
				//echo "View all completed Complaints";
				?>
		<?php  elseif(isset($_GET['action_menu1'])&&isset($_GET['remark'])):	?>
			<?php
				$cid=$_GET['complaint_id'];
				$action =$_GET['action_menu1'];
				$remark=$_GET['remark'];
			
			$sql1= "UPDATE `complaints` SET `status`='$action',`remark`='$remark' WHERE id='$cid'";
						$arr1=mysqli_query($con,$sql1);
			if($arr1){echo "Action successfull";}
			else{
			echo "Error";
			}
			
			
			?>
			
		
		<?php else: ?>









	</div>
</div>
</div>


		<?php include('includes/footer.php'); ?>

 <?php endif; ?>