<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prueba de Slider</title>
<!-- CSS -->
<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="/lib/jquery.bxslider.css" rel="stylesheet" />
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>
</head>

<body>

<ul class="bxslider">
  <li>{{ HTML::image('img/dummies/slides/01.jpg') }}</li>
  <li>{{ HTML::image('img/dummies/slides/02.jpg') }}</li>
  <li>{{ HTML::image('img/dummies/slides/03.jpg') }}</li>


</body>
</html>
