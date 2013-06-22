<?php
include('login_qtiyapa.php');

?>
<script>
  var x=document.getElementById('subheader');
  x.innerHTML="P-Club IITK Forum";
</script>

<hr>
Search &nbsp&nbsp | 
<hr>

<div class="row" style="margin:0px;opacity:0.8;">
  <div class="large-3 columns">
    <?php
      if($status==$log1) echo "<a data-reveal-id='askquestion'>Ask Question</a>";
      else echo "<a data-reveal-id='myModal'>Login to Ask Question</a>";
    ?>
    <ul>
      <li><a href="<?php echo base_url() ;?>forum/categories/cprogramming">C Programming</a></li>
      <li><a href="<?php echo base_url() ;?>forum/categories/webd">Web D</a></li>
      <li><a href="<?php echo base_url() ;?>forum/categories/algorithm">Algorithms</a></li>
      <li><a href="<?php echo base_url() ;?>forum/categories/networking">Networking</a></li>
      <li><a href="<?php echo base_url() ;?>forum/categories/appdev">App Dev</a></li>
      <li><a href="<?php echo base_url() ;?>forum/categories/linux">Linux</a></li>
      <li><a href="<?php echo base_url() ;?>forum/categories/others">Others</a></li>
    </ul>
  </div>

  <div class="large-9 columns">
    <?php foreach ($forum as $news_item): ?>
      <div class="panel radius" style="opacity:0.9;">
        <h6><u><?php echo $news_item['added_by'] ?></u></h6>
        <?php echo $news_item['id'] ?>
        <h4><?php echo $news_item['category'] ?></h4>
        <?php echo $news_item['content'] ?><br>
        Visits :<?php echo $news_item['visits'] ?> &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp 
        Comments : <?php echo $news_item['comments'] ?>
        <hr style="margin:0px">
      </div>
    <?php endforeach ?>
  </div>
</div>

<?php if($status==$log1) 
  echo ' <div id="askquestion" class="reveal-modal">
        <form name="Ask_Question" action="'.base_url().'forum/askquestion" method="POST">
          <fieldset>
            <legend>Ask Question</legend>

                <div class="row">
                  <div class="large-6 columns">
                      <label><u>Ask As</u></label>
                      <input type="radio" name="askas" value="<?php echo $username ; ?>" checked="checked">Me
                      <input type="radio" name="askas" value="Anonymous">Anonymous
                  </div>
                </div>

                <div class="row">
                  <div class="large-6 columns">
                      <label>Category</label>
                      <select name="category">
                        <option value="cprogramming">C Programming</option>
                        <option value="webd">Web D</option>
                        <option value="algorithm">Algorithm</option>
                        <option value="networking">Networking</option>
                        <option value="appdev">App Dev</option>
                        <option value="linux">Linux</option>
                        <option value="others">Others</option>
                      </select>
                  </div>
                </div>

                <div class="row">
                  <div class="large-6 columns">
                      <label>Question</label>
                      <textarea id="question" placeholder="Enter your question here" name="question"></textarea>
                  </div>
                </div>

                <input id= "url2" value="url" name="url" style="display:none;">

            <button id="ask_button">Ask</button>
            
          </fieldset>
        </form>
        <a class="close-reveal-modal">&#215;</a>
      </div>';
    ?>

  <script>
     $(document).ready(function(){
        var x=document.getElementById('url2');
        x.value=location;
      });
  </script>
 
</body>
</html>