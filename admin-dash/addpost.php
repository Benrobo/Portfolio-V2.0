<?php require("inc/head.php");?>

<?php require("inc/nav.php");?>

    <div class="container">
        <div class="row">
            
            <div class="col-md-8 col-md-offset-2 addpost-cont">
                <label for="btn btn-default"><a href="/admin-dash/admin.html" class="text-white">Back</a></label>
                <h1>Create post</h1>
                
                <form action="" method="POST">
                    
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
                        <textarea rows="5" class="form-control" name="description" ></textarea>
                    </div>
                    
                    <div class="form-group">
                        <p><span class="require">*</span> - required fields</p>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
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