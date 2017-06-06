<div class="leftsmallheadline"><i class="fa fa-check-square-o"></i> By Salary</div>
                <form  action="#" method="POST">
                <div class="maxheight" id="checkboxGroup1">
                    <div class="div100">
                        <input type="checkbox" id="c1" name="zero_three" value="300000"  />
                        <label for="c1"><span></span> 0 - 3 Lakhs</label>
                    </div>
                    <div class="div100">
                        <input type="checkbox" id="c22" name="three_six" value="600000"  />
                        <label for="c22"><span></span>  3 - 6 Lakhs</label>
                    </div>
                    <div class="div100">
                        <input type="checkbox" id="c3" name="six_ten" value="1000000"  />
                        <label for="c3"><span></span> 6 - 10 Lakhs</label>
                    </div>
                    <div class="div100">
                    	<input type="checkbox" id="c4" name="ten_fiftin" value="1500000"  />
                        <label for="c4"><span></span> 10 - 15 Lakhs</label>
                    </div>
                        <div class="div100">
                    	<input type="checkbox" id="c5" name="fiftin_tntfive" value="2500000"  />
                        <label for="c5"><span></span> 15 - 25 Lakhs</label>
                    </div>
     
                </div>
				<script>
                $('#checkboxGroup1 input[type=checkbox]').change(function() {
                if (this.checked) {
                $('#checkboxGroup1 input[type=checkbox]').not(
                $(this)).prop('checked', false);
                }
                });   
                </script> 
                <div class="div100">
                <input type="submit" class="whitefullbtn" name="submit" value="Refine" style="width:100px;"/></div>
                <input type="hidden" name="frm_action_salary" value="3">
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