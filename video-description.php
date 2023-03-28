<?php
require_once 'BaseTemplate.php';

class IndexTemplate extends BaseTemplate
{
  public function renderBlock($blockName)
  {
    if ($blockName === 'body') {
      return '<div class="bg-light p-5 rounded mt-5">
      <h1> Youtube Video Description  </h1>
      <p class="lead">
      This AI tool will help you draft some cool video descriptions based on a topic or video idea. Just enter your video topic.
      </p>
  
      <h2>Enter the title of your video.</h2>
  
      <form class="video-desc" action="" method="post">
  
        <div class="mb-3">
          <label class="form-label">Video Title</label>
          <input type="text" class="form-control" name="videoDescription" placeholder="eg. Top 10 CRM Software">
          <div class="form-text">Enter the video title, for the AI to generate a description.</div>
        </div>
  
        <button type="submit" class="btn btn-primary btn-lg"> 💃 GET RECOMMENDATIONS <img class="loader" src="./res/images/Rolling-white.svg" alt="loader"></button>
  
      </form>
    </div>
  
  
    <div class="p-3 rounded">
      <div class="row">
        <div class="col-lg-12">
        <h3 id="prompt" class="text-primary"></h3>
        <div id="result" class="lead"></div>
  
        </div>
      </div>
    </div>';
    }
    return '';
  }
}

$index = new IndexTemplate();
$index->extend('base.php');
