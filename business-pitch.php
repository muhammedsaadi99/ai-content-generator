<?php
require_once 'BaseTemplate.php';

class IndexTemplate extends BaseTemplate
{
    public function renderBlock($blockName)
    {
        if ($blockName === 'body') {
            return '<div class="bg-light p-5 rounded mt-5">
            <h1> Business Idea Pitch </h1>
            <p class="lead">
            Create some ideas for a quick one paragraph pitch for your business idea, describe your idea and produce useful pitches.
            </p>
        
            <h2>Enter the business idea you have</h2>
        
            <form class="business-pitch" action="" method="post">
        
              <div class="mb-3">
                <label class="form-label">Title of Business</label>
                <input type="text" class="form-control" name="businessPitch" placeholder="eg. AI Writting Tool">
                <div class="form-text">Describe the business idea or title for the AI.</div>
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

