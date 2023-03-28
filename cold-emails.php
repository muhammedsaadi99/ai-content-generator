<?php
require_once 'BaseTemplate.php';

class IndexTemplate extends BaseTemplate
{
    public function renderBlock($blockName)
    {
        if ($blockName === 'body') {
            return '<div class="bg-light p-5 rounded mt-5">
            <h1> Cold Email Template  ️</h1>
            <p class="lead">
            This is perfect for marketing agents or companies who need fresh ideas daily on cold email content that is created by AI technology.
            </p>
        
            <h2>Enter the services your company provides</h2>
        
            <form class="cold-email" action="" method="post">
        
              <div class="mb-3">
                <label class="form-label">Services Provided</label>
                <input type="text" class="form-control" name="coldEmails" placeholder="eg. CRM Cloud Software">
                <div class="form-text">Describe the services you provide, for the email content.</div>
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