<table class="table table-hover table-striped table-condensed table-bordered ordersTable">
    <thead>
        <tr>
            <th>Product</th>
            <th>Date</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
    <?php
	$s=0;
	//$db = new PDO('mysql:host=localhost;dbname=Dbcustomer', 'root', '');
					$sql1= "select * from orders where id_customer='$id'";
					$result1=$db->query($sql1);
				while ($r=$result1->fetch(PDO::FETCH_ASSOC))
				{
				
				echo'
				<tr>
            <td>'.$r['product'].'</td>
            <td>'.$r['orderdate'].'</td>
            <td>'.$r['quantity'].'</td>
			<td>'.$r['price'].'</td>
            <td>'.$r['quantity']*$r['price'].'</td>
			
            </tr>';
		$s+=$r['quantity']*$r['price'];
				};
				
	?>
    
        
        
        <tr class="info">
            <td colspan="4">&nbsp;
                
            </td>
            <td>
                <strong><?php  echo $s ?></strong>
            </td>
        </tr>
    </tbody>
</table>