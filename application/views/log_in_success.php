<style>
#main-part{
     margin-top: 10px;
    
  }


  h1 {
    text-align: center;
  }

  #back{
    height: 35px;
    width: 80%;
    margin: 5px auto;
    color: white;
    background: blue;
    text-align: center;
  }
  #msg {
    width: 40%;
    margin: 100px auto;
    padding-bottom: 30px;
    border: 1px solid #918274;
    border-radius: 5px;
    background: white;
  }
</style>

<div id="msg">
<h1>You are now logged in, <?php echo $username; ?>! </h1>
    <a href="<?php echo site_url('welcome') ?>" id="back">Start your experience!</a>
</div>