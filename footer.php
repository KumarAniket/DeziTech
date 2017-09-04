					<div class="footer">
						<div class="footer-top">
							<div class="container">
								<div class="col-md-4 footer-grid">
									<h5>Quick Links</h5>
									<p><a href="contact.php" target="_blank">Contact Us</a></p>
                                  <p><a href="faq.php" target="_blank">FAQ's</a></p>
                              </div>
                              <div class="col-md-4 footer-grid">
                                 <h5>Recent Events </h5>

                                 <?php for($i=0; $row_events=$rec_events->fetch(); $i++){ ?>
                                 <p><a href="<?php echo $row_events['type'];?>.php?id=<?php echo $row_events['id']; ?>"><?php echo $row_events['Title']; ?></a></p>
                                 <span>
                                    <?php														
                                                         $date1=date_create($Date);  //current date                                                         
                                                         $date2=date_create($row_events['Date']);   
                                                         $diff=date_diff($date1,$date2);  
                                                         echo $diff->format("%a days ago"); ?>														
                                                     </span>
                                                     <?php } ?>

                                                 </div>
                                                 <font color="#ffffff">
                                                 	<div class="col-md-4 footer-grid">
                                                 		<h5>Contact Us</h5>
                                                 		National Institute of Fashion Technology<br>
                                                 		IDCO Plot No.-24<br>
                                                 		Bhubaneswar-751024<br>
                                                 		<br>
                                                 		Ph no. : (123) 456-7890 <br>
                                                 		E-mail : <a href="mailto:info@example.com">mail@example.com</a><br>
                                                 		Website : <a href="index.php">www.example.com</a>
                                                 	</div>
                                                 </font>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="footer-bottom">
                                     	<div class="container">
                                     		<div class="copyrights text-center">
                                     			<p>© 2016 All Rights Reserved | <a href="credits.php">Credits</a></p>                    
                                     		</div>
                                     		<div class="footer-nav">
                                     		</div>
                                     		<div class="clearfix"></div>
                                     	</div>
                                     </div>
                                 </div>