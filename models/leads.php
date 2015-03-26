<div class="widget">
<!-- Responsive Full Content -->
<?php 
$leadtest = Userleads::get(Auth::user()->id, 'userlead', true);
if ($leadtest==true){
            $leadsales = Userleads::get(Auth::user()->id, 'lead_sales', true);
     $row = explode(";", $leadtest);
    ?><div class="block">
        <!-- Responsive Full Title -->
        <div class="block-title">
            <h2><strong>Your Leads</strong> Summary</h2>
        </div>
        <div class="table-responsive">
            <table id="datatable"  class="table table-vcenter table-striped table-condensed table-bordered">
                <thead>
                    <tr>
    <th>Date</th>
    <th>Name</th>
    <th>Phone</th> 
    <th>Email</th>
                        <th class="text-right">
                            <div class="btn-group btn-group-md">
                                <a href="#addlead" data-toggle="modal" data-placement="bottom" title="Add a Lead" class="btn btn-info">Add a Lead</a>
                                </div>  </th>
                    </tr>
                </thead>
                <tbody>
                
                      <?php foreach ($row as $rowleads){
            echo '<tr>';
            $pieces = explode(",", $rowleads);
        
                foreach ($pieces as $piece){ 
                    echo '<td>';
                    echo $piece;
                    echo '</td>';
                } 
                    $id = substr($rowleads, 0, 25);
        $pos = strpos($leadsales,$id);

                        ?>
                                <?php if($pos === false) { ?>
                        <td class="text-right">
                            <div class="btn-group btn-group-xs">
                                <a href="#leadsale" data-toggle="modal" data-placement="bottom" title="Mark as Sale" class="btn btn-success" onclick="getElementById('lead-id').value='<?php echo "$id"; ?>'">Mark as Sale</a>
                                <a href="#deletelead" data-toggle="modal" data-placement="bottom" title="Delete Lead" class="btn btn-danger" onclick="getElementById('delete-lead').value='<?php echo "$rowleads"; ?>'"><i class="fa fa-times"></i></a>
                                </div>  </td>
                                <?php
}
else {
                                $value = substr($leadsales, $pos, 34);
                                $endpos = strpos($value,";");
                                $endstring = strlen($leadsales);
                                if($endpos === false) {
                                $finalvalue = substr($value, 0, $endstring);
                                    $finalcom = strrpos($finalvalue, ",");
        $finalval = substr($finalvalue, $finalcom + 1, $endstring);
                                ?>
                    <td class="text-right">
                            <div class="btn-group btn-group-xs">
                                <a href="#editleadsale" data-toggle="modal" data-placement="bottom" title="Sale Marked" class="btn btn-info" onclick="getElementById('getsalesfromlead').value='<?php echo "$finalvalue"; ?>';getElementById('saleammount').value='<?php echo "$finalval"; ?>'">Marked Sale </a>
                                <a href="#deletelead" data-toggle="modal" data-placement="bottom" title="Delete Lead" class="btn btn-danger" onclick="getElementById('delete-lead').value='<?php echo "$rowleads"; ?>'"><i class="fa fa-times"></i></a>
                                </div>  </td>
                                <?php }
    else{
    $finalvalue = substr($value, 0, $endpos);
    $finalcom = strrpos($finalvalue, ",");
        $finalval = substr($finalvalue, $finalcom + 1, $endpos);
        ?>
                                
                    <td class="text-right">
                            <div class="btn-group btn-group-xs">
                                <a href="#editleadsale" data-toggle="modal" data-placement="bottom" title="Sale Marked" class="btn btn-info" onclick="getElementById('getsalesfromlead').value='<?php echo "$finalvalue"; ?>';getElementById('saleammount').value='<?php echo "$finalval"; ?>'">Marked Sale</a>
                                <a href="#deletelead" data-toggle="modal" data-placement="bottom" title="Delete Lead" class="btn btn-danger" onclick="getElementById('delete-lead').value='<?php echo "$rowleads"; ?>'"><i class="fa fa-times"></i></a>
                                </div>  </td>
                                <?php
    }
                                ?>
                                <?php
}
?>
        <?php
            echo '</tr>';
            } ?>
                </tbody>
            </table>
        </div>
                </div>
    <?php  } ?>
        <!-- END Responsive Full Content -->


            </div>
