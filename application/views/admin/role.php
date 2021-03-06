<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Role Management</h1>

    <div class="row">
        <div class="col-lg-8">
            <a href="" class="btn btn-primary mb-3 addNewRole" data-toggle="modal" data-target="#formRole">Add Role Menu</a>

            <!-- pesan error atau berhasil -->
            <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($role as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $r['role'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/roleaccess/') . $r['id'] ?>" class="badge badge-warning">Access</a>
                                <a href="" class="badge badge-info editRole" data-id="<?= $r['id'] ?>" data-toggle="modal" data-target="#formRole">Edit</a>
                                <a href="" class="badge badge-danger">Hapus</a>
                            </td>
                            <?php $i++ ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>
<!-- /.container-fluid -->

<!-- Modal Add New Menu -->

<div class="modal fade" id="formRole" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="formRoleLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formRoleLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/role') ?>" method="post">
                    <div class="form-group">
                        <input hidden name='id' id="roleId">
                        <label for="role">Role</label>
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role name" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add role</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>