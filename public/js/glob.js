//parsley script
$(function () {
  $('#demo-form').parsley().on('field:validated', function() {
   // var ok = $('.parsley-error').length === 0;
    //$('.bs-callout-info').toggleClass('hidden', !ok);
    //$('.bs-callout-warning').toggleClass('hidden', ok);
  
  })
  .on('form:submit', function() {

  	var currency=document.getElementById('calc_currency_type').value;
  	var capital=Number(document.getElementById('calc_capital').value);

  	var roi_percent_value=Number(document.getElementById('roi_value').textContent);

  	var roi_period=Number(document.getElementById('roi_period').textContent);

  	var daily_roi=((roi_percent_value/100)*capital*1);

  	var total_roi=(daily_roi*roi_period);

  	var income=total_roi; 

  	//var inBTC=Number(document.getElementById('inBTC').textCoontent);
  	//var inETH=Number(document.getElementById('inETH').textCoontent);
  //	var inLTC=Number(document.getElementById('inLTC').textCoontent);

  	//if()

  	document.getElementById('calc_income').innerHTML= "$"+income.toFixed(2)+" at $"+daily_roi.toFixed(2)+" daily ROI";

    return false; // Don't submit form for this demo
  });
});

//parsley script