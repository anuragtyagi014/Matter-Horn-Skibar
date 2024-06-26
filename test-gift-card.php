<?php
/* Template Name: Test Gift Card Template */
?>
<div id="smart-button-container">
    <div style="text-align: center;">
        <div style="margin-bottom: 1.25rem;">
            <p>Matterhorn Gift Certificate</p>
            <select id="item-options">
                <option value="" price="25"> - 25 USD</option>
                <option value="" price="25"> - 50 USD</option>
                <option value="" price="25"> - 75 USD</option>
                <option value="" price="25"> - 100 USD</option>
            </select>

            <select style="visibility: hidden" id="quantitySelect">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
            </select>
        </div>
        <div id="paypal-button-container"></div>
    </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
    function initPayPalButton() {
        var shipping = 0;
        var itemOptions = document.querySelector("#smart-button-container #item-options");
        var quantity = parseInt(50);
        var quantitySelect = document.querySelector("#smart-button-container #quantitySelect");
        if (!isNaN(quantity)) {
            quantitySelect.style.visibility = "visible";
        }
        var orderDescription = 'Matterhorn Gift Certificate';
        if (orderDescription === '') {
            orderDescription = 'Item';
        }
        paypal.Buttons({
            style: {
                shape: 'rect',
                color: 'gold',
                layout: 'vertical',
                label: 'buynow',
            },
            createOrder: function(data, actions) {
                var selectedItemDescription = itemOptions.options[itemOptions.selectedIndex].value;
                var selectedItemPrice = parseFloat(itemOptions.options[itemOptions.selectedIndex].getAttribute("price"));
                var tax = (0 === 0 || false) ? 0 : (selectedItemPrice * (parseFloat(0) / 100));
                if (quantitySelect.options.length > 0) {
                    quantity = parseInt(quantitySelect.options[quantitySelect.selectedIndex].value);
                } else {
                    quantity = 1;
                }

                tax *= quantity;
                tax = Math.round(tax * 100) / 100;
                var priceTotal = quantity * selectedItemPrice + parseFloat(shipping) + tax;
                priceTotal = Math.round(priceTotal * 100) / 100;
                var itemTotalValue = Math.round((selectedItemPrice * quantity) * 100) / 100;

                return actions.order.create({
                    purchase_units: [{
                        description: orderDescription,
                        amount: {
                            currency_code: 'USD',
                            value: priceTotal,
                            breakdown: {
                                item_total: {
                                    currency_code: 'USD',
                                    value: itemTotalValue,
                                },
                                shipping: {
                                    currency_code: 'USD',
                                    value: shipping,
                                },
                                tax_total: {
                                    currency_code: 'USD',
                                    value: tax,
                                }
                            }
                        },
                        items: [{
                            name: selectedItemDescription,
                            unit_amount: {
                                currency_code: 'USD',
                                value: selectedItemPrice,
                            },
                            quantity: quantity
                        }]
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
                    element.innerHTML = '<h3> Thank you for your payment! </h3>';

                    // Or go to another URL:  actions.redirect('thank_you.html');

                });
            },
            onError: function(err) {
                console.log(err);
            },
        }).render("#paypal-button-container");
    }
    initPayPalButton();
</script>