<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Grid with Counter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>


                .propertyimgwrapper {
            display: flex;
            justify-content: center;
            }
            .propertyimgcontent {
            position: relative;
            width: max-content;
            }
            /* .propertyimgcontent img {
            display: block;
            width: 1000px;
            height: 550px;
            } */
            .propertyimgcontent .noofpicdetails {
            background-color: yellow;
            position: absolute;
            bottom: 10px;
            right: 10px;
            }

            .leftmailimg img {

  height: 400px;  /* Set the desired height */
  background-color: #f0f0f0;  /* Optional: background for the container */
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;  /* Ensure content fits inside */
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: contain;  /* Ensures the image fits without being stretched or cropped */
}
   
    </style>
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

   <div class="row" style="margin-left:20px;margin-right:20px">
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
      1 of 3
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
        <div class="propertyimgwrapper">
                    <div class="propertyimgcontent">
                  <div class="row">     
                <div class="col-md-7">
                <div class="leftmailimg">
                <img src="./66cf61ac0b566-1724866988.jpeg" class="img-fluid w-100" alt="Full Image">
            </div>    
            </div>

        <!-- Column with 4-grid images (narrower) -->
        <div class="col-md-5 d-none d-md-block">
            <div class="row grid h-100">
                <div class="col-6">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Image 1">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Image 2">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Image 3">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Image 4">
                </div>
            </div>
        </div>
        </div> 
        <span class="noofpicdetails"><i class="lni lni-camera"></i> - 8 Pics</a></span>
        </div> 
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
      3 of 3
    </div>

    </div>
  <br><br><br><br><br><br>
  <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
      1 of 3
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
    <div class="image-container">
  <img src="./66cf61ac0b566-1724866988.jpeg" alt="Placeholder" />
</div>
  </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
      3 of 3
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
