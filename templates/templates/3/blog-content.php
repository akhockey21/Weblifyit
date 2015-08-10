<div class="container">

       <?php echo BlogContent::get(Auth::user()->id, 2, 'body', true); ?>
</div>

</div>