while($row = mysql_fetch_assoc($getmodels)){
    foreach($row as $rows){?>
    	<?php
        
        $modelmetakeyy = $row["model_meta_key"][$numrows];
        $modelmetavaluee = $row["model_meta_value"][$numrows];
        ?>
        <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="<?php echo $modelmetakeyy ?>" <?php echo empty(Auth::user()->usermodels['<?php echo $modelmetakeyy ?>'])?'':getmodelvalue(1,$modelmetakeyy); ?>><?php echo $modelmetavaluee?>
				</label>
			</div>
        
        
        <?php
        $numrows --;
        
    }
    
} 
        ?>