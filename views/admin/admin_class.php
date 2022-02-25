<?php $this->load->view('admin/layout/header');?>


 <?php $this->load->view('admin/layout/left_sidebar');?>

<!-- START -->
<section>
    <div class="ad-com">
        <div class="ad-dash leftpadd">
            <div class="ud-cen">
                <div class="log-bor">&nbsp;</div>
                <span class="udb-inst">All Educator Details</span>
                <div class="ud-cen-s2">
                    <h2>Class</h2>
                                        <div style="display: none" class="static-success-message log-suc"><p>User(s) has been Permanently Deleted!!! Please wait for automatic page refresh!! </p></div>
                    <div class="ad-int-sear">
                        <input type="text" id="pg-sear" placeholder="Search this page..">
                    </div>
					<a href="<?php echo base_url('admin_class/add');?>" class="db-tit-btn">Add new class</a>
                    <table id="example" class="responsive-table bordered" style="width:100%">
        <thead>
            <tr>
                           <th>No</th>
                            <th>Title</th>
                            <th>Created</th>
                           <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            	 <?php if(!empty($edu_class)){
							$i=1;
							foreach($edu_class as $key =>$value){ ?>
                            <tr>
                                <td><?=$i;?></td>
                                <td>  <?=$value->edu_class_title;?> </td>
                                <td><?=$value->edu_class_created;?> </td>    
								<td><?=$value->edu_class_updated;?> </td>    								
								</tr>    
							<?php $i++; } }else{?>
						 <div class="alert alert-primary" role="alert">
                             No data found
                         </div>
						 <?php }?>
        </tbody>
      
    </table>
                </div>
            </div>
            <div class="ad-pgnat">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
 <?php $this->load->view('admin/layout/footer');?>
<script>$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
    function IsFeatured(Eid) {
                    var eid=Eid;
					var featured=$("#isFeaturedId").is(":checked") ? "1" : "0";
					var featuredAction=featured;
					
                    var allow_url = "<?php echo base_url('admin-educator/isfeatured');?>";

                    $.ajax({
                        type: 'POST',
                        url: allow_url,
                        data: {eid: eid,featuredAction:featuredAction},
                    }).done(function (response) {
                        swal(response);
                      });
                    }

</script>



</body>

</html>