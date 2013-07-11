<!DOCTYPE html>
<!-- This Source Code Form is subject to the terms of the Mozilla Public
   - License, v. 2.0. If a copy of the MPL was not distributed with this file,
   - You can obtain one at http://mozilla.org/MPL/2.0/.  -->
<html>
  <head>
    <meta charset="utf-8">
    <title data-l10n-id="title">gitfab | itemlist</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/common.css" type="text/css">
    <link rel="stylesheet" href="/css/itemlist.css" type="text/css">
    <script type="text/javascript" src="/js/lib/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
    <script type="text/javascript" src="/js/itemlist.js"></script>
    <script>
<?php include('script-variables.php.inc'); ?>
    </script>
    <meta name="viewport" content="width=device-width, user-scalable=no">
  </head>
  <body>
    <?php include('header.php.inc'); ?>
    <div id="contents">
      <?php include('toolbar.php.inc'); ?>
      <div id="main" role="main">
        <ul id="item-list">
        </ul>
      </div>
      <div id="sub">
      </div>
    </div>
    <?php include('footer.php.inc'); ?>
    <?php include('logger.php.inc'); ?>
  </body>
</html>
