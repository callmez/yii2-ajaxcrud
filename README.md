yii2-ajaxcrud
=============
[![Latest Stable Version](https://poser.pugx.org/callmez/yii2-ajaxcrud/v/stable)](https://packagist.org/packages/callmez/yii2-ajaxcrud)
[![License](https://poser.pugx.org/callmez/yii2-ajaxcrud/license)](https://packagist.org/packages/callmez/yii2-ajaxcrud)
[![Total Downloads](https://poser.pugx.org/callmez/yii2-ajaxcrud/downloads)](https://packagist.org/packages/callmez/yii2-ajaxcrud)
[![Monthly Downloads](https://poser.pugx.org/callmez/yii2-ajaxcrud/d/monthly)](https://packagist.org/packages/callmez/yii2-ajaxcrud)
[![Daily Downloads](https://poser.pugx.org/callmez/yii2-ajaxcrud/d/daily)](https://packagist.org/packages/callmez/yii2-ajaxcrud)

Gii CRUD template for Single Page Ajax Administration for yii2

![yii2 ajaxcrud extension screenshot](https://c1.staticflickr.com/1/330/18659931433_6e3db2461d_o.png "yii2 ajaxcrud extension screenshot")


Features
------------
+ Create, read, update, delete in onpage with Ajax
+ Bulk delete suport
+ Pjax widget suport
+ Export function(pdf,html,text,csv,excel,json)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist callmez/yii2-ajaxcrud "*"
```

or add

```
"callmez/yii2-ajaxcrud": "*"
```

to the require section of your `composer.json` file.


Usage
-----
For first you must enable Gii module Read more about [Gii code generation tool](http://www.yiiframework.com/doc-2.0/guide-tool-gii.html)

Because this extension used [kartik-v/yii2-grid](https://github.com/kartik-v/yii2-grid) extensions so we must config gridview module before

Edit modules config in your main config file
````php
'modules' => [
    ...
    
    'gridview' =>  [
        'class' => 'kartik\grid\Module'
    ],
    'gii' => [
        ...
        
        'generators' =>  [
            ...
            'ajaxcrud' => 'callmez\ajaxcrud\generators\Generator'
        ]
    ]
]
````

You can then access Gii through the following URL:

http://localhost/path/to/index.php?r=gii

and you can see <b>Ajax CRUD Generator</b>


Contributing to this project
----------------------------

Anyone and everyone is welcome to contribute. 

License
----------------------------
yii2-ajaxcrud is released under the Apache-2.0.

Versions History
----------------------------
<b>Version 1.0.4</b>
+ Code format, The generate code looks good now.

The generate code looks good now.
<b>Version 1.0.3</b>
+ Separate assets to yii2-ajaxcrud-assets

<b>Version 1.0.2</b>
+ Clean template for better output

<b>Version 1.0.1</b>
+ Fix bug: Invalid icon for fullscreen button

<b>Version 1.0.0</b>
+ Initial version
