(function ($) {
    "use strict";
    
    
           var $image = $(".image-crop > img")
               $($image).cropper({
                   aspectRatio: 1.618,
                   preview: ".img-preview",
                   done: function(data) {
                       // Output the result data for cropping image.
                   }
               });
   
               var $inputImage = $("#inputImage");
               if (window.FileReader) {
                   $inputImage.change(function() {
                       var fileReader = new FileReader(),
                               files = this.files,
                               file;
   
                       if (!files.length) {
                           return;
                       }
   
                       file = files[0];
   
                       if (/^image\/\w+$/.test(file.type)) {
                           fileReader.readAsDataURL(file);
                           fileReader.onload = function () {
                               $inputImage.val("");
                               $image.cropper("reset", true).cropper("replace", this.result);
                           };
                       } else {
                           showMessage("Please choose an image file.");
                       }
                   });
               } else {
                   $inputImage.addClass("hide");
               }
   
               $("#download").on('click', function() {
                   //alert($image.cropper("getDataURL"));
             //      alert('I was here');
                   var ptitle= document.getElementById('ptitle').value;
                   var pcontent= $('#summernote1').summernote('code');
                   var pid= document.getElementById('pid').value + "";
                //   alert("I was here 1");
                 //alert(pid);
                   if (pid=="-10")
                   {
                  //     alert("I was here 1");
                   var bannerImage=$image.cropper("getDataURL");
                   var pcateg= document.getElementById('pcateg').value;
                   var ptags= document.getElementById('ptags').value;
                   var previewText= document.getElementById('preview-text12').value;
                   //alert("I was here 1");
                   //alert(previewText);
                   $.ajax({  
                       url:"upload-blog-post.php",  
                       method:"post",
                       data:{previewText:previewText, ptitle:ptitle, pcateg:pcateg, ptags:ptags, pcontent:pcontent, bannerImage:bannerImage},
                       success:function(data){  
                           if (data=='Upload was successful.')
                           {
                               alert('Congratulations, upload was successful.');
                               location.reload();
                             //  alert("I was here 1");
                           }
                           else
                           {
                            //alert(data);
                               alert('We are sorry, upload was not successful. Please, try again.');
                               //alert("I was here 1");
                           }
                         
                       }  
                   });
               }
               else if(pid=="-100")
               {
                   var bannerImage=$image.cropper("getDataURL");
                   var fromtime= document.getElementById('fromtime').value;
                   var totime= document.getElementById('totime').value;
                   var eventdate= document.getElementById('eventdate').value;
                   var eventvenue= document.getElementById('eventvenue').value;
                  // alert(eventdate);
                   //  alert(ptitle +" "+pcateg);
                     $.ajax({  
                         url:"upload-event.php",  
                         method:"post",
                         data:{ptitle:ptitle, fromtime:fromtime, eventdate:eventdate, totime:totime, ptags:ptags, pcontent:pcontent, bannerImage:bannerImage, eventvenue:eventvenue},
                         success:function(data){  
                             if (data=='Upload was successful.')
                             {
                                 alert('Congratulations, upload was successful.');
                                 location.reload();
                             }
                             else
                             {
                                 alert('We are sorry, upload was not successful. Please, try again.');
                             }
                           
                         }  
                     });
               }
               else if(pid=="-1000")
               {
                   var fromtime= document.getElementById('fromtime').value;
                   var totime= document.getElementById('totime').value;
                   var eventdate= document.getElementById('eventdate').value;
                   var eventvenue= document.getElementById('eventvenue').value;
                   var ppid= document.getElementById('ppid').value + "";
                 //  alert(ppid);
                  // alert(eventdate);
                   //  alert(ptitle +" "+pcateg);
                     $.ajax({  
                         url:"update-event.php",  
                         method:"post",
                         data:{ppid:ppid, ptitle:ptitle, fromtime:fromtime, eventdate:eventdate, totime:totime, ptags:ptags, pcontent:pcontent, eventvenue:eventvenue},
                         success:function(data){  
                             if (data=='Update was successful.')
                             {
                                 alert('Congratulations, update was successful.');
                                 location.reload();
                             }
                             else
                             {
                                 alert('We are sorry, update was not successful. Please, try again.');
                             }
                             
                         }  
                     });
               }
               else if(pid=="-200")
               {
                   var psource= document.getElementById('psource').value;
                   var pdate= document.getElementById('pdate').value;
                   var purl= document.getElementById('purl').value;
                 //  alert(ppid);
                  // alert(eventdate);
                   //  alert(ptitle +" "+pcateg);
                     $.ajax({  
                         url:"upload-media-mention.php",  
                         method:"post",
                         data:{ptitle:ptitle, psource:psource, pdate:pdate, purl:purl, pcontent:pcontent},
                         success:function(data){  
                             if (data=='Upload was successful.')
                             {
                                 alert('Congratulations, upload was successful.');
                                 location.reload();
                             }
                             else
                             {
                                 alert('We are sorry, upload was not successful. Please, try again.');
                             }
                           
                         }  
                     });
               }
               else if(pid=="-300")
               {
                   var psource= document.getElementById('psource').value;
                   var pdate= document.getElementById('pdate').value;
                   var purl= document.getElementById('purl').value;
                   var ppid= document.getElementById('ppid').value + "";
                 //  alert(ppid);
                  // alert(eventdate);
                   //  alert(ptitle +" "+pcateg);
                     $.ajax({  
                         url:"update-media-mention.php",  
                         method:"post",
                         data:{ppid:ppid, ptitle:ptitle, psource:psource, pdate:pdate, purl:purl, pcontent:pcontent},
                         success:function(data){  
                             if (data=='Update was successful.')
                             {
                                 alert('Congratulations, update was successful.');
                                 location.reload();
                             }
                             else
                             {
                                 alert('We are sorry, update was not successful. Please, try again.');
                             }
                           
                         }  
                     });
               }
               else{
   
                   var pcateg= document.getElementById('pcateg').value;
                   var ptags= document.getElementById('ptags').value;
                   var previewText= document.getElementById('preview-text12').value;
                   //alert(previewText);
                   $.ajax({  
                       url:"update-blog-post.php",  
                       method:"post",
                       data:{previewText:previewText, ptitle:ptitle, pcateg:pcateg, ptags:ptags, pcontent:pcontent, pid:pid},
                       success:function(data){  
                           if (data=='Update was successful.')
                           {
                               alert('Congratulations, update was successful.');
                               location.reload();
                           }
                           else
                           {
                               alert('We are sorry, update was not successful. Please, try again.');
                           }
                         
                       }  
                   });
               }
   
                //   $('#unpaid-item').html('<img src="'+$image.cropper("getDataURL")+'" alt="kjfkgjk">');  
                   //window.open();
               });
   
               $("#zoomIn").on('click', function() {
                   $image.cropper("zoom", 0.1);
               });
   
               $("#zoomOut").on('click', function() {
                   $image.cropper("zoom", -0.1);
               });
   
               $("#rotateLeft").on('click', function() {
                   $image.cropper("rotate", 45);
               });
   
               $("#rotateRight").on('click', function() {
                   $image.cropper("rotate", -45);
               });
   
               $("#setDrag").on('click', function() {
                   $image.cropper("setDragMode", "crop");
               });
   
       
       
    
   })(jQuery); 