<?php
include('includes/config.php');

$page=$_POST["page"];
$start=($page-1)*10;
//$pageC=$page*10;


if(isset($_POST['limit'], $start))
{
$limitstart=' LIMIT '.$start.", ".$_POST['limit'];

}

if (isset($_POST["searchtext"]))
{
    $condition='';
    $search_var=$_POST["searchtext"]; 
    
    if ($search_var==" " || $search_var=="")
    {
        $condition.='';
    }
    else
    {
        $searchplus=str_replace(" ", "-",$search_var);
        $query_explode=explode(" ", $search_var);
        foreach ($query_explode as $search_text)
        {
            if ($search_text=="" || $search_text==" ")
            {
            }
            else
            {
                    $TitleLike=" BlogTittle LIKE '%".$search_text."%' OR PostTags LIKE '%".$search_text."%' OR ";
                    
            }
        }
        $TitleLike1=substr($TitleLike, 0, -4);
    }
}

                                    echo '<div id="posts">';
                                    if($search_var==" " || $search_var=="")
                                    {
                                        $query=mysqli_query($con,"SELECT * FROM blogpost WHERE Category='Blog Post' ORDER BY DateOfPost DESC ".$limitstart); 
                                    }
                                    else
                                    {
                                        $query=mysqli_query($con,"SELECT * FROM blogpost WHERE Category='Blog Post' AND ORDER BY DateOfPost DESC ".$TitleLike1.$limitstart); 
                                    }
                                     while ($row=mysqli_fetch_array($query))
                                     {
                                ?>
										<div class="entry">
											<div class="entry-image">
												<a href="blogpost/<?php echo str_replace(" ", "-",$row["BlogTittle"]) ?>">
													<img src="<?php echo $row['PostBanner'] ?>" width="827" height="420" alt="blog images">
												</a>
											</div><!-- End entry-image -->
											<div class="entry-title">
												<h3>
													<a href="blogpost/<?php echo str_replace(" ", "-",$row["BlogTittle"]) ?>">
													<?php echo htmlentities($row['BlogTittle']) ?>
													</a>
												</h3>
											</div><!-- End entry-title -->
											<div class="entry-meta">
												<ul>
													<li>
														<i class="fa fa-clock-o"></i>
														<?php echo date("j M Y", strtotime($row['DateOfPost'])) ?>													</li>
													<li>
														<a href="">
															<i class="fa fa-user"></i>
															Admin
														</a>
													</li> 
												<!--	<li>
														<i class="fa fa-folder-open"></i>
														<a href="#">General</a>, <a href="#">Media</a>
													</li>
													<li>-->
														<a href="blogpost/<?php echo str_replace(" ", "-",$row["BlogTittle"]) ?>">
															<i class="fa fa-comments"></i>
															<?php $pid=$row['ID'];
												 $query4=mysqli_query($con,"SELECT * FROM blogcomments WHERE PostID='".$pid."' AND Category='1'"); ?>
										<?php echo mysqli_num_rows($query4); ?> Comments
														</a>
													</li>
												</ul>
											</div><!-- End entry-meta -->
											<div class="entry-content">
												<div>
												<span class="dropcap1"><?php echo htmlentities(substr($row['FirstPrev'], 0,1)) ?></span><?php echo substr($row['FirstPrev'], 1, 250)."..." ?>

												</div>
												<a class="button x-small colorful hover-dark with-hover-icon-right" href="blogpost/<?php echo str_replace(" ", "-",$row["BlogTittle"]) ?>">
													Read More
													<i class="fa fa fa-long-arrow-right"></i>
												</a>
											</div><!-- End entry-content -->
										</div><!-- End entry -->
                                        <?php } ?>	
                                        </div><!-- End posts -->
                                        <ul class="pagination">
										<?php 
										$query=mysqli_query($con,"SELECT * FROM blogpost WHERE Category='Blog Post'");
										$recCount=intdiv(mysqli_num_rows($query),10)+1;
										for ($x=0;$x<$recCount;$x++)
										{
										?>
										<li class="<?php if($page==($x+1)) {?> active <?php } ?>"><a class="paginate" pageval="<?php echo $x+1; ?>"><?php echo $x+1; ?></a></li>
										<?php } ?>
									</ul><!-- End pagination -->