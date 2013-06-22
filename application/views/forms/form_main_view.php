<div class="row-fluid">
        <div class="span9">
          <div class="hero-unit">
            <?php if(isset($msg) && $msg == 1){?>
              <div class="alert alert-success"><strong>Success! </strong>Email Sent Successfuly..</div>
            <?php }elseif(isset($msg) && $msg == 2){?>
              <div class="alert alert-success"><strong>Warning! </strong>Email could not sent..</div>  
            <?php }?>
            <h2>Select Form</h2>
            <select name="forms" id="formsSelect">
              <option value="">Select Form</option>
              <option value="1">Final Assessment</option>
              <option value="2">Feedback</option>
              <option value="3">Post Nutrition</option>
              <option value="4">Welcome Assessment Email</option>
              <option value="5">Welcome Email</option>
            </select>
            <div class='forms' id='forms'>
              <div class='form1 form' id="form1">
                <div class="well">
                  <fieldset>
                    <legend>Final Assessment</legend>
                    <form method="post" name="form1" action="<?php echo $action;?>" class="form-horizontal">
                      <input type="hidden" name="template" value = "final">
                      <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                          <input type="text" name="name" id="name" placeholder="Enter Name" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                          <input type="text" name="email" id="email" placeholder="Enter Email" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="date">Date</label>
                        <div class="controls">
                          <input type="text" name="date" class="datepicker" id="date" placeholder="Select Date" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="time">Time</label>
                        <div class="controls">
                          <input type="text" name="time" id="time1" placeholder="Enter Time" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                  </fieldset>
                </div>
              </div>
              <div class='form2 form' id="form2">
                <div class="well">
                  <fieldset>
                    <legend>Feedback</legend>
                    <form method="post" name="form2" action="<?php echo $action;?>" class="form-horizontal">
                      <input type="hidden" name="template" value = "feedback">
                      <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                          <input type="text" name="name" id="name" placeholder="Enter Name" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                          <input type="text" name="email" id="email" placeholder="Enter Email" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                  </fieldset>
                </div>
              </div>
              <div class='form3 form' id="form3">
                <div class="well">
                  <fieldset>
                    <legend>Post Nutrition</legend>
                    <form method="post" name="form3" action="<?php echo $action;?>" class="form-horizontal">
                      <input type="hidden" name="template" value = "nutrition">
                      <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                          <input type="text" name="name" id="name" placeholder="Enter Name" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                          <input type="text" name="email" id="email" placeholder="Enter Email" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="Recency">Consult Recency Option</label>
                        <div class="controls">
                          <input type="text" name="Recency" id="Recency" placeholder="Consult Recency Option" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="protein">Protein Grams</label>
                        <div class="controls">
                          <input type="text" name="protein" id="protein" placeholder="Enter Number" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="supplements">Recommended Supplements</label>
                        <div class="controls">
                          <span class="form-checkbox-item"><input type="checkbox" value="EPA-DHA 720" name="q5_recommendedSupplements[]" id="input_5_0" class="form-checkbox">
                            <label for="input_5_0"> EPA-DHA 720 </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="EPA-DHA 2325" name="q5_recommendedSupplements[]" id="input_5_1" class="form-checkbox">
                            <label for="input_5_1"> EPA-DHA 2325 </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="EPA-DHA 250" name="q5_recommendedSupplements[]" id="input_5_2" class="form-checkbox">
                            <label for="input_5_2"> EPA-DHA 250 </label></span><span class="clearfix"></span><span style="clear:left;" class="form-checkbox-item"><input type="checkbox" value="UltraMeal Plus 360" name="q5_recommendedSupplements[]" id="input_5_3" class="form-checkbox">
                            <label for="input_5_3"> UltraMeal Plus 360 </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="UltraInflam Plus 360" name="q5_recommendedSupplements[]" id="input_5_4" class="form-checkbox">
                            <label for="input_5_4"> UltraInflam Plus 360 </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="PhytoMulti" name="q5_recommendedSupplements[]" id="input_5_5" class="form-checkbox">
                            <label for="input_5_5"> PhytoMulti </label></span><span class="clearfix"></span><span style="clear:left;" class="form-checkbox-item"><input type="checkbox" value="PhytoMulti with Iron" name="q5_recommendedSupplements[]" id="input_5_6" class="form-checkbox">
                            <label for="input_5_6"> PhytoMulti with Iron </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="Multigenics Chewable" name="q5_recommendedSupplements[]" id="input_5_7" class="form-checkbox">
                            <label for="input_5_7"> Multigenics Chewable </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="Wellness Essentials Men's Vitality" name="q5_recommendedSupplements[]" id="input_5_8" class="form-checkbox">
                            <label for="input_5_8"> Wellness Essentials Men's Vitality </label></span><span class="clearfix"></span><span style="clear:left;" class="form-checkbox-item"><input type="checkbox" value="Wellness Essentials Women" name="q5_recommendedSupplements[]" id="input_5_9" class="form-checkbox">
                            <label for="input_5_9"> Wellness Essentials Women </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="Wellness Essentials Women's Prime" name="q5_recommendedSupplements[]" id="input_5_10" class="form-checkbox">
                            <label for="input_5_10"> Wellness Essentials Women's Prime </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="Wellness Essentials Pregnancy" name="q5_recommendedSupplements[]" id="input_5_11" class="form-checkbox">
                            <label for="input_5_11"> Wellness Essentials Pregnancy </label></span><span class="clearfix"></span><span style="clear:left;" class="form-checkbox-item"><input type="checkbox" value="Wellness Essentials Active" name="q5_recommendedSupplements[]" id="input_5_12" class="form-checkbox">
                            <label for="input_5_12"> Wellness Essentials Active </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="Wellness Essentials Healthy Balance" name="q5_recommendedSupplements[]" id="input_5_13" class="form-checkbox">
                            <label for="input_5_13"> Wellness Essentials Healthy Balance </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="Estrovera" name="q5_recommendedSupplements[]" id="input_5_14" class="form-checkbox">
                            <label for="input_5_14"> Estrovera </label></span><span class="clearfix"></span><span style="clear:left;" class="form-checkbox-item"><input type="checkbox" value="Ostera" name="q5_recommendedSupplements[]" id="input_5_15" class="form-checkbox">
                            <label for="input_5_15"> Ostera </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="Vitamin D 5000" name="q5_recommendedSupplements[]" id="input_5_16" class="form-checkbox">
                            <label for="input_5_16"> Vitamin D 5000 </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="UltraFlora Spectrum" name="q5_recommendedSupplements[]" id="input_5_17" class="form-checkbox">
                            <label for="input_5_17"> UltraFlora Spectrum </label></span><span class="clearfix"></span><span style="clear:left;" class="form-checkbox-item"><input type="checkbox" value="UltraFlora Balance" name="q5_recommendedSupplements[]" id="input_5_18" class="form-checkbox">
                            <label for="input_5_18"> UltraFlora Balance </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="CalApatite with Magnesium" name="q5_recommendedSupplements[]" id="input_5_19" class="form-checkbox">
                            <label for="input_5_19"> CalApatite with Magnesium </label></span><span class="clearfix"></span><span class="form-checkbox-item"><input type="checkbox" value="Niatain" name="q5_recommendedSupplements[]" id="input_5_20" class="form-checkbox">
                            <label for="input_5_20"> Niatain </label></span><span class="clearfix">
                          </span>
                          
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="recommend">Also Recommend</label>
                        <div class="controls">
                          <input type="text" name="recommend" id="recommend" placeholder="Recommend" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                  </fieldset>
                </div>
              </div>
              <div class='form4 form' id="form4">
                <div class="well">
                  <fieldset>
                    <legend>Welcome Assessment Email</legend>
                    <form method="post" name="form4" action="<?php echo $action;?>" class="form-horizontal">
                      <input type="hidden" name="template" value = "assessment">
                      <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                          <input type="text" name="name" id="name" placeholder="Enter Name" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                          <input type="text" name="email" id="email" placeholder="Enter Email" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="date">Date</label>
                        <div class="controls">
                          <input type="text" name="date" class="datepicker" id="date" placeholder="Select Date" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="time">Time</label>
                        <div class="controls">
                          <input type="text" name="time" id="time2" placeholder="Enter Time" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                  </fieldset>
                </div>
              </div>
              <div class='form5 form' id="form5">
                <div class="well">
                  <fieldset>
                    <legend>Welcome Email</legend>
                    <form method="post" name="form5" action="<?php echo $action;?>" class="form-horizontal">
                      <input type="hidden" name="template" value = "welcome">
                      <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                          <input type="text" name="name" id="name" placeholder="Enter Name" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                          <input type="text" name="email" id="email" placeholder="Enter Email" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>   
        </div><!--/span-->
      </div><!--/row-->
<script type="text/javascript">
$('document').ready(function(){
  $('.datepicker').datepicker();
  $("#time1").mask("99:99");
  $("#time2").mask("99:99");
});
$('#formsSelect').change(function() {
  var form = $(this).val();
  if(form == 1){

    $('#form1').show();
    $('#form2').hide();
    $('#form3').hide();
    $('#form4').hide();
    $('#form5').hide();

  }else if(form == '2'){

    $('#form1').hide();
    $('#form2').show();
    $('#form3').hide();
    $('#form4').hide();
    $('#form5').hide();

  }else if(form == '3'){

    $('#form1').hide();
    $('#form2').hide();
    $('#form3').show();
    $('#form4').hide();
    $('#form5').hide();

  }else if(form == '4'){

    $('#form1').hide();
    $('#form2').hide();
    $('#form3').hide();
    $('#form4').show();
    $('#form5').hide();

  }else if(form == '5'){

    $('#form1').hide();
    $('#form2').hide();
    $('#form3').hide();
    $('#form4').hide();
    $('#form5').show();

  }else{

    $('#form1').hide();
    $('#form2').hide();
    $('#form3').hide();
    $('#form4').hide();
    $('#form5').hide();

  }
});
</script>