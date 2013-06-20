<?php
include("login_qtiyapa.php");
?>

<div id="sticky-anchor"></div>
<div id="sticky" style="opacity:0.8">
<ul class="button-group radius even-7">
  <li><a href="<?php echo base_url(); ?>" class="button">Home</a></li>
  <li><a href="#" class="button">Tutorial</a></li>
  <li><a href="#" class="button">Projects</a></li>
  <li><a href="#" class="button">Achivements</a></li>
  <li><a href="#" class="button">Contact</a></li>
  <li><a href="http://localhost/ci/forum" class="button">Forum</a></li>
  <li><a href="#" class="button">Online<font style="visibility:hidden">_</font>Judge</a></li>
</ul>

</div>
<hr>


<?php foreach ($event as $news_item): ?>
<div class="row" style="margin:0px;opacity:0.8;">
  <div class="large-3 columns">
<ul class="pricing-table">
  <li class="title"><h3>Comming Event</h3></li>
  <li class="price"><b><?php echo $news_item['title'] ?></b></li>
  <li class="description">        <?php echo $news_item['description'] ?></li>
  <li class="bullet-item">Date</li>
  <li class="bullet-item">      <b>  <?php echo $news_item['venue'] ?></b></li>
  <li class="bullet-item">Have Fun</li>
<li class="cta-button"><a class="tiny button" href="#">Up comming events</a></li>
</ul>
<?php endforeach ?>
  </div>
  <div class="large-6 columns">
<div class="panel radius" style="opacity:1;">
<b>Programming Club often pronounced as pclub is one of the club of IIT Kanpur under SnT.
If you are interested in coding then this club is right place for you.
</b>

</div>
  </div>
  <div class="large-3 columns">
<span class="round  secondary label">
Online Judge Rank
</span><br><br>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Rank</th>
      <th>Points</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Toby</td>
      <td>1</td>
      <td>100</td>
    </tr>
    <tr>
      <td>Proneet Verma</td>
      <td>2</td>
      <td>90</td>
    </tr>
    <tr>
      <td>Tommy</td>
      <td>3</td>
      <td>90</td>
    </tr>
    <tr>
      <td>Ace</td>
      <td>4</td>
      <td>80</td>
    </tr>
    <tr>
      <tr>
      <td>Buddy</td>
      <td>5</td>
      <td>80</td>
    </tr>
    <tr>
  </tbody>
</table>

 </div>
</div>


   

 </body>
</html>



