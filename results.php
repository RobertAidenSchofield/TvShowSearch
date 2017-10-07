<?php
$data=$_POST['search'];
$search_sql="SELECT * FROM Tvshows WHERE shows LIKE '%$data%' ";
$search_query=mysql_query($search_sql);
if(mysql_num_rows($search_query)!=0)
{
	$search_rs=mysql_fetch_assoc($search_query);
}
?>
<p>Search Results</p>
        <?php
	        if(mysql_num_rows($search_query)!=0)
	        {
		        do { ?>
			        <p><?php echo $search_rs['shows']; ?></p>
				<?php
		        }
		        while($search_rs=mysql_fetch_assoc($search_query));			        
		       
	        }
	        else{
		        echo"no results found";
	        }
        ?>