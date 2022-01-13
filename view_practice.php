
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Only PHP</title>
</head>
<body>
    
    <?php
    //  $row = $data->viewtable();  
    //  foreach($row as $rows)  
    //  {  
 ?>
 <div class="display">
<input type="text" name="task" id="ta">
 </div>
    <tr id= "<?php echo "6"; ?>" >
    <input type="text" id="an" value="tadono" >
    <td class="table-warning" id="t1" data-target="task"><?php echo "Task is here"?></td>
    <td class="table-info" data-target="time"><?php echo "Hi"?></td>
    <td class="table-success"  data-target="username"><?php echo "Hi" ?></td>
    <td class="table-dark"  data-target="progress"><?php echo "Hi" ?></td>  
    <td  class="table-warning">
    <button type="button" class="btn btn-warning rounded-pill editbtn" data-toggle="modal"  
    data-role="6"
    data-id="<?php echo "2" ?>">Update</button>
    </td>
    <td class="table-danger">
    <button  class="btn btn-danger rounded-pill deletebtn" value="<?php echo "Hi" ?>">Delete </button>
    </td>
    <td class="table-success">
    <button  class="btn btn-success rounded-pill donebutton " value="<?php echo "Hi" ?>">Done </button>
    </td>
    </tr>
    <?php
    //  }
    ?> 
  <script src="jquery.js"></script>
<script src="view_practice.js">
</script>
</body>
</html>