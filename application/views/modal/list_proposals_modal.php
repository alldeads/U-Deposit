 <div class="modal fade" id="edit_proposals" tabindex="-1" role="dialog" aria-labelledby="edit_clientsLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
        <h4 class="modal-title" id="exampleModalLabel">EDIT PROPOSALS</h4>
      </div>
      <div class="modal-body">
       <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <section class="panel">
                    <p class="message" style="background:#34A953;color:white;font-size:25px;font-family:times new romans;text-align:center"></p>
                    <header class="panel-heading">
                        Create New Proposal
                    </header>
                    <div class="panel-body">
                        <div class=" form">
                            <?php $attributes = array('class' => 'cmxform form-horizontal tasi-form', 'id' => '','validate'=>'validate'); echo form_open_multipart('Proposals_List/update_proposals', $attributes); ?>
                                    <label for="proj_name" class="control-label col-lg-4">Project Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="project_name" name="project_name" required=""></textarea>
                                    </div>
                                
                                    <label for="amount" class="control-label col-lg-4">Amount (in Php)</label>
                                    <div class="col-lg-10">
                                         <input type="text" class="form-control" name="amount" id="value" required="">
                                    </div>
                                
                                    <label for="qoutation" class="control-label col-lg-4">Attach Quotation</label>
                                    <div class="col-lg-10">
                                         <input type="file" class="form-control" multiple="" name="file[]" id="file" required="">
                                    </div>
                                   <!-- <input type= "text" value="" id="categories">; -->
                                     <label for="sales_category" class="control-label col-lg-4">Sales Category</label>
                                    <div class="col-lg-10">
                                        <input type="checkbox" value="" class="check all" name="sales_category_all" onClick="checkAll(this)">Select All
                                      <br/>
                                      <ul>
                                        <!-- <input type = "text" id="val" value=""> -->
                                      <?php foreach($categories as $catego) { ?>
                                        <li><input  type="checkbox" value="<?php echo $catego['category_name']; ?>" name="sales_category[]" id="check">&nbsp;<?php echo $catego['category_name']; ?>
                                        </li>
                                      <?php } ?>  
                                      </ul>
                                    
                                </div>
                               
                                 <div class="form-group col-lg-12">
                                    <label for="proposal_date" class="control-label col-lg-2">Proposal Date</label>
                                    <div class="col-lg-10">
                                        <input type="date" class="form-control" id="proposal_date" name="proposal_date" required></textarea>
                                    </div>
                                </div>
                                <input type="hidden" id="prime" name="prime" value="">
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <button class="btn btn-danger" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
  </div>
</div>