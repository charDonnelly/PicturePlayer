<link rel="stylesheet" href="css/looma-contentNav-newDesign.css">
<div class="thumbnail-div-first-col">
  <div class="row navbar">
    <!-- Search and Nav-->
    <div class="row search">
      <div class="centerVert">
        <form role="form">
          <div class="form-group col-md-10">
            <input type="text" id="searchBar" class="form-control" placeholder="Search Activities" size="30" onkeyup="search(this.value, false, 0)">
          </div>
        </form>
        <div class="col-md-1 contentFilters">
          <input id ="videosChecked" type="checkbox" name="fileType" value="videos" > Videos<br>
        </div>
        <div class="col-md-1 contentFilters">
          <input id = "webpagesChecked" type="checkbox" name="fileType" value="webpages" > Webpages<br>
        </div>
        <div class="col-md-1 contentFilters">
          <input id = "audioChecked" type="checkbox" name="fileType" value="audio" > Audio<br>
        </div>
        <div class="col-md-1 contentFilters">
          <input id = "imagesChecked" type="checkbox" name="fileType" value="images" checked > Images<br>
        </div>
        <div class="col-md-1 contentFilters">
          <input id = "pdfsChecked" type="checkbox" name="fileType" value="pdfs" > Pdfs<br>
        </div>
      </div>
    </div>
  </div>
  <!-- results -->
  <div class="row">
    <div class="results" id="resultsArea"></div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="js/looma-contentNav.js"></script>
