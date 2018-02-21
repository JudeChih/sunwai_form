<?php
$title = "技術支援服務";
?>
@include("__sunwai_head")
<div class="container-fluid">
		<div class="row">
			<div class="j_form_style col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
				<div class="j_title col-md-12 col-sm-12 col-xs-12">
					<h1 class="text-center">技術支援服務</h1>
				</div>
				<form role="form" action="__sunwai_form_list" class="j_form col-md-12 col-sm-12 col-xs-12" method="POST" enctype="multipart/form-data">
					{!! csrf_field() !!}
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  	<h3 class="text-center">聯絡資訊</h3>
				  	<div class="form-group col-md-12">
		          <label for="companyname" class="control-label">公司名稱</label>
		          <input type="text" class="form-control" id="companyname"  name="companyname" value="" data-toggle="tooltip" title="請填寫公司名稱">
			      </div>
				  	<div class="form-group col-md-12">
				  	  <label for="contact_person" class="control-label control-label">&nbsp;&nbsp;聯絡人&nbsp;&nbsp;</label>
				  		<input type="text" class="form-control" id="contact_person"  name="contact_person" value="" data-toggle="tooltip" title="請輸入聯絡人">
				  	</div>
				  	<div class="form-group col-md-12">
	            <label for="email" class="control-label">電子郵件</label>
	            <input type="email" class="form-control" id="email"  name="email" value="" data-toggle="tooltip" title="請輸入電子郵件">
	        	</div>
				  	<div class="form-group col-md-12">
		          <label for="contact_phone" class="control-label">聯絡電話</label>
		          <input type="text" class="form-control" id="contact_phone"  name="contact_phone" value="" data-toggle="tooltip" title="請輸入聯絡電話">
		      	</div>
				  </div>
		      <div class="col-md-6 col-sm-6 col-xs-12">
		      	<h3 class="text-center">產品細節</h3>
		      	<div class="form-group col-md-12">
	      	    <label for="product_cate" class="">產品類別</label>
			      	<select class="form-control" id="product_cate" name="product_cate">
			      		<option>請選擇</option>
							  <option>分類1</option>
							  <option>分類2</option>
							  <option>分類3</option>
							</select>
	  				</div>
	  				<div class="form-group col-md-12">
	      	    <label for="product_name" class="">產品名稱</label>
			      	<select class="form-control" id="product_name" name="product_name">
			      		<option>請選擇</option>
							  <option>名稱1</option>
							  <option>名稱2</option>
							  <option>名稱3</option>
							</select>
	  				</div>
						<div class="form-group col-md-12">
		          <label for="contact_version" class="control-label">產品版本</label>
		          <input type="text" class="form-control" id="contact_version"  name="contact_version" value="" data-toggle="tooltip" title="請填寫產品版本">
		      	</div>
	      		<!-- <div class="form-group col-md-12">
							<div class="g-recaptcha" data-sitekey="6LfDiAoUAAAAAKLLOBsQ3hVniJ_SfQS3LLc9gFJ3"></div>
	      		</div> -->
		      </div>
		      <div class="col-md-12 col-sm-12 col-xs-12">
		      	<h3 class="col-md-12 col-sm-12 col-xs-12 text-center">案件細節</h3>
		      	<div class="form-group col-md-6 col-sm-6 col-xs-12 p_r">
		          <label for="case_cate" class="control-label">案件類別</label>
	          	<select class="form-control" id="case_cate" name="case_cate">
			      		<option>請選擇</option>
							  <option>分類1</option>
							  <option>分類2</option>
							  <option>分類3</option>
							</select>
		      	</div>
		      	<div class="form-group col-md-6 col-sm-6 col-xs-12 p_l">
		          <label for="case_subcate" class="control-label">&nbsp;&nbsp;子類別&nbsp;&nbsp;</label>
	          	<select class="form-control" id="case_subcate" name="case_subcate">
			      		<option>請選擇</option>
							  <option>子分類1</option>
							  <option>子分類2</option>
							  <option>子分類3</option>
							</select>
		      	</div>
		      	<div class="form-group col-md-12 col-sm-12 col-xs-12">
		          <label for="case_title" class="control-label">案件標題</label>
		          <input type="text" class="form-control" id="case_title"  name="case_title" value="" data-toggle="tooltip" title="請輸入案件標題">
		      	</div>
		      	<div class="form-group col-md-12 col-sm-12 col-xs-12">
		          <label for="case_statement" class="control-label">問題描述</label>
		          <textarea type="text" class="form-control" rows="5" id="case_statement"  name="case_statement" data-toggle="tooltip" title="在此陳述您的問題"></textarea>
		      	</div>
		      	<div class="form-group col-md-6 col-sm-6 col-xs-12">
					    <label for="fileToUpload" class="">檔案上傳</label>
					    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
					    <p class="help-block">只能上傳tar.gz, .rar, .zip格式的檔案</p>
					  </div>
					  <div class="form-group col-md-6 col-sm-6 col-xs-12">
					    <label for="fileToUpload" class="">&nbsp;&nbsp;驗證碼&nbsp;&nbsp;</label>
					    <input class="form-control" id="disabledInput" type="text" placeholder="這裡是驗證碼區塊" disabled>
					  </div>
		      </div>
				  <div class="col-md-12 col-sm-12 col-xs-12 btn_p_r_b">
				  	<button type="submit" value="送出" name="submit" class="btn pull-right">送出</button>
				  </div>
				</form>
			</div>
		</div>
</div>

@include("__sunwai_foot")

