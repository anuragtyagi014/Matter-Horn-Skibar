<!-- Main End -->
<section class="sub-footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2><?= the_field('heading_news', 'option'); ?></h2>
            </div>
            <div class="col-md-6">
                <div class="subscribe-foot">
                    <?php $shortcode = get_field('newsletter_shortcode', 'option'); ?>
                    <?= do_shortcode($shortcode); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <?php foreach (get_field('contact_information', 'option') as $contact_info) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="foot-cont">
                        <h3><?= $contact_info['heading_cont']; ?></h3>
                        <?= $contact_info['contact_info']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-12">
                <img src="<?= the_field('footer_logo', 'option'); ?>" class="img-fluid" alt="">
                <div class="social-foot">
                    <ul>
                        <?php foreach (get_field('social', 'option') as $social_links) : ?>
                            <li>
                                <a href="<?= $social_links['social_links']; ?>" target="_blank"><i class="<?= $social_links['icons']; ?>"></i></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <p><?= the_field('copyright_text', 'option'); ?></p>
            </div>
        </div>
    </div>
</footer>



<?php wp_footer(); ?>

<!-- jQuery -->
<script>
    let $ = jQuery;
    $(document).ready(function() {
        $("input[name='mugclub']").change(function() {
            let member_ans = $("input[name='mugclub']:checked").val();
            if (member_ans == 'Yes') {
                $('.mugnum').show();
            } else {
                $('.mugnum').hide();
            }
        })
        $("input[name='Addimugs']").change(function() {
            let member_ans = $("input[name='Addimugs']:checked").val();
            if (member_ans == 'Yes') {
                $('.mugnum2').show();
            } else {
                $('.mugnum2').hide();
            }
        })
    })
</script>
<script>
    $("#submit_button_img").click(function(evt) {
        var formElm = $("#paypal_form");

        var name = formElm.find("[name='fname']").val() + " " + formElm.find("[name='lname']").val();
        var is_mug_club_member = formElm.find("[name='mugclub']:checked").val();
        var mug_num = formElm.find("[name='mugnum']").val();
        var price = formElm.find("[name='price']").val();
        // ajax hit
        $.ajax({
            url: '<?= admin_url('admin-ajax.php'); ?>',
            type: 'post',
            data: {
                action: 'send_email',
                name: name,
                is_mug_club_member: is_mug_club_member,
                mug_num: mug_num,
                price: price
            },
            success: function(data) {
                if (data == "success") {
                    formElm.submit();
                } else {
                    alert("Something Went Wrong.");
                }
            }
        });
    });
</script>
<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'rect',
                color: 'gold',
                layout: 'vertical',
                label: 'paypal',

            },

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        "amount": {
                            "currency_code": "USD",
                            "value": 65.00
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {

                    // Full available details
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                    // Show a success message within this page, e.g.
                    const element = document.getElementById('paypal-button-container');
                    element.innerHTML = '';
                    element.innerHTML = '<h3>Thank you for your payment!</h3>';

                    // Or go to another URL:  actions.redirect('thank_you.html');

                });
            },

            onError: function(err) {
                console.log(err);
            }
        }).render('#paypal-button-container');
    }
    initPayPalButton();
</script>
<script>
    $.noConflict();
    // Code that uses other library's $ can follow here.
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js'></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<style>

	#billing_last_year_mug_no_field span.optional{
		display:none!important;
	}
</style>
<script>
	
mugNoShowHide();

$("input[name='billing_member']").change(function(){
	mugNoShowHide();
});

function mugNoShowHide(){
	var isBillingMember = $("input[name='billing_member']:checked").val();
	var mugNo = $("#billing_last_year_mug_no_field");

	if(isBillingMember == 'Yes'){
		mugNo.find("input").attr('required','');
		
		mugNo.show('fast');
	}else{
		mugNo.find("input").removeAttr('required');
		
		mugNo.hide('fast');
	}
}
    // $(document).ready(function() {
    //     $("mug_club_form").validate({
    //         rules: {
    //             fname: {
    //                 required: true,
    //             },
    //             lname: {
    //                 required: true,
    //             },
    //             mugnum: {
    //                 required: true,
    //                 // remote: {
    //                 //     url: <?php // $site_url() . "/wp-admin/admin-ajax.php"; 
                                    //                             
                                    ?>,
    //                 //     type: 'post',
    //                 //     data: {
    //                 //         mug_num: function() {
    //                 //             return $('#mugnum').val();
    //                 //         },
    //                 //         action: 'check_mug_number',
    //                 //     },
    //                 // }
    //             }
    //         },
    //         messages: {
    //             fname: {
    //                 required: "Please Enter First Name"
    //             },
    //             lname: {
    //                 required: "Please Enter Last Name"
    //             },
    //             mugnum: {
    //                 required: "Please Enter Mug Number"
    //             }
    //         }
    //     });
    // })
    // 
    // 
  
$(document).ready(function(){
    $('.club-member select').on('change', function() {
      if ( this.value == 'Yes')
      {
        $(".club-member-box").show();
		  $("input[name='os3']").attr('required','');
      }
      else
      {
        $(".club-member-box").hide();
		$(".club-member-box .cmb").removeAttr("required");
      }
    });
});
</script>
</body>

</html>