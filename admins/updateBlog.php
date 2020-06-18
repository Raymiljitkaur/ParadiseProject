<?php
include 'headerAdmin.php';
?>
<section id="main_section" style="background-color:whitesmoke; height:400px;">

<div class="h1 text-center" style="margin-top:30px; padding-top:10px;">Update Blog</div>
<div>
    <form action="" method="post">
        <div class="form-group" style="padding:20px;">
            <label for="title">Title :</label>
            <input type="text" class="form-control" name="title" id="title" value="" placeholder="Enter title">
        </div>
        <div class="form-group" style="padding:0 20px 20px 20px;">
            <label for="description">Description :</label>
            <input type="text" class="form-control" id="description" name="description" value="" placeholder="Enter description of Blog">
        </div>
        <a href="blogsAdmin.php" class="btn btn-success float-left" id="btnBack" style="margin:0 20px 20px 20px;">Back</a>
        <button type="submit" name="updateBlog" class="btn btn-primary float-right" id="updateBlog" style="margin:0 20px 20px 20px;">Update Blog</button>
    </form>
</div>

</section>
<?php
include 'footerAdmin.php';
?>
<!--reference taken from Nithya's class exercise -->