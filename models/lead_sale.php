<?php
if (isset($_GET['getsalesfromlead']) && csrf_filter()) {
    $id = $_GET['getsalesfromlead'];
    }
    

?>
            <!-- Modal Body -->
<h2>Great!!!</h2>
            <div class="modal-body">
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
        //$id = substr($rowleads, 0, 25);
        $id = $_REQUEST['getsalesfromlead'];
        $pos = strpos($leadsales,$id);
        if($pos === false) { ?>
                            
                                <?php
}
else {
            echo '<tr>';
            $pieces = explode(",", $rowleads);
        
                foreach ($pieces as $piece){ 
                    echo '<td>';
                    echo $piece;
                    echo '</td>';
                } 

                        ?>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="#leadsale" data-toggle="modal" data-placement="bottom" title="Mark as Sale" class="btn btn-success" onclick="getElementById('lead-id').value='<?php echo "$id"; ?>'">Mark as Sale</a>
                                <a href="#deletelead" data-toggle="modal" data-placement="bottom" title="Delete Lead" class="btn btn-danger" onclick="getElementById('delete-lead').value='<?php echo "$rowleads"; ?>'"><i class="fa fa-times"></i></a>

                            </div> 
                        </td>
        <?php
            echo '</tr>';
            } } ?>
                </tbody>
            </table>
        
                </div>
    <?php  } ?>