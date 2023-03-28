<?php
require_once 'BaseTemplate.php';

class IndexTemplate extends BaseTemplate
{
  public function renderBlock($blockName)
  {
    if ($blockName === 'body') {
      return '<div class="bg-light p-5 rounded mt-5">
      <h1>  Generate Tweets  ️</h1>
      <p class="lead">
      Start generating tweet ideas with hashtags for your online social media campaigns on twitter. Create endless unique tweet ideas, no more writers block.
      </p>
  
      <h2>What is your tweet about?</h2>
  
      <form class="tweet-content" action="" method="post">
  
        <div class="mb-3">
          <label class="form-label">Tweet Prompt</label>
          <input type="text" class="form-control" name="tweetIdeas" placeholder="eg. CRM Software">
          <div class="form-text">Enter topic or subject you would like to generate tweets for.</div>
        </div>
  
        <button type="submit" class="btn btn-primary btn-lg">GET RECOMMENDATIONS  <img class="loader" src="./res/images/Rolling-white.svg" alt="loader"></button>
  
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
