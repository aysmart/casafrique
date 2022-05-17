<blockquote>
<?php 
include('includes/config.php');
$pid=$_POST['comID'];
											
														$query6=mysqli_query($con,"SELECT * FROM blogcomments WHERE ID='".$pid."'");
														while ($row=mysqli_fetch_array($query6))
														{
															$comId=$row['ID'];
												   ?>
													                <div class="comment-content">
														                <div class="comment-meta">
														                    <h5 class="author"><a href="#"><?php echo $row['CommentByName'] ?></a></h5>
														                    <span class="date"><?php echo date("j M Y", strtotime($row['CommentDate'])) ?></span>
														                </div><!-- End comment-meta -->
														                <div class="comment-wrap">
														                    <p>
																			<?php echo $row['CommentText'] ?>														                    </p>
														                </div><!-- End comment-wrap -->
													                </div><!-- End comment-content -->
                                                                </div> <?php } ?> </blockquote>
                                                                <input type="text" style="visibility:hidden" class="form-control" id="rfPostID" name="cfCommentID" value="<?php echo $pid ?>">
