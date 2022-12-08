   <!-- DataTales Example -->
   <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>Tanggal Bergabung</th>
                                            <th>Hapus</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>                                    
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                        <?php foreach ($user as $u) { ?>
                                      <tr>
                                         <td><?php echo $u->name ?></td>
                                         <td><?php echo $u->email ?></td>
                                         <td><?php echo $u->data_created ?> </td> 
                                         <td><?php echo anchor('admin/hapus/' .$u->id, 'Hapus') ?></td>  
                                         <td><?php echo anchor('admin/edit/' .$u->id, 'Edit') ?>
                                        
                                      </td>
                                      </tr>
                                     <?php } ?>
                                    
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>