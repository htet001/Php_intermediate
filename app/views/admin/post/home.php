 <?php require_once APPROOT . "/views/inc/header.php"; ?>
 <?php require_once APPROOT . "/views/inc/nav.php"; ?>

 <div class="container-fluid">
     <div class="container my-3">
         <a href="<?php echo URLROOT . 'post/create'; ?>" class="btn btn-primary mb-3">Create</a>
         <div class="row">
             <div class="col-md-4">
                 <ul class="list-group">
                     <?php foreach ($data['cats'] as $cat) : ?>
                         <li class="list-group-item">
                             <a href="<?php echo URLROOT . 'post/home/' . $cat->id; ?>" style="text-decoration: none;"><?php echo $cat->name; ?> </a>
                         </li>
                     <?php endforeach; ?>
                 </ul>
             </div>
             <div class="col-md-8">
                 <?php foreach ($data['posts'] as $post) : ?>
                     <div class="card mb-5">
                         <div class="card-header bg-dark text-white">
                             <h6><?php echo $post->title; ?></h6>
                         </div>
                         <div class="card-block p-2">
                             <p><?php echo $post->description; ?></p>
                             <div class="d-flex flex-row-reverse">
                                 <button class="english btn btn-danger text-white btn-sm rounded-0">Delete</button>
                                 <button class="english btn btn-primary text-white btn-sm rounded-0" style="margin-right: 10px;">Edit</button>
                                 <a href="<?php echo URLROOT . 'post/show/' . $post->id; ?>" class="english btn btn-success text-white btn-sm rounded-0" style="margin-right: 10px;">Detail</a>
                             </div>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
 </div>

 <?php require_once APPROOT . "/views/inc/footer.php"; ?>