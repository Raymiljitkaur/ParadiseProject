<?php
include 'headerAdmin.php';
?>
<section id="main_section" style="background-color:whitesmoke; height:500px;">

<div id="heading" class="h1 text-center" style="margin-top:30px;">Welcome Admin</div>
<div class="h4 text-center">Here is your list of Blogs</div>
<a href="addBlog.php" id="addBlog" class="btn btn-success btn-lg float-right" style="margin-bottom:20px; margin-right:20px;">Add Blog</a>
<div class="m-1">
    <table class="table table-bordered tbl">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Resort Beach Party</td>
                <td>Resort beach party is organized by our resort every Sunday. 
				In this party guests enjoy free food and games like passing the parcel, 
				playing volleyball and many more. Guests can also bring their children to spend some quality time with them. 
				They can enjoy playing and dancing with their love ones.
				</td>
                <td>
                    <form action="updateBlog.php" method="post">
                        <input type="hidden" name="id" value=""/>
                        <input type="submit" class="button btn btn-primary" name="updateBlog" value="Update"/>
                    </form>
                </td>
                <td>
                    <form action="deleteBlog.php" method="post">
                        <input type="hidden" name="id" value=""/>
                        <input type="submit" class="button btn btn-danger" name="deleteBlog" value="Delete"/>
                    </form>
                </td>
            </tr>
			<tr>
                <td>2</td>
                <td>Swimming Competition for guests</td>
                <td>Our resort is the only one who organize the swimming competition 
				for their guests on the last day of every month. 
				Guests can register and enjoy this event and they also get 
				a chance to win expensive gifts.	
				</td>
                <td>
                    <form action="updateBlog.php" method="post">
                        <input type="hidden" name="id" value=""/>
                        <input type="submit" class="button btn btn-primary" name="updateBlog" value="Update"/>
                    </form>
                </td>
                <td>
                    <form action="deleteBlog.php" method="post">
                        <input type="hidden" name="id" value=""/>
                        <input type="submit" class="button btn btn-danger" name="deleteBlog" value="Delete"/>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</section>
<section id="contact">
    <img class="c_img" src="../images/PROJECT_TASKLIST4/1958364874dbd3456967a9ba6c753945.jpg" height="100" alt="images of logo of facebook,twiteer and instagram">
</section>

<?php
include 'footerAdmin.php';
?>


<!--reference taken from Nithya's class exercise -->