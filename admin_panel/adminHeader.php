
       
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #ffc226;">
    
    <a class="navbar-brand ml-5" href="./index.php">
        <img src="logo.png" width="200" height="80" alt="Pet Talks logo">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    <li class="navbar-item" style="color:red; list-style-type: none;">
    
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['email'])): ?>
         <p> <a style="color:black; " class="navbar-link" data-nav-link href="index.php?logout='1'" >logout</a> </p>
          <?php endif ?>
        </li>
        

           
    </div>  
</nav>
