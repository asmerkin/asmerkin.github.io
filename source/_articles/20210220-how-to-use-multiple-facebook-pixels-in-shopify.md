---
title: How to Use Multiple Facebook Pixels in Shopify
date: 2021-02-20
section: content
excerpt: In this article, let me explain to you how to use multiple Facebook pixels natively, without using apps or external services.
---

> Be aware that tricks are not officially supported by Shopify, and they might break in any moment. Please use them at your own risk.

Sometimes you will find the need to add more than one Facebook Pixel to your store. This is something that can be accomplished in many ways, like using an app or pasting the Facebook code straight into the theme files, but here's an approach that works very well in Stores, and if you have a **Plus** store, it also works very well in checkouts.

Let's say that your Facebook pixel ID is `1234567890`, and you also want to track to `1111111111`, so you can do this slight modification. The first step is to add your first Facebook pixel via the Shopify regular Process, going to **Online Store > Preferences > Facebook Pixel**.

Then, you need to replace your `{{ content_for_header }}` tag by the following code:

@verbatim
```liquid
{% capture modified_header %}{{ content_for_header }}{% endcapture %}
{% modified_header | replace: '["1234567890"]', '["1234567890", "1111111111"]'%}
```
@endverbatim
### Long explanation
It seems that the Shopify Pixel integration is capable of tracking multiple Facebook Pixels, but by default, the interface allows you to add a single Pixel. We will modify the underlying javascript injection to add a second pixel.

What this does is replace the current pixel with the two pixels you need to add. One of those pixels being the default one, plus the extra pixel we add. Note that you can do this and add more than two pixels.

> Be aware that this will only place two pixels to the store, but not to the checkout. If you want to apply this behavior to checkout, you must be a Plus Merchant with access to edit the checkout template.
