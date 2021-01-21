
<style>
{literal}
.news img {
	width: 100%;
}
.news {
	padding: 10px;
	border-bottom: 1px solid #ccc;
	margin-bottom: 40px;
}
{/literal}
</style>

<section class="top_section">
  <div class="play_button">
    <!--<img data-toggle="modal" data-target="#video01" src="https://professionalfreddy.com/img/play-video-img.png">-->
  </div>
</section>


{foreach from=$blog item=row}
<!--Start Content-->
<section class="padding">
  <div class="container">
  	<div class="row">
  		<div class="col-sm-12">
  			<h1>{$row['title']}</h1>
  		</div>
  	
    
      <div class="col-sm-12">
        {if !empty($row['image'])}
        <img src="https://admin.byfreddy.io/uploads/{$row['image']}" class="img-left">
        {/if}
        <p>{$row['Content']}</p>
      </div>
    </div>
  </div>
</section>
<!--End Content-->
{/foreach}