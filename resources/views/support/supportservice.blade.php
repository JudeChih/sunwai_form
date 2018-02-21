<?php
$title = "技術支援服務";
?>
@include("__sunwai_head")
<div class="container-fluid">
	<div class="row">
		<div class="j_form_style col-sm-10 col-sm-push-1">
			<div class="j_title col-md-12 col-sm-12 col-xs-12">
				<h1 class="text-center">技術支援服務</h1>
			</div>
			<div class="j_form col-md-12 col-sm-12 col-xs-12">
				@foreach ($applyData as $qqq)
				<div class="content_detail col-md-12 col-sm-12 p_l_r" data_id="{{ $qqq->id }}">
					<div class="col-md-1 col-sm-1 p_l_r">{{ $qqq->contact_person }}</div>
					<div class="col-md-3 col-sm-3 p_l_r">{{ $qqq->email }}</div>
					<div class="col-md-1 col-sm-1">{{ $qqq->contact_phone }}</div>
					<div class="col-md-2 col-sm-2 p_l_r">{{ $qqq->companyname }}</div>
					<div class="col-md-2 col-sm-2">{{ $qqq->company_address }}</div>
					<div class="col-md-2 col-sm-2">{{ $qqq->pc_volume }}</div>
					<div class="col-md-2 col-sm-2">{{ $qqq->apply_for }}</div>
					<div class="col-md-2 col-sm-2">{{ $qqq->description }}</div>
				</div>
			  @endforeach
			  <div class="col-md-12">{!! $applyData->links() !!}</div>
			</div>
		</div>
	</div>
</div>

@include("__sunwai_foot")