<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="This is my portfolio homepage.">
        <meta name="description" content="created by: benrobo">
        <meta name="robots" content="index, follow">
        <title>Add Post</title>
        <link rel="icon" href="../img/profile/avatar.jpeg">
        <!-- custom css file -->
        <link rel="stylesheet" href="../css/admin.css" />
    
        <!-- bootstrap css -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!--  responsive-->
        <link rel="stylesheet" href="../css/responsive.css" />
        
        <link
          rel="stylesheet"
          href="path/to/font-awesome/css/font-awesome.min.css"
        />

        <!-- Theme included stylesheets -->
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

        <!-- Core build with no theme, formatting, non-essential modules -->
        <link href="https://cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
        <script src="https://cdn.quilljs.com/1.3.6/quill.core.js"></script>

        <!-- icons -->
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </head>
<body>

<?php require("inc/nav.php");?>

    <div class="container">
        <div class="row">
            
            <div class="col-md-8 col-md-offset-2 addpost-cont">
                <label for="btn btn-default"><a href="/admin-dash/index.php" class="text-white">Back</a></label>
                <h1>Create post</h1>
                
                <form action="logic/addpost.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group has-error">
                        <label for="slug">Image <span class="require">
                            <br>
                        <input type="file" class="btn btn-primary" name="img" />
                    </div>
                    
                    <div class="form-group">
                        <label for="title">Title <span class="require">*</span></label>
                        <input type="text" class="form-control" name="title" />
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <!-- Create the editor container -->
                    <!-- <div id="editor" name="body"></div> -->
                    <textarea name="body" id="editor" cols="30" rows="10" class="form-dfbcontrol"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <p><span class="require">*</span> - required fields</p>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">
                            Create
                        </button>
                        <button class="btn btn-danger">
                            Cancel
                        </button>
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Main Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script src="quill/quill.js"></script>
    <script>
        function navbar(){
        let burger = document.querySelector(".burger");
        let navbar = document.querySelector(".navbar");
        let isclicked = false;

        burger.addEventListener("click", ()=>{
            if(isclicked == false){
            navbar.style.height = "170px";
            isclicked = true;
            }else{
            navbar.style.height = "50px";
            isclicked = false;
            }
        })

        
        }
        navbar()

        function morebtn(){
        let isclicked = false;
        let morebtn = document.querySelector(".btn-toggle");
        let dropdown = document.querySelector(".dropdown-menus");

        morebtn.addEventListener("click", ()=>{
            if(isclicked == false){
            dropdown.style.display = "block";
            isclicked = true;
            }else{
            dropdown.style.display = "none";
            isclicked = false;
            }
        })
        }
        morebtn()
    </script>
</body>
</html>