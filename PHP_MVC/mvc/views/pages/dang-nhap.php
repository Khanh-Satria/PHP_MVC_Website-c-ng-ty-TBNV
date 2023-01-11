<div class="container m-5">
       
       <div class="row justify-content-center">
                <div class= "row d-inline-flex">
                   <form action="./Home/KiemTra/" method="post">
                        <div class="form-group">
                           <h2 align="center">Xin chào!! Mời đăng nhập!!</h2>
                           <span style="color:#F03;"><?php 
                            if($data["thong_bao"] != ""){
                              echo $data["thong_bao"];
                            }
                           ?></span>
                         </div>
                         <div class="form-group">
                           <label>Username</label>
                           <input name="txtUser" type="text" class="form-control" placeholder="Username">
                         </div>
                         <div class="form-group">
                           <label>Password</label>
                           <input name="txtPassword" type="password" class="form-control" placeholder="Password">
                         </div>
                         <div class="form-row">
                             <div class="col">
                                 <button name="btnLogin" type="submit" class="btn btn-success">Login</button>
                           </div>
                         </div>  
                   </form>
      
           </div>
       </div>
</div>