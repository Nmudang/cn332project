<html>
<head>
    <title>File Upload In Codeigniter</title>
</head>
<body>
<?php echo $error;?> 
<?php echo form_open_multipart('main/insert');?>

<label>Name</label>
<?php echo "<input type='text' name='Name' size='20' />"; ?> <br>
<label>CollectionType</label>
<?php echo "

<select name='CollectionType'>
        <option value='' disabled selected>Choose Collection Type</option>
        <option value='Winter'>Winter</option>
        <option value='Summer'>Summer</option>
 </select>

"; ?><br>

<label>Type</label>
<?php echo "

<select name='Type'>
        <option value='' disabled selected>Choose Type</option>
        <option value='shirts'>shirts</option>
        <option value='dress'>dress</option>
        <option value='trousers'>trousers</option>
 </select>

"; ?><br>

<label>Price</label>
<?php echo "<input type='number' name='Price' size='20' />"; ?><br>

<label>Number</label>
<?php echo "<input type='number' name='Number' size='20' />"; ?><br>

<label>userfile</label>
<?php echo "<input type='file' name='userfile' size='20' />"; ?><br>


<?php echo "<input type='submit' name='submit' value='upload' /> ";?>
<?php echo "</form>"?>
</body>
</html>