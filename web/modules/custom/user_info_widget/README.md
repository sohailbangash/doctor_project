#### Introduction
____
This module provides a simple user information widget as a block with an option to specify menu as a dropdown. 

#### Installation
____
Module can be installed as any other Drupal module. Read more on how to install a drupal module on [drupal.org](https://www.drupal.org/docs/extending-drupal/installing-modules)

#### Configuration
____
Configuring module settings.
- Goto _admin/config/content/user_info_widget_settings_.
- Specify user profile picture field machine name.
- Upload default image to the user field.
- Select the menu to attach as a dropdown
- Specify whether to show username in the dropdown menu or not.
- Save the configurations.
  
Adding block to the region.
- Goto _admin/structure/block_.
- Place the block called **User Info Widget** in your desired region.
- You can specify block restrictions and hide/show block labels as you would do on any block settings.
- Save blocks.
- Go to front page and clear the cache.


#### Dependencies
____
This module is dependent on a contrib module [Simplify Menu](https://www.drupal.org/project/simplify_menu).

#### Read More
Visit [docs.netchainmedia.com](https://docs.netchainmedia.com/page/drupal/user-info-widget) to read more on this.