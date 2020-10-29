var a = ['','one ','two ','three ','four ', 'five ','six ','seven ','eight ','nine ','ten ','eleven ','twelve ','thirteen ','fourteen ','fifteen ','sixteen ','seventeen ','eighteen ','nineteen '];
var b = ['', '', 'twenty','thirty','forty','fifty', 'sixty','seventy','eighty','ninety'];

function inWords (num) {
    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
    return str;
}



// nav bottom link


/**** JQuery *******/
// $('body').on('click','.next-tab', function(){
//       var next = $('.nav-tabs > .active').next('li');
//       if(next.length){
//         next.find('a').trigger('click');
//       }else{
//         $('#myTabs a:first').tab('show');
//       }
// });

// $('body').on('click','.previous-tab', function(){
//       var prev = $('.nav-tabs > .active').prev('li')
//       alert(prev);
//       if(prev.length){
//         prev.find('a').trigger('click');
//       }else{
//         $('#myTabs a:last').tab('show');
//       }
// });

// $(document).ready(function() {
//     $('.foot-link a').on('click', function() {
//         $('html,body').animate({
//             scrollTop: $(this).offset().top
//         }, 800);
//     });

// 	$('.next-tab').click(function() {
// 	    $('.nav-justified li .active').closest('li').next('li').find('a').trigger('click');
// 	    // alert($(this).attr(id));
// 	// alert("hi");
// 	});


// 	$('.previous-tab').click(function() {
// 	    $('.nav-justified li .active').closest('li').prev('li').find('a').trigger('click');
// 	});

    

// });
$(document).ready(function() {
    $('#example').DataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
$('#amount_paid').on('keyup',function(){
  $('#words').html(inWords(document.getElementById('amount_paid').value));
})

$('.foot-link  .next-tab').on('click',function(){
  $(this).removeClass("active")
  var nextId = $(this).closest('.tab-pane').attr('id');
  var nextHeadHref =$('.card-header .nav-item .active').attr('href'); 
  nextHeadHref = nextHeadHref.substring(1, nextHeadHref.length);

  if (nextId == nextHeadHref) {
    $('.card-header .nav-item .active').removeClass('active');
    
    var getNextHref = $(this).attr('href');
    console.log(getNextHref);
    $('.card-header .nav-item [href=' + "'" +getNextHref + "'" + ']').addClass('active')
  };
})

$('.foot-link  .previous-tab').on('click',function(){
  $(this).removeClass("active")
  var prevId = $(this).closest('.tab-pane').attr('id');
  var prevHeadHref =$('.card-header .nav-item .active').attr('href'); 
  prevHeadHref = prevHeadHref.substring(1, prevHeadHref.length);
  if (prevId = prevHeadHref) {
    $('.card-header .nav-item .active').removeClass('active');
    
    var getPrevHref = $(this).attr('href');
    console.log(getPrevHref);
    $('.card-header .nav-item [href=' + "'" +getPrevHref + "'" + ']').addClass('active')
  };
})
$("#interest").on('focusout', function(){

  var vehicleCost = 30000;
  var inHand = parseFloat($("#advance_amount").val());
  var finacialCharge = parseFloat($("#financial_charge").val());
  var interest = parseFloat($("#interest").val());
  var contract = parseFloat($("#contract_period").val());
  var inHandwithFinaceCharge = parseFloat((inHand + finacialCharge));
  var totalInterest = parseFloat(inHandwithFinaceCharge * (interest / 100));

  var monthlyInterest = parseFloat(totalInterest / 12);

  monthlyInterest = Math.ceil(monthlyInterest);


  //Monthly Due

  var inHandDue = inHandwithFinaceCharge / contract;



  console.log(monthlyInterest);
  var overallDue = parseFloat(monthlyInterest + inHandDue);
  var duePerMonth = parseFloat(overallDue / contract);

  var totalDue = overallDue * contract;
  duePerMonth = duePerMonth.toFixed();
  $("#total_finance").val(parseFloat(totalDue));
  $('.permonthdue').html(overallDue);
  $('.noofMonths').html(contract);
})



43000 * (30/100)