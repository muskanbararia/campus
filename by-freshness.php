<div class="leftsmallheadline"><i class="fa fa-check-square-o"></i> By Freshness</div>
                <form  action="#" method="POST">
                <div class="maxheight" id="checkboxGroup">
                    <div class="div100">
                        <input type="checkbox" id="r1" name="one_d_old" value="1"  />
                        <label for="r1"><span></span> 1 Day Old</label>
                    </div>
                    <div class="div100">
                    	<input type="checkbox" id="r2" name="three_d_old" value="3"  />
                        <label for="r2"><span></span> < 3 Days Old</label>
                    </div>
                    <div class="div100">
                        <input type="checkbox" id="r3" name="seven_d_old" value="7"  />
                        <label for="r3"><span></span> < 7 Days Old</label>
                    </div>
                    <div class="div100">
                        <input type="checkbox" id="r4" name="fiftin_d_old" value="15"  />
                        <label for="r4"><span></span> < 15 Days Old</label>
                    </div>
                    <div class="div100">
                        <input type="checkbox" id="r5" name="thirty_d_old" value="30"  />
                        <label for="r5"><span></span> < 30 Days Old</label>
                    </div>   
                </div>
               
                
                <div class="div100">
                <script>
                $('#checkboxGroup input[type=checkbox]').change(function() {
                if (this.checked) {
                $('#checkboxGroup input[type=checkbox]').not(
                $(this)).prop('checked', false);
                }
                });   
               </script>
                <input type="submit" class="whitefullbtn" name="submit" value="Refine" style="width:100px;"/></div>
                <input type="hidden" name="frm_action_fressness" value="2">
                <input type="hidden" name="actid" value="026">
                <input type="hidden" name="execpath" value="" />
                <input type="hidden" name="keyword" value="" />
                <input type="hidden" name="location" value="" />
                <input type="hidden" name="fun_area" value="" />
                <input type="hidden" name="total_exp_from" value="" />
                <input type="hidden" name="annual_ctc_min" value="" />
                <input type="hidden" name="annual_ctc_max" value="" />
                <input type="hidden" name="location" value=""/> 
                </form>