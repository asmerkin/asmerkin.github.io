---
title: How to create customizable pages in Shopify
date: 2021-02-20
section: content
category: Tutorials
excerpt: Sometimes we need to create Shopify pages with different content that can be customized using the Theme customizer. Let me explain how to do it.
---

> Be aware that tricks are not officially supported by Shopify, and they might break in any moment. Please use them at your own risk.

In Shopify, you can create themes that have customizable sections. Developers can modify these sections adding "placeholders" that can be customized via the Theme Customizer. The problem with this approach, is that once you create a section, you can't reuse it, because the whole customization is reused.

There are other situations in which you want to create a fully customizable page, that you can replicate and create a different number of landing pages with different content, but following a similar design, or have different tools to create different designs within the Shopify Customizer.

## Hands On

In this example, we will create a customizable page that you can replicate N times to create different pages.

### 1. Create a default customizable page

Create a new page within the templates directory, and name it `page.customizable.default.liquid`. The idea behind this is that you can replicate this page to create new pages like `page.customizable.aboutus.liquid` or `page.customizable.ourteam.liquid`. In our example, the content should be pretty straightforward.

```liquid
<!-- templates/page.customizable.default.liquid -->

{% comment %}
This section name will change according to the page we are creating.
{% endcomment %}
{% section 'page-customizable-default.liquid' %}
```

### 2. Create a customizable section

Once we have our customizable page, we can create the customizable section that we just attached in our example, so for this example just create your `sections/page-customizable-default.liquid`. For now we will add very basic content.


```liquid
<!-- sections/page-customizable-default.liquid -->

// We will add some more content here, but for now let's create the template.

{% schema %}
{
    "name": "Customizable Page",
    "settings": [
        ... // Global settings go here.
    ],
    "blocks": [
        ... // here is where the magic happens.
    ]
}
{% endschema %}
```

### 3. Let's add some customizable blocks

For this third step, we will create the building blocks for our customiable page. We will do this using template snippets, but keep in mind that all settings must be kept in the main section block.

For our example, let's think about creating some sort of text + image block. So the first step is to adjust our section to have a block that can display an image plus some text. For the sake of the example, we will keep it very basic.

```liquid
<!-- sections/page-customizable-default.liquid -->

{% for block in section.blocks %}
    {% assign block_template = 'page-customizable-' | append: block.type %}
    {% include block_template with settings: block.settings %}
{% endfor %}

{% schema %}
{
    "name": "Customizable Page",
    "settings": [
        ... // Global settings go here.
    ],
    "blocks": [
        {
            "type": "text_image",
            "name": "Text with Image,
            "settings": [
                ... // Here we add customization fields for text and images.
            ]
        },
        ... // Other blocks go here.
    ]
}
{% endschema %}
```

And finally we have our block in a new snippet. For this example, the snippet is named `snippets/page-customizable-text_image.liquid`.

```liquid
<!-- sections/page-customizable-text_image.liquid -->

{% comment %}
For the sake of this example, we are keeping the design super simple, but this
can be as complex as you want.
{% endcomment %}

<div>
    <img src="{{ settings.image | img_url: '600x'}}" alt="{{ settings.image.alt }}">
    <div>{{ settings.content }}</div>
</div>
```

## How this all works together

So, let's say you create an X number of different snippets, with the customizatiosn in the default section, and the different snippets for each block. These blocks can be added and dragged within the page, and the content can change accordingly.

Now, once you have that, you want to create a new page. So you have to clone both the main customizable page, and the main customizable section.

1. Clone `templates/page.customizable.default.liquid` -> `templates/page.customizable.yourpage.liquid`
2. Clone `sections/page-customizable-default.liquid` -> `sections/page-customizable-yourpage.liquid`
3. Modify the cloned page template to adjust the section block to point to our cloned section. (This is the step that does the whole magic).
