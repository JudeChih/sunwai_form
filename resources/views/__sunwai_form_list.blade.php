<?php
$title = "資料呈現";
?>
@include("__sunwai_head")
<div class="content col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
			@foreach ($all_data as $qqq)
			<div class="content_detail col-md-12 col-sm-12 p_l_r" data_id="{{ $qqq->id }}">
				<div class="col-md-1 col-sm-1 p_l_r">{{ $qqq->contact_person }}</div>
				<div class="col-md-3 col-sm-3 p_l_r">{{ $qqq->email }}</div>
				<div class="col-md-2 col-sm-2">{{ $qqq->contact_phone }}</div>
				<div class="col-md-2 col-sm-2 p_l_r">{{ $qqq->companyname }}</div>
				<div class="col-md-2 col-sm-2">{{ $qqq->company_address }}</div>
				<div class="col-md-2 col-sm-2">{{ $qqq->pc_volume }}</div>
				<div class="col-md-2 col-sm-2">{{ $qqq->apply_for }}</div>
				<div class="col-md-2 col-sm-2">{{ $qqq->description }}</div>
			</div>
		  @endforeach
		  <!-- <a href="/CustomerData/{{ $customerData[9]['cd_id'] }}">11111</a> -->
		  <div class="col-md-12">{!! $SunwaiForm->links() !!}</div>

@include("__sunwai_foot")

