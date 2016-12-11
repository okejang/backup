<!DOCTYPE html>
<html>
<head>
<title>Sweet Alert</title>
    <script src="<?php echo base_url();?>assets/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/sweetalert.css">
</head>
<body>
<button onclick="classic()">Normal Alert</button>
<button onclick="sweet()">Sweet Alert</button>
<script>
function normal () {
alert("Normal Alert!");
}
function sweet (){
swal("Good job!", "You clicked the button!", "success");
}
</script>
</body>
</html>