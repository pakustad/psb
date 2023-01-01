<script type="text/javascript" src="assets/panel/ckeditor/ckeditor.js"></script>
<style>
    label {
        font-weight: bold;
    }
</style>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">

        <!-- Dashboard content -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-flat">

                    <div class="panel-body">

                        <fieldset class="content-group">
                            <legend class="text-bold"> Edit Pengumuman</legend>
                            <?php
                            echo $this->session->flashdata('msg');
                            ?>
                            <form class="form-horizontal" action="" method="post">
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <textarea type="text" name="pra_pengumuman" class="form-control ckeditor" id="ckedtor" placeholder="Isi Keterangan" required><?php echo $v_ket->pra_pengumuman; ?></textarea>
                                    </div>
                                </div>
                                <hr>
                                <a href="panel_admin/set_pengumuman" class="btn btn-default">
                                    << Setting Pengumuman</a>
                                        <button type="submit" name="updateInfo" class="btn btn-primary" style="float:right;">Simpan</button>
                            </form>

                        </fieldset>


                    </div>

                </div>
            </div>
        </div>
        <!-- /dashboard content -->

        <script type="text/javascript">
            CKEDITOR.replace('pra_pengumuman', {
                fullPage: true,
                removeButtons: 'Save',
                removePlugins: 'Save',
                toolbar: [{
                        name: 'clipboard',
                        items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']
                    },
                    {
                        name: 'editing',
                        items: ['Find', 'Replace']
                    },
                    {
                        name: 'document',
                        items: ['Source']
                    },
                    '/',
                    {
                        name: 'basicstyles',
                        items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript']
                    },
                    {
                        name: 'paragraph',
                        items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
                    },
                    {
                        name: 'links',
                        items: ['Link', 'Unlink', 'Anchor']
                    },
                    {
                        name: 'insert',
                        items: ['Table', 'HorizontalRule', 'SpecialChar']
                    },
                    '/',
                    {
                        name: 'styles',
                        items: ['Styles', 'Format', 'Font', 'FontSize', 'lineheight']
                    },
                    {
                        name: 'colors',
                        items: ['TextColor', 'BGColor']
                    },
                    {
                        name: 'tools',
                        items: ['Maximize', 'About', 'ShowBlocks']
                    }
                ],
                extraPlugins: 'lineheight',
                line_height: "10px; 20px; 40px; 60px;"
            });
        </script>