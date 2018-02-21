<?php
$title = "技術支援服務";
?>
@include("__sunwai_head")
<div class="container-fluid">
		<div class="row">
			<div class="j_form_style col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<?php if(!isset($_SESSION['success'])): ?>
				<div class="j_title col-md-12 col-sm-12 col-xs-12">
					<h1 class="text-center">申請試用表</h1>
				</div>
				<form role="form" action="__sunwai_form_list" class="j_form col-md-12 col-sm-12 col-xs-12" method="POST" enctype="multipart/form-data">
					{!! csrf_field() !!}
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  	<div class="form-group col-md-12">
				  	  <label for="contact_person" class="control-label control-label">　聯絡人：</label>
				  		<div class="">
				  			<input type="text" class="form-control" id="contact_person"  name="contact_person" value="" data-toggle="tooltip" title="請輸入姓名">
				  		</div>
				  	</div>
				  	<div class="form-group col-md-12">
	            <label for="email" class="control-label">電子郵件：</label>
	            <div class="">
	            	<input type="email" class="form-control" id="email"  name="email" value="" data-toggle="tooltip" title="請填寫電子郵件">
	            </div>
	        	</div>
				  	<div class="form-group col-md-12">
		          <label for="contact_phone" class="control-label">聯絡電話：</label>
		          <div class="">
		          	<input type="text" class="form-control" id="contact_phone"  name="contact_phone" value="" data-toggle="tooltip" title="請填寫聯絡電話">
		          </div>
		      	</div>
			      <div class="form-group col-md-12">
		          <label for="companyname" class="control-label">公司名稱：</label>
		          <div class="">
		          	<input type="text" class="form-control" id="companyname"  name="companyname" value="" data-toggle="tooltip" title="請填寫公司名稱">
		          </div>
			      </div>
			      <div class="form-group col-md-12">
		          <label for="company_address" class="control-label">公司地址：</label>
		          <div class="">
		          	<input type="text" class="form-control" id="company_address"  name="company_address" value="" data-toggle="tooltip" title="請填寫公司地址">
		          </div>
			      </div>
						<div class="form-group col-md-12">
		          <label for="pc_volume" class="control-label">電腦數量：</label>
		          <div class="">
		          	<input type="number" class="form-control" id="pc_volume"  name="pc_volume" value="1" data-toggle="tooltip" title="請填寫電腦數量">
		          </div>
			      </div>
				  </div>
		      <div class="col-md-6 col-sm-6 col-xs-12">
		      	<div class="form-group col-md-12">
	      	    <label for="apply_for" class="">申請試用：</label>
				      <div class="">
				      	<select class="form-control" id="apply_for" name="apply_for">
								  <option>芬-安全企業版</option>
								  <option>Acronis</option>
								  <option>Sophos防火牆</option>
								</select>
				      </div>
	  				</div>
						<div class="form-group col-md-12">
	    	    	<label for="description" class="">訊息內容：</label>
	    	    	<div class="">
	    	    		<textarea type="text" class="form-control" rows="5" id="description"  name="description"></textarea>
	    	    	</div>
	      		</div>
	      		<!-- <div class="form-group col-md-12">
							<div class="g-recaptcha" data-sitekey="6LfDiAoUAAAAAKLLOBsQ3hVniJ_SfQS3LLc9gFJ3"></div>
	      		</div> -->
		      </div>
				  <div class="col-md-12 col-sm-12 col-xs-12 btn_p_r_b">
				  	<button type="submit" value="送出" name="submit" class="btn pull-right">送出</button>
				  </div>
				</form>
			</div>
		</div>
	</div>

@include("__sunwai_foot")