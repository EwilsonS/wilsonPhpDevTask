<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="card title-main py-5 rounded-0 text-center">
    <div class="container">
      <h1 class="display-3 text-light"><?php echo  $data['title']; ?></h1>
      <p class="text-center text-light">Created by Evan Wilson</p>
      <p class="lead text-light"><?php echo  $data['description']; ?></p>
      <input type="text">
      <br><br>
      <select name="" id="">
          <option value="Test 1">Test 1</option>
          <option value="Test 2">Test 2</option>
          <option value="Test 3">Test 3</option>
      </select> 
      <br><br>
      <input type="submit" value="Take Test" class="btn btn-info">
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
