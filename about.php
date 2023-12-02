<?php include('header_dashboard.php'); ?>
    <body id="class_div">
		<?php include('navbar_about.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
                                    <h3>Welcome to ABJ INSTITUTE</h3> <p>At ABJ INSTITUTE, we believe in the transformative power of education. Our mission is to provide accessible, high-quality learning experiences that empower individuals to achieve their goals and aspirations.Whether you're looking to acquire new skills, enhance your career prospects, or explore a passion, we are here to guide you on your learning journey.<br></p>

</p>
<h4> Educational Platform</h4>
<p>
              ABJ Institude is on a mission to democratize education and empower individuals to achieve their goals. We believe that everyone should have the opportunity to access high-quality learning experiences that foster personal and professional growth.
            
            It’s exciting to think about setting up your own viewing station. In the life of any aspiring astronomer
              that it is time to buy that first telescope exciting is time to buy that first.</p>
              <h4>
              Features That
              Can Avail By Everyone
            </h4>
            <p>
              Discover the inclusive benefits of features accessible to everyone. From beginners to seasoned learners, our platform offers a range of functionalities to enhance the learning experience for all.
            </p>
            <h4>Lifetime Access</h4>
              <p>
                Gain a passport to perpetual knowledge with our Lifetime Access offering. Immerse yourself in learning without constraints, ensuring a lifelong journey of education and growth.
              </p>
              <h4>IELTS |   OET</h4>
              <p>
                Witness the expertise of our trainers in live action – where knowledge meets dynamic instruction, paving the way for IELTS and OET success.
              </p>
									<div id="" class="muted pull-right"><a href="index.php"><i class="icon-arrow-left"></i> Back</a></div>
								</div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<?php
											$mission_query = mysqli_query($conn,"select * from content where title  = 'mission' ")or die(mysqli_error());
											$mission_row = mysqli_fetch_array($mission_query);
											
										?>
								<hr>
										<?php
											$mission_query = mysqli_query($conn,"select * from content where title  = 'vision' ")or die(mysqli_error());
											$mission_row = mysqli_fetch_array($mission_query);
											
										?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>