<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body>
    <?php if ( is_user_logged_in() ) : ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark mt-4">
    <?php else : ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <?php endif ?>
      <div class="container">
        <a class="navbar-brand" href="{{ httpd_assets_url }}/"><img src="{{ httpd_assets_url }}/assets/img/logo.png" height="32" alt="The CentOS Project"> <span class="manifestation"></span></a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="nav navbar-nav ml-auto">
            {% for item in httpd_navbar %}
            {% if item.menu | length > 0 %}
            <li class="nav-item dropdown" role="presentation">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="{{ item.link }}">{% if item.icon %}<i class="{{ item.icon }}"></i> {% endif %}{{ item.name }}</a>
            <div class="dropdown-menu" role="menu">
            {% for menu in item.menu %}
              <a class="dropdown-item" role="presentation" href="{{ menu.link }}">{{ menu.name }}</a>
            {% endfor %}
            </div>
            {% else %}
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ item.link }}">{% if item.icon %}<i class="{{ item.icon }}"></i> {% endif %}{{ item.name }}</a></li>
            {% endif %}
            {% endfor %}
          </ul>
        </div>
      </div>
    </nav>
    <?php wp_admin_bar_render(); ?>
