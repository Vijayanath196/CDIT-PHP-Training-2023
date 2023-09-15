
<?php require APPROOT . '/views/inc/header.php'; ?>
<table >
<form action="submit"  method="post" align="center">
<tr><td> Product Name</td>
   <td> <input  type="text"  name="product_name" placeholder="Name" /></td>
    </tr>
    <tr>
    <td><p> Description</td>
   <td> <textarea rows="5" cols="15" name='product_description' placeholder="enter address"></textarea></p></td> 
    </tr>
<tr>
<td>Price:</td>
<td><input  type="tel"  name="product_price"  /></td>
</tr>
<tr><td><input  type="submit"  name="submit" value="submit" /></td></tr>
</form>
</table>
<?php require APPROOT . '/views/inc/footer.php'; ?>
