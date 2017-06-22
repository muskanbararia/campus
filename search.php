<div class="fulldiv">
                <form  action="job.php" method="post">
                
                <div class="div300">Location <br> 
                <select name="job_loc" id="jloc" data-placeholder="Select City"  class="chzn-select"  tabindex="18" id="multiple-label-example"  >
                     <option value="">---Select Job Type---</option>
                     <option value="47" >Diploma</option>
                     <option value="48" >ITI</option>
                                                        
                </select> 
                </div>
              <input type="hidden" name="jobLoc" id="loc" value="xx"> 
                     <script type="text/javascript">
                          $('input.pgDetails').val($("#pG option:selected").text());
                          $("#jloc").change(function() {
                             var tex = $(this).find("option:selected").text();
                             alert(tex+' clicked!');
                             $('#loc').val(tex);
                         });
                     </script>
                <div class="div200" style="float: left;">&nbsp;<br>
                <input type="submit" class="lightbluebtn" value="Search" name="search"/></div>
                </form>
            </div>