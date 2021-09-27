<div id="page-wrapper" >
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Add Blog</h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>evis_app/manage_blog">Manage Blog</a></li>
                <li class="active">Add Blog</li>
            </ul>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('message');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h3>
                <form action="<?php echo base_url(); ?>evis_app/save_blog" method="POST" enctype="multipart/form-data">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Blog Title</label>
                            <input type="text" required name="blog_title" class="form-control" placeholder="Enter Blog Title">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Blog Image</label>
                            <input type="file" name="blog_image" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label>Blog</label>
                            <?php echo $this->ckeditor->editor('blog',@$default_value);?>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label class="control-label">Blog Status</label>
                            <div class="controls">
                                <select name="blog_status" class="form-control" tabindex="1">
                                    <option value="">Select Status</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Add Blog</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>