<!DOCTYPE html>
<html lang="en">
  <head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link  rel="stylesheet" type="text/css" href="style/stylee.css" />
    <title>Admin home</title>
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap">

  </head>
  <body>

    <input type="checkbox" id="sidebar-toggle">

    

    <div class="sidebar">
    	
    	<div class="sidebar-header">
    		<h3 class="brand">
    			
    			<span>Sports E-commerce</span>
    			
    		</h3>
    		<label for="sidebar-toggle" class="fa fa-bars"></label>
    	</div>

    	<div class="sidebar-menu">
    		<ul>
    			<li>
    				<a href="">
    					<span class="fa fa-home">
    						
    					</span>
    					<span> Home</span>
    				</a>
    			</li>

    			<li>
    				<a href="">
    					<span class="fa fa-user">
    						
    					</span>
    					<span>Users</span>
    				</a>
    			</li>
    			<li>
    				<a href="">
    					<span class="fa fa-store-alt">
    						
    					</span>
    					<span>Shops</span>
    				</a>
    			</li>

    			<li>
    				<a href="Addproducts.php">
    					<span class="fa fa-quidditch">
    						
    					</span>
    					<span>Products</span>
    				</a>
    			</li>

    			<li>
    				<a href="">
    					<span class="fa fa-campground">
    						
    					</span>
    					<span>Campaign</span>
    				</a>
    			</li>

    			<li>
    				<a href="">
    					<span class="fa fa-bolt">
    						
    					</span>
    					<span>Brands</span>
    				</a>
    			</li>
    		</ul>
    		
    	</div>
    </div>

    <div class="main-content">
    	
    	<header>
    		<div class="search-wrap">
    			<span class="fa fa-search"></span>
    			<input type="search" name="search" placeholder="Search">
    		</div>

    		<div class="social-icons">
    			<span class="fa fa-bell"></span>
    			<span class="fa fa-comment"></span>

    			<div></div>
    		</div>
    	</header>

    	<main>
    		<h2 class="dash-title">Overview</h2>
    		<div class="dash-cards">
    			<div class="card-single">
    				<div class="card-body">
    					<span class="fa fa-briefcase"></span>
    					<div>
    						<h5>Monthly Earnings</h5>
    						<h4>$30,000</h4>
    					</div>
    				</div>

    				<div class="card-footer">
    					
    					<a href="">View all</a>
    				</div>
    			</div>

    			<div class="card-single">
    				<div class="card-body">
    					<span class="fa fa-clock"></span>
    					<div>
    						<h5>Weekly Earnings</h5>
    						<h4>$30,000</h4>
    					</div>
    				</div>

    				<div class="card-footer">
    					
    					<a href="">View all</a>
    				</div>
    			</div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-dollar-sign"></span>
                        <div>
                            <h5>Total Earnings</h5>
                            <h4>$30,000</h4>
                        </div>
                    </div>

                    <div class="card-footer">
                        
                        <a href="">View all</a>
                    </div>
                </div>
    		</div>

            <section class="recent">
        <div class="acitivity-grid" style="background: #fff; border-radius: 7px; box-shadow: 3px 3px 3px rgba(0,0,0,0.2);">
            
             <div class="acitivity-card">
            <h3 style="color: var(--text-grey); padding: 1rem;"> Recent Acitivity</h3>

            <table border="1" style="width: 100%; border-collapse: collapse;" >

            		<?php
	include 'dbconnection.php';
      $sql = "SELECT * FROM productinfo";
      $query_run = mysqli_query($conn,$sql);
      if(mysqli_num_rows($query_run)>0)
      {
      	
      	?>
                
                <thead style="background: #efefef; text-align: left; font-size: 1rem;">

                    <!------Row names---->
                	
                    <tr>
                        <th style="font-size: .9rem; padding: 1rem 1rem;" id="ID">ID</th>
                        <th style="font-size: .9rem; padding: 1rem 1rem;" id="products">Products</th>
                        <th style="font-size: .9rem; padding: 1rem 1rem;"id="AddingDate">Adding Date</th>
                        <th style="font-size: .9rem; padding: 1rem 1rem;"id="SessionDate">Session Date</th>
                        <th style="font-size: .9rem; padding: 1rem 1rem;"id="Price">Price</th>
                        <th style="font-size: .9rem; padding: 1rem 1rem;"id="Status">Status</th>
                        <th colspan="2">Operation</th>
                    </tr>
                </thead>
            </form>
                <tbody style="font-size: 1rem;">

                	<?php
    while ($row = mysqli_fetch_assoc($query_run))
      	{ 
      		?>

                <!------columns from datatbase using databasenames in $row[]---->

                		<tr>
                            <td style="font-size: .85rem; padding: .5rem;"><?php echo $row['ID']; ?></td>
                		<td style="font-size: .85rem; padding: .5rem;"><?php echo $row['Products']; ?></td>
                		<td style="font-size: .85rem; padding: .5rem;"><?php echo $row['AddingDate']; ?></td>
                		<td style="font-size: .85rem; padding: .5rem;"><?php echo $row['SessionDate']; ?></td>
                		<td style="font-size: .85rem; padding: .5rem;"><?php echo $row['Price']; ?></td>
                		<td style="font-size: .85rem; padding: .5rem;"><?php echo $row['Status']; ?></td>
                       

                       <!------update---->
                        
                        <td >
                            <span class="fa fa-pen-square"></span>
                            <form action="delete.php" method="POST">
        <input type="hidden" name="delete_id" value="<?php echo $row['ID'];?>">
        <button type="submit" name="delete_btn">Update</button>
        </form>
                        </td>

                        <!------Remove---->
                        <td >

                            <span class="fa fa-trash-alt"></span>

                            <form action="delete.php" method="POST">
        <input type="hidden" name="delete_id" value="<?php echo $row['ID'];?>">
        <button type="submit" name="delete_btn">Delete</button>
        </form>
        </td>
                            
                            
                            
                        
                	</tr>

                		<?php 
         
      	}
   ?>

           
                </tbody>
                
            </table>

            <?php
    }
      else 
      {
      	echo "NO RECORD FOUND";
      }

      ?> 

      <!------Add products page button---->

      <input type="button" onClick="document.location.href='Addproducts.php'" value="Add Products" class="btn" style="width: 150px;
  background-color: #5995fd;
  border: none;
  outline: none;
  height: 49px;
  border-radius: 49px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
  margin-left: 500px;
  margin-top: 20px;
  font-size: 15px;"  />

           
            
        </div>

        <div class="summary">
            <div class="summary-card" style="margin-bottom: 1.5rem; padding-top: .5rem; padding-bottom: .5rem; background: #fff; border-radius: 7px;">

                <div class="summary-single" style="padding: .5rem 1rem; display: flex; align-items: center;">

                    <span class="fa fa-id-badge" style="font-size: 1.5rem; color: #777; padding-right: 1rem;">
                        
                    </span >
                    <div>
                        <h5 style="font-size: 1.1rem; margin-bottom: 0rem !important;">196</h5>
                        <small style="font-weight: 700;">Number of Shops</small>
                    </div>
                    
                </div>

                 <div class="summary-single" style="padding: .5rem 1rem; display: flex; align-items: center;">

                    <span class="fa fa-calendar-alt" style="font-size: 1.5rem; color: #777; padding-right: 1rem;">
                        
                    </span>
                    <div>
                        <h5  style="font-size: 1.1rem; margin-bottom: 0rem !important;">20</h5>
                        <small  style="font-weight: 700;">New Shops</small>
                    </div>
                    
                </div>

                 <div class="summary-single" style="padding: .5rem 1rem; display: flex; align-items: center;">

                    <span class="fa fa-plus-square" style="font-size: 1.5rem; color: #777; padding-right: 1rem;">
                        
                    </span>
                    <div>
                        <h5 style="font-size: 1.1rem; margin-bottom: 0rem !important;">15</h5>
                        <small style="font-weight: 700;">New Add request</small>
                    </div>
                    
                </div>
                
            </div>

            <div class="Campaign-card" style="padding: 1rem; display: flex; align-items: center;">
                <div class="camp-img">
                    
                </div>
                <div class="camp-info">

                    <h5>Winter Campaing</h5>
                    <small>40% Off</small>

                    <div>
                        <button>
                            <span class="fa fa-percentage"></span>
                            New Offer
                        </button>
                    </div>
                    
                </div>
                
            </div>


            
        </div>

        </div>
       
        
    </section>
    	</main>
    </div>



  
</body>
</html>


  
    