

<div class="container">
    <div class="row">

        <div class="col-lg-12 ">

            <a href="add" class="btn btn-outline-primary" style="margin: 50px"><i class="fa fa-plus-circle"></i> Add New Post</a>

            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User ID </th>
                    <th scope="col">Post</th>
                    <th scope="col">Control</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $post)  {?>
                <tr>

                    <td><?php echo $post->id ?></td>
                    <td><?php echo $post->user_id ?></td>
                    <td><?php echo $post->post ?></td>
                    <td><a href="show" class="btn btn-outline-info"><i class="fa fa-search"></i></a></td>
                    <td><a href="<?php echo URL . 'post/edit/' . htmlspecialchars($post->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-primary"><i class="fa fa-edit"></i></a></td>
                    <td><a href="<?php echo URL . 'post/delete/' . htmlspecialchars($post->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-danger"><i class="fa fa-dropbox"></i></a></td>

                </tr>
                <?php } ?>

                </tbody>
            </table>


        </div>



    </div>
</div>