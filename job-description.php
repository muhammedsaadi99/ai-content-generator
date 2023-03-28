<?php
require_once 'BaseTemplate.php';

class IndexTemplate extends BaseTemplate
{
  public function renderBlock($blockName)
  {
    if ($blockName === 'body') {
      return '<div class="bg-light p-5 rounded mt-5">
            <h1> Generate Job Descriptions </h1>
            <p class="lead">
              Are you trying to come up with professional sounding job descriptions but have hit a writers block? Let AI help you along.
            </p>
        
            <h2>Enter the details of your job</h2>
        
            <form class="job-desc" action="" method="post">
        
              <div class="mb-3">
                <label class="form-label">Job Title</label>
                <input type="text" class="form-control" name="jobDescription" placeholder="eg. Project Manager">
                <div class="form-text">Enter the title of the Job you would like to receive a description for.</div>
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
