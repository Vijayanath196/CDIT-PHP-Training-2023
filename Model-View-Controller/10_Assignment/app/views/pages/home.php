
    <?php require APPROOT . '/views/inc/header.php'; ?>
    <button><a href="form/form">ADD CUSTOMER</a></button>
   
    <table> 
   
    <th>ID</th>
    <th>Name</th>
    <th>Action</th>
 
   <?php 
    $sl=1;
   foreach($data['products'] as $product){    
   echo" 
    <tr>
     <td>
     $sl
     </td>";   
    echo "<td>$product->product_name</td>";
    echo "<td> <button> <a href='../form/delete/$product->product_id'>DELETE</a></button></td>";
   echo"  </tr>";
   $sl++;
}
    
echo"
</table>";
?>
   <?php require APPROOT . '/views/inc/footer.php'; ?>
    
