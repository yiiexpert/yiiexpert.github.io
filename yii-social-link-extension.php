<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="yii experts, social link yii extension, social share button yii extension, yii experts india" />
<meta name="description" content="All Yii Experts here at one place.." />
<link rel="shortcut icon" type="image/x-icon" href="http://static.yiiframework.com/favicon.ico" />
<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen" />
<link rel="stylesheet" type="text/css" href="stylesheets/pygment_trac.css" media="screen" />
<link rel="stylesheet" type="text/css" href="stylesheets/print.css" media="print" />

<!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<title>Yii Expert</title>
</head>

<body>
<header>
  <div class="inner">
    <h1>Yii Expert</h1>
    <h2>Yii Framework Community</h2>
  </div>
</header>
<div id="content-wrapper">
  <div class="inner clearfix">
    <section id="main-content">
      <h3> <a name="yii-social-links-extension" class="anchor" href="#yii-social-links-extension"><span class="octicon octicon-link"></span></a>Yii Social Links [Extension]</h3>
      <p>All top social media links like - facebook, twitter, linkedin etc. with left & right alignment.</p>
      <h4>Requirements</h4>
      <p>Tested with Yii 1.1.14</p>
      <h4>Install</h4>
      <p>- Download the latest release package<br/>
        - Unpack it in /protected/extensions/ folder</p>
      <h4>Usage</h4>
      <p>Paste the code into your main.php page or also you can use this code as per your requirement.</p>
      <br />
      <pre><code>
      $this->widget('application.extensions.socialLink.socialLink', array(
        'style'=>'left', //alignment - left, right
        'top'=>'30',  //in percentage
            'media' => array(
            'facebook'=>array(
                'url'=>'http://facebook.com/',
                'target'=>'_blank',
            ),
            'twitter'=>array(
                'url'=>'http://twitter.com/',
                'target'=>'_blank',
            ),
            'google-plus'=>array(
                'url'=>'https://plus.google.com/',
                'target'=>'_blank',
            ),
            'linkedin'=>array(
                'url'=>'http://linkedin.com/',
                'target'=>'_blank',
            ),
            'rss'=>array(
                'url'=>'http://rss.com/',
                'target'=>'_blank',
            ), 
          )
      ));
     </code></pre>
      <h4>Download</h4>
      <p><a href="http://www.yiiframework.com/extension/social-links/" alt="yii social links extension" title="yii social links extension">Download Extension</a></p>
      <h4>Download</h4>
      <ul>
        <li>style: social link sidebar alignment (string: left or right).</li>
        <li>top: the sidebar margin from top (in percentage: 30)
          social media: social network which you must have (facebook, twitter, googleplus, linkedin, rss)</li>
        <li>url: Your social media profile page link (url: http://www.facebook.com/fb_page)</li>
        <li>target: click behaviour (target: _blank, _self, _parent)</li>
      </ul>
    </section>
    <aside id="sidebar">
      <p>Like us on <a href="https://facebook.com/yiiexperts">Facebook</a><br />
        Follow us on <a href="https://twitter.com/yiiexperts">Twitter</a><br />
        Follow us on <a href="https://plus.google.com/114389194992381809226" rel="publisher">Google+</a> </p>
    </aside>
  </div>
</div>
</body>
</html>
