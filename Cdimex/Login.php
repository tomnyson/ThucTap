
			<div class="modal" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h3  align="center" class="modal-title" id="myModalLabel"><image src="image/icon/login.png" width="30" height="30">  Đăng Nhập</h3>
				     <!--  <p align="center">Nếu bạn chưa có tài khoản, <a href="#" align="left" data-toggle="modal" data-target="#modalpugin">Đăng Ký</a><p>-->
				      </div>
				      <div class="modal-body" name="login">
							<form class="form-horizontal" role="form" name="login">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-4 control-label"> Nhập Email</label>
								    <div class="col-sm-6">
								      <input type="email" class="form-control" id="txtID" placeholder="Email" >
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label"> Nhập Password</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="txtPW" placeholder="Password" >
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox"> Lưu tài khoản
								        </label>
								      </div>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="button" class="btn btn-link">Quên mật khẩu</button>
				       				 <button type="submit" class="btn btn-primary" name ="submit">Đăng Nhập</button>
								    </div>
								  </div>
							</form>
				      </div>
				      <div class="modal-footer">
				       
				      </div>
				    </div>
				  </div>
				</div>
				<!-- modal dang ky-->
				<div class="modal " id="modalpugin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h3  align="center" class="modal-title" id="myModalLabel"><image src="image/icon/login.png" width="30" height="30">  Đăng ký tài khoản</h3>
				        <!--<p align="center">Nếu bạn đã có tài khoản, <a href="#"data-toggle="modal" data-target="#modallogin" >Đăng Nhập </a><p>-->
				      </div>
				      <div class="modal-body" name="dk">
							<form class="form-horizontal" role="form" name="dk">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-3 control-label"> Nhập Email</label>
								    <div class="col-sm-6">
								      <input type="email" class="form-control" id="email" placeholder="Email">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-3 control-label"> Nhập Password</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="password" placeholder="Password">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-3 control-label">Họ và tên</label>
								    <div class="col-sm-6">
								      <input type="text" class="form-control" id="inputname" placeholder="Name">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-3 control-label">Giới tính</label>
								    <div class="col-sm-3">
								      <select class="input-large form-control">
								      		 <option value="Nam" selected="selected">Nam</option>
							                 <option value="Nữ">Nữ</option>
								       </select>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-3 control-label">Ngày sinh</label>
								    <div class="col-sm-3">
								       <select class="input-large form-control">
							                    <option value="0" selected="selected">Ngày</option>
							                    <?php
							                    	for($i=1;$i<=31;$i++)
							                    	{
							                    ?>
							                    		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							                    <?php	
							                    	}
							                    ?>
							                </select>
								    </div>
								     <div class="col-sm-3">
								       <select class="input-large form-control">
							                    <option value="0" selected="selected">Tháng</option>
							                    <?php
							                    	for($i=1;$i<=12;$i++)
							                    	{
							                    ?>
							                    		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							                    <?php	
							                    	}
							                    ?>
							                </select>
								    </div>
								     <div class="col-sm-3">
								       <select class="input-large form-control">
							                    <option value="0" selected="selected">Năm</option>
							                    <?php
							                    	for($i=2016;$i>=1900;$i--)
							                    	{
							                    ?>
							                    		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							                    <?php	
							                    	}
							                    ?>
							                    
							                    
							                </select>
								    </div>
								  </div>
								   <div class="col-sm-offset-2 col-sm-10">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox">
								          <h4> <font size="2">Nhan Cac Thong Tin Va Chuong Trinh Khuyen Mai Qua Email</font></h4>
								          <h4><font size="2">Khi bạn nhấn Đăng ký, bạn đã đồng ý thực hiện mọi giao dịch mua bán theo điều kiện sử dụng và chính sách của Tiki.</font></h4>
								        </label>
								      </div>
								    </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="button" class="btn btn-link">Quên mật khẩu</button>
				       				 <button type="submit" id="submit" class="btn btn-primary" name="submit">Đăng Ký</button>
								    </div>
								  </div>
							</form>
				      </div>
				      <div class="modal-footer">
				       
				      </div>
				    </div>
				  </div>
				</div>
			</div>