Barcodes Generator Using PHP, MySQL and JsBarcode library.




A bar code (often seen as a single word, barcode) is the small image of lines (bars) and spaces that is affixed to retail store items, identification cards, and postal mail to identify a particular product number, person, or location. ... A barcode reader is used to read the code.

This application shows up how easy it is to generate barcodes using php and JsBarcode library, here you can generate barcodes by just providing a product name. The barcodes are generated using the combination of product name and the time (minutes and seconds) in which the product name is stored on the database in order to avoid barcodes duplication.

Once the generate barcode button is pressed the product name is stored on a MySQL database named egm_barcodes altogether with an id, code (generated from id and the milisecond from the time created) and datetime.
The barcodes table reloads automatically displaying all the barcodes generated so far. You can generate as much barcodes as you want.

Demo
Download the code

You can reuse the codes on yours projects or just find out how the barcodes can be generated using JsBarcode library.

JsBarcode is a JavaScript written library that works in both the browser and on Nodes.js, for more information please visit http://lindell.me/JsBarcode.

For you to be able to generate barcode the only thing that have to do is to copy and paste JsBarcode.all.min.js library on your project folder and reference it or use   the  CDN bellow:

<script src="JsBarcode.all.min.js"></script>

I hope this very simple application might be useful for you

Technologies use on this project.
- Bootstrap
- PHP
- MySQL
- and a very useful barcode generator JsBardode library.

Folder structure
egm_bardoces.sql
insert.php
index.php

IMPORTANT!!!
A very important next thing to do is  to integrate the tableBardode.php on index.php.

It is very important to comment the code.
