<?php
require_once 'BaseTemplate.php';

class IndexTemplate extends BaseTemplate
{
  public function renderBlock($blockName)
  {
    if ($blockName === 'body') {
      return '<div class="bg-light p-5 rounded mt-5">
      <h1> Youtube Video Ideas  </h1>
      <p class="lead">
      Want to get started on YouTube but need some Video Ideas to start working on? Start generating some YouTube Video Ideas right away with AI.
      </p>
  
      <h2>Enter the topic you would like to discuss.</h2>
  
      <form class="video-idea" action="" method="post">
  
        <div class="mb-3">
          <label class="form-label">Topic or Subject</label>
          <input type="text" class="form-control" name="videoIdeas" placeholder="eg. Accounting Software">
          <div class="form-text">Enter topic or subject to generate video ideas.</div>
        </div>
  
        <button type="submit" class="btn btn-primary btn-lg">GET RECOMMENDATIONS <img class="loader" src="./res/images/Rolling-white.svg" alt="loader"></button>
  
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
