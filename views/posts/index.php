<h2> this is  <?=$title ?> </h2>
<p>Some post here...</p>
<div class="list-group">
    <?php  foreach($posts as $post) :  ?>
    <div class="card text-dark  mb-3">
        <div class="card-header bg-primary text-white">
            <h3> <?php echo  $post['title']; ?> </h3>
        </div>
        <div class="card-body">
    
            <small class="badge badge-info""><?php echo  $post['create_at']; ?> </small>
            <p> <?php echo  $post['body']; ?> </p>
            <button type="button" class="btn btn-success">
                <a class="text-white" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more...
            </a></button>
        </div>
    </div>
    <?php endforeach ?>
</div>

