 <?php require_once APPROOT . "/views/inc/header.php"; ?>
 <?php require_once APPROOT . "/views/inc/nav.php"; ?>

 <div class="container-fluid p-0">
     <div class="row no-gutters">
         <div class="col-md-3">
             <!-- Sidebar Start -->
             <div class="card rounded-0">
                 <div class="card-header">
                     <h2>Category</h2>
                 </div>
                 <div class="card-block">
                     <!-- Sidebar Menu Start -->
                     <ul class="list-group">
                         <?php foreach ($data['cats'] as $cat) : ?>
                             <li class="list-group-item rounded-0 d-flex justify-content-between">
                                 <span>
                                     <a href="#" style="text-decoration:none;"><?php echo $cat->name ?></a>
                                 </span>

                                 <span>
                                     <a href="<?php echo URLROOT . 'category/edit/' . $cat->id ?>"><i class="fa fa-pencil-square-o text-primary" aria-hidden="true"></i></a>
                                     <a href="#"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a>
                                 </span>
                             </li>
                         <?php endforeach; ?>
                     </ul>
                     <!-- Sidebar Menu End -->
                 </div>
             </div>
             <!-- Sidebar End -->
         </div>
         <div class="col-md-5 offset-md-2 my-5">
             <div class="card bg-light p-5">
                 <!-- Login Form Start -->
                 <?php flash('register_success'); ?>
                 <?php flash('login_fail'); ?>
                 <h1 class="english text-info text-center mb-3">Create Category</h1>
                 <form action="<?php echo URLROOT . 'category/create' ?>" method="post">
                     <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label"><b>Category Name</b></label>
                         <input type="text" class="form-control <?php echo !empty($data['name_err']) ? 'is-invalid' : ''; ?>" name="name">
                         <span class="text-danger"><?php echo !empty($data['name_err']) ? $data['name_err'] : ''; ?></span>
                     </div>
                     <div class="d-flex justify-content-end">
                         <div class="mt-3">
                             <button class="btn btn-primary">Create</button>
                             <button class="btn btn-outline-secondary">Cancel</button>
                         </div>
                     </div>
                 </form>
                 <!-- Login Form End -->
             </div>
         </div>
     </div>
 </div>

 <?php require_once APPROOT . "/views/inc/footer.php"; ?>