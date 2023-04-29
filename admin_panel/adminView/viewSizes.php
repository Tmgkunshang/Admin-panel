
<div >
  <h3>Available Sizes</h3>
  <table class="table ">
    <thead>
      <tr>
        <th style="background-color: #ffc226; color:black; height:40px" class="text-center">S.N.</th>
        <th style="background-color: #ffc226; color:black; height:40px" class="text-center">Size</th>
        <th style="background-color: #ffc226; color:black; height:40px" class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from sizes";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["size_name"]?></td>   
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
      <td><button style="background-color: #ffc226; color:black; height:40px" class="btn btn-danger" style="height:40px" onclick="sizeDelete('<?=$row['size_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button style="background-color: #ffc226; color:black; height:40px" type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Size
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Size Record</h4>
          <button style="background-color: #ffc226; color:black; height:40px" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addSizeController.php" method="POST">
            <div class="form-group">
              <label for="size">Size Number:</label>
              <input type="text" class="form-control" name="size" required>
            </div>
            <div class="form-group">
              <button style="background-color: #ffc226; color:black; height:40px" type="submit" class="btn btn-secondary" name="upload" style="background-color: #ffc226; color:black; height:40px">Add Size</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button style="background-color: #ffc226; color:black; height:40px"type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #ffc226; color:black; height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   