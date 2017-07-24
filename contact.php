<!DOCTYPE html>

        
<?php
$send_message = '';
if(isset($_POST['send'])){
	
	$name = $_POST['name'];
	$from = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['msg'];
	
	
		$to   = "jspcharles@gmail.com";
		
		$subject = "Contact Vertec IT";
		 
		$headers = "From: " . strip_tags($from) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$message = '<html><body>';
		 
		$message .= '<table width="100%"; rules="all" cellpadding="10">';
		 
		$message .= "<tr>
						<td colspan=2>
						
						Dear Sir,
						<br/><br/>
						I am $name. My Email Address is $email & my Contact Number is $phone.<br>
						<br />
						<u>My Message : </u><br>
						$msg
						<br/><br/>
						Thank You.
						<br/><br/>
						Best Regards,<br/>
						$name.<br/>
						</td></tr>";
		 
		$message .= "<tr><td colspan=2 font='colr:#999999;'></td></tr>";
		 
		$message .= "</table>";
		 
		$message .= "</body></html>";
		
		mail($to, $subject, $message, $headers);
			
		$send_message = '<p style="color:black;font-size:22px;"> Thank you for tacking your time.<br>We resived your message and we will replay to you as soon as posible.</p>';	
		
		
	}

?>

<?php include 'header.php'; ?>


        
        <div class="container-fluid border3">
            <div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.493781915217!2d79.86526931512327!3d6.8312433214035355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b23bf82ac8f%3A0x859b6384d5ec4c4e!2sVertec+IT+Solutions+Pvt.+Limited+(A+subsidiary+company+of+(Vertec+Group)!5e0!3m2!1sen!2slk!4v1479376544699" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
             
            </div>
        </div>
		<div class='bor'>
		<center><h3>CONTACT LANDS</h3></center>
        </div>
        <div class="container">
            <div class="row contact_body_row">
                <h3><span><b>&nbsp;&nbsp;&nbsp;Send Message</b></span> </h3>
                <div class="col-sm-7 ">
                    <br><br>
                     <p><?php echo $send_message; ?></p>
                    <form class="form-horizontal " method="post" action="contact_us.php">
                        <fieldset class="">                                   

                            

                            <div class="form-group">
                               
                                <div class="col-lg-8 col-sm-10">
                                    <input id="lname" name="name" type="text" placeholder="Name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                
                                <div class="col-lg-8 col-sm-10">
                                    <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                              
                                <div class="col-lg-8 col-sm-10">
                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                               
                                <div class="col-lg-8 col-sm-10">
                                    <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. " rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn  btn-lg btn2" style='background:#f86a6a;' name="send">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <div class="col-sm-5">
                    <div class="con_details">
                        
                        <h3><b>Regiestred Office</b></h3>
								<table border='0' cellspacing='0' cellspadding='0' >
									<tbody>
										<tr>
											<td width="20%" ><h4>Address&nbsp;:</h4></td>
											<td width="80%"><p>No.336/C, HORANA ROAD, KURUSAHANDIYA, ALUBOMULLA, PANADURA.</p> </td>
										</tr>
										<tr>
											<td><h4>Telephone&nbsp;:</h4></td>
											<td><p>+94 (0) 38 567 7477 </p></td>
										</tr>
										<tr>
											<td><h4>Fax&nbsp;:</h4></td>
											<td><p>+94 (0) 38 223 5005 </p></td>
										</tr>
										
									
										<tr>
											<td width="18%" ><h4>Email&nbsp;:</h4></td>
											<td width="82%"><p>gjpropertydevelopers@gmail.com</p> </td>
										</tr>
										<tr>
											<td><h4>Web&nbsp;:</h4></td>
											<td><p>www.gjproperty.lk </p></td>
										</tr>
									</tbody>
								</table> 
                       </div>
                       
                    
                       
                   
                </div>
				
            </div>
            
        </div>

  <?php include 'footer.php'; ?>