<style>
    .red {
        background-color: red;
    }
    .yellow {
        background-color: yellow;
    }
</style> 
<div class="col-md-12 red">&nbsp;</div>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar" name="menuajax">            
              <li><a href="#create-form" onclick="loadCreate();" id="createbutton">Create Form</a></li>
            <li><a href="#" onclick="loadList();" id="ws">List Data</a></li>            
          </ul>       
        </div>        
          <div class="col-md-8" id="mainload">
              &nbsp;
          </div>               
      </div>
    </div>
 <?php  
    Twitterbootstrap::print_jsPer('daftar');
    ?>