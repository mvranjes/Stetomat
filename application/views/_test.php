<body>
<div class="well" style="width:50%; margin: 0 auto;">
    <?php $attributes = array("name" => "comment-form");
    echo form_open("user_comments/submit", $attributes);?>
    <div class="form-group">
        <textarea name="comment" placeholder="Your comments..." rows="4" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Post Comment" class="btn btn-danger">
        <input type="submit" name="submit" value="Post Comment" class="btn btn-default navbar-btn">
    </div>
    <?php echo form_close(); ?>
</div>