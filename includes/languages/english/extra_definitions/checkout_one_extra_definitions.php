<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9
// Copyright (C) 2013-2019, Vinos de Frutas Tropicales.  All rights reserved.
//
// when free shipping for orders over $XX.00 is active
define('FREE_SHIPPING_TITLE', 'Free Shipping');
define('FREE_SHIPPING_DESCRIPTION', 'Free shipping for orders over %s');

define('ERROR_GUEST_CHECKOUT_PAGE_DISALLOWED', 'Access to that page requires a registered account.  You can create an account using our <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">login</a> page.');
define('WARNING_GUEST_CHECKOUT_NOT_AVAILABLE', 'Sorry, our guest-checkout is temporarily unavailable.  You can continue your checkout by either logging in or creating an account.');

define('WARNING_GUEST_NO_GCS', '<b>Note</b>: You must have (or create) an account with our store to purchase Gift Certificates.');
define('WARNING_GUEST_GCS_RESET', 'If you continue to <em>Checkout</em>, any information that you have entered during &quot;Guest Checkout&quot; will be lost.');
define('WARNING_GUEST_REMOVE_GC', 'To continue with &quot;Guest Checkout&quot;, remove the Gift Certificate(s) from your shopping-cart <em>before</em> clicking a &quot;Checkout&quot; button or link.');