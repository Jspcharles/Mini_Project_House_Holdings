

<?php include ("connection/db.php"); ?>


<?php
$res="SELECT * FROM house";
$page_set=mysql_query( $res);



session_start();

$select_cat = @$_GET['cat'];
$user_id = @$_GET['id'];
$select_ad_code = @$_GET['ad_code'];

//echo $select_cat ;echo $user_id ;echo $select_ad_code ;


/*$table_rowname = "";
if($_GET['cat'] == 'house'){
	$table_rowname = "house";
}else if($_GET['cat'] == 'house'){
	$table_rowname = "house";
}else if($_GET['cat'] == 'apartments'){
	$table_rowname = "apartment";
}else if($_GET['cat'] == 'commercial_buildings'){
	$table_rowname = "building";
}*
echo $select_cat;*

select advetiesment table*/
$select_ad_table = mysql_query("select * from house where house_id = '$user_id'");
$cat_row = mysql_fetch_array($select_ad_table);

/*select publish user details*
$select_user = mysql_query("select * from users where user_id = '$user_id'");
$user_row = mysql_fetch_array($select_user);


$user_name = $user_row['user_fname'] ." " . $user_row['user_lname'];*/

?>
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>


<style>
.instuction {
	font-family: sans-serif, Arial;
	display: block;
	margin: 0 auto;
	max-width: 820px;
	width: 100%;
	padding: 0 70px;
	color: #222;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.instuction h1 img {
	max-width: 170px;
	vertical-align: middle;
	margin-bottom: 10px;
}
.instuction h1 {
	color: #2F98B3;
	text-align: center;
}
.instuction h2 {
	position: relative;
	font-size: 1.1em;
	color: #2F98B3;
	margin-bottom: 20px;
	margin-top: 40px;
}
.instuction h2 span.num {
	position: absolute;
	left: -70px;
	top: -18px;
	display: inline-block;
	vertical-align: middle;
	font-style: italic;
	font-size: 1.1em;
	width: 60px;
	height: 60px;
	line-height: 60px;
	text-align: center;
	background: #2F98B3;
	color: #fff;
	border-radius: 50%;
}
.instuction .mono {
	color: #000;
	font-family: monospace;
	font-size: 1.3em;
	font-weight: normal;
}
.instuction li.mono {
	font-size: 1.5em;
}

.instuction ul {
	font-size: 0.9em;
	margin-top: 0;
	padding-left: 0;
	list-style: none;
}
.instuction .note {
	color: #A3A3B2;
	font-style: italic;
	padding-top: 10px;
}
.instuction p.note {
	text-align: center;
	padding-top: 0;
	margin-top: 4px;
}
.instuction textarea {
	font-size: 0.9em;
	min-height: 60px;
	padding: 10px;
	margin: 0;
	overflow: auto;
	max-width: 100%;
	width: 100%;
}
.instuction a,
.instuction a:visited {
	color: #2F98B3;
}
</style>


<!DOCTYPE html>
<?php include 'header3.php'; ?>

	
	<center>
	<h2>property sale in</h2>
	</center>
	
	<br>

	<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
			<!-- slider-->
			<?php 
			if(empty($cat_row["image_name"]) and empty($cat_row["image_name1"]) and empty($cat_row["image_name2"]) and empty($cat_row["image_name3"])){
							 echo "<br><br>";
							
						}
			else if(empty($cat_row["image_name1"]) and empty($cat_row["image_name2"]) and empty($cat_row["image_name3"])){?>
				<div id="wowslider-container1">
					<div class="ws_images"><ul>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_0"/></li>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_1"/></li>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_2"/></li>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_3"/></li>
							
						</ul></div>
						<div class="ws_bullets"><div>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" WIDTH='68px'height='48px' alt=""/>1</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" WIDTH='68px'height='48px' alt=""/>2</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" WIDTH='68px'height='48px' alt=""/>3</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" WIDTH='68px'height='48px' alt=""/>4</span></a>
							
						</div></div>
					</div>	
			<?php }
			 else if (empty($cat_row['image_name2']) and empty($cat_row['image_name3'])){?>
				<div id="wowslider-container1">
					<div class="ws_images"><ul>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_0"/></li>
							<li><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>" alt="" title="" width='100%' id="wows1_1"/></li>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_2"/></li>
							<li><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>" alt="" title="" width='100%' id="wows1_3"/></li>
							
						<div class="ws_bullets"><div>
							</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>"WIDTH='68px'height='48px' alt=""/>1</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>"WIDTH='68px'height='48px' alt=""/>2</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>"WIDTH='68px'height='48px' alt=""/>3</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>"WIDTH='68px'height='48px' alt=""/>4</span></a>
						</div></div>
					</div></div>	
			<?php }
			
			 else if (empty($cat_row["image_name1"]) and empty($cat_row["image_name3"])){?>
				<div id="wowslider-container1">
					<div class="ws_images"><ul>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_0"/></li>
							<li><img src="admin/images/house/pics2/<?php echo  $cat_row['image_name2'];?>" alt="" title="" width='100%' id="wows1_1"/></li>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_2"/></li>
							<li><img src="admin/images/house/pics2/<?php echo  $cat_row['image_name2'];?>" alt="" title="" width='100%' id="wows1_3"/></li>
							
						<div class="ws_bullets"><div>
							</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>"WIDTH='68px'height='48px' alt=""/>1</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics2/<?php echo  $cat_row['image_name2'];?>"WIDTH='68px'height='48px' alt=""/>2</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>"WIDTH='68px'height='48px' alt=""/>3</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics2/<?php echo  $cat_row['image_name2'];?>"WIDTH='68px'height='48px' alt=""/>4</span></a>
						</div></div>
					</div></div>	
			
			<?php } 
			else if (empty($cat_row["image_name1"]) and empty($cat_row["image_name2"])){?>
				<div id="wowslider-container1">
					<div class="ws_images"><ul>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_0"/></li>
							<li><img src="admin/images/house/pics3/<?php echo  $cat_row['image_name3'];?>" alt="" title="" width='100%' id="wows1_1"/></li>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_2"/></li>
							<li><img src="admin/images/house/pics3/<?php echo  $cat_row['image_name3'];?>" alt="" title="" width='100%' id="wows1_3"/></li>
							
						<div class="ws_bullets"><div>
							</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>"WIDTH='68px'height='48px' alt=""/>1</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics3/<?php echo  $cat_row['image_name3'];?>"WIDTH='68px'height='48px' alt=""/>2</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>"WIDTH='68px'height='48px' alt=""/>3</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics3/<?php echo  $cat_row['image_name3'];?>"WIDTH='68px'height='48px' alt=""/>4</span></a>
						</div></div>
					</div></div>	
			
			<?php } 
			else if (empty($cat_row['image_name3'])){?>
				<div id="wowslider-container1">
					<div class="ws_images"><ul>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_0"/></li>
							<li><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>" alt="" title="" width='100%' id="wows1_1"/></li>
							<li><img src="admin/images/house/pics2/<?php echo  $cat_row['image_name2'];?>" alt="image slider" title="" width='100%' id="wows1_2"/></li>
							<li><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>" alt="image slider" title="" width='100%' id="wows1_3"/></li>
							
						</ul></div>
						<div class="ws_bullets"><div>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" WIDTH='68px'height='48px' alt=""/>1</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>"WIDTH='68px'height='48px' alt=""/>2</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics2/<?php echo  $cat_row['image_name2'];?>"WIDTH='68px'height='48px' alt=""/>3</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>"WIDTH='68px'height='48px' alt=""/>4</span></a>
							
					</div></div>	</div>	
					
			<?php } 
			else if (empty($cat_row['image_name1'])){?>
				<div id="wowslider-container1">
					<div class="ws_images"><ul>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_0"/></li>
							<li><img src="admin/images/house/pics3/<?php echo  $cat_row['image_name3'];?>" alt="" title="" width='100%' id="wows1_1"/></li>
							<li><img src="admin/images/house/pics2/<?php echo  $cat_row['image_name2'];?>" alt="image slider" title="" width='100%' id="wows1_2"/></li>
							<li><img src="admin/images/house/pics3/<?php echo  $cat_row['image_name3'];?>" alt="image slider" title="" width='100%' id="wows1_3"/></li>
							
						</ul></div>
						<div class="ws_bullets"><div>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" WIDTH='68px'height='48px' alt=""/>1</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics3/<?php echo  $cat_row['image_name3'];?>"WIDTH='68px'height='48px' alt=""/>2</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics2/<?php echo  $cat_row['image_name2'];?>"WIDTH='68px'height='48px' alt=""/>3</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics3/<?php echo  $cat_row['image_name3'];?>"WIDTH='68px'height='48px' alt=""/>4</span></a>
							
					</div></div>	</div>	
					
			<?php }
			else if (empty($cat_row['image_name2'])){?>
				<div id="wowslider-container1">
					<div class="ws_images"><ul>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" width='100%' title="" id="wows1_0"/></li>
							<li><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>" alt="" width='100%' title="" id="wows1_1"/></li>
							<li><img src="admin/images/house/pics3/<?php echo  $cat_row['image_name3'];?>" alt="image slider" title="" width='100%' id="wows1_2"/></li>
							<li><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>" alt="image slider" title="" width='100%' id="wows1_3"/></li>
							
						</ul></div>
						<div class="ws_bullets"><div>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" WIDTH='68px'height='48px' alt=""/>1</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>"WIDTH='68px'height='48px' alt=""/>2</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics3/<?php echo  $cat_row['image_name3'];?>"WIDTH='68px'height='48px' alt=""/>3</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>"WIDTH='68px'height='48px' alt=""/>4</span></a>
							
					</div></div>	</div>	
					
			<?php } 
					 else {?>
			 
				<div id="wowslider-container1">
					<div class="ws_images"><ul>
							<li><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" alt="" title="" width='100%' id="wows1_0"/></li>
							<li><img src="admin/images/house/pics1/<?php echo  $cat_row['image_name1'];?>" alt="" title="" width='100%' id="wows1_1"/></li>
							<li><img src="admin/images/house/pics2/<?php echo  $cat_row['image_name2'];?>" alt="image slider" title="" width='100%' id="wows1_2"/></li>
							<li><img src="admin/images/house/pics3/<?php echo  $cat_row['image_name3'];?>" alt="" title="" width='100%' id="wows1_3"/></li>
						</ul></div>
						<div class="ws_bullets"><div>
							<a href="#" title=""><span><img src="admin/images/house/pics/<?php echo  $cat_row['image_name'];?>" WIDTH='68px'height='48px' alt=""/>1</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics1/<?phpecho  $cat_row['image_name1'];?>"WIDTH='68px'height='48px' alt=""/>2</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics2/<?phpecho  $cat_row['image_name2'];?>"WIDTH='68px'height='48px' alt=""/>3</span></a>
							<a href="#" title=""><span><img src="admin/images/house/pics3/<?phpecho  $cat_row['image_name3'];?>"WIDTH='68px'height='48px' alt=""/>4</span></a>
						</div></div>
					</div>
				<?php } ?>
			<!-- end slider-->
			
			
			
			
			
			<!--<img src="admin/images/house/pics/<?php// echo  $cat_row['image_name'];?>" width="100%" />-->
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
		<p >Location : <?php echo  $cat_row['house_location']; ?></p>
		<p>Price : <?php echo  $cat_row['house_price']; ?></p>
		<p>Size : <?php echo  $cat_row['house_size']; ?>&nbsp;&nbsp;<?php echo  $cat_row['house_perches']; ?></p>
		
		<p>Address : <?php echo  $cat_row['house_address']; ?></p>
		<p>Contact : <?php echo  $cat_row['house_contact']; ?></p>
		<br>
		<h3>Facilities</h3><br>
		<p>house State : <?php echo  $cat_row['house_state']; ?></p>
		<p>Electricity : <?php echo  $cat_row['electricity']; ?></p>
		<p>Tap Water : <?php echo  $cat_row['tap_water']; ?></p>
		<p>Wide Road : <?php echo  $cat_row['wide_road']; ?></p>
		
		<h3>house Description<br></h3><p><?php echo  $cat_row['house_desc']; ?></p>

		</div>
	</div>
	</div>

	<br><br>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
				<form class="form-horizontal " method="post" action="contact_us.php">
                        <fieldset class="">                                   

                            

                            <div class="form-group">
                                <span class="col-md-1 col-sm-1   text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-lg-11 col-sm-11">
                                    <input id="lname" name="name" type="text" placeholder="Name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-sm-1 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-lg-11 col-sm-11">
                                    <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-sm-1 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-lg-11 col-sm-11">
                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-sm-1 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-lg-11 col-sm-11">
                                    <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. " rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" name="send">Send</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
			</div>

<!-- ******************************************************************************************************************* -->

			<div>

		
	</div>


			<div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
			</div>
		</div>
	</div>
		<?php include 'partOfad.php'; ?>
	
	</div>
	
	<?php include 'footer.php'; ?>
