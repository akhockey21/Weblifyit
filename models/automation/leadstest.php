<div class="widget">
<!-- Responsive Full Content -->
<?php 
$leadtest = Userleads::get(Auth::user()->id, 'userlead', true);
$leadsales = Userleads::get(Auth::user()->id, 'lead_sales', true);

if ($leadtest==true){
            
     $row = explode(";", $leadtest);
    ?><div class="block">
        <!-- Responsive Full Title -->
        <div class="block-title">
            <h2><strong>Your Leads</strong> Summary</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
    <td>Date</td>
    <td>Name</td>
    <td>Phone</td> 
    <td>Email</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <?php foreach ($row as $rowleads){
            echo '<tr>';
            $pieces = explode(",", $rowleads);
        $id = substr($rowleads, 0, 25);
                foreach ($pieces as $piece){ 
                    echo '<td>';
                    echo $piece;
                    echo '</td>';
                } 
        $salebuttons = explode(";", $leadsales);
        foreach ($salebuttons as $button){
            $saleid = substr($button, 0, 25);
        
                        if($id==$saleid){ ?>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a class="btn btn-success" ><i class="fa fa-check"></a>
                                <a href="?deleteid=<?php $id = substr($rowleads, 0, 1); echo "$id"; ?>" data-toggle="tooltip" title="Delete Lead" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </div> 
                        </td>
                        <?php    
                        }else{
                        ?>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="#leadsale" data-toggle="modal" data-placement="bottom" title="Mark as Sale" class="btn btn-success" onclick="getElementById('lead-id').value='<?php echo "$id"; ?>'">Mark as Sale</a>
                                <a href="?deleteid=<?php $id = substr($rowleads, 0, 1); echo "$id"; ?>" data-toggle="tooltip" title="Delete Lead" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </div> 
                        </td>
        <?php }
            echo '</tr>';
            }
    }?>
                </tbody>
            </table>
        </div>
                </div>
    <?php  } ?>
        <!-- END Responsive Full Content -->


            </div>
