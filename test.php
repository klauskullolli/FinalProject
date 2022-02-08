<?php 
   require_once 'common/header.php';
?>

<div class="row">
    <div class="col">
      <h1>Hello</h1>
      <p>Hello</p>
    </div>
    <div class="col">
        <h1>Hello</h1>
      <p>Hello</p>
    </div>
  </div>
  <div  class="row"  >
        <div col="col">
            <h3 class="text-info">T-Shirt</h3>
            <a href="clothPanel.php?id='1'"><img src="images//dress1.jpg" width="200" , height="200"></a>
            <h3 class="text-info">Price 12$</h3>
        </div>
        
        <div col="col">
            <h3 class="text-info">T-Shirt</h3>
            <a href="clothPanel.php?id='2'"><img src="images//shirt1.jpg" width="200" , height="200"></a>
            <h3 class="text-info">Price 12$</h3>
        </div>
    </div>

<?php 
   require_once 'common/footer.php';
?>