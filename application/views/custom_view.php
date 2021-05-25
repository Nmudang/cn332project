<head>
        <title>File Upload In Codeigniter</title>
        <style>
	@import url("https://fonts.googleapis.com/css?family=Fjalla+One&display=swap");
	* {
	margin: 0;
	padding: 0;
	}

	main {
	background-size: cover;
	width: 100vw;
	height: 100vh;
	display: grid;
	align-items: center;
	justify-items: center;
	}

	.contact-us {
	background: #f8f4e5;
	padding: 50px 100px;
	border: 2px solid black;
	box-shadow: 15px 15px 1px #ffa580, 15px 15px 1px 2px black;
	}

	input {
	display: block;
	width: 100%;
	font-size: 14pt;
	line-height: 28pt;
	font-family: "Fjalla One";
	margin-bottom: 28pt;
	border: none;
	border-bottom: 5px solid black;
	background: #f8f4e5;
	min-width: 250px;
	padding-left: 5px;
	outline: none;
	color: black;
	}

	input:focus {
	border-bottom: 5px solid #ffa580;
	}

	button {
	display: block;
	margin: 0 auto;
	line-height: 28pt;
	padding: 0 20px;
	background: #ffa580;
	letter-spacing: 2px;
	transition: 0.2s all ease-in-out;
	outline: none;
	border: 1px solid black;
	box-shadow: 3px 3px 1px #95a4ff, 3px 3px 1px 1px black;
	}
	button:hover {
	background: black;
	color: white;
	border: 1px solid black;
	}

	::selection {
	background: #ffc8ff;
	}

	input:-webkit-autofill,
	input:-webkit-autofill:hover,
	input:-webkit-autofill:focus {
	border-bottom: 5px solid #95a4ff;
	-webkit-text-fill-color: #2A293E;
	-webkit-box-shadow: 0 0 0px 1000px #f8f4e5 inset;
	transition: background-color 5000s ease-in-out 0s;
	}
	</style>
</head>
<main>
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
</main>

