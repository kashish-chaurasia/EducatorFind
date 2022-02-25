<?php $this->load->view('admin/layout/header');?>


 <?php $this->load->view('admin/layout/left_sidebar');?>

<!-- START -->
<section>
    <div class="ad-com">
        <div class="ad-dash leftpadd">
            <div class="ud-cen">
                <div class="log-bor">&nbsp;</div>
                <span class="udb-inst">All art list</span>
                <div class="ud-cen-s2">
                    <h2>art</h2>
                     <div class="ad-int-sear">
                        <input type="text" id="pg-sear" placeholder="Search this page..">
                    </div>
					<a href="<?php echo base_url('admin_art/add');?>" class="db-tit-btn">Add new art</a>
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
            	 <?php if(!empty($edu_art)){
							$i=1;
							foreach($edu_art as $key =>$value){ ?>
                            <tr>
                                <td><?=$i;?></td>
                                <td>  <?=$value->edu_art_title;?> </td>
                                <td><?=$value->edu_art_created;?> </td>    
								<td><?=$value->edu_art_updated;?> </td>    								
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

</body>

</html>