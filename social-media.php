<?php
require_once 'BaseTemplate.php';

class IndexTemplate extends BaseTemplate
{
  public function renderBlock($blockName)
  {
    if ($blockName === 'body') {
      return '<div class="bg-light p-5 rounded mt-5">
      <h1> Social Media Adverts  </h1>
      <p class="lead">
      Looking for some creative social media advert ideas for your online campaigns on Facebook, Twitter or Instagram? We got you.
      </p>
  
      <h2>What is your ad campaign about?</h2>
  
      <form class="social-media-ad" action="" method="post">
  
        <div class="mb-3">
          <label class="form-label">Subject or Title</label>
          <input type="text" class="form-control" name="socialMedia" placeholder="eg. Samsung S12 Mobile Phone">
          <div class="form-text">Describe the subject or title for the ad campaign.</div>
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
