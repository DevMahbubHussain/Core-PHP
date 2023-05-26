             <div class="col-md-4">
                <h2>User Registration Form</h2>
                <br/>
                <br/>
                <form action="index.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="fname">first Name</label>
                      <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter your first name" aria-describedby="helpId">
                    </div>
                    <br/>
                    <div class="form-group">
                      <label for="lname">Last Name</label>
                      <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter your last name" aria-describedby="helpId">
                    </div>
                    <br/>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="image">Profile Image</label>
                      <input type="file" name="image" id="image" class="form-control" placeholder="profile image" aria-describedby="helpId">
                    </div>
                    <br/>
                    <div class="form-group">
                     <button type="submit" class="btn btn-primary">Registration</button>
                    </div>
                </form>
             </div>