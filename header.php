<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title><?php bloginfo('title')?></title>
    <link rel="stylesheet" type="text/css" media="all"
          href="<?php bloginfo('stylesheet_url'); ?>" />
  </head>
  <body>
    <div id="header" class="portalWidth">
      <h1 class="logo">
        <a href="<?php bloginfo('url')?>"><?php bloginfo('title')?></a>
      </h1>

      <ul id="topMenu">
        <li><a href="#">Apresentação</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3 dolor sit amet</a></li>
        <li><a href="#">Link 4 lorem ipsum</a></li>
        <li><a href="#">Calendário formação</a></li>
      </ul>

      <form id="searchForm" action="#" method="post">
        <input type="text" name="q" />
        <input type="button" value="buscar" />
      </form>
    </div>
