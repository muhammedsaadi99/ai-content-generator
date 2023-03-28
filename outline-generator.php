<?php
require_once 'BaseTemplate.php';

class IndexTemplate extends BaseTemplate
{
  public function renderBlock($blockName)
  {
    if ($blockName === 'body') {
      return '<div class="bg-light p-5 rounded mt-5">
            <h1>Outline Generator</h1>
            <p class="lead">
              Are you trying to come up with professional outlines or keypoints for your Course or Blog Post, but it is difficult ☹, Let AI help you along.
            </p>
        
            <h2>Enter the details of your Course or Blog Post</h2>
        
            <form class="outline-gen" action="" method="post">
        
              <div class="mb-3">
                <label class="form-label">Outline for?</label>
                <input type="text" class="form-control" name="outlineGenerate" placeholder="eg. how to learn fase">
                <div class="form-text">Enter the topic or keywords of the Course or Blog Post you would like to receive outlines for.</div>
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
