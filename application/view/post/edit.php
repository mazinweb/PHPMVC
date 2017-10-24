<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <form action="<?php echo URL; ?>post/update/<?php echo $post->id; ?>" method="POST" style="margin-top: 50px">
                <div class="form-group">
                    <label for="user">User</label>
                    <input type="text" class="form-control" id="user" name="user"
                           value="<?php echo htmlspecialchars($post->user_id, ENT_QUOTES, 'UTF-8'); ?>">
                </div>
                <div class="form-group">
                    <label for="post">Post</label>
                    <input type="text" class="form-control" id="post" name="post"
                           value="<?php echo htmlspecialchars($post->post, ENT_QUOTES, 'UTF-8'); ?>">
                </div>
                <input class="btn btn-outline-primary" type="submit" name="update" value="Update"/>
            </form>
        </div>
    </div>