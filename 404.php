<?php get_header();?>
<?php  $four= get_field('404_page', 'option');?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
         <h1  style= "margin-top:100px; text-align:center;color:red;"><?php echo $four ['404_title'];?></h1> 
        </div>
    </div>
</div>

<?php get_footer(); ?>
