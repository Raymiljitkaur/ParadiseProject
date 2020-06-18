<?php
include 'headerAdmin.php';
?>
<section id="main_section" style="background-color:whitesmoke; height:500px;">

<div class="h1 text-center" style="margin-top:30px; padding-top:10px;">Add a Blog</div>
<div>
    
    <form action="" method="post">

        <div class="form-group" style="padding:20px;">
            <label for="blog_title">Title :</label>
            <input type="text" class="form-control" name="blog_title" id="blog_title" value="" placeholder="Enter blog title">
        </div>
        <div class="form-group" style="padding:0 20px 20px 20px;">
            <label for="blog_description">Description :</label>
            <textarea id="blog_description" class="form-control" name="blog_description" rows="5" cols="50" value="" placeholder="Enter description for blog"></textarea>
        </div>

        <a href="listBlogs.php" id="btnBack" class="btn btn-success float-left" style="margin:0 20px 20px 20px;">Back</a>
        <button type="submit" name="addBlog" class="btn btn-primary float-right" id="addBlog" style="margin:0 20px 20px 20px;"> Add Blog </button>
    </form>
</div>
</section>

<?php
include 'footerAdmin.php';
?>

<!--reference taken from Nithya's class exercise -->
