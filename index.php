<?php
require_once 'BaseTemplate.php';

class IndexTemplate extends BaseTemplate
{
    public function renderBlock($blockName)
    {
        if ($blockName === 'body') {
            return '<div class="bg-light p-5 rounded mt-5">
            <h1>Wee | an Online AI Content Generator Build with ❤️ Using GPT-3</h1>
            <p class="lead">Wee is a web application that can be used to generate content using Artificial Intelligence.
            </p>
            <p class="lead"> Wanna boost your products marketing pitch ? Use our online tool which will help you to write awesome
              Ai generated contents which will maximize your revenue double fold . Or Are you a HR professional thinking how to write a job description?
              Dont worry we got it all in one application . Surf our web applicaiton to know more ✨ .
            </p>
          </div>
      
      
          <div class="p-5 rounded mt-1">
            <div class="row">

            <!-- One Item Starts Here -->
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-header">
                    Article Generator
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"> Generate an Article </h5>
                    <p class="card-text">Generate any type of Article for your blog post or write an essay, simply enter the topic to get started.</p>
                    <a href="'. $_SESSION['baseURL'] .'article-generator" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
              <!-- One Item Ends here -->

              <!-- One Item Starts Here -->
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-header">
                    Outline Generator
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Generate Outline</h5>
                    <p class="card-text">Generate outline for Courses and for Blog posts, simply enter the keyword or topic to get started.</p>
                    <a href="'. $_SESSION['baseURL'] .'outline-generator" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
              <!-- One Item Ends here -->
      
              <!-- One Item Starts Here -->
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-header">
                    Product Description
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"> Generate Product Descriptions </h5>
                    <p class="card-text">Generate product descriptions for any types of products, simply enter the name and product description to get started.</p>
                    <a href="'. $_SESSION['baseURL'] .'product-description" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
              <!-- One Item Ends here -->
      
      
              <!-- One Item Starts Here -->
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-header">
                    Job Description
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"> Generate Job Descriptions </h5>
                    <p class="card-text">Are you trying to come up with professional sounding job descriptions but have hit a writers block? Let AI help you along. </p>
                    <a href="'. $_SESSION['baseURL'] .'job-description" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
              <!-- One Item Ends here -->
      
      
              <!-- One Item Starts Here -->
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-header">
                    Tweet Ideas
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"> Generate Tweets </h5>
                    <p class="card-text">Start generating tweet ideas with hashtags for your online social media campaigns on twitter. Create endless unique tweet ideas, no more writers block. </p>
                    <a href="'. $_SESSION['baseURL'] .'tweet-ideas" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
              <!-- One Item Ends here -->
      
      
              <!-- One Item Starts Here -->
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-header">
                    Cold Emails
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Cold Email Template </h5>
                    <p class="card-text">This is perfect for marketing agents or companies who need fresh ideas daily on cold email content that is created by AI technology. </p>
                    <a href="'. $_SESSION['baseURL'] .'cold-emails" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
              <!-- One Item Ends here -->
      
      
              <!-- One Item Starts Here -->
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-header">
                    Social Media
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"> Social Media Adverts </h5>
                    <p class="card-text">Looking for some creative social media advert ideas for your online campaigns on Facebook, Twitter or Instagram? We got you. </p>
                    <a href="'. $_SESSION['baseURL'] .'social-media" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
              <!-- One Item Ends here -->
      
      
              <!-- One Item Starts Here -->
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-header">
                    Business Pitch
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"> Business Idea Pitch </h5>
                    <p class="card-text"> Create some ideas for a quick one paragraph pitch for your business idea, describe your idea and produce useful pitches. </p>
                    <a href="'. $_SESSION['baseURL'] .'business-pitch" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
              <!-- One Item Ends here -->
      
      
              <!-- One Item Starts Here -->
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-header">
                    Youtube Videos
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"> Youtube Video Ideas </h5>
                    <p class="card-text"> Want to get started on YouTube but need some Video Ideas to start working on? Start generating some YouTube Video Ideas right away with AI. </p>
                    <a href="'. $_SESSION['baseURL'] .'video-ideas" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
              <!-- One Item Ends here -->
      
              <!-- One Item Starts Here -->
              <div class="col-lg-3 mb-3">
                <div class="card">
                  <div class="card-header">
                    Youtube Videos
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"> Youtube Video Description </h5>
                    <p class="card-text"> This AI tool will help you draft some cool video descriptions based on a topic or video idea. Just enter your video topic. </p>
                    <a href="'. $_SESSION['baseURL'] .'video-description" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
              <!-- One Item Ends here -->
      
            </div>
          </div>';
        }
        return '';
    }
}

$index = new IndexTemplate();
$index->extend('base.php');
