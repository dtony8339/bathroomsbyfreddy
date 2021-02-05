<link rel="stylesheet" href="{$smarty.const.root_css}lightbox.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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


<!--Start Top Banner-->
<section class="contact-banner ourteam">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="banner_title">NEWS</h1>				
			</div>
		</div>
	</div>
</section>
<!--End Top Banner-->






<!--Start Welcome-->

<section class="padding">

  <div class="container">

    <div class="row">

  		<div class="col-sm-12">

<div class="space25"></div>
<h2 class="ourmate-title"><span>BLOG</span></h2>

  		</div>

  	</div>
<div class="all">
	<a href="#all">See all</a>
</div>
<div class="space25"></div>

<!--PHP WHILE LOOP HERE-->  

  <div class="row">

            <div class="col-md-12">
			
			
			<div class="blogsBox">
				<div class="bbox row">
					<div class="bbox_img">
						<img src="{$smarty.const.root_img}blog_1.png">
					</div>
					<div class="bbox_desc">
						<h3 class="gold">SUMMER CRACK REPAIR - WOODEN FENCING BERKSHIRE OESTE TIPS</h3>
						<p>When there is a prolonged hot dry weather in spring or summer, cracks may appear. Summer crack repai...</p>
					</div>
					<div class="bbox_link">
						<a href="#" class="gold">Know more</a>
					</div>
				</div>
				<div class="bbox row">
					<div class="bbox_img">
						<img src="{$smarty.const.root_img}blog_2.png">
					</div>
					<div class="bbox_desc">
						<h3 class="gold">EASY TO DO CRACK REPAIR AT HOME IN GLOUCESTERSHIRE ABBEYMEAD</h3>
						<p>Cracks in the driveway are one of the most common problems among homeowners. However, it's a known f...</p>
					</div>
					<div class="bbox_link">
						<a href="#" class="gold">Know more</a>
					</div>
				</div>
				<div class="bbox row">
					<div class="bbox_img">
						<img src="{$smarty.const.root_img}blog_3.png">
					</div>
					<div class="bbox_desc">
						<h3 class="gold">TOP 5 PROJECTS YOU CAN HANDLE ON YOUR OWN IN WILTSHIRE ABLINGTON</h3>
						<p>Cracks in the driveway are one of the most common problems among homeowners. However, it's a known f...</p>
					</div>
					<div class="bbox_link">
						<a href="#" class="gold">Know more</a>
					</div>
				</div>
				<div class="bbox row">
					<div class="bbox_img">
						<img src="{$smarty.const.root_img}blog_4.png">
					</div>
					<div class="bbox_desc">
						<h3 class="gold">4 PROJECTS YOU CAN DO IN ONE WEEKEND IN FORDSHIRE AMBROSDEN</h3>
						<p>Fence contractors berkshire, news what you can do on the weekend.</p>
					</div>
					<div class="bbox_link">
						<a href="#" class="gold">Know more</a>
					</div>
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
								<div class="bbox row">
					<div class="bbox_img">
						<img src="{$smarty.const.root_img}blog_1.png">
					</div>
					<div class="bbox_desc">
						<h3 class="gold">SUMMER CRACK REPAIR - WOODEN FENCING BERKSHIRE OESTE TIPS</h3>
						<p>When there is a prolonged hot dry weather in spring or summer, cracks may appear. Summer crack repai...</p>
					</div>
					<div class="bbox_link">
						<a href="#" class="gold">Know more</a>
					</div>
				</div>
				<div class="bbox row">
					<div class="bbox_img">
						<img src="{$smarty.const.root_img}blog_2.png">
					</div>
					<div class="bbox_desc">
						<h3 class="gold">EASY TO DO CRACK REPAIR AT HOME IN GLOUCESTERSHIRE ABBEYMEAD</h3>
						<p>Cracks in the driveway are one of the most common problems among homeowners. However, it's a known f...</p>
					</div>
					<div class="bbox_link">
						<a href="#" class="gold">Know more</a>
					</div>
				</div>
				<div class="bbox row">
					<div class="bbox_img">
						<img src="{$smarty.const.root_img}blog_3.png">
					</div>
					<div class="bbox_desc">
						<h3 class="gold">TOP 5 PROJECTS YOU CAN HANDLE ON YOUR OWN IN WILTSHIRE ABLINGTON</h3>
						<p>Cracks in the driveway are one of the most common problems among homeowners. However, it's a known f...</p>
					</div>
					<div class="bbox_link">
						<a href="#" class="gold">Know more</a>
					</div>
				</div>
				<div class="bbox row">
					<div class="bbox_img">
						<img src="{$smarty.const.root_img}blog_4.png">
					</div>
					<div class="bbox_desc">
						<h3 class="gold">4 PROJECTS YOU CAN DO IN ONE WEEKEND IN FORDSHIRE AMBROSDEN</h3>
						<p>Fence contractors berkshire, news what you can do on the weekend.</p>
					</div>
					<div class="bbox_link">
						<a href="#" class="gold">Know more</a>
					</div>
				</div>
				
				
				
				
				
				
				
				
				
				
				
			</div>
			
			
			
			

       {if !empty($blogs)}

        {foreach from=$blogs item=row}

      {assign var="id" value=$row['id']}

      {assign var="title" value=$row['title']}

   

      {assign var="short_content" value=$row['short_content']}

      {assign var="image" value=$row['image']}

                {assign var="author_name" value=$row['author_name']}

                {assign var="blog_post_catagory" value=$row['blog_ctgry']}

         {assign var="seotitle" value=$row['title']}



        {assign var="seotitle" value={$seotitle|lower}}

        {assign var="seotitle" value={$seotitle|replace:' ':'-'}}

         {assign var="seotitle" value={$seotitle|replace:"'":''}}

         {assign var="seotitle" value={$seotitle|replace:"?":''}}

         {assign var="linktitle" value=$row['linktitle']}



        {assign var="linktitle" value={$linktitle|lower}}

        {assign var="linktitle" value={$linktitle|replace:' ':'-'}}

  <div class="col-md-6">

              <div class="ourwork">

                    <div class="">

                    <div class="image">

                            {if !empty($image)}

                              <img src="https://admin.byfreddy.io/photo/blog/post_upload/{$image}">

                            {else}

                              <img src="{$smarty.const.root_img}no_img.jpeg">

                            {/if}

                            <div class="overlay">

                              <a href="{$smarty.const.siteurl}{$seotitle}/{$linktitle}.html">

                                  <i class="fa fa-link" aria-hidden="true"></i>

                                </a>

                                <a href="{$smarty.const.root_img}no_img.jpeg" data-lightbox="{$row['id']}">

                                    <i class="fa fa-search" aria-hidden="true"></i>

                                </a>

                          </div>

                    </div>

                        <div class="card-block news">

                          <p class="card-author">by {$author_name}</p>

                            <a href="{$smarty.const.siteurl}{$seotitle}/{$linktitle}.html"><h4 class="card-title">{$title}</h4></a>

                            <p class="card-text">{$short_content}</p>

                            <div class="row">

                              <div class="col-sm-9"><hr /></div>

                                <div class="col-sm-3"><p class="no-comments"><i class="fa fa-comment" aria-hidden="true"></i> 0</p></div>

                            </div>

                            <!--<a class="btn btn-lg btn-orange" href="{$smarty.const.siteurl}news_details/{$id}">Read More</a>-->

                            <small>{$blog_post_catagory}</small>

                        </div>

                    </div>

                </div>

            </div>

    <!--<div class="row news">

      <div class="col-sm-3">

        <img src="https://admin.professionalfreddy.com/photo/blog/post_upload/{$image}" class="newslistimg">

      </div>

      <div class="col-sm-9">

        <h4>{$title}</h4>

        <p>{$short_content}. . .</p>

        <p><a href="{$smarty.const.siteurl}news/{$seotitle}/{$id}">Continue reading >></a></p>

      </div>

    </div>-->

        

          {/foreach}

            {else}
<!--
            <h3 class="text-center">No Blog found</h3>
-->
            {/if}

      </div>

<div class="space25"></div>
<h2 class="ourmate-title"><span>MY MATES POSTS</span></h2>
<div class="row">
	<div class="col-md-12">
		<div class="mates">
			<div class="sliderBox">
			
<div id="slidess" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#slidess" data-slide-to="0" class="active"></li>
    <li data-target="#slidess" data-slide-to="1"></li>
    <li data-target="#slidess" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
					<div class="sBox">
						<img src="{$smarty.const.root_img}mates_1.png">
						<br>
						<div class="text">HOW TO BE <br> A GARDENING EXPERT</div>
						<br>
						<a href="#" class="gold">Know more&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="sBox">
						<img src="{$smarty.const.root_img}mates_2.png">
						<br>
						<div class="text">TEAMWORK CAN BRING <br>TO THE BUSINESS </div>
						<br>
						<a href="#" class="gold">Know more&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="sBox">
						<img src="{$smarty.const.root_img}mates_3.png">
						<br>
						<div class="text">Test</div>
						<br>
						<a href="#" class="gold">Know more&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="sBox">
						<img src="{$smarty.const.root_img}mates_4.png">
						<br>
						<div class="text">HOW TO BE<br> A GARDENING EXPERT</div>
						<br>
						<a href="#" class="gold">Know more&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
    </div>
    <div class="carousel-item">
					<div class="sBox">
						<img src="{$smarty.const.root_img}unknown.png">
						<br>
						<div class="text">HOW TO BE <br> A GARDENING EXPERT</div>
						<br>
						<a href="#" class="gold">Know more&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="sBox">
						<img src="{$smarty.const.root_img}unknown.png">
						<br>
						<div class="text">TEAMWORK CAN BRING <br>TO THE BUSINESS </div>
						<br>
						<a href="#" class="gold">Know more&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="sBox">
						<img src="{$smarty.const.root_img}unknown.png">
						<br>
						<div class="text">Test</div>
						<br>
						<a href="#" class="gold">Know more&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="sBox">
						<img src="{$smarty.const.root_img}unknown.png">
						<br>
						<div class="text">HOW TO BE<br> A GARDENING EXPERT</div>
						<br>
						<a href="#" class="gold">Know more&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
    </div>
    <div class="carousel-item">
					<div class="sBox">
						<img src="{$smarty.const.root_img}unknown.png">
						<br>
						<div class="text">HOW TO BE <br> A GARDENING EXPERT</div>
						<br>
						<a href="#" class="gold">Know more&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="sBox">
						<img src="{$smarty.const.root_img}unknown.png">
						<br>
						<div class="text">TEAMWORK CAN BRING <br>TO THE BUSINESS </div>
						<br>
						<a href="#" class="gold">Know more&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="sBox">
						<img src="{$smarty.const.root_img}unknown.png">
						<br>
						<div class="text">Test</div>
						<br>
						<a href="#" class="gold">Know more&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="sBox">
						<img src="{$smarty.const.root_img}unknown.png">
						<br>
						<div class="text">HOW TO BE<br> A GARDENING EXPERT</div>
						<br>
						<a href="#" class="gold">Know more&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#slidess" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slidess" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>		
			
			
			</div>
		</div>
	</div>
</div>
          <div class="col-md-12" style="display:none;">

              <div class="latest-post">

                  <div class="row">

                        <div class="col-md-12">

                          <h4>MY MATES POSTS</h4>

                        </div>

         

      {foreach from=$sidebar_blog item=row}

     {assign var="id" value=$row['id']}

        {assign var="title" value=$row['title']}

        {assign var="short_content" value=$row['short_content']}

        {assign var="Content" value=$row['Content']}

        {assign var="image" value=$row['image']}

        {assign var="status" value=$row['status']}

        {assign var="category_id" value=$row['category_id']}

                    {assign var="category" value=$row['blog_ctgry']}



        {assign var="seotitle" value=$row['title']}



        {assign var="seotitle" value={$seotitle|lower}}

        {assign var="seotitle" value={$seotitle|replace:' ':'-'}}

         {assign var="seotitle" value={$seotitle|replace:"'":''}}

         {assign var="seotitle" value={$seotitle|replace:"?":''}}
         {assign var="extsiteurl" value=$row['siteurl']}
   {assign var="linktitle" value=$row['linktitle']}



        {assign var="linktitle" value={$linktitle|lower}}

        {assign var="linktitle" value={$linktitle|replace:' ':'-'}}


                <div class="col-md-12">

                          <div class="col-sm-4 align-center">

                                <div class="lates-thumb">

                                      {if !empty($image)}

                                            <img src="https://admin.byfreddy.io/photo/blog/post_upload/{$image}">

                                        {else}

                                            <img src="https://paintingbyfreddy.co.uk/resources/img/no_img.jpeg">

                                        {/if}

                                        <div class="overlay">

                                            <a href="{$extsiteurl}/{$seotitle}/{$linktitle}.html" target="_blank">

                                                <i class="fa fa-link" aria-hidden="true"></i>

                                            </a>

                                        </div>

                                     </div>

                            </div>

                            <div class="col-sm-8">

                              <h4 class="latest-category">{$catagory}</h4>

                              <a href="{$extsiteurl}/{$seotitle}/{$linktitle}.html" target="_blank"><h3 class="latest-title">{$title|ucfirst}</h3></a>

                            </div>

                        </div>

                        <div class="clearfix"></div>

                        <hr />

          {/foreach}

                    </div>

                </div>

            </div>

    </div>

<!--PHP WHILE LOOP END HERE-->  

  

 <!--Pagination start here-->  

 

<!--  <div class="row">

      <div class="col-sm-12">

        <ul class="pagination">

          <li><a href=""><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>

          <li class="active"><a href="#">1</a></li>

          <li><a href="#">2</a></li>

          <li><a href="#">3</a></li>

          <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

        </ul>

      </div>

    </div>-->

 

 <!--pagination END here-->

  </div>

</section>

<!--End Welcome-->

<script src="{$smarty.const.root_js}lightbox-plus-jquery.min.js"></script>

<style>
.no-comments a {
    color: white;
}
.overlay {

    transition: .5s ease;

    opacity: 0;

    position: absolute;

    left: 50%;

    top: 80px;

    transform: translate(-50%, -50%);

    -ms-transform: translate(-50%, -50%);

    text-align: center;

    width: 100%;

    height: 120%;

}



.lates-thumb .overlay {

    transition: .5s ease;

    opacity: 0;

    position: absolute;

    left: 50%;

    top: 40px;

    transform: translate(-50%, -50%);

    -ms-transform: translate(-50%, -50%);

    text-align: center;

    width: 100%;

    height: 100%;

    padding-bottom: 30px;

}

.image:hover .overlay, .lates-thumb:hover .overlay {

  opacity: 1;

}

.card-block {

    text-align: left;

}


.news a h4.card-title {
    color: #7c7b7b;
    font-family: 'PT Sans Narrow', sans-serif !important;
}
</style>

<script type="text/javascript">

$(function(){

  $(".card-title").each(function(i){

    len=$(this).text().length;

    if(len>25)

    {

      $(this).text($(this).text().substr(0,25)+'...');

    }

  });

  $(".card-text").each(function(i){

    len2=$(this).text().length;

    if(len2>100)

    {

      $(this).text($(this).text().substr(0,100)+'...');

    }

  });

});


var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if(slideIndex > slides.length) {
  slideIndex = 1;
  }    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}









</script>