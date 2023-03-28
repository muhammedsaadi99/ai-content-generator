// Add your OpenAI API key here
var API_KEY = "--- Your API Key ---";

$(document).ready(function () {

    console.log(API_KEY);

    // Article Generator
    $('.article-gen').on('submit', function (e) {
        e.preventDefault();

        input = $(this).find('input').val();
        loader = $(this).find('.loader');

        loader.addClass('loader-show')

        var settings = {
            "url": "https://api.openai.com/v1/completions",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${API_KEY}`
            },
            "data": JSON.stringify({
                "model": "text-davinci-003",
                "prompt": `Generate an detailed Article for ${input}`,
                "max_tokens": 1000
            }),
        };

        $.ajax(settings).done(function (response) {
            loader.removeClass('loader-show');
            result = response.choices[0].text;
            // console.log(response.choices[0].text);
            $('#prompt').text(`Article for : ${input}`);
            $('#result').html(result);
        });
    })

    // Outline Generator
    $('.outline-gen').on('submit', function (e) {
        e.preventDefault();

        input = $(this).find('input').val();
        loader = $(this).find('.loader');

        loader.addClass('loader-show')

        var settings = {
            "url": "https://api.openai.com/v1/completions",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${API_KEY}`
            },
            "data": JSON.stringify({
                "model": "text-davinci-003",
                "prompt": `Generate outlines for ${input}`,
                "max_tokens": 500
            }),
        };

        $.ajax(settings).done(function (response) {
            loader.removeClass('loader-show');
            result = response.choices[0].text;
            // console.log(response.choices[0].text);
            $('#prompt').text(`Outlines for : ${input}`);
            $('#result').html(result);
        });
    })

    // Product Description
    $('.product-desc').on('submit', function (e) {
        e.preventDefault();

        input = $(this).find('input').val();
        loader = $(this).find('.loader');

        loader.addClass('loader-show')

        var settings = {
            "url": "https://api.openai.com/v1/completions",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${API_KEY}`
            },
            "data": JSON.stringify({
                "model": "text-davinci-003",
                "prompt": `Generate a detailed product description for ${input}`,
                "max_tokens": 500
            }),
        };

        $.ajax(settings).done(function (response) {
            loader.removeClass('loader-show');
            result = response.choices[0].text;
            // console.log(response.choices[0].text);
            $('#prompt').text(`Product Description for : ${input}`);
            $('#result').html(result);
        });
    })

    // Job Description
    $('.job-desc').on('submit', function (e) {
        e.preventDefault();

        input = $(this).find('input').val();
        loader = $(this).find('.loader');

        loader.addClass('loader-show')

        var settings = {
            "url": "https://api.openai.com/v1/completions",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${API_KEY}`
            },
            "data": JSON.stringify({
                "model": "text-davinci-003",
                "prompt": `Generate a detailed Job description for ${input}`,
                "max_tokens": 500
            }),
        };

        $.ajax(settings).done(function (response) {
            loader.removeClass('loader-show');
            result = response.choices[0].text;
            // console.log(response.choices[0].text);
            $('#prompt').text(`Job Description for : ${input}`);
            $('#result').html(result);
        });
    })

    // Tweet Content
    $('.tweet-content').on('submit', function (e) {
        e.preventDefault();

        input = $(this).find('input').val();
        loader = $(this).find('.loader');

        loader.addClass('loader-show')

        var settings = {
            "url": "https://api.openai.com/v1/completions",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${API_KEY}`
            },
            "data": JSON.stringify({
                "model": "text-davinci-003",
                "prompt": `Generate a Tweet Content for ${input}`,
                "max_tokens": 700
            }),
        };

        $.ajax(settings).done(function (response) {
            loader.removeClass('loader-show');
            result = response.choices[0].text;
            // console.log(response.choices[0].text);
            $('#prompt').text(`Tweet Content for : ${input}`);
            $('#result').html(result);
        });
    })

    // Cold Email
    $('.cold-email').on('submit', function (e) {
        e.preventDefault();

        input = $(this).find('input').val();
        loader = $(this).find('.loader');

        loader.addClass('loader-show')

        var settings = {
            "url": "https://api.openai.com/v1/completions",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${API_KEY}`
            },
            "data": JSON.stringify({
                "model": "text-davinci-003",
                "prompt": `Generate a Cold Email for ${input}`,
                "max_tokens": 1000
            }),
        };

        $.ajax(settings).done(function (response) {
            loader.removeClass('loader-show');
            result = response.choices[0].text;
            // console.log(response.choices[0].text);
            $('#prompt').text(`Cold Email for : ${input}`);
            $('#result').html(result);
        });
    })

    // Social Media Ad
    $('.social-media-ad').on('submit', function (e) {
        e.preventDefault();

        input = $(this).find('input').val();
        loader = $(this).find('.loader');

        loader.addClass('loader-show')

        var settings = {
            "url": "https://api.openai.com/v1/completions",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${API_KEY}`
            },
            "data": JSON.stringify({
                "model": "text-davinci-003",
                "prompt": `Generate a Social Media Ad for ${input}`,
                "max_tokens": 700
            }),
        };

        $.ajax(settings).done(function (response) {
            loader.removeClass('loader-show');
            result = response.choices[0].text;
            // console.log(response.choices[0].text);
            $('#prompt').text(`Social Media Ad for : ${input}`);
            $('#result').html(result);
        });
    })

    // Business Pitch
    $('.business-pitch').on('submit', function (e) {
        e.preventDefault();

        input = $(this).find('input').val();
        loader = $(this).find('.loader');

        loader.addClass('loader-show')

        var settings = {
            "url": "https://api.openai.com/v1/completions",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${API_KEY}`
            },
            "data": JSON.stringify({
                "model": "text-davinci-003",
                "prompt": `Generate a Complete Business Pitch for ${input}`,
                "max_tokens": 1000
            }),
        };

        $.ajax(settings).done(function (response) {
            loader.removeClass('loader-show');
            result = response.choices[0].text;
            // console.log(response.choices[0].text);
            $('#prompt').text(`Business Pitch for : ${input}`);
            $('#result').html(result);
        });
    })

    // Video Description
    $('.video-desc').on('submit', function (e) {
        e.preventDefault();

        input = $(this).find('input').val();
        loader = $(this).find('.loader');

        loader.addClass('loader-show')

        var settings = {
            "url": "https://api.openai.com/v1/completions",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${API_KEY}`
            },
            "data": JSON.stringify({
                "model": "text-davinci-003",
                "prompt": `Generate a Detailed Video Description for ${input}`,
                "max_tokens": 1000
            }),
        };

        $.ajax(settings).done(function (response) {
            loader.removeClass('loader-show');
            result = response.choices[0].text;
            // console.log(response.choices[0].text);
            $('#prompt').text(`Video Description for : ${input}`);
            $('#result').html(result);
        });
    })

    // Video Ideas
    $('.video-idea').on('submit', function (e) {
        e.preventDefault();

        input = $(this).find('input').val();
        loader = $(this).find('.loader');

        loader.addClass('loader-show')

        var settings = {
            "url": "https://api.openai.com/v1/completions",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${API_KEY}`
            },
            "data": JSON.stringify({
                "model": "text-davinci-003",
                "prompt": `Generate Video Ideas for ${input}`,
                "max_tokens": 700
            }),
        };

        $.ajax(settings).done(function (response) {
            loader.removeClass('loader-show');
            result = response.choices[0].text;
            // console.log(response.choices[0].text);
            $('#prompt').text(`Video Ideas for : ${input}`);
            $('#result').html(result);
        });
    })

})