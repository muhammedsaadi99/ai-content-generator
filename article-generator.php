<?php
require_once 'BaseTemplate.php';

class IndexTemplate extends BaseTemplate
{
  public function renderBlock($blockName)
  {
    if ($blockName === 'body') {
      return '<div class="bg-light p-5 rounded mt-5">
            <h1>Article Generator</h1>
            <p class="lead">
              Are you trying to come up with Article or Blog Post or an Essay, but can not find success, Let AI help you along.
            </p>
        
            <h2>Enter the details of Article</h2>
        
            <form class="article-gen" action="" method="post">
        
              <div class="mb-3">
                <label class="form-label">Article for?</label>
                <input type="text" class="form-control" name="articleGenerator" placeholder="eg. How to learn fast">
                <div class="form-text">Enter the keywords or topic for your article.</div>
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
