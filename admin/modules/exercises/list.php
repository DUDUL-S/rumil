<?php
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
      <div class="module-head"> 
            <h1 class="page-header">Daftar Pertanyaan <a href="index.php?view=add" class="btn btn-primary">New</a> </h1> 
       		 
       		</div> 
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class=" datatable-1 table table-bordered table-hover" cellspacing="0" style="font-size:12px" >
				
				  <thead>
				  	<tr> 
				  		<th>id_pesan</th>
				  		<th>StudentID</th>
				  		<th>STUDUSERNAME</th>
				  		<th>Pesan</th>
				  		<th>Tema</th>
				  		<th>Waktu</th>
				  		<th width="10%">Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  
				  		$mydb->setQuery("SELECT * FROM `pesan` l, `tblstudent` e WHERE l.`StudentID`=e.`StudentID`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td>' . $result->id_pesan.'</a></td>'; 
				  		echo '<td>' . $result->StudentID.'</a></td>'; 
				  		echo '<td>' . $result->STUDUSERNAME.'</a></td>'; 
				  		echo '<td>' . $result->	pesan.'</a></td>'; 
				  		echo '<td>' . $result->tema.'</a></td>'; 
				  		echo '<td>' . $result->waktu.'</a></td>'; 				  		
				  		echo '<td > <a title="Edit" href="index.php?view=edit&id='.$result->id_pesan.'" class="btn btn-primary btn-xs" >Edit</a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->id_pesan.'" class="btn btn-danger btn-xs" >Delete</a>
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
				 
			
				</form>
	 